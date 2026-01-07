<?php
include_once "../common.php";
// POST 데이터 가져오기
$agree_se4 = $_POST['agree_se4'];
if($agree_se4 == "true") {
    $apply_user_event_agree = "1";
}else{
    $apply_user_event_agree = "0";
}
//$apply_user_name = $_POST['apply_user_name'];
$apply_user_name = $_SESSION["RSLT_NAME"];
$apply_user_email = $_POST['apply_user_email'];
$apply_user_phone = $_POST['apply_user_phone'];
$apply_user_company = $_POST['apply_user_company'];
$apply_user_depart = $_POST['apply_user_depart'];
$apply_user_grade = $_POST['apply_user_grade'];
$apply_user_ex1 = $_POST['apply_user_ex1'];
$apply_product_name = $_POST['apply_product_name'];
$apply_product_price = $_POST['apply_product_price'];
$apply_product_code = $_POST['apply_product_code'];
$apply_coupon_no = $_POST['apply_coupon_no'];
$apply_track = $_POST['apply_track'];
$_apply_ci = $_SESSION["CI"];
$_apply_di = $_SESSION["DI"];
$last_idx = $_SESSION["final_idx"];
$apply_password = md5(str_replace("'", "\'", $apply_user_email));

// 파일 업로드 처리
$upload_dir = $_SERVER['DOCUMENT_ROOT'] . "/v3/unrealfest2024/student/";
$allowed_ext = array('jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx'); // 허용되는 파일 확장자

if (isset($_FILES['apply_student_file']) && $_FILES['apply_student_file']['error'] == 0) {
    $file_name = $_FILES['apply_student_file']['name'];
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
    if (!move_uploaded_file($_FILES['apply_student_file']['tmp_name'], $upload_file)) {
        echo "파일 업로드에 실패하였습니다.";
        exit;
    }

    $apply_student_file = $random_file_name;
} else {
    $apply_student_file = '';
}

if(strpos($apply_product_code,"STD")  !== false){
    $apply_user_job = "학생";
}else if(strpos($apply_product_code,"NORMAL")  !== false){
    $apply_user_job = "일반";
}
$dup2 = sql_fetch("select count(*) as cnt from cb_unreal_2024_event2_apply where apply_ci = '$_apply_ci' and (apply_temp_yn = 'Y' OR apply_temp_yn is null) ");
if($dup2['cnt'] > 0){
    if(empty($_apply_ci) and empty($_apply_di) and empty($last_idx)){
        $dup3 = sql_fetch("select * from cb_unreal_2024_event2_apply where apply_ci = '$_apply_ci' and (apply_temp_yn = 'Y' OR apply_temp_yn is null) ");
        $_apply_ci = $dup3['apply_ci'];
        $_apply_di = $dup3['apply_di'];
        $last_idx = $dup3['apply_no'];
    }
}
if ($last_idx) {
    $last_count = sql_fetch("SELECT COUNT(*) AS cnt FROM cb_unreal_2024_event2_apply WHERE apply_no = '$last_idx' and apply_user_email not like 'del:%'");
    if ($last_count['cnt'] > 0) {
        $sql = "UPDATE cb_unreal_2024_event2_apply SET
                                  apply_user_name = '$apply_user_name',
                                  apply_user_email = '$apply_user_email',
                                  apply_user_phone = '$apply_user_phone',
                                  apply_coupon_no = '$apply_coupon_no',
                                  apply_user_job = '$apply_user_job',
                                  apply_user_company = '$apply_user_company',
                                  apply_user_depart = '$apply_user_depart',
                                  apply_user_grade = '$apply_user_grade',
                                  apply_sector = '',
                                  apply_product_code = '$apply_product_code',
                                  apply_user_ex1 = '$apply_user_ex1',
                                  apply_user_ex2 = '',
                                  apply_user_ex3 = '',
                                  apply_user_ex4 = '',
                                  apply_user_email2 = '',
                                  apply_product_name = '$apply_product_name',
                                  apply_product_price = '$apply_product_price',
                                  apply_user_event_agree = '$apply_user_event_agree',
                                  apply_ci = '$_apply_ci',
                                  apply_di = '$_apply_di',
                                  apply_password = '$apply_password',
                                  apply_track = '$apply_track',
                                  apply_student_file = '$apply_student_file'
                                WHERE apply_no = '$last_idx'";
        sql_query($sql);
        echo $last_idx;
        exit;
    }
}

$dup = sql_fetch("select count(*) as cnt from cb_unreal_2024_event2_apply where apply_ci = '$_apply_ci' and apply_temp_yn = 'N' ");
if ($dup['cnt'] > 0) {
    echo "중복된 신청입니다.";
    exit;
}

$sql = "INSERT INTO cb_unreal_2024_event2_apply_temp (
                                  apply_user_name, 
                                  apply_user_email,
                                  apply_user_phone,
                                  apply_coupon_no,
                                  apply_user_job, 
                                  apply_user_company, 
                                  apply_user_depart, 
                                  apply_user_grade, 
                                  apply_sector, 
                                  apply_product_code,
                                  apply_user_ex1, 
                                  apply_user_ex2, 
                                  apply_user_ex3, 
                                  apply_user_ex4, 
                                  apply_user_email2, 
                                  apply_product_price,
                                  apply_product_name, 
                                  apply_user_event_agree,
                                  apply_password,
                                  apply_ci,
                                  apply_di,
                                  apply_track,
                                  apply_student_file
                                ) VALUES(
                                  '$apply_user_name', 
                                  '$apply_user_email',
                                  '$apply_user_phone',
                                  '$apply_coupon_no',
                                  '$apply_user_job', 
                                  '$apply_user_company', 
                                  '$apply_user_depart', 
                                  '$apply_user_grade', 
                                  '', 
                                  '$apply_product_code',
                                  '$apply_user_ex1', 
                                  '', 
                                  '', 
                                  '', 
                                  '', 
                                  '$apply_product_price', 
                                  '$apply_product_name', 
                                  '$apply_user_event_agree',
                                  '$apply_password',
                                  '$_apply_ci',
                                  '$_apply_di',
                                  '$apply_track',
                                  '$apply_student_file'
                                )";
sql_query($sql);

$sql = "INSERT INTO cb_unreal_2024_event2_apply (
                                  apply_user_name, 
                                  apply_user_email,
                                  apply_user_phone,
                                  apply_coupon_no,
                                  apply_user_job, 
                                  apply_user_company, 
                                  apply_user_depart, 
                                  apply_user_grade, 
                                  apply_sector, 
                                  apply_product_code,
                                  apply_user_ex1, 
                                  apply_user_ex2, 
                                  apply_user_ex3, 
                                  apply_user_ex4, 
                                  apply_user_email2, 
                                  apply_product_price,
                                  apply_product_name, 
                                  apply_user_event_agree,
                                  apply_password,
                                  apply_ci,
                                  apply_di,
                                  apply_track,
                                  apply_student_file
                                ) VALUES(
                                  '$apply_user_name', 
                                  '$apply_user_email',
                                  '$apply_user_phone',
                                  '$apply_coupon_no',
                                  '$apply_user_job', 
                                  '$apply_user_company', 
                                  '$apply_user_depart', 
                                  '$apply_user_grade', 
                                  '', 
                                  '$apply_product_code',
                                  '$apply_user_ex1', 
                                  '', 
                                  '', 
                                  '', 
                                  '', 
                                  '$apply_product_price', 
                                  '$apply_product_name', 
                                  '$apply_user_event_agree',
                                  '$apply_password',
                                  '$_apply_ci',
                                  '$_apply_di',
                                  '$apply_track',
                                  '$apply_student_file'
                                )";
sql_query($sql);

$_SESSION["final_idx"] = sql_query("SELECT LAST_INSERT_ID() as idx")->fetch_array()['idx'];

?>
