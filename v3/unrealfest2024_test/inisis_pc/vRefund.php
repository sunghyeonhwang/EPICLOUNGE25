<?php
require_once('../../common.php');

$apply_user_email = $_POST['apply_user_email'];
$apply_user_phone = $_POST['apply_user_phone'];

$sql = "select * from cb_unreal_2024_event2_apply where apply_user_email = '$apply_user_email' and apply_user_phone = '$apply_user_phone' limit 1";
$RData = sql_fetch($sql);

header("Content-Type: text/html; charset=utf-8"); 

    //step1. 요청을 위한 파라미터 설정

    $key              = "nf2Vszdaxij1qXsm";
    $iv               = "g9r6jQsDkNjdml==";
    $type             = "Refund";
    $paymethod        = "Vacct";
    $timestamp        = date("YmdHis");
    $clientIp         = $_SERVER['REMOTE_ADDR'];
    $mid              = "MOIepiclou";
    $tid              = $RData['mpay_tid'] ? $RData['mpay_tid'] : $RData['pay_tid'];
	$msg              = "고객 환불 요청";
	$refundAcctNum    = $_POST["refundAcctNum"];
	$refundBankCode   = $_POST["refundBankCode"];
	$refundAcctName   = $_POST["refundAcctName"];
    
	// AES 암호화
    $encAcctNum = base64_encode(openssl_encrypt($refundAcctNum, 'aes-128-cbc', $key, OPENSSL_RAW_DATA, $iv)); 
	
	// hash 암호화 => INIAPIKey + type + paymethod + timestamp + clientIp + mid + tid + refundAcctNum(AES Encrypted)	
    $hashData = hash("sha512",(string)$key.(string)$type.(string)$paymethod.(string)$timestamp.(string)$clientIp.(string)$mid.(string)$tid.(string)$encAcctNum); 


    //step2. key=value 로 post 요청
    
    $data = array(
        'type' => $type,
        'paymethod' => $paymethod,
        'timestamp' => $timestamp,
        'clientIp' => $clientIp,
        'mid' => $mid,
        'tid' => $tid,
		'msg' => $msg,
		'refundAcctNum' => $encAcctNum,
		'refundBankCode' => $refundBankCode,
		'refundAcctName' => $refundAcctName,
        'hashData'=> $hashData
	);
		
 
    $url = "https://iniapi.inicis.com/api/v1/refund";  
    
    $ch = curl_init();                                                      
    curl_setopt($ch, CURLOPT_URL, $url);                                    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                         
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);                           
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));          
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);                           
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded; charset=utf-8'));  
    curl_setopt($ch, CURLOPT_POST, 1);                                      
     
	$response = curl_exec($ch);
    curl_close($ch);
	
	//step3. 요청 결과

$resultMap = json_decode($response, true);


$apply_no = $_SESSION["final_idx"];
sql_query("insert into 2024_event_log(log_idx,log_text,rdate) values('$apply_no','".str_replace("'","`",$response)."',now())");

if($resultMap["resultCode"] == "01"){

    echo '<script type="text/javascript">';
    echo "alert('".$resultMap["resultMsg"]."');";
    echo "location.replace('/v3/application_confirm.html');";
    echo '</script>';
    exit();
}else{

    $mail =  'del:'.$RData['apply_user_email'];
    $apply_user_phone =  'del:'.$RData['apply_user_phone'];
    $apply_password =  'del:'.$RData['apply_password'];
    $apply_ci =  'del:'.$RData['apply_ci'];
    $apply_di =  'del:'.$RData['apply_di'];

    $sql2 = "UPDATE cb_unreal_2024_event2_apply SET
  apply_user_email = '$mail',
  apply_user_phone = '$apply_user_phone',
  apply_password = '$apply_password',
  apply_ci = '$apply_ci',
  apply_di = '$apply_di',
  apply_pay_status = 0,
  refund_msg = '".$response."',
  refund_time = '".$resultMap["cancelTime"]."',
  refund_date = '".$resultMap["cancelDate"]."'

  WHERE apply_no = '$apply_no'";
    sql_query($sql2);
    echo '<script type="text/javascript">';
    echo "alert('등록 취소가 완료되었습니다.');";
    echo "location.replace('https://epiclounge.co.kr');location.replace('/');";
    echo '</script>';
    exit();
}

	
?>
