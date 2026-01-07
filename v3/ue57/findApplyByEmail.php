<?
include_once "./common.php";
$mode = $_POST['mode'];
$mode2 = $_GET['mode2'];

if ($mode == 'write') {

  $wait_yn = str_replace("'","\'",$_POST['wait_yn']);
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


    $_apply_ci = $_SESSION["CI"];
    $_apply_di = $_SESSION["DI"];

    $sql = "select count(*) from cb_unreal_2023_event_apply where apply_ci = '$_apply_ci' limit 1";
    $result = $mysqli -> query($sql);
    $obj = $result -> fetch_array();
    if($obj[0]['count']){
        echo '<script type="text/javascript">';
        echo " alert('이미 등록되어 있는 회원입니다.'); history.go(-1);";
        echo '</script>';
        exit();
    };
  $sql = "INSERT INTO cb_unreal_2023_event_apply (
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
      apply_password,
      apply_ci,
      apply_di,
      wait_yn
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
      '$apply_password',
      '$_apply_ci',
      '$_apply_di',
      '$wait_yn'
             
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
$title = "시작해요 트윈모션&언리얼 2025";

$message = '<시작해요 트윈모션 & 언리얼 2025>\n온라인 등록이 완료되었습니다.\n\n일시: 5월 21일, 수요일, 오후 2시부터 시작해요 트윈모션 & 언리얼 2025, 5주차가 시작됩니다.\n채널: 에픽 라운지\n\n-행사 당일에 카카오톡(or 문자)/이메일로 접속 링크가 발송됩니다. \n-접속 링크를 받지 못하더라도 에픽 라운지에서 등록 확인 후 시청하실 수 있습니다.\n\n- 에픽 라운지 사무국';             //필수입력
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


    if($wait_yn == 'Y'){
        $apply_user_name = str_replace("'","\'",$_POST['apply_user_name']);
        $apply_user_email = str_replace("'","\'",$_POST['inputEmail']);
        $apply_user_phone = str_replace("'","\'",preg_replace("/[^0-9]/u", "", $_POST['apply_user_phone']));
        $apply_user_company = str_replace("'","\'",$_POST['apply_user_company']);
        $apply_user_depart = str_replace("'","\'",$_POST['apply_user_depart']);
        $apply_user_grade = str_replace("'","\'",$_POST['apply_user_grade']);
        $apply_content = str_replace("'","\'",$_POST['apply_content']);

        $mysqli = new mysqli("localhost","unrealengine","Good121930!@","unrealengine");
        $sql = "INSERT INTO cb_unreal_2023_event_apply_inquire(
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
    }

  echo '<script type="text/javascript">';
  echo "location.replace('https://epiclounge.co.kr/v3/application_online_result.php');";
  echo '</script>';
  exit();

} else if ($mode == 'modify') {

  $wait_yn = str_replace("'","\'",$_POST['wait_yn']);
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
  } else if ($apply_user_job == '학생/교육기관') {
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


  $sql = "select count(*) from cb_unreal_2023_event_apply where apply_user_email = '$apply_user_email' and apply_no != '$apply_no' limit 1";
  $result = $mysqli -> query($sql);
  $obj = $result -> fetch_array();
  if($obj[0]['count']){
    echo '<script type="text/javascript">';
    echo " alert('이미 등록되어 있는 메일입니다.'); history.go(-1);";
    echo '</script>';
    exit();
  };



  $sql = "UPDATE cb_unreal_2023_event_apply SET
    apply_user_email='$apply_user_email',
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
    apply_password='$apply_password',
    wait_yn='$wait_yn'
  WHERE apply_no = '$apply_no'";
  $result = $mysqli -> query($sql);




    if($wait_yn == 'Y'){
        $old_obj = sql_fetch("select * from cb_unreal_2023_event_apply WHERE apply_no = '$apply_no' ");
        $wait_cnt = sql_fetch("select count(*) cnt from cb_unreal_2023_event_apply_inquire where  apply_user_phone = '".$old_obj["apply_user_phone"]."' ");
        if($wait_cnt["cnt"] == 0){

            $mysqli = new mysqli("localhost","unrealengine","Good121930!@","unrealengine");
            $sql = "INSERT INTO cb_unreal_2023_event_apply_inquire(
    apply_user_name, 
    apply_user_email,
    apply_user_phone,
    apply_user_company, 
    apply_user_depart, 
    apply_user_grade
  ) VALUES(
    '$old_obj[apply_user_name]', 
    '$apply_user_email',
    '$old_obj[apply_user_phone]',
    '$apply_user_company', 
    '$apply_user_depart', 
    '$apply_user_grade'
  )";
            $result = $mysqli -> query($sql);
        }else{

        }

    }else{
        $old_obj = sql_fetch("select * from cb_unreal_2023_event_apply WHERE apply_no = '$apply_no' ");
        sql_query("delete from cb_unreal_2023_event_apply_inquire where  apply_user_phone = '".$old_obj["apply_user_phone"]."' ");
    }
  $mysqli -> close();
    ?>
    <form id="moveback" name="moveback" action="application_modify_view.html" method="post">
        <input type="hidden" name="inputEmail" value="<?=$apply_user_email?>" >
        <input type="hidden" name="apply_user_phone" value="<?=$old_obj[apply_user_phone]?>" >
    </form>
    <?
  echo '<script type="text/javascript">';
  echo "document.getElementById('moveback').submit();";
  echo '</script>';
  exit();

} else if ($mode2 == 'del') {

  $apply_no = $_GET['no'];
  $mysqli = new mysqli("localhost","unrealengine","Good121930!@","unrealengine");


  $sql = "select apply_user_email,apply_user_phone,apply_password from cb_unreal_2023_event_apply where apply_no = '$apply_no' limit 1";

  $result = $mysqli -> query($sql);
  $obj = $result -> fetch_array();
  $mail =  'del:'.$obj['apply_user_email'];
  $apply_user_phone =  'del:'.$obj['apply_user_phone'];
  $apply_password =  'del:'.$obj['apply_password'];

  $sql2 = "UPDATE cb_unreal_2023_event_apply SET
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


  $sql = "select apply_user_email,apply_user_phone,apply_password from cb_unreal_2023_event_apply where apply_no = '$apply_no' limit 1";

  $result = $mysqli -> query($sql);
  $obj = $result -> fetch_array();
  $mail =  'del:'.$obj['apply_user_email'];
  $apply_user_phone =  'del:'.$obj['apply_user_phone'];
  $apply_password =  'del:'.$obj['apply_password'];

  $sql2 = "UPDATE cb_unreal_2023_event_apply SET
  apply_user_email = '$mail',
  apply_user_phone = '$apply_user_phone',
  apply_password = '$apply_password',
  apply_pay_status = 0
  WHERE apply_no = '$apply_no'";
  $result = $mysqli -> query($sql2);
  $mysqli -> close();
  echo '<script type="text/javascript">';
  echo "location.replace('https://epiclounge.co.kr/start23/index.php#ready');";
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
  $sql = "INSERT INTO cb_unreal_2023_event_apply_inquire_qna(
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
//echo "alert('등록 되었습니다.'); history.go(-1);";
//echo "alert('등록 되었습니다.'); window.close();"; // ← 이 부분 수정
echo "if (window.opener && !window.opener.closed) { window.opener.location.reload(); }";
echo "window.close();";
echo '</script>';
}

?>