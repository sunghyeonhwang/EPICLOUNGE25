<?
// ono(order no)로 정보로 진입시 처리

include(LIVE_INC_PATH.'/_data.php');

// 주문번호 처리
$APPLY_ORDER_NO = empty($_GET['ono']) ? '' : $_GET['ono'];

// if ($SEL_TRACK_COUNT) {
//     $trackInfo = [
//         'count' => $SEL_TRACK_COUNT,
//         1 => @$_DATA[$sel_day][1]['name'],
//         2 => @$_DATA[$sel_day][2]['name'],
//     ];
// } else {
//     $trackInfo = [
//         'count' => 0,
//     ];
// }
// $JSON_TRACK = json_encode($trackInfo);
?>