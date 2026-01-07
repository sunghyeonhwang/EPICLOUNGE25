<?
include_once "../common.php";
include_once "phpqrcode/qrlib.php";
ini_set('display_errors', 1);

$apply_no = $_SESSION["final_idx"];
$prev_data = sql_fetch("select * from cb_unreal_2024_event2_apply where apply_no = '$apply_no'");
$apply_password = md5(str_replace("'","\'",$prev_data['apply_user_email']));

$agree_se4 = $_POST['agree_se4'];
if($agree_se4 == "true") {
    $apply_user_event_agree = "1";
}else{
    $apply_user_event_agree = "0";
}
$apply_user_name = $prev_data["apply_user_name"];
$apply_user_phone = $prev_data["apply_user_phone"];
$apply_user_email = $prev_data["apply_user_email"];
$apply_product_code = $prev_data["apply_product_code"];
$apply_coupon_no = $prev_data["apply_coupon_no"];

sql_query("UPDATE cb_unreal_2024_event2_apply SET apply_temp_yn = 'N',apply_pay_status=10,free_yn='N',pay_complete='Y' WHERE apply_no = '$apply_no'");
sql_query("UPDATE cb_unreal_2024_event2_coupon SET usage_date = now(),user_name='$apply_user_name',user_email='$apply_user_email' WHERE coupon_key = '$apply_coupon_no'");

$sOrignText = $apply_password;
QRcode::png($sOrignText,"qrdata/".$_SESSION["final_idx"].".png", 0, 7, 2);
$documentRoot = $_SERVER['DOCUMENT_ROOT'];
$imagePath =  $documentRoot.'/v3/unrealfest2024/qrdata/'.$_SESSION["final_idx"].'.png';
$imagePath2 =  $documentRoot.'/v3/unrealfest2024/qrdata/'.$_SESSION["final_idx"].'.jpg';
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
$receiver = '{"name":"'.$apply_user_name.'","mobile":"'.$apply_user_phone.'"}';
$receiver = '['.$receiver.']';
$sms_type = 'NORMAL'; // NORMAL - 즉시발송 / ONETIME - 1회예약 / WEEKLY - 매주정기예약 / MONTHLY - 매월정기예약
$start_reserve_time = date('Y-m-d H:i:s'); //  발송하고자 하는 시간(시,분단위까지만 가능) (동일한 예약 시간으로는 200회 이상 API 호출을 할 수 없습니다.)
$end_reserve_time = date('Y-m-d H:i:s'); //  발송이 끝나는 시간 1회 예약일 경우 $start_reserve_time = $end_reserve_time
$remained_count = 1;
$message = str_replace(' ', ' ', $message);  //유니코드 공백문자 치환
$file[] = array('attc' => 'https://epiclounge.co.kr/v3/unrealfest2024/qrdata/'. $_SESSION["final_idx"].".jpg");
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

echo "success";
?>