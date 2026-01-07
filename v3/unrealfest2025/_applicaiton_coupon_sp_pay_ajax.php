<?
include_once "../common.php";

$agree_se4 = $_POST['agree_se4'];
if($agree_se4 == "true") {
    $apply_user_event_agree = "1";
}else{
    $apply_user_event_agree = "0";
}
//$apply_user_name = $_POST['apply_user_name'];
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

//$last_idx = $_SESSION["final_idx"];


$apply_password = md5(str_replace("'","\'",$apply_user_email));


$coupon = sql_fetch("select * from cb_unreal_2025_event2_coupon_sponsor where coupon_key = '{$apply_coupon_no}' ");
if(empty($coupon)){

    header('Content-Type: application/json');
    echo json_encode(array("result" => false, "msg" => "쿠폰번호가 일치하지 않습니다. 다시 확인하여주세요."));
    exit;

}else{
    if (!empty($coupon["user_name"]) || !empty($coupon["usage_date"])) {
        header('Content-Type: application/json');
        echo json_encode(array("result" => false, "msg" => "이미 사용된 쿠폰입니다."));
        exit;
    }

    $_SESSION["coupon_serial"] = $coupon["coupon_serial"];
    $_SESSION["coupon_key"] = $coupon["coupon_key"];

}
//$apply_user_job = "일반";

$sql = "INSERT INTO cb_unreal_2025_event2_apply (
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
                              apply_temp_yn
                            ) VALUES(
                              '" . sql_real_escape_string(htmlspecialchars($apply_user_name, ENT_QUOTES)) . "', 
                              '" . sql_real_escape_string(htmlspecialchars($apply_user_email, ENT_QUOTES)) . "',
                              '" . sql_real_escape_string(htmlspecialchars($apply_user_phone, ENT_QUOTES)) . "',
                              '" . sql_real_escape_string(htmlspecialchars($apply_coupon_no, ENT_QUOTES)) . "',
                              '" . sql_real_escape_string(htmlspecialchars($apply_user_job, ENT_QUOTES)) . "', 
                              '" . sql_real_escape_string(htmlspecialchars($apply_user_company, ENT_QUOTES)) . "', 
                              '" . sql_real_escape_string(htmlspecialchars($apply_user_depart, ENT_QUOTES)) . "', 
                              '" . sql_real_escape_string(htmlspecialchars($apply_user_grade, ENT_QUOTES)) . "', 
                              '', 
                              '" . sql_real_escape_string(htmlspecialchars($apply_product_code, ENT_QUOTES)) . "',
                              '" . sql_real_escape_string(htmlspecialchars($apply_user_ex1, ENT_QUOTES)) . "', 
                              '', 
                              '', 
                              '', 
                              '', 
                              '" . sql_real_escape_string(htmlspecialchars($apply_product_price, ENT_QUOTES)) . "', 
                              '" . sql_real_escape_string(htmlspecialchars($apply_product_name, ENT_QUOTES)) . "', 
                              '" . sql_real_escape_string(htmlspecialchars($apply_user_event_agree, ENT_QUOTES)) . "',
                              '" . sql_real_escape_string(htmlspecialchars($apply_password, ENT_QUOTES)) . "',
                              '" . sql_real_escape_string(htmlspecialchars("", ENT_QUOTES)) . "',
                              '" . sql_real_escape_string(htmlspecialchars("", ENT_QUOTES)) . "',
                              '" . sql_real_escape_string(htmlspecialchars($apply_track, ENT_QUOTES)) . "',
                              '" . sql_real_escape_string(htmlspecialchars("Y", ENT_QUOTES)) . "'
                            )";
sql_query($sql);


$_SESSION["final_idx"] = sql_query("SELECT LAST_INSERT_ID() as idx")->fetch_array()['idx'];

header('Content-Type: application/json');
echo json_encode(array("result" => true, "index" => $_SESSION["final_idx"]));


?>

