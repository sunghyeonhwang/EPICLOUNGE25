<?
echo $mode = $_POST['mode'];
$mode2 = $_GET['mode2'];

if ($mode == 'write') {

  $apply_user_name = str_replace("'","\'",$_POST['apply_user_name']);
  $apply_user_email = str_replace("'","\'",$_POST['inputEmail']);
  $apply_user_phone = str_replace("'","\'",preg_replace("/[^0-9]/u", "", $_POST['apply_user_phone']));
  $apply_user_job = str_replace("'","\'",$_POST['apply_user_job']);
  $apply_user_company = str_replace("'","\'",$_POST['apply_user_company']);
  $apply_user_depart = str_replace("'","\'",$_POST['apply_user_depart']);
  $apply_user_grade = str_replace("'","\'",$_POST['apply_user_grade']);
  $apply_sector = str_replace("'","\'",$_POST['apply_sector']);
  $apply_user_ex1 = str_replace("'","\'",$_POST['apply_user_ex1']);
  $apply_user_ex2 = str_replace("'","\'",$_POST['apply_user_ex2']);
  $apply_user_ex3 = str_replace("'","\'",$_POST['apply_user_ex3']);
  $apply_user_ex4 = str_replace("'","\'",$_POST['apply_user_ex4']);
  $apply_user_email2 = str_replace("'","\'",$_POST['inputEmail2']);
  $apply_product_name = str_replace("'","\'",$_POST['apply_product_name']);
  $apply_user_event_agree = str_replace("'","\'",$_POST['apply_user_event_agree']);
  if($apply_user_event_agree == 'on'){
    $apply_user_event_agree = 1;
  }
  $apply_password = md5(str_replace("'","\'",$_POST['inputEmail']));
  
  $mysqli = new mysqli("localhost","unrealengine","Good121930!@","unrealengine");

  $sql = "select count(*) from cb_unreal_2023_summit_apply where apply_user_email = '$apply_user_email' limit 1";
  $result = $mysqli -> query($sql);
  $obj = $result -> fetch_array();
  if($obj[0]['count']){
    echo '<script type="text/javascript">';
    echo " alert('이미 등록되어 있는 메일입니다.'); history.go(-1);";
    echo '</script>';
    exit();
  };
  
  $sql = "select count(*) from cb_unreal_2023_summit_apply where apply_user_phone = '$apply_user_phone' limit 1";
  $result = $mysqli -> query($sql);
  $obj = $result -> fetch_array();
  if($obj[0]['count']){
    echo '<script type="text/javascript">';
    echo " alert('이미 등록되어 있는 연락처입니다.'); history.go(-1);";
    echo '</script>';
    exit();
  };

  $sql = "INSERT INTO cb_unreal_2023_summit_apply (
      apply_user_name, 
      apply_user_email,
      apply_user_phone,
      apply_user_job, 
      apply_user_company, 
      apply_user_depart, 
      apply_user_grade, 
      apply_sector, 
      apply_user_ex1, 
      apply_user_ex2, 
      apply_user_ex3, 
      apply_user_ex4, 
      apply_user_email2, 
      apply_product_name, 
      apply_user_event_agree,
      apply_password
    ) VALUES(
      '$apply_user_name', 
      '$apply_user_email',
      '$apply_user_phone',
      '$apply_user_job', 
      '$apply_user_company', 
      '$apply_user_depart', 
      '$apply_user_grade', 
      '$apply_sector', 
      '$apply_user_ex1', 
      '$apply_user_ex2', 
      '$apply_user_ex3', 
      '$apply_user_ex4', 
      '$apply_user_email2', 
      '$apply_product_name', 
      '$apply_user_event_agree',
      '$apply_password'
    )";
  $result = $mysqli -> query($sql);
  // $insert_id = $mysqli->insert_id;
  $mysqli -> close();
  
//문자 발송 시작
if ($apply_user_ex1 == 'on') {
  $day = '29일';
} else if ($apply_user_ex2 == 'on') {
  $day = '29일';
} else if ($apply_user_ex3 == 'on') {
  $day = '29일';
} else if ($apply_user_ex4 == 'on') {
  $day = '29일';
}
$ch = curl_init();
$title = "시작해요 언리얼 2023";
$message = '[$NAME]님, 2023년 4월 5일, 오후 2시에 시작하는 "행사명"에 등록되었습니다. 
등록 시 입력하신 메일과 카카오톡으로 발송되는 URL로 접속하거나 
에픽 라운지에 방문하셔서 시청하실 수 있습니다. 
- 에픽 라운지 사무국';             //필수입력
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
$postvars = '"title":"'.$title.'"';
$postvars = $postvars.', "message":"'.$message.'"';
$postvars = $postvars.', "sender":"'.$sender.'"';
$postvars = $postvars.', "username":"'.$username.'"';
$postvars = $postvars.', "receiver":'.$receiver.'';
$postvars = $postvars.', "key":"'.$key.'"';
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

  echo '<script type="text/javascript">';
  echo "alert('등록이 완료되었습니다. \\n시청 URL은 웨비나 시작 30분 전부터\\n메일 및 카카오톡으로 발송될 예정입니다.'); location.replace('https://epiclounge.co.kr/event_sou.php');";
  echo '</script>';
  exit();

} else if ($mode == 'modify') {

  $apply_no = str_replace("'","\'",$_POST['apply_no']);
  $apply_user_name = str_replace("'","\'",$_POST['apply_user_name']);
  $apply_user_email = str_replace("'","\'",$_POST['inputEmail']);
  $apply_user_phone = str_replace("'","\'",preg_replace("/[^0-9]/u", "", $_POST['apply_user_phone']));
  $apply_user_job = str_replace("'","\'",$_POST['apply_user_job']);
  if ($apply_user_job == '직장인') {
    $apply_user_company = str_replace("'","\'",$_POST['apply_user_company1']);
    $apply_user_depart = str_replace("'","\'",$_POST['apply_user_depart1']);
    $apply_user_grade = str_replace("'","\'",$_POST['apply_user_grade1']);
  } else if ($apply_user_job == '학생') {
    $apply_user_company = str_replace("'","\'",$_POST['apply_user_company2']);
    $apply_user_depart = str_replace("'","\'",$_POST['apply_user_depart2']);
    $apply_user_grade = str_replace("'","\'",$_POST['apply_user_grade2']);
  } else if ($apply_user_job == '교육자/교육기관') {
    $apply_user_company = str_replace("'","\'",$_POST['apply_user_company3']);
    $apply_user_depart = str_replace("'","\'",$_POST['apply_user_depart3']);
    $apply_user_grade = str_replace("'","\'",$_POST['apply_user_grade3']);
  } else if ($apply_user_job == '인디/프리랜서') {
    $apply_user_company = str_replace("'","\'",$_POST['apply_user_company4']);
    $apply_user_depart = str_replace("'","\'",$_POST['apply_user_depart4']);
    $apply_user_grade = str_replace("'","\'",$_POST['apply_user_grade4']);
  } else if ($apply_user_job == '기타') {
    $apply_user_company = str_replace("'","\'",$_POST['apply_user_company5']);
    $apply_user_depart = str_replace("'","\'",$_POST['apply_user_depart5']);
    $apply_user_grade = str_replace("'","\'",$_POST['apply_user_grade5']);
  }
  $apply_sector = str_replace("'","\'",$_POST['apply_sector']);
  $apply_user_ex1 = str_replace("'","\'",$_POST['apply_user_ex1']);
  $apply_user_ex2 = str_replace("'","\'",$_POST['apply_user_ex2']);
  $apply_user_ex3 = str_replace("'","\'",$_POST['apply_user_ex3']);
  $apply_user_ex4 = str_replace("'","\'",$_POST['apply_user_ex4']);
  $apply_user_email2 = str_replace("'","\'",$_POST['inputEmail2']);
  $apply_product_name = str_replace("'","\'",$_POST['apply_product_name']);
  $apply_user_event_agree = str_replace("'","\'",$_POST['apply_user_event_agree']);
  if($apply_user_event_agree == 'on'){
    $apply_user_event_agree = 1;
  }
  $apply_password = md5(str_replace("'","\'",$_POST['inputEmail']));
  
  $mysqli = new mysqli("localhost","unrealengine","Good121930!@","unrealengine");

  
  $sql = "select count(*) from cb_unreal_2023_summit_apply where apply_user_email = '$apply_user_email' and apply_no != '$apply_no' limit 1";
  $result = $mysqli -> query($sql);
  $obj = $result -> fetch_array();
  if($obj[0]['count']){
    echo '<script type="text/javascript">';
    echo " alert('이미 등록되어 있는 메일입니다.'); history.go(-1);";
    echo '</script>';
    exit();
  };

  $sql = "select count(*) from cb_unreal_2023_summit_apply where apply_user_phone = '$apply_user_phone' and apply_no != '$apply_no' limit 1";
  $result = $mysqli -> query($sql);
  $obj = $result -> fetch_array();
  if($obj[0]['count']){
    echo '<script type="text/javascript">';
    echo " alert('이미 등록되어 있는 연락처입니다.'); history.go(-1);";
    echo '</script>';
    exit();
  };


  $sql = "UPDATE cb_unreal_2023_summit_apply SET
    apply_user_name='$apply_user_name', 
    apply_user_email='$apply_user_email',
    apply_user_phone='$apply_user_phone',
    apply_user_job='$apply_user_job', 
    apply_user_company='$apply_user_company', 
    apply_user_depart='$apply_user_depart', 
    apply_user_grade='$apply_user_grade', 
    apply_sector='$apply_sector', 
    apply_user_ex1='$apply_user_ex1', 
    apply_user_ex2='$apply_user_ex2', 
    apply_user_ex3='$apply_user_ex3', 
    apply_user_ex4='$apply_user_ex4', 
    apply_user_email2='$apply_user_email2', 
    apply_product_name='$apply_product_name', 
    apply_user_event_agree='$apply_user_event_agree',
    apply_password='$apply_password'
  WHERE apply_no = '$apply_no'";
  $result = $mysqli -> query($sql);
  $mysqli -> close();
  echo '<script type="text/javascript">';
  echo "location.replace('sou_modify_complete.html?num=$apply_password');";
  echo '</script>';
  exit();

} else if ($mode2 == 'del') {

  $apply_no = $_GET['no'];
  $mysqli = new mysqli("localhost","unrealengine","Good121930!@","unrealengine");


  $sql = "select apply_user_email,apply_user_phone,apply_password from cb_unreal_2023_summit_apply where apply_no = '$apply_no' limit 1";

  $result = $mysqli -> query($sql);
  $obj = $result -> fetch_array();
  $mail =  'del:'.$obj['apply_user_email'];
  $apply_user_phone =  'del:'.$obj['apply_user_phone'];
  $apply_password =  'del:'.$obj['apply_password'];

  $sql2 = "UPDATE cb_unreal_2023_summit_apply SET
  apply_user_email = '$mail',
  apply_user_phone = '$apply_user_phone',
  apply_password = '$apply_password',
  apply_pay_status = 0
  WHERE apply_no = '$apply_no'";
  $result = $mysqli -> query($sql2);
  $mysqli -> close();
  echo '<script type="text/javascript">';
  echo "location.replace('/v2/adm/event_list.php');";
  echo '</script>';
  exit();

} else if ($mode2 == 'del2') {

  $apply_no = $_GET['no'];
  $mysqli = new mysqli("localhost","unrealengine","Good121930!@","unrealengine");


  $sql = "select apply_user_email,apply_user_phone,apply_password from cb_unreal_2023_summit_apply where apply_no = '$apply_no' limit 1";

  $result = $mysqli -> query($sql);
  $obj = $result -> fetch_array();
  $mail =  'del:'.$obj['apply_user_email'];
  $apply_user_phone =  'del:'.$obj['apply_user_phone'];
  $apply_password =  'del:'.$obj['apply_password'];

  $sql2 = "UPDATE cb_unreal_2023_summit_apply SET
  apply_user_email = '$mail',
  apply_user_phone = '$apply_user_phone',
  apply_password = '$apply_password',
  apply_pay_status = 0
  WHERE apply_no = '$apply_no'";
  $result = $mysqli -> query($sql2);
  $mysqli -> close();
  echo '<script type="text/javascript">';
  echo "location.replace('https://epiclounge.co.kr/event_sou.php');";
  echo '</script>';
  exit();

} else if ($mode == 'inquire') {
  $apply_user_name = str_replace("'","\'",$_POST['apply_user_name']);
  $apply_user_email = str_replace("'","\'",$_POST['inputEmail']);
  $apply_user_phone = str_replace("'","\'",preg_replace("/[^0-9]/u", "", $_POST['apply_user_phone']));
  $apply_user_company = str_replace("'","\'",$_POST['apply_user_company']);
  $apply_user_depart = str_replace("'","\'",$_POST['apply_user_depart']);
  $apply_user_grade = str_replace("'","\'",$_POST['apply_user_grade']);
  $apply_content = str_replace("'","\'",$_POST['apply_content']); 
  
  $mysqli = new mysqli("localhost","unrealengine","Good121930!@","unrealengine");
  $sql = "INSERT INTO cb_unreal_2023_summit_apply_inquire(
    apply_user_name, 
    apply_user_email,
    apply_user_phone,
    apply_user_company, 
    apply_user_depart, 
    apply_user_grade, 
    apply_content
  ) VALUES(
    '$apply_user_name', 
    '$apply_user_email',
    '$apply_user_phone',
    '$apply_user_company', 
    '$apply_user_depart', 
    '$apply_user_grade', 
    '$apply_content'
  )";
$result = $mysqli -> query($sql);
$mysqli -> close();
echo '<script type="text/javascript">';
echo "alert('등록 되었습니다.'); history.go(-1);";
echo '</script>';
}

?>