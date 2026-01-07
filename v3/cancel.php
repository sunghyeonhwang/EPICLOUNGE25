<?
include_once "./common.php";
$mode2 = $_GET['mode2'];

if ($mode2 == 'del2') {

  $apply_no = $_GET['no'];
  $mysqli = new mysqli("localhost","unrealengine","Good121930!@","unrealengine");


  $sql = "select * from cb_unreal_2023_event_apply where apply_no = '$apply_no' limit 1";

  $result = $mysqli -> query($sql);
  $obj = $result -> fetch_array();
  $mail =  'del:'.$obj['apply_user_email'];
  $apply_user_phone =  'del:'.$obj['apply_user_phone'];
  $apply_password =  'del:'.$obj['apply_password'];
    $apply_ci =  'del:'.$obj['apply_ci'];
    $apply_di =  'del:'.$obj['apply_di'];

  $sql2 = "UPDATE cb_unreal_2023_event_apply SET
  apply_user_email = '$mail',
  apply_user_phone = '$apply_user_phone',
  apply_password = '$apply_password',
  apply_ci = '$apply_ci',
  apply_di = '$apply_di',
  apply_pay_status = 0
  WHERE apply_no = '$apply_no'";
  $result = $mysqli -> query($sql2);

    $sql3 = "delete from cb_unreal_2023_event_apply_inquire where apply_user_email = '".$obj['apply_user_email']."'";
    $result = $mysqli -> query($sql3);
  $mysqli -> close();




  echo '<script type="text/javascript">';
  echo "alert('등록 취소가 완료되었습니다.');";
  echo "location.replace('https://epiclounge.co.kr');location.replace('/');";
  echo '</script>';
  exit();

} else if ($mode2 == 'del3') {
    $apply_no = $_GET['no'];
    $mysqli = new mysqli("localhost","unrealengine","Good121930!@","unrealengine");


    $sql = "select * from cb_unreal_2023_event_apply where apply_no = '$apply_no' limit 1";

    $result = $mysqli -> query($sql);
    $obj = $result -> fetch_array();



    header("Content-Type: text/html; charset=utf-8");
    if(!empty($obj["mpay_tid"])){ //모바일결제
        //step1. 요청을 위한 파라미터 설정
        $key         = "nf2Vszdaxij1qXsm";
        $type        = "Refund";
        $paymethod   = $obj["mpay_type"];
        $timestamp   = date("YmdHis");
        $clientIp    = $_SERVER['REMOTE_ADDR'];
        $mid         = "MOIepiclou";
        $tid         = $obj["mpay_tid"];
        $msg         = "회원요청에 의한 환불처리";
    }else {//PC결제
        //step1. 요청을 위한 파라미터 설정
        $key         = "nf2Vszdaxij1qXsm";
        $type        = "Refund";
        $paymethod   = $obj["pay_paymethod"];
        $timestamp   = date("YmdHis");
        $clientIp    = $_SERVER['REMOTE_ADDR'];
        $mid         = "MOIepiclou";
        $tid         = $obj["pay_tid"];
        $msg         = "회원요청에 의한 환불처리";
    }

    // INIAPIKey + type + paymethod + timestamp + clientIp + mid + tid
    $hashData = hash("sha512",(string)$key.(string)$type.(string)$paymethod.(string)$timestamp.(string)$clientIp.(string)$mid.(string)$tid); // hash 암호화


    //step2. key=value 로 post 요청
    $data = array(
        'type' => $type,
        'paymethod' => $paymethod,
        'timestamp' => $timestamp,
        'clientIp' => $clientIp,
        'mid' => $mid,
        'tid' => $tid,
        'msg' => $msg,
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

    sql_query("insert into 2023_event_log(log_text,rdate) values('".str_replace("'","`",$response)."',now())");

    if($resultMap["resultCode"] == "01"){

        echo '<script type="text/javascript">';
        echo "alert('".$resultMap["resultMsg"]."');";
        echo "location.replace('application_confirm.html');";
        echo '</script>';
        exit();
    }else{

        $mail =  'del:'.$obj['apply_user_email'];
        $apply_user_phone =  'del:'.$obj['apply_user_phone'];
        $apply_password =  'del:'.$obj['apply_password'];
        $apply_ci =  'del:'.$obj['apply_ci'];
        $apply_di =  'del:'.$obj['apply_di'];

        $sql2 = "UPDATE cb_unreal_2023_event_apply SET
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
        $result = $mysqli -> query($sql2);
        $mysqli -> close();
        echo '<script type="text/javascript">';
        echo "alert('등록 취소가 완료되었습니다.');";
        echo "location.replace('https://epiclounge.co.kr');location.replace('/');";
        echo '</script>';
        exit();
    }



}