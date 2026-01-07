<?php
include_once "../common.php";
// POST 데이터 가져오기
$apply_user_name = $_POST['apply_user_name'];
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
$apply_user_job = $_POST['apply_user_job'];
$agree_se4 = $_POST['agree_se4'];
if($agree_se4 == "true" || $agree_se4 == true) {
    $apply_user_event_agree = "Y";
}else{
    $apply_user_event_agree = "N";
}

$last_idx = $_POST['apply_no'];

$retdata = sql_fetch("select * from cb_unreal_2024_event2_apply where apply_no = '$last_idx'");

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
    $apply_student_file = $retdata['apply_student_file'];
}

if ($last_idx) {
    $last_count = sql_fetch("SELECT COUNT(*) AS cnt FROM cb_unreal_2024_event2_apply WHERE apply_no = '$last_idx' and apply_user_email not like 'del:%'");

    if ($last_count['cnt'] > 0) {

        if($retdata["apply_user_job"] == "학생"){

            $sql = "UPDATE cb_unreal_2024_event2_apply SET
                                  apply_user_company = '$apply_user_company',
                                  apply_user_depart = '$apply_user_depart',
                                  apply_user_grade = '$apply_user_grade',
                                  apply_user_ex1 = '$apply_user_ex1',
                                  apply_student_file = '$apply_student_file'
                                WHERE apply_no = '$last_idx'";
            sql_query($sql);
            echo $last_idx;
            exit;
        }else if($retdata["apply_user_job"] == "일반"){
            $sql = "UPDATE cb_unreal_2024_event2_apply SET
                                  apply_user_company = '$apply_user_company',
                                  apply_user_depart = '$apply_user_depart',
                                  apply_user_ex1 = '$apply_user_ex1',
                                  apply_user_grade = '$apply_user_grade'
                                WHERE apply_no = '$last_idx'";
            sql_query($sql);
            echo $last_idx;
            exit;
        }else{

            $sql = "UPDATE cb_unreal_2024_event2_apply SET
                                  apply_user_job = '$apply_user_job',
                                  apply_user_company = '$apply_user_company',
                                  apply_user_depart = '$apply_user_depart',
                                  apply_user_ex1 = '$apply_user_ex1',
                                  apply_user_grade = '$apply_user_grade'
                                WHERE apply_no = '$last_idx'";
            sql_query($sql);
            echo $last_idx;
            exit;
        }

    }
}
?>
