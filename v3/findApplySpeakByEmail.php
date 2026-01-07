<?
include_once "./common.php";
$mode = $_POST['mode'];
$mode2 = $_GET['mode2'];

$board_path = G5_DATA_PATH.'/file/speak/';
// 게시판 디렉토리 생성
@mkdir($board_path, G5_DIR_PERMISSION);
@chmod($board_path, G5_DIR_PERMISSION);

// 디렉토리에 있는 파일의 목록을 보이지 않게 한다.
$file = $board_path . '/index.php';
if( $f = @fopen($file, 'w') ){
    @fwrite($f, '');
    @fclose($f);
    @chmod($file, G5_FILE_PERMISSION);
}
if (isset($_FILES['apply_photo_file']['name']) && $_FILES['apply_photo_file']['name'] != '') {
    $dest_path = $board_path; // 기본 경로 설정
    $fileExtension = pathinfo($_FILES['apply_photo_file']['name'], PATHINFO_EXTENSION); // 파일 확장자 추출

    // 파일 이름을 랜덤하게 생성합니다. 여기서는 간단히 15자리 랜덤 문자열을 생성합니다.
    // 보안을 위해 random_bytes와 bin2hex를 사용합니다.
    $randomFileName = bin2hex(random_bytes(15)) . '.' . $fileExtension; // 랜덤 파일명 생성

    // 최종 목적지 경로에 랜덤 파일명을 추가합니다.
    $finalDestPath = $dest_path . $randomFileName;

    // 파일을 최종 목적지로 이동시킵니다.
    if (@move_uploaded_file($_FILES['apply_photo_file']['tmp_name'], $finalDestPath)) {
        @chmod($finalDestPath, 0644); // 파일 권한 설정 (예: 0644)
        // 파일 업로드 성공 시의 로직을 여기에 추가합니다.
    } else {
        // 파일 업로드 실패 시의 에러 처리를 여기에 추가합니다.
        echo "파일 업로드에 실패했습니다.";
    }
}

$apply_user_name = str_replace("'","\'",$_POST['apply_user_name']);
$apply_user_email = str_replace("'","\'",$_POST['inputEmail']);
$apply_user_phone = str_replace("'","\'",preg_replace("/[^0-9]/u", "", $_POST['apply_user_phone']));
$apply_user_company = str_replace("'","\'",$_POST['apply_user_company']);
$apply_user_depart = str_replace("'","\'",$_POST['apply_user_depart']);
$apply_user_history = str_replace("'","\'",$_POST['apply_user_history']);

$apply_pt_runtime = str_replace("'","\'",$_POST['apply_pt_runtime']);
$apply_pt_difficulty = str_replace("'","\'",$_POST['apply_pt_difficulty']);
$apply_pt_subject = implode(",",$_POST['apply_pt_subject']);
$apply_pt_platform = implode(",",$_POST['apply_pt_platform']);


$apply_pt_title = $_POST['apply_pt_title'];
$apply_pt_intro = $_POST['apply_pt_intro'];
$apply_pt_intro2 = $_POST['apply_pt_intro2'];
$apply_pt_intro3 = $_POST['apply_pt_intro3'];
$apply_pt_runtime = $_POST['apply_pt_runtime'];
$apply_pt_request = $_POST['apply_pt_request'];
$apply_pt_category = $_POST['apply_pt_category'];


$etc1 = $_POST['etc1'];
$etc2 = $_POST['etc2'];
$etc3 = $_POST['etc3'];
$etc4 = $_POST['etc4'];


$apply_add_field1 = $_POST['apply_add_field1'];
$apply_add_field2 = $_POST['apply_add_field2'];
$apply_add_field3 = $_POST['apply_add_field3'];
$apply_add_field4 = $_POST['apply_add_field4'];
$apply_add_field5 = $_POST['apply_add_field5'];


$apply_no = $_POST['apply_no'];

$apply_ip = $_SERVER['REMOTE_ADDR'];

if($mode == 'modify') {

    ini_set('display_errors', '1');

    $mysqli = new mysqli("localhost","unrealengine","Good121930!@","unrealengine");
    if($_FILES['apply_photo_file']['name']){

        $sql = "UPDATE cb_unreal_2024_speaker_apply SET
            `apply_photo_domain` = '{$apply_photo_domain}',
            `apply_photo_path` = '{$randomFileName}',
            `apply_photo_file` = '{$_FILES['apply_photo_file']['name']}',
            `apply_photo_size` = '{$apply_photo_size}',
            `apply_photo_width` = '{$apply_photo_width}',
            `apply_photo_height` = '{$apply_photo_height}'
        WHERE `apply_no` = '{$apply_no}'";
        $result = $mysqli -> query($sql);
    }
    $sql = "UPDATE cb_unreal_2024_speaker_apply SET
    `apply_user_name` = '{$apply_user_name}',
    `apply_user_company` = '{$apply_user_company}',
    `apply_user_depart` = '{$apply_user_depart}',
    `apply_user_history` = '{$apply_user_history}',
    `apply_pt_runtime` = '{$apply_pt_runtime}',
    `apply_pt_difficulty` = '{$apply_pt_difficulty}',
    `apply_pt_subject` = '{$apply_pt_subject}',
    `apply_pt_platform` = '{$apply_pt_platform}',
    `apply_pt_title` = '{$apply_pt_title}',
    `apply_pt_intro` = '{$apply_pt_intro}',
    `apply_pt_request` = '{$apply_pt_request}',
    `apply_privacy_agree` = '{$apply_privacy_agree}',
    `apply_status` = '{$apply_status}',
    `apply_ip` = '{$apply_ip}',
    `apply_mod_datetime` = now(),
    `apply_useragent` = '{$apply_useragent}',
    `apply_pt_category` = '{$apply_pt_category}',
    `etc1` = '{$etc1}',
    `etc2` = '{$etc2}',
    `etc3` = '{$etc3}',
    `etc4` = '{$etc4}',
    `apply_add_field1` = '{$apply_add_field1}',
    `apply_add_field2` = '{$apply_add_field2}',
    `apply_add_field3` = '{$apply_add_field3}',
    `apply_add_field4` = '{$apply_add_field4}',
    `apply_add_field5` = '{$apply_add_field5}',
    `apply_pt_intro2` = '{$apply_pt_intro2}',
    `apply_pt_intro3` = '{$apply_pt_intro3}'
WHERE `apply_no` = '{$apply_no}'";

    $result = $mysqli -> query($sql);
// $insert_id = $mysqli->insert_id;
    $mysqli -> close();
?>
    <form method="post" action="application_modify_view_speak.html" id="frm_p">
        <input type="hidden" name="inputEmail" value="<?=$apply_user_email?>">
        <input type="hidden" name="apply_user_phone" value="<?=$apply_user_phone?>">
    </form>
    <script>
        alert('수정 되었습니다.');

        document.getElementById('frm_p').submit();
    </script>
    <?


}else{

    $mysqli = new mysqli("localhost","unrealengine","Good121930!@","unrealengine");
    $_apply_ci = $_SESSION["CI"];
    $_apply_di = $_SESSION["DI"];
    $sql = "select count(*) from cb_unreal_2024_speaker_apply where apply_ci = '$_apply_ci' limit 1";
    $result = $mysqli -> query($sql);
    $obj = $result -> fetch_array();
    if($obj[0]['count']){
        echo '<script type="text/javascript">';
        echo " alert('이미 등록되어 있는 회원입니다.'); history.go(-1);";
        echo '</script>';
        exit();
    };
    $sql = "INSERT INTO cb_unreal_2024_speaker_apply (
     `apply_user_name`, `apply_user_email`, `apply_user_phone`, `apply_user_company`, `apply_user_depart`,
 `apply_user_history`, `apply_photo_domain`, `apply_photo_path`, `apply_photo_file`, `apply_photo_size`, `apply_photo_width`,
 `apply_photo_height`, `apply_pt_runtime`, `apply_pt_difficulty`, `apply_pt_subject`, `apply_pt_platform`, `apply_pt_title`,
 `apply_pt_intro`, `apply_pt_request`, `apply_privacy_agree`, `apply_status`, `apply_ip`, `apply_reg_datetime`,
 `apply_mod_datetime`, `apply_useragent`, `apply_ci`, `apply_di`,apply_pt_category,etc1,etc2,etc3,etc4,apply_add_field1,apply_add_field2,apply_add_field3,apply_add_field4,apply_add_field5,apply_pt_intro2,apply_pt_intro3
    ) VALUES(
     '{$apply_user_name}', '{$apply_user_email}', '{$apply_user_phone}', '{$apply_user_company}', '{$apply_user_depart}',
'{$apply_user_history}', '{$apply_photo_domain}', '{$randomFileName}', '{$_FILES['apply_photo_file']['name']}', '{$apply_photo_size}', '{$apply_photo_width}',
'{$apply_photo_height}', '{$apply_pt_runtime}', '{$apply_pt_difficulty}', '{$apply_pt_subject}', '{$apply_pt_platform}', '{$apply_pt_title}',
'{$apply_pt_intro}', '{$apply_pt_request}', '{$apply_privacy_agree}', '{$apply_status}', '{$apply_ip}', now(),
'{$apply_mod_datetime}', '{$apply_useragent}', '{$_apply_ci}', '{$_apply_di}','{$apply_pt_category}','{$etc1}','{$etc2}','{$etc3}','{$etc4}','{$apply_add_field1}','{$apply_add_field2}','{$apply_add_field3}','{$apply_add_field4}','{$apply_add_field5}','{$apply_pt_intro2}','{$apply_pt_intro3}'
    )";
    $result = $mysqli -> query($sql);
// $insert_id = $mysqli->insert_id;
    $mysqli -> close();

    echo '<script type="text/javascript">';
    echo "alert('등록 되었습니다.'); location.href='application_speak_result.html';";
    echo '</script>';

}


?>