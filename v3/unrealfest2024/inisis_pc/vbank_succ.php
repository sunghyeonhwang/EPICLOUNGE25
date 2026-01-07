<?php
require_once('../../common.php');
$requestAsString = var_export($_REQUEST, true);

$apply_no = $_SESSION["final_idx"];
sql_query("insert into 2024_event_log(log_idx,log_text,rdate) values('$apply_no','".str_replace("'","`",$requestAsString)."',now())");

$rdata = sql_fetch("select * from cb_unreal_2024_event2_apply where pay_moid = '".$_REQUEST["no_oid"]."' limit 1");
if($_REQUEST["amt_input"] >= $rdata["pay_totprice"]){

    $sql = "UPDATE cb_unreal_2024_event2_apply SET pay_complete = 'Y',apply_pay_status=10  WHERE pay_moid = '".$_REQUEST["no_oid"]."'";
    sql_query($sql);

    include_once "../phpqrcode/qrlib.php";
    $sOrignText = $rdata["apply_password"];
    QRcode::png($sOrignText,"../qrdata/".$rdata["apply_no"].".png", 0, 7, 2);
    $documentRoot = $_SERVER['DOCUMENT_ROOT'];
    $imagePath =  $documentRoot.'/v3/unrealfest2024/qrdata/'.$rdata["apply_no"].'.png';
    $imagePath2 =  $documentRoot.'/v3/unrealfest2024/qrdata/'.$rdata["apply_no"].'.jpg';
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
//sha256($_SESSION["final_idx"]);

    $apply_product_code = $rdata["apply_product_code"];
    $call_date = "8월 28일(수), 8월 29일(목)";
    if($apply_product_code == "STD_28" || $apply_product_code == "NORMAL_28") {
        $call_date = "8월 28일(수)";
    }else if($apply_product_code == "STD_29" || $apply_product_code == "NORMAL_29") {
        $call_date = "8월 29일(목)";
    }

    $ch = curl_init();
    $title = "<언리얼 페스트 2024 서울> 등록 확인";
    $message = "<언리얼 페스트 2024 서울> 오프라인 등록이 완료되었습니다.\n행사장 내 셀프 체크인 기기에서 QR코드를 스캔한 후 간편하게 입장하세요.\n\n일시: ".$call_date."\n장소: 잠실 롯데호텔 월드 3층 크리스탈 볼룸\n\n\n등록 정보 변경 및 취소는 FAQs를 참조해 주세요.\nhttps://bit.ly/3Wn6j4h\n\n- 언리얼 페스트 2024 서울 사무국";

    $sender = "023263701";                    //필수입력
    $username = "griff16";                //필수입력
    $key = "BaIpwA1FNBOYszC";           //필수입력
    $receiver = '{"name":"'.$rdata["apply_user_name"].'","mobile":"'.$rdata["apply_user_phone"].'"}';
    $receiver = '['.$receiver.']';
    $sms_type = 'NORMAL'; // NORMAL - 즉시발송 / ONETIME - 1회예약 / WEEKLY - 매주정기예약 / MONTHLY - 매월정기예약
    $start_reserve_time = date('Y-m-d H:i:s'); //  발송하고자 하는 시간(시,분단위까지만 가능) (동일한 예약 시간으로는 200회 이상 API 호출을 할 수 없습니다.)
    $end_reserve_time = date('Y-m-d H:i:s'); //  발송이 끝나는 시간 1회 예약일 경우 $start_reserve_time = $end_reserve_time
    $remained_count = 1;
    $message = str_replace(' ', ' ', $message);  //유니코드 공백문자 치환
    $file[] = array('attc' => 'https://epiclounge.co.kr/v3/unrealfest2024/qrdata/'. $rdata["apply_no"].".jpg");
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


    echo "OK";
}else{

}

?>
