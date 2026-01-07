<?
include_once "../common.php";



//최종 등록전에 좌석 최종확인

$prev_data = sql_fetch("select * from cb_unreal_2025_event2_apply where apply_no = '25258'");
$code = $prev_data["apply_product_code"];
$track = $prev_data["apply_track"];


$result_25_cnt = 0;
$result_26_cnt = 0;
$result_25_tarck = "";
$result_26_tarck = "";

$tracks = explode(',', $track);
for($i=0; $i<count($tracks); $i++){
    $tracks[$i] = trim($tracks[$i]);
    $count_sql = "select date1 from 2025_event_ticket where name = '" . $tracks[$i] . "'";

    if (strpos($tracks[$i], 'DAY1_') !== false) {
        $result_25_cnt = sql_fetch($count_sql)['date1'];
        $result_25_tarck = $tracks[$i];
    } else {
        $result_26_cnt = sql_fetch($count_sql)['date1'];
        $result_26_tarck = $tracks[$i];
    }
}

//echo $result_25_cnt . ":::result_25_cnt<br/>";
//echo $result_26_cnt. ":::result_26_cnt<br/>";;


$limit_cnt1 = $result_25_cnt;
$limit_cnt2 = $result_26_cnt;
$result_cnt = 0;
if($code == "STD_ALL" || $code == "NORMAL_ALL"){

    $sql = "select count(*) as cnt from cb_unreal_2025_event2_apply where apply_pay_status <> 0 and apply_temp_yn = 'N' and apply_track like '%".$result_25_tarck."%' and (apply_product_code like '%25' or apply_product_code like '%ALL')";
    $row_cnt = sql_fetch($sql);
    $result_cnt1 = $row_cnt["cnt"];

    $track_conditions = array_map(function ($t) {
        return "apply_track = '" . trim($t) . "'";
    }, $tracks);
    $sql = "select count(*) as cnt from cb_unreal_2025_event2_apply where apply_pay_status <> 0 and apply_temp_yn = 'N' and apply_track like '%".$result_26_tarck."%' and (apply_product_code like '%26' or apply_product_code like '%ALL')";
    $row_cnt = sql_fetch($sql);
    $result_cnt2 = $row_cnt["cnt"];

    if($result_cnt1 >= $limit_cnt1 || $result_cnt2 >= $limit_cnt2) {
        echo '<script type="text/javascript">';
        echo "alert('해당 트랙의 티켓이 모두 판매되었습니다.');";
        //echo "location.href='/v3/application_form.html';";
        //echo "history.back(-1);";
        echo '</script>';
        exit();
    }
}else if($code == "STD_28" || $code == "NORMAL_25"){
    $sql = "select count(*) as cnt from cb_unreal_2025_event2_apply where apply_pay_status <> 0 and apply_temp_yn = 'N' and apply_track like '%".$result_25_tarck."%' and (apply_product_code like '%25' or apply_product_code like '%ALL')";
    $result_cnt = sql_fetch($sql);


    if($result_cnt["cnt"] >= $limit_cnt1) {
        echo '<script type="text/javascript">';
        echo "alert('해당 트랙의 티켓이 모두 판매되었습니다.');";
        //echo "location.href='/v3/application_form.html';";
        //echo "history.back(-1);";
        echo '</script>';
        exit();
    }

}else if($code == "STD_29" || $code == "NORMAL_26"){
    $sql = "select count(*) as cnt from cb_unreal_2025_event2_apply where apply_pay_status <> 0 and apply_temp_yn = 'N' and apply_track like '%".$result_26_tarck."%' and (apply_product_code like '%26' or apply_product_code like '%ALL')";
    $result_cnt = sql_fetch($sql);

    if($result_cnt["cnt"] >= $limit_cnt2) {
        echo '<script type="text/javascript">';
        echo "alert('해당 트랙의 티켓이 모두 판매되었습니다.');";
        //echo "location.href='/v3/application_form.html';";
        //echo "history.back(-1);";
        echo '</script>';
        exit();
    }
}

//좌석확인 끝

?>

