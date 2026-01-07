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

$retdata = sql_fetch("select * from cb_unreal_2025_event2_apply where apply_no = '$last_idx'");

if ($last_idx) {
    $last_count = sql_fetch("SELECT COUNT(*) AS cnt FROM cb_unreal_2025_event2_apply WHERE apply_no = '$last_idx' and apply_user_email not like 'del:%'");

    if ($last_count['cnt'] > 0) {

        $sql = "UPDATE cb_unreal_2025_event2_apply SET
                                  apply_user_company = '$apply_user_company',
                                  apply_user_depart = '$apply_user_depart',
                                  apply_user_ex1 = '$apply_user_ex1',
                                  apply_user_grade = '$apply_user_grade',
								  apply_user_job = '$apply_user_job'
                                WHERE apply_no = '$last_idx'";
        sql_query($sql);
        echo $last_idx;
        exit;

    }
}
?>
