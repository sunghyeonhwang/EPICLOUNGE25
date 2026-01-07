<?
include_once "./common.php";
?>
<?php
// 데이터베이스 연결 설정 (자신의 DB 정보로 수정)
$host    = G5_MYSQL_HOST;
$db      = G5_MYSQL_DB;
$user    = G5_MYSQL_USER;
$pass    = G5_MYSQL_PASSWORD;
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    exit("데이터베이스 연결 실패: " . $e->getMessage());
}

// POST 데이터 받기
$speaker_name     = $_POST['speaker_name'] ?? '';
$speaker_email    = $_POST['speaker_email'] ?? '';
$speaker_ph       = $_POST['speaker_ph'] ?? '';
$speaker_cp       = $_POST['speaker_cp'] ?? '';
$speaker_cp_j     = $_POST['speaker_cp_j'] ?? '';



// 파일 업로드 (발표자 사진)
$speaker_pic = $_POST["old_speaker_pic"];
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
if (isset($_FILES['speaker_pic']['name']) && $_FILES['speaker_pic']['name'] != '') {
    $dest_path = $board_path; // 기본 경로 설정
    $fileExtension = pathinfo($_FILES['speaker_pic']['name'], PATHINFO_EXTENSION); // 파일 확장자 추출

    // 파일 이름을 랜덤하게 생성합니다. 여기서는 간단히 15자리 랜덤 문자열을 생성합니다.
    // 보안을 위해 random_bytes와 bin2hex를 사용합니다.
    $randomFileName = bin2hex(random_bytes(15)) . '.' . $fileExtension; // 랜덤 파일명 생성

    // 최종 목적지 경로에 랜덤 파일명을 추가합니다.
    $finalDestPath = $dest_path . $randomFileName;

    // 파일을 최종 목적지로 이동시킵니다.
    if (@move_uploaded_file($_FILES['speaker_pic']['tmp_name'], $finalDestPath)) {
        @chmod($finalDestPath, 0644); // 파일 권한 설정 (예: 0644)
        // 파일 업로드 성공 시의 로직을 여기에 추가합니다.
        $speaker_pic = $randomFileName;
    } else {
        // 파일 업로드 실패 시의 에러 처리를 여기에 추가합니다.
        alert("파일 업로드에 실패했습니다.");
    }
}


$speaker_hi = $_POST['speaker_hi'] ?? '';

// 각 체크박스 그룹의 값을 콤마로 연결하여 문자열로 저장 (value 값을 사용)
function getCheckboxValues($prefix, $count) {
    $values = [];
    for ($i = 1; $i <= $count; $i++) {
        if (isset($_POST[$prefix . $i])) {
            $values[] = $_POST[$prefix . $i];
        }
    }
    return implode(',', $values);
}

$industry = getCheckboxValues('industry_', 9);
$product  = getCheckboxValues('product_', 10);
$topic    = getCheckboxValues('topic_', 11);
$platform = getCheckboxValues('platform_', 6);
$does_demo = getCheckboxValues('does_', 8);
//$level    = getCheckboxValues('level_', 3);
$level    = $_POST['level'] ?? '';

// 세션 정보 입력
$speaker_table     = $_POST['speaker_table'] ?? '';
$speaker_session   = $_POST['speaker_session'] ?? '';
$speaker_takeaway  = $_POST['speaker_takeaway'] ?? '';  // 세션 소개
$speaker_target    = $_POST['speaker_target'] ?? '';      // 대상/Audience Target
$speaker_key       = $_POST['speaker_key'] ?? '';
$speaker_reference = $_POST['speaker_reference'] ?? '';

// 라디오 버튼 처리 - value 값을 사용 (예: "예/yes", "아니오/no")
$demo            = $_POST['demo_1'] ?? '';  // 데모 여부
//$does_demo       = $_POST['does_1'] ?? '';  // 인 에디터 시연
$speaker_version = $_POST['speaker_version'] ?? '';
$pdf_consent     = $_POST['pdf_1'] ?? '';   // PDF 공개 여부
$video_consent   = $_POST['public_1'] ?? '';  // 영상 공개 여부

$speaker_requests = $_POST['speaker_requests'] ?? '';

$agree_text1 = isset($_POST['agree_text1']) ? 1 : 0;
$agree_text2 = isset($_POST['agree_text2']) ? 1 : 0;




// $_POST["w"] 값에 따라 처리 : "w"면 INSERT, "u"면 UPDATE (업데이트 시 id 값 필요)
$w = $_POST["w"] ?? "w";  // 기본은 insert
if ($w == "w") {

    $row_al = sql_fetch("select count(*) cnt from cb_unreal_2025_speaker_apply where speaker_email = '$speaker_email' ");
    if($row_al['cnt'] > 0){
        alert("이미 등록된 이메일주소입니다./There is already a registered email ");
    }
    $row_al = sql_fetch("select count(*) cnt from cb_unreal_2025_speaker_apply where speaker_ph = '$speaker_ph'");
    if($row_al['cnt'] > 0){
        alert("이미 등록된 전화번호입니다./There is already a registered phone number.");
    }
    
    $sql = "INSERT INTO cb_unreal_2025_speaker_apply (
                speaker_name, speaker_email, speaker_ph, speaker_cp, speaker_cp_j, speaker_pic, speaker_hi, 
                industry, product, topic, platform, level, speaker_table, speaker_session, 
                speaker_takeaway, speaker_target, speaker_key, speaker_reference, demo, does_demo, 
                speaker_version, pdf_consent, video_consent, speaker_requests, agree_text1, agree_text2, created_at
            ) VALUES (
                :speaker_name, :speaker_email, :speaker_ph, :speaker_cp, :speaker_cp_j, :speaker_pic, :speaker_hi, 
                :industry, :product, :topic, :platform, :level, :speaker_table, :speaker_session, 
                :speaker_takeaway, :speaker_target, :speaker_key, :speaker_reference, :demo, :does_demo, 
                :speaker_version, :pdf_consent, :video_consent, :speaker_requests, :agree_text1, :agree_text2, NOW()
            )";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':speaker_name'      => $speaker_name,
        ':speaker_email'     => $speaker_email,
        ':speaker_ph'        => $speaker_ph,
        ':speaker_cp'        => $speaker_cp,
        ':speaker_cp_j'      => $speaker_cp_j,
        ':speaker_pic'       => $speaker_pic,
        ':speaker_hi'        => $speaker_hi,
        ':industry'          => $industry,
        ':product'           => $product,
        ':topic'             => $topic,
        ':platform'          => $platform,
        ':level'             => $level,
        ':speaker_table'     => $speaker_table,
        ':speaker_session'   => $speaker_session,
        ':speaker_takeaway'  => $speaker_takeaway,
        ':speaker_target'    => $speaker_target,
        ':speaker_key'       => $speaker_key,
        ':speaker_reference' => $speaker_reference,
        ':demo'              => $demo,
        ':does_demo'         => $does_demo,
        ':speaker_version'   => $speaker_version,
        ':pdf_consent'       => $pdf_consent,
        ':video_consent'     => $video_consent,
        ':speaker_requests'  => $speaker_requests,
        ':agree_text1'       => $agree_text1,
        ':agree_text2'       => $agree_text2
    ]);
    alert("등록이 완료되었습니다. 발표자로 선정되신 분들께는 5월 내 개별적으로 연락을 드릴 예정입니다. 감사합니다. / Your registration is complete. Those selected as presenters by May will be contacted individually. Thank you.","https://epiclounge.co.kr/unrealfest25_speaker.php");
} elseif ($w == "u") {
    // 업데이트할 레코드의 id (폼에서 hidden 필드 등으로 전달되어야 함)
    $id = $_POST['id'] ?? 0;
    if (!$id) {
        exit("업데이트할 레코드의 ID가 없습니다.");
    }

    $sql = "UPDATE cb_unreal_2025_speaker_apply SET
                speaker_name = :speaker_name,
                speaker_email = :speaker_email,
                speaker_ph = :speaker_ph,
                speaker_cp = :speaker_cp,
                speaker_cp_j = :speaker_cp_j,
                speaker_pic = :speaker_pic,
                speaker_hi = :speaker_hi,
                industry = :industry,
                product = :product,
                topic = :topic,
                platform = :platform,
                level = :level,
                speaker_table = :speaker_table,
                speaker_session = :speaker_session,
                speaker_takeaway = :speaker_takeaway,
                speaker_target = :speaker_target,
                speaker_key = :speaker_key,
                speaker_reference = :speaker_reference,
                demo = :demo,
                does_demo = :does_demo,
                speaker_version = :speaker_version,
                pdf_consent = :pdf_consent,
                video_consent = :video_consent,
                speaker_requests = :speaker_requests,
                agree_text1 = :agree_text1,
                agree_text2 = :agree_text2
            WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':speaker_name'      => $speaker_name,
        ':speaker_email'     => $speaker_email,
        ':speaker_ph'        => $speaker_ph,
        ':speaker_cp'        => $speaker_cp,
        ':speaker_cp_j'      => $speaker_cp_j,
        ':speaker_pic'       => $speaker_pic,
        ':speaker_hi'        => $speaker_hi,
        ':industry'          => $industry,
        ':product'           => $product,
        ':topic'             => $topic,
        ':platform'          => $platform,
        ':level'             => $level,
        ':speaker_table'     => $speaker_table,
        ':speaker_session'   => $speaker_session,
        ':speaker_takeaway'  => $speaker_takeaway,
        ':speaker_target'    => $speaker_target,
        ':speaker_key'       => $speaker_key,
        ':speaker_reference' => $speaker_reference,
        ':demo'              => $demo,
        ':does_demo'         => $does_demo,
        ':speaker_version'   => $speaker_version,
        ':pdf_consent'       => $pdf_consent,
        ':video_consent'     => $video_consent,
        ':speaker_requests'  => $speaker_requests,
        ':agree_text1'       => $agree_text1,
        ':agree_text2'       => $agree_text2,
        ':id'                => $id
    ]);
    alert("등록 정보가 업데이트되었습니다./Your registration information has been updated.","https://epiclounge.co.kr/unrealfest25_speaker.php");
}
?>
