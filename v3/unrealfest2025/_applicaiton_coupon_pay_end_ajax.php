<?
include_once "../common.php";
include_once "./phpqrcode/qrlib.php";

$index = $_REQUEST["index"];



$temp_data = sql_fetch("select * from cb_unreal_2025_event2_apply where apply_no = '{$index}' order by apply_no desc limit 1");


$apply_coupon_no = $temp_data["apply_coupon_no"];
$coupon = sql_fetch("select * from cb_unreal_2025_event2_coupon where coupon_key = '{$apply_coupon_no}' ");
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


//최종 등록전에 좌석 최종확인
$prev_data= $temp_data;

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
    $track_conditions = array_map(function ($t) {
        return "apply_track like '%" . trim($t) . "%'";
    }, $tracks);
    $sql = "select count(*) as cnt from cb_unreal_2025_event2_apply where  apply_pay_status <> 0 and apply_coupon_no < 10000  and apply_temp_yn = 'N' and apply_track like '%".$result_25_tarck."%' and (apply_product_code like '%25' or apply_product_code like '%ALL')";
    $row_cnt = sql_fetch($sql);
    $result_cnt1 = $row_cnt["cnt"];

    $track_conditions = array_map(function ($t) {
        return "apply_track like '%" . trim($t) . "%'";
    }, $tracks);
    $sql = "select count(*) as cnt from cb_unreal_2025_event2_apply where  apply_pay_status <> 0 and apply_coupon_no < 10000  and apply_temp_yn = 'N' and apply_track like '%".$result_26_tarck."%'  and (apply_product_code like '%26' or apply_product_code like '%ALL')";
    $row_cnt = sql_fetch($sql);
    $result_cnt2 = $row_cnt["cnt"];

    if($result_cnt1 >= $limit_cnt1 || $result_cnt2 >= $limit_cnt2) {
        header('Content-Type: application/json');
        echo json_encode(array("result" => false, "msg" => "해당 트랙의 티켓이 모두 판매되었습니다."));
        exit;
    }
}else if($code == "STD_28" || $code == "NORMAL_25"){
    $sql = "select count(*) as cnt from cb_unreal_2025_event2_apply where  apply_pay_status <> 0 and apply_coupon_no < 10000  and apply_temp_yn = 'N' and apply_track like '%".$result_25_tarck."%' and (apply_product_code like '%25' or apply_product_code like '%ALL')";
    $result_cnt = sql_fetch($sql);


    if($result_cnt["cnt"] >= $limit_cnt1) {
        header('Content-Type: application/json');
        echo json_encode(array("result" => false, "msg" => "해당 트랙의 티켓이 모두 판매되었습니다."));
        exit;
    }

}else if($code == "STD_29" || $code == "NORMAL_26"){
    $sql = "select count(*) as cnt from cb_unreal_2025_event2_apply where  apply_pay_status <> 0 and apply_coupon_no < 10000  and apply_temp_yn = 'N' and apply_track like '%".$result_26_tarck."%' and (apply_product_code like '%26' or apply_product_code like '%ALL')";
    $result_cnt = sql_fetch($sql);

    if($result_cnt["cnt"] >= $limit_cnt2) {
        header('Content-Type: application/json');
        echo json_encode(array("result" => false, "msg" => "해당 트랙의 티켓이 모두 판매되었습니다."));
        exit;
    }
}

//좌석확인 끝





sql_query("UPDATE cb_unreal_2025_event2_apply SET apply_temp_yn = 'N',free_yn='N',pay_complete='Y' WHERE apply_no = '{$index}'");

sql_query("UPDATE cb_unreal_2025_event2_coupon SET usage_date = NOW(), user_name = '{$temp_data["apply_user_name"]}', user_email = '{$temp_data["apply_user_email"]}', user_phone = '{$temp_data["apply_user_phone"]}' WHERE coupon_key = '{$temp_data["apply_coupon_no"]}'");
//sql_query("UPDATE cb_unreal_2025_event2_coupon SET usage_date = NOW(), user_name = '{$temp_data["apply_user_name"]}' WHERE coupon_key = '{$temp_data["apply_coupon_no"]}'");
//echo ("select * from cb_unreal_2025_event2_apply where apply_coupon_no = '{$coupon_key}' order by apply_no desc  limit 1");




$apply_track = $temp_data["apply_track"];
$apply_track_array = explode(",", $apply_track);
$apply_product_code = $temp_data["apply_product_code"];
$apply_user_name = $temp_data["apply_user_name"];
$apply_user_phone = $temp_data["apply_user_phone"];
$apply_password = md5(str_replace("'","\'",$temp_data['apply_user_email']));
$sOrignText = $apply_password;
QRcode::png($sOrignText,"qrdata/".$_SESSION["final_idx"].".png", 0, 7, 2);
$documentRoot = $_SERVER['DOCUMENT_ROOT'];
$imagePath =  $documentRoot.'/v3/unrealfest2025/qrdata/'.$temp_data["apply_no"].'.png';
$imagePath2 =  $documentRoot.'/v3/unrealfest2025/qrdata/'.$temp_data["apply_no"].'.jpg';
if (file_exists($imagePath)) {
    $pngImage = imagecreatefrompng($imagePath);
    if ($pngImage) {
        $pngWidth = imagesx($pngImage);
        $pngHeight = imagesy($pngImage);
        $jpgImage = imagecreatetruecolor($pngWidth, $pngHeight);
        imagecopy($jpgImage, $pngImage, 0, 0, 0, 0, $pngWidth, $pngHeight);
        imagejpeg($jpgImage, $imagePath2, 100); // 90 is the quality (0-100)
        imagedestroy($pngImage);
        imagedestroy($jpgImage);
    }
}
//sha256($temp_data["apply_no"]);

$call_date = " 8월 25일(월)~26일(화) 오전 9시";
if($apply_product_code == "STD_28" || $apply_product_code == "NORMAL_25") {
    $call_date = "8월 25일(월) 오전 9시";
}else if($apply_product_code == "STD_29" || $apply_product_code == "NORMAL_26") {
    $call_date = "8월 26일(화) 오전 9시";
}

$ch = curl_init();
$title = "<언리얼 페스트 서울 2025> 등록 확인";
$message = "<언리얼 페스트 서울 2025> 오프라인 등록이 완료되었습니다. \n행사장 내 셀프 체크인 기기에서 QR코드를 스캔한 후 간편하게 입장하세요.\n\n일시: ".$call_date."\n장소: 코엑스 그랜드볼룸\n\n\n자세한 내용은 FAQ를 참고하세요.\n\n https://bit.ly/ufs25\n\n- 언리얼 페스트 사무국";

$sender = "023263701";                    //필수입력
$username = "griff16";                //필수입력
$key = "BaIpwA1FNBOYszC";           //필수입력
$receiver = '{"name":"'.$apply_user_name.'","mobile":"'.$apply_user_phone.'"}';
$receiver = '['.$receiver.']';
$sms_type = 'NORMAL'; // NORMAL - 즉시발송 / ONETIME - 1회예약 / WEEKLY - 매주정기예약 / MONTHLY - 매월정기예약
$start_reserve_time = date('Y-m-d H:i:s'); //  발송하고자 하는 시간(시,분단위까지만 가능) (동일한 예약 시간으로는 200회 이상 API 호출을 할 수 없습니다.)
$end_reserve_time = date('Y-m-d H:i:s'); //  발송이 끝나는 시간 1회 예약일 경우 $start_reserve_time = $end_reserve_time
$remained_count = 1;
$message = str_replace(' ', ' ', $message);  //유니코드 공백문자 치환
$file[] = array('attc' => 'https://epiclounge.co.kr/v3/unrealfest2025/qrdata/'. $temp_data["apply_no"].".jpg");
$attaches = json_encode($file);
$postvars = '"title":"'.$title.'"';
$postvars = $postvars.', "message":"'.$message.'"';
$postvars = $postvars.', "sender":"'.$sender.'"';
$postvars = $postvars.', "username":"'.$username.'"';
$postvars = $postvars.', "receiver":'.$receiver.'';
$postvars = $postvars.', "key":"'.$key.'"';
$postvars = $postvars.', "attaches":'.$attaches;                      //첨부파일이 있는 경우 주석해제 바랍니다.

$postvars = '{'.$postvars.'}';      //JSON 데이터
$url = "https://directsend.co.kr/index.php/api_v2/sms_change_word";         //URL
$headers = array("cache-control: no-cache","content-type: application/json; charset=utf-8");
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $postvars);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
curl_setopt($ch,CURLOPT_TIMEOUT, 20);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$response = curl_exec($ch);
if(curl_errno($ch)){
    //echo 'Curl error: ' . curl_error($ch);
}else{
    //print_r($response);
}
curl_close ($ch);

//문자 발송 종료

header('Content-Type: application/json');
echo json_encode(array("result" => true, "msg" => "등록완료"));
exit;
//echo '<script type="text/javascript">';
//echo "location.href='/v3/unrealfest2025/application_qrcode.php'";
//echo '</script>';
//exit();
?>

