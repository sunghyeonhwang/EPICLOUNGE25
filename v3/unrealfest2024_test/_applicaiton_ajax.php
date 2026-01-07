<?
include_once "../common.php";

$code = $_GET["code"];
$track = $_GET["track"];



$sql = "select date1 from 2024_event_ticket where name = '".$track."'";
$result = sql_fetch($sql);


$limit_cnt = $result["date1"];
$limit_cnt = $limit_cnt - 100;
$result_cnt = 0;
if($code == "STD_ALL" || $code == "NORMAL_ALL"){
    $sql = "select count(*) as cnt from cb_unreal_2024_event2_apply where apply_pay_status <> 0 and apply_temp_yn = 'N' and apply_track = '".$track."' and (apply_product_code like '%28' or apply_product_code like '%ALL')";
    $row_cnt = sql_fetch($sql);
    $result_cnt1 = $row_cnt["cnt"];

    $sql = "select count(*) as cnt from cb_unreal_2024_event2_apply where apply_pay_status <> 0 and apply_temp_yn = 'N' and apply_track = '".$track."' and (apply_product_code like '%29' or apply_product_code like '%ALL')";
    $row_cnt = sql_fetch($sql);
    $result_cnt2 = $row_cnt["cnt"];

    if($result_cnt1 >= $limit_cnt || $result_cnt2 >= $limit_cnt) {
        echo "해당 트랙의 티켓이 모두 판매되었습니다.";
        exit;
    }

}else if($code == "STD_28" || $code == "NORMAL_28"){
    $sql = "select count(*) as cnt from cb_unreal_2024_event2_apply where apply_pay_status <> 0 and apply_temp_yn = 'N' and apply_track = '".$track."' and (apply_product_code like '%28' or apply_product_code like '%ALL')";
    $result_cnt = sql_fetch($sql);

}else if($code == "STD_29" || $code == "NORMAL_29"){
    $sql = "select count(*) as cnt from cb_unreal_2024_event2_apply where apply_pay_status <> 0 and apply_temp_yn = 'N' and apply_track = '".$track."' and (apply_product_code like '%29' or apply_product_code like '%ALL')";
    $result_cnt = sql_fetch($sql);
}

if($result_cnt["cnt"] >= $limit_cnt){
    echo "해당 트랙의 티켓이 모두 판매되었습니다.";
    exit;
}else{
    echo "success";
    exit;
}


?>

