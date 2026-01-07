<?
include_once "../common.php";
ini_set('display_errors', 1);
// Generate timestamp-based coupon serial
// Get team member data from GET parameters
$team_member_dates = isset($_REQUEST["team_member_date"]) ? $_REQUEST["team_member_date"] : array();
$team_member_phs = isset($_REQUEST["team_member_ph"]) ? $_REQUEST["team_member_ph"] : array();
$team_member_mails = isset($_REQUEST["team_member_mail"]) ? $_REQUEST["team_member_mail"] : array();

// Get creator information
$coupon_name = isset($_REQUEST["apply_company_name"]) ? $_REQUEST["apply_company_name"] : '';
$creator_phone = isset($_REQUEST["apply_user_phone"]) ? $_REQUEST["apply_user_phone"] : '';
$creator_name = isset($_REQUEST["apply_user_name"]) ? $_REQUEST["apply_user_name"] : '';
$creator_file = isset($_REQUEST["creator_file"]) ? $_REQUEST["creator_file"] : '';
$coupon_key = isset($_REQUEST["coupon_key"]) ? $_REQUEST["coupon_key"] : '';

$rdata = sql_query("select * from cb_unreal_2025_event2_coupon where creator_gcode='{$coupon_key}'");
$rdata_once = sql_fetch("select * from cb_unreal_2025_event2_coupon where creator_gcode='{$coupon_key}' limit 1");

$timestamp = time();
$creator_gcode = date('ymd-His-', $timestamp) . substr(uniqid(), -4);
//$creator_gcode = isset($_REQUEST["apply_user_gcode"]) ? $_REQUEST["apply_user_gcode"] : '';


// 파일 업로드 처리
$upload_dir = $_SERVER['DOCUMENT_ROOT'] . "/v3/unrealfest2025/student/";
$allowed_ext = array('jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx'); // 허용되는 파일 확장자
$creator_filename = "";
if (isset($_FILES['team_file_1']) && $_FILES['team_file_1']['error'] == 0) {
    $file_name = $_FILES['team_file_1']['name'];
    $creator_filename = $file_name;
    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

    // 허용되는 파일 확장자인지 확인
    if (!in_array($file_ext, $allowed_ext)) {
        echo "허용되지 않는 파일 형식입니다.";
        exit;
    }

    // 랜덤 파일명 생성
    $random_file_name = bin2hex(random_bytes(10)) . '.' . $file_ext;
    $upload_file = $upload_dir . $random_file_name;

    // 파일 이동
    if (!move_uploaded_file($_FILES['team_file_1']['tmp_name'], $upload_file)) {
        echo "파일 업로드에 실패하였습니다.";
        exit;
    }

    $team_file_1 = $random_file_name;
} else {
    $team_file_1 = $rdata_once['creator_file'];
    $creator_filename = $rdata_once['creator_filepath'];
    //$team_file_1 = $retdata['apply_student_file'];
}
if($coupon_key){
    $creator_gcode = $coupon_key;
    sql_query("DELETE FROM cb_unreal_2025_event2_coupon  WHERE creator_gcode = '{$creator_gcode}'");
}
// Prepare and execute insert query for each team member
for( $i = 0; $i < count($team_member_dates); $i++){
    $timestamp = time();
    $coupon_serial = date('ymd-His-', $timestamp) . substr(uniqid(), -4);
    $date = isset($team_member_dates[$i]) ? $team_member_dates[$i] : '';
    $phone = isset($team_member_phs[$i]) ? $team_member_phs[$i] : '';
    $email = isset($team_member_mails[$i]) ? $team_member_mails[$i] : '';

    $sql = "INSERT INTO `cb_unreal_2025_event2_coupon` 
            (`coupon_serial`, `coupon_name`, `user_name`, `user_email`, 
             `user_phone`, `registration_date`, `usage_date`, `coupon_type`,
             `creator_email`, `creator_phone`, `creator_name`, `creator_file`,`creator_filename`,`creator_gcode`) 
            VALUES 
            ('$coupon_serial', '$coupon_name', NULL, '$email', 
             '$phone', NOW(), NULL, '$date',
             '$creator_email', '$creator_phone', '$creator_name', '$team_file_1','{$creator_filename}','{$creator_gcode}')";


    //echo $sql;
    sql_query($sql);
}

echo "{\"result\":\"success\",\"coupon_serial\":\"$creator_gcode\"}";

?>