<?
include_once "../common.php";

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
$apply_user_job = $_POST['apply_user_job'];




$apply_track = $_POST['apply_track'];

$_apply_ci = $_SESSION["CI"];
$_apply_di = $_SESSION["DI"];

$last_idx = $_SESSION["final_idx"];


$apply_password = md5(str_replace("'","\'",$apply_user_email));


//$apply_user_job = "일반";

if(empty($_apply_ci)){
    header('Content-Type: application/json');
    echo json_encode(array("result" => false, "msg" => "실명인증을 먼저 진행해주세요."));
    exit;
}



$dup = sql_fetch("select count(*) as cnt from cb_unreal_2025_event2_apply where apply_ci = '$_apply_ci' and apply_temp_yn = 'N' ");
if($dup['cnt'] > 0){
    header('Content-Type: application/json');
    echo json_encode(array("result" => false, "msg" => "기존 온라인 등록 또는 오프라인 티켓 등록을 취소하신 후 다시 등록하세요."));
    exit;
}




$dup = sql_fetch("select count(*) as cnt from cb_unreal_2025_event2_apply where apply_user_email = '$apply_user_email' and  apply_user_phone = '$apply_user_phone'  and apply_temp_yn = 'N' ");
if($dup['cnt'] > 0){
    header('Content-Type: application/json');
    echo json_encode(array("result" => false, "msg" => "기존 온라인 등록 또는 오프라인 티켓 등록을 취소하신 후 다시 등록하세요."));
    exit;
}

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
                                  apply_track
                                ) VALUES(
                                  '" . sql_real_escape_string(strip_tags($apply_user_name)) . "', 
                                  '" . sql_real_escape_string(strip_tags($apply_user_email)) . "',
                                  '" . sql_real_escape_string(strip_tags($apply_user_phone)) . "',
                                  '" . sql_real_escape_string(strip_tags($apply_coupon_no)) . "',
                                  '" . sql_real_escape_string(strip_tags($apply_user_job)) . "', 
                                  '" . sql_real_escape_string(strip_tags($apply_user_company)) . "', 
                                  '" . sql_real_escape_string(strip_tags($apply_user_depart)) . "', 
                                  '" . sql_real_escape_string(strip_tags($apply_user_grade)) . "', 
                                  '', 
                                  '" . sql_real_escape_string(strip_tags($apply_product_code)) . "',
                                  '" . sql_real_escape_string(strip_tags($apply_user_ex1)) . "', 
                                  '', 
                                  '', 
                                  '', 
                                  '', 
                                  '" . sql_real_escape_string(strip_tags($apply_product_price)) . "', 
                                  '" . sql_real_escape_string(strip_tags($apply_product_name)) . "', 
                                  '" . sql_real_escape_string(strip_tags($apply_user_event_agree)) . "',
                                  '" . sql_real_escape_string($apply_password) . "',
                                  '" . sql_real_escape_string(strip_tags($_apply_ci)) . "',
                                  '" . sql_real_escape_string(strip_tags($_apply_di)) . "',
                                  '" . sql_real_escape_string(strip_tags($apply_track)) . "'
                                )";
sql_query($sql);


$_SESSION["final_idx"] = sql_query("SELECT LAST_INSERT_ID() as idx")->fetch_array()['idx'];

header('Content-Type: application/json');
echo json_encode(array("result" => true, "index" => $_SESSION["final_idx"]));

///echo $_SESSION["final_idx"];


?>

