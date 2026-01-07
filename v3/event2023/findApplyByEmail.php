<?
$mode = $_POST['mode'];
$mode2 = $_GET['mode2'];

if ($mode == 'findApplyByEmail') {
  $mysqli = new mysqli("localhost","unrealengine","Good121930!@","unrealengine");

  //$error_number = mysqli_connect_errno();
  //print_r($error_number);
  // if ($mysqli -> connect_errno) {
  //   echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  //   exit();
  // }
  $apply_user_email = $_POST['inputEmail'];
  $sql = "select count(*) from cb_unreal_2021_luman_apply where apply_user_email = '$apply_user_email' limit 1";

  $result = $mysqli -> query($sql);
  $obj = $result -> fetch_array();
  $mysqli -> close();

  if($obj[0]['count']){
    echo '<script type="text/javascript">';
    echo "alert('이미 등록된 메일입니다.'); location.replace('/event2023/complete-part-02.html'); ";
    echo '</script>';
    exit();
  }else{
    echo '<script type="text/javascript">';
    echo 'document.location.href="/event2023/notice-part.html"';
    echo '</script>';
    exit();
  };

} else if ($mode == 'write') {
  
  $apply_title = str_replace("'","\'",$_POST['apply_title']);
  $apply_sector = str_replace("'","\'",$_POST['apply_sector']);
  $apply_file = str_replace("'","\'",$_POST['file']);
  $apply_sns = str_replace("'","\'",$_POST['apply_sns']);
  $apply_introduce = str_replace("'","\'",$_POST['apply_introduce']);
  $apply_source = str_replace("'","\'",$_POST['apply_source']);
  $apply_user_name = str_replace("'","\'",$_POST['apply_user_name']);
  $apply_user_job = str_replace("'","\'",$_POST['apply_user_job']);
  $apply_user_email = str_replace("'","\'",$_POST['inputEmail']);
  $apply_user_phone = str_replace("'","\'",preg_replace("/[^0-9]/u", "", $_POST['apply_user_phone']));
  $apply_password = str_replace("'","\'",$_POST['password1']);
		  
  $t_size = str_replace("'","\'",$_POST['t_size']);
  $addr_1 = str_replace("'","\'",$_POST['addr_1']);
  $addr_2 = str_replace("'","\'",$_POST['addr_2']);
  $addr_3 = str_replace("'","\'",$_POST['addr_3']);

  $mysqli = new mysqli("localhost","unrealengine","Good121930!@","unrealengine");


  
  $sql = "select count(*) from cb_unreal_2021_luman_apply where apply_user_email = '$apply_user_email' limit 1";
  $result = $mysqli -> query($sql);
  $obj = $result -> fetch_array();
  if($obj[0]['count']){
    echo '<script type="text/javascript">';
    echo " alert('이미 등록되었습니다.'); history.go(-2);";
    echo '</script>';
    exit();
  };

  $sql = "INSERT INTO cb_unreal_2021_luman_apply (
      apply_title, 
      apply_sector,
      apply_file,
      apply_sns, 
      apply_introduce, 
      apply_source, 
      apply_user_name, 
      apply_user_job, 
      apply_user_email, 
      apply_user_phone, 
      apply_password, 
      t_size, 
      addr_1, 
      addr_2, 
      addr_3
    ) VALUES(
      '$apply_title', 
      '$apply_sector', 
      '$apply_file',
      '$apply_sns', 
      '$apply_introduce', 
      '$apply_source', 
      '$apply_user_name', 
      '$apply_user_job', 
      '$apply_user_email', 
      '$apply_user_phone', 
      '$apply_password', 
      '$t_size', 
      '$addr_1', 
      '$addr_2', 
      '$addr_3'
      
    )";
  $result = $mysqli -> query($sql);
  $mysqli -> close();
  
  echo '<script type="text/javascript">';
  echo "location.replace('/event2023/complete-part.html');";
  echo '</script>';
  exit();

} else if ($mode == 'modify') {
  
  $apply_title = str_replace("'","\'",$_POST['apply_title']);
  $apply_sector = str_replace("'","\'",$_POST['apply_sector']);
  $apply_sns = str_replace("'","\'",$_POST['apply_sns']);
  $apply_sns = str_replace("'","\'",$_POST['apply_sns']);
  $apply_user_email = str_replace("'","\'",$_POST['apply_user_email']);
  $apply_introduce = str_replace("'","\'",$_POST['apply_introduce']);
  $apply_source = str_replace("'","\'",$_POST['apply_source']);
  $apply_user_name = str_replace("'","\'",$_POST['apply_user_name']);
  $apply_user_job =str_replace("'","\'", $_POST['apply_user_job']);
		  
  $t_size = str_replace("'","\'",$_POST['t_size']);
  $addr_1 = str_replace("'","\'",$_POST['addr_1']);
  $addr_2 = str_replace("'","\'",$_POST['addr_2']);
  $addr_3 = str_replace("'","\'",$_POST['addr_3']);
  $apply_user_phone = str_replace("'","\'",preg_replace("/[^0-9]/u", "", $_POST['apply_user_phone']));
  if($_FILES['file']['name']) {
    $tempfile = $_FILES['file']['tmp_name'];
    $filename = $_FILES['file']['name'];
    $pos = strrpos($filename, '.');
    $ext = substr($filename, $pos, strlen($filename));
    $random_name = strtotime(date("H:i:s")) . rand(20, 200) . $ext;
    $savefile = '/unrealengine/www/event/file/' . $random_name;
    move_uploaded_file($tempfile, $savefile);
    $file = "apply_file='$random_name', ";
  }
  
  $mysqli = new mysqli("localhost","unrealengine","Good121930!@","unrealengine");

  $sql = "UPDATE cb_unreal_2021_luman_apply SET
  apply_user_name='$apply_user_name',
  apply_user_phone='$apply_user_phone', 
  apply_user_job='$apply_user_job', 
  apply_title='$apply_title', 
  apply_sector='$apply_sector', 
  $file
  apply_sns='$apply_sns', 
  apply_introduce='$apply_introduce', 
  apply_source='$apply_source', 
  t_size='$t_size', 
  addr_1='$addr_1', 
  addr_2='$addr_2', 
  addr_3='$addr_3' 
WHERE apply_user_email = '$apply_user_email'";
  $result = $mysqli -> query($sql);
  $mysqli -> close();
  
  echo '<script type="text/javascript">';
  echo "location.replace('/event2023/complete-part-03.html');";
  echo '</script>';
  exit();

} else if ($mode2 == 'del') {

  $apply_no = $_GET['no'];
  $mysqli = new mysqli("localhost","unrealengine","Good121930!@","unrealengine");


  $sql = "select apply_user_email from cb_unreal_2021_luman_apply where apply_no = '$apply_no' limit 1";

  $result = $mysqli -> query($sql);
  $obj = $result -> fetch_array();
  $mail =  'del:'.$obj['apply_user_email'];

  $sql2 = "UPDATE cb_unreal_2021_luman_apply SET
  apply_user_email = '$mail',
  apply_pay_status = 0
  WHERE apply_no = '$apply_no'";
  $result = $mysqli -> query($sql2);
  $mysqli -> close();
  echo '<script type="text/javascript">';
  echo "location.replace('/cib/admin/build2019/register3');";
  echo '</script>';
  exit();

}

?>