<?
include_once "../common.php";

$code = $_GET["code"];
$track = $_GET["track"];


$tracks = explode(',', $track);
$track_conditions = array_map(function ($t) {
    return "name = '" . trim($t) . "'";
}, $tracks);
$sql = "select min(date1) as date1,min(date2) as date2 from 2025_event_ticket where " . implode(' OR ', $track_conditions);
$result = sql_fetch($sql);


$limit_cnt1 = $result["date1"];
$limit_cnt2 = $result["date1"];
$result_cnt = 0;
if($code == "STD_ALL" || $code == "NORMAL_ALL"){
    $track_conditions = array_map(function ($t) {
        return "apply_track like '%" . trim($t) . "%'";
    }, $tracks);
    $sql = "select count(*) as cnt from cb_unreal_2025_event2_apply where pay_complete = 'Y' and apply_temp_yn = 'N'  AND apply_pay_status <> 0 and apply_coupon_no < 10000  and (" . implode(' OR ', $track_conditions) . ") and (apply_product_code like '%25' or apply_product_code like '%ALL')";
    $row_cnt = sql_fetch($sql);
    $result_cnt1 = $row_cnt["cnt"];

    $track_conditions = array_map(function ($t) {
        return "apply_track like '%" . trim($t) . "%'";
    }, $tracks);
    $sql = "select count(*) as cnt from cb_unreal_2025_event2_apply where pay_complete = 'Y' and apply_temp_yn = 'N'  AND apply_pay_status <> 0 and apply_coupon_no < 10000  and (" . implode(' OR ', $track_conditions) . ") and (apply_product_code like '%26' or apply_product_code like '%ALL')";
    $row_cnt = sql_fetch($sql);
    $result_cnt2 = $row_cnt["cnt"];

    if($result_cnt1 >= $limit_cnt1 || $result_cnt2 >= $limit_cnt2) {
        header('Content-Type: application/json');
        echo json_encode(array("result" => false, "msg" => "해당 트랙의 티켓이 모두 판매되었습니다."));
        exit;
    }

}else if($code == "STD_28" || $code == "NORMAL_25"){
    $sql = "select count(*) as cnt from cb_unreal_2025_event2_apply where apply_pay_status <> 0 and apply_temp_yn = 'N'  AND apply_pay_status <> 0 and apply_coupon_no < 10000  and apply_track like '%".$track."%' and (apply_product_code like '%25' or apply_product_code like '%ALL')";
    $result_cnt = sql_fetch($sql);

    if($result_cnt["cnt"] >= $limit_cnt1){
        header('Content-Type: application/json');
        echo json_encode(array("result" => false, "msg" => "해당 트랙의 티켓이 모두 판매되었습니다."));
        exit;
    }

}else if($code == "STD_29" || $code == "NORMAL_26"){
    $sql = "select count(*) as cnt from cb_unreal_2025_event2_apply where apply_pay_status <> 0 and apply_temp_yn = 'N'  AND apply_pay_status <> 0 and apply_coupon_no < 10000  and apply_track like '%".$track."%' and (apply_product_code like '%26' or apply_product_code like '%ALL')";
    $result_cnt = sql_fetch($sql);

    if($result_cnt["cnt"] >= $limit_cnt2){
        header('Content-Type: application/json');
        echo json_encode(array("result" => false, "msg" => "해당 트랙의 티켓이 모두 판매되었습니다."));
        exit;
    }
}


header('Content-Type: application/json');
echo json_encode(array("result" => true, "msg" => ""));
exit;



?>

