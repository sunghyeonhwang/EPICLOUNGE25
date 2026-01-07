<?php
// 사용자 정의 에러 핸들러 등록
set_error_handler(function($errno, $errstr, $errfile, $errline) {
    echo "[에러] $errstr (파일: $errfile, 줄: $errline)<br>";
    return true; // 기본 에러 처리 방지
});
/**
 * 헬퍼 함수: 엑셀 열 문자(A, B, AA 등)를 0-based 인덱스로 변환합니다.
 *
 * @param string $columnLetter 엑셀 열 문자 (예: "A", "Z", "AA").
 * @return int 0-based 열 인덱스.
 */
function _excelColumnLetterToIndex($columnLetter) {
    $columnLetter = strtoupper($columnLetter);
    $index = 0;
    $length = strlen($columnLetter);
    for ($i = 0; $i < $length; $i++) {
        $index = $index * 26 + (ord($columnLetter[$i]) - ord('A') + 1);
    }
    return $index - 1; // 0-based로 만들기 위해 1을 <0xEB><0x8E><0x8E>니다.
}


/**
 * cURL을 사용하여 URL 콘텐츠를 가져오는 헬퍼 함수
 * @param string $url 가져올 URL
 * @return string|false 성공 시 URL의 콘텐츠, 실패 시 false
 */
function fetch_content_with_curl($url) {
    $ch = curl_init(); // cURL 세션 초기화

    curl_setopt($ch, CURLOPT_URL, $url); // 접속할 URL 설정
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 결과를 문자열로 반환
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // 리다이렉션이 있을 경우 따라감 (Google URL에 중요)
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // SSL 인증서 검증 비활성화 (필요 시)
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10); // 접속 타임아웃 10초
    curl_setopt($ch, CURLOPT_TIMEOUT, 30); // 전체 실행 타임아웃 30초

    $response = curl_exec($ch); // cURL 실행
    $error = curl_error($ch);   // 에러 확인

    curl_close($ch); // cURL 세션 종료

    if ($error) {
        trigger_error("cURL Error: " . $error, E_USER_WARNING);
        return false;
    }

    return $response;
}


function xls_loader($cellAddress) {
    static $XLS_INTERNAL_DATA = null;
    //static $googleSheetCsvUrl = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vQQmydbLpy0ib5YlLKapmD3SYn7l8wzSkMMliNfPqWUuOU8VHTeoBz4kdGf49NIFgOM57Mi2RRgob6x/pub?gid=0&single=true&output=csv';
    static $googleSheetCsvUrl = 'https://epiclounge.co.kr/v3/unrealfest2025/sample.csv';

//    static $googleSheetCsvUrl = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vRZZFywTpVWzOCYZ6wj4vjZ8Ff83GZ--dgGAYN5hRhV4nVP1GG8FkEsCl8NWAOu9Kw2EPWbYav4z_0I/pub?gid=0&single=true&output=csv';
    static $csvDataStartRowZeroBased = 0;

    if ($XLS_INTERNAL_DATA === null) {
        $XLS_INTERNAL_DATA = [];

        // 1. cURL을 사용하여 원격 CSV 데이터 가져오기
        $csvContent = fetch_content_with_curl($googleSheetCsvUrl);

        if ($csvContent === false) {
            trigger_error("xls_loader: cURL을 사용하여 Google Sheet CSV URL('{$googleSheetCsvUrl}')을 열 수 없습니다.", E_USER_WARNING);
        } else {
            // 2. 가져온 문자열 데이터를 임시 메모리 스트림으로 만들기
            $fileHandle = fopen('php://memory', 'r+');
            fwrite($fileHandle, $csvContent);
            rewind($fileHandle); // 파일 포인터를 처음으로 되돌림

            // 3. 이제 fgetcsv로 메모리 스트림을 읽을 수 있음
            $currentRowNum = 0;
            while (($rowData = fgetcsv($fileHandle, 0, ",")) !== false) {
                if ($currentRowNum >= $csvDataStartRowZeroBased) {
                    $XLS_INTERNAL_DATA[] = $rowData;
                }
                $currentRowNum++;
            }
            fclose($fileHandle);
        }
    }

    // --- 여기부터는 기존 코드와 동일 ---

    // print_r($XLS_INTERNAL_DATA); // 디버깅 시 필요하면 주석 해제

    if (empty($XLS_INTERNAL_DATA)) {
        return null;
    }

    if (!preg_match('/^([A-Z]+)([0-9]+)$/i', trim($cellAddress), $matches)) {
        trigger_error("xls_loader: 잘못된 셀 주소 형식입니다 - '{$cellAddress}'.", E_USER_WARNING);
        return null;
    }

    $columnLettersPart = $matches[1];
    $rowNumberPart = (int)$matches[2];

    $columnIndex = _excelColumnLetterToIndex($columnLettersPart);
    $rowIndex = $rowNumberPart - 1;

    if (isset($XLS_INTERNAL_DATA[$rowIndex]) && isset($XLS_INTERNAL_DATA[$rowIndex][$columnIndex])) {
        return $XLS_INTERNAL_DATA[$rowIndex][$columnIndex];
    } else {
        return null;
    }
}

/**
 * 문자열에서 모든 공백을 제거하는 헬퍼 함수
 *
 * @param string $str 공백을 제거할 문자열
 * @return string 공백이 제거된 문자열
 */
function space_del($str)
{
    return str_replace(' ', '', $str);
}

// --- 사용 예시 ---
// 중요: xls_loader 함수 내의 static $googleSheetCsvUrl 변수에
//      실제 Google Sheets에서 "웹에 게시"한 CSV URL을 입력해야 합니다.


// 예시: (실제 URL을 넣고 주석을 해제하여 테스트하세요)
// $url = 'https://docs.google.com/spreadsheets/d/e/YOUR_PUBLISHED_CSV_ID/pub?gid=0&single=true&output=csv';
// 위 URL을 xls_loader 함수 안의 $googleSheetCsvUrl에 넣어주세요.



function xls_loader_cel($pop_line,$pop_cate){
    $cate_str = "자동차,공통,방송&라이브,영화&TV,게임/영화&TV,방송&라이브이벤트,게임,프로덕션,애니메이션,디지털트윈,디지털휴먼,버추얼프로덕션,시뮬레이션,XR,프로그래밍,비주얼 아트,기획,ALL";
    $cate_list = explode(",", $cate_str);

    $level_str = "초급,중급,고급";
    $level_list = explode(",", $level_str);

    $trans_str = "통역,없음";
    $trans_list = explode(",", $trans_str);


    $period = xls_loader("A".$pop_line);
    $title = xls_loader("B".$pop_line);
    $cate_game = xls_loader("C".$pop_line);
    $cate_game = str_ireplace("ALL", "공통", $cate_game);

    $cate_grade = xls_loader("D".$pop_line);
    $cate_type = xls_loader("E".$pop_line);
    $speaker_job = xls_loader("G".$pop_line);
    $calendar_add = xls_loader("U".$pop_line);

    $speaker_name = xls_loader("F".$pop_line);
    $speaker_name_arr = explode(",", $speaker_name);;


    $speaker_name2 = xls_loader("J".$pop_line);
    $speaker_name2_arr = explode(",", $speaker_name2);;


    $speaker_name3 = xls_loader("N".$pop_line);
    $speaker_name3_arr = explode(",", $speaker_name3);;

    $cate_game_list = explode(",", $cate_game);
    $cate_grade_list = explode(",", $cate_grade);
    $cate_type_list = explode(",", $cate_type);
    ?>
    <button type="button" data-btn-pop="<?=$pop_line?>" data-btn-type="<?=$pop_cate?>" class="program_part">
        <span class="title_m"><?=$title?></span>
        <span class="text_name_company"><span class="text_name"><?=$speaker_name_arr[0]?></span><span class="text_company"><?= count($speaker_name_arr) >= 2 ? $speaker_name_arr[1] : '' ?></span></span>
        <?if($speaker_name2) {?>
            <span class="text_name_company"><span class="text_name"><?= $speaker_name2_arr[0] ?></span><span
                        class="text_company"><?= count($speaker_name2_arr) >= 2 ? $speaker_name2_arr[1] : '' ?></span></span>
        <?
        }?>
        <?if($speaker_name3) {?>
            <span class="text_name_company"><span class="text_name"><?= $speaker_name3_arr[0] ?></span><span
                        class="text_company"><?= count($speaker_name3_arr) >= 2 ? $speaker_name3_arr[1] : '' ?></span></span>
        <?
        }?>
        <span class="text_option_list">

            <?php
            for($j=0; $j<count($cate_game_list); $j++) {
                $cate_game_name = trim($cate_game_list[$j]);
                $cate_game_idx= 0;
                for ($k = 0; $k < count($cate_list); $k++) {
                    if (space_del($cate_game_name)  == space_del($cate_list[$k])) {
                        $cate_game_idx = $k;
                        break;
                    }
                }
                ?>
                <span class="pop_cate part_<?=$cate_game_idx+1?>"><?=$cate_game_name?></span>
                <?
            }
            ?>

            <?php
            for($j=0; $j<count($cate_grade_list); $j++) {
                $cate_grade_name = trim($cate_grade_list[$j]);
                $cate_grade_idx= 0;
                for ($k = 0; $k < count($level_list); $k++) {
                    if (space_del($cate_grade_name) == space_del($level_list[$k])) {
                        $cate_grade_idx = $k;
                        break;
                    }
                }
                ?>
                <span class="pop_level level_<?=$cate_grade_idx+1?>"><?=$cate_grade_name?></span>
                <?
            }
            ?>
            <!-- 프로그래밍은 cate_1, 비주얼아트는 2 미디어&엔터테인먼트는3 구글시트 c에 순서대로 숫자바뀌면됨-->

            <!-- 초급은1 중급2 고급은3-->

            <?php
            for($j=0; $j<count($cate_type_list); $j++) {
                $cate_type_name = trim($cate_type_list[$j]);
                $cate_type_idx= 0;
                for ($k = 0; $k < count($trans_list); $k++) {
                    if (space_del($cate_type_name) == space_del($trans_list[$k])) {
                        $cate_type_idx = $k;
                        break;
                    }
                }
                ?>
                <span class="pop_division division_<?=$cate_type_idx+1?>"><?=$cate_type_name?></span>
                <?
            }
            ?>
    </button>
    <?php
}
?>
<?php /*=xls_loader("C7")*/?>

