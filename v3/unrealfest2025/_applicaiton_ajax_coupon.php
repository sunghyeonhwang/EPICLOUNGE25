<?
include_once "../common.php";

$apply_product_code = $_REQUEST["apply_product_code"];
$apply_user_coupon = $_REQUEST["apply_user_coupon"];

if($apply_product_code == "STD_ALL" || $apply_product_code == "STD_28" || $apply_product_code == "STD_29"){

    $sql = "select * from cb_unreal_2025_event2_coupon where coupon_serial = '".$apply_user_coupon."' and coupon_type = '학생'";
    $result = sql_fetch($sql);
}else if($apply_product_code == "NORMAL_ALL" || $apply_product_code == "NORMAL_25" || $apply_product_code == "NORMAL_26"){

    $sql = "select * from cb_unreal_2025_event2_coupon where coupon_serial = '".$apply_user_coupon."' and coupon_type = '일반'";
    $result = sql_fetch($sql);
}else{
    echo "잘못된 접근입니다.";
    exit;
}

if($result["coupon_serial"] == null) {
    echo "존재하지 않는 쿠폰입니다.";
    exit;
}else if(!($result["usage_date"] == null || $result["usage_date"] == "null")){
    echo "이미 사용된 쿠폰입니다.";
    exit;
}else{
    echo $result["discount_rate"]."_".$result["coupon_key"];
    exit;
}


?>

