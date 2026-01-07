<?
include_once "../common.php";

$agree_se4 = $_POST['agree_se4'];
if($agree_se4 == "true") {
    $apply_user_event_agree = "1";
}else{
    $apply_user_event_agree = "0";
}
$apply_user_name = $_POST['apply_user_name'];
$apply_user_job = $_POST['apply_user_job'];
$apply_user_email = $_POST['apply_user_email'];
$apply_user_phone = $_POST['apply_user_phone'];
$apply_user_company = $_POST['apply_user_company'];
$apply_user_depart = $_POST['apply_user_depart'];
$apply_user_grade = $_POST['apply_user_grade'];
$apply_user_ex1 = $_POST['apply_user_ex1'];

$apply_product_name = $_POST['apply_product_name'];
$apply_product_price = $_POST['apply_product_price'];
$apply_product_code = $_POST['apply_product_code'];


$apply_track = $_POST['apply_track'];

$_apply_ci = $_SESSION["CI"];
$_apply_di = $_SESSION["DI"];

$last_idx = $_SESSION["final_idx"];


$apply_password = md5(str_replace("'","\'",$apply_user_email));

$dup2 = sql_fetch("select count(*) as cnt from cb_unreal_2024_event2_apply where apply_ci = '$_apply_ci' and (apply_temp_yn = 'Y' OR apply_temp_yn is null) ");
if($dup2['cnt'] > 0){
    if(empty($_apply_ci) and empty($_apply_di) and empty($last_idx)){
        $dup3 = sql_fetch("select * from cb_unreal_2024_event2_apply where apply_ci = '$_apply_ci' and (apply_temp_yn = 'Y' OR apply_temp_yn is null) ");
        $_apply_ci = $dup3['apply_ci'];
        $_apply_di = $dup3['apply_di'];
        $last_idx = $dup3['apply_no'];
    }
}
if($last_idx){
    $last_count = sql_fetch("select count(*) cnt from cb_unreal_2024_event2_apply where apply_no = '$last_idx' and apply_user_email not like 'del:%'");
    if($last_count['cnt'] > 0){
        $sql = "UPDATE cb_unreal_2024_event2_apply SET
                                  apply_user_name = '$apply_user_name',
                                  apply_user_email = '$apply_user_email',
                                  apply_user_phone = '$apply_user_phone',
                                  apply_user_company = '$apply_user_company',
                                  apply_user_depart = '$apply_user_depart',
                                  apply_user_grade = '$apply_user_grade',
                                  apply_sector = '',
                                  apply_product_code = '$apply_product_code',
                                  apply_user_ex1 = '$apply_user_ex1',
                                  apply_user_job = '$apply_user_job',
                                  apply_user_ex2 = '',
                                  apply_user_ex3 = '',
                                  apply_user_ex4 = '',
                                  apply_user_email2 = '',
                                  apply_product_name = '$apply_product_name',
                                  apply_user_event_agree = '$apply_user_event_agree',
                                  apply_ci = '$_apply_ci',
                                  apply_di = '$_apply_di',
                                  apply_password = '$apply_password',
                                  apply_track = '$apply_track',
                                  apply_temp_yn = 'N'
                                WHERE apply_no = '$last_idx'";
        sql_query($sql);
        echo $last_idx;
        exit;
    }
}

{
    $dup = sql_fetch("select count(*) as cnt from cb_unreal_2024_event2_apply where apply_ci = '$_apply_ci' and apply_temp_yn = 'N' ");
    if($dup['cnt'] > 0){
        echo "중복된 신청입니다.";
        exit;
    }


    $sql = "INSERT INTO cb_unreal_2024_event2_apply_temp (
                                  apply_user_name, 
                                  apply_user_email,
                                  apply_user_phone,
                                  apply_user_job, 
                                  apply_user_company, 
                                  apply_user_depart, 
                                  apply_user_grade, 
                                  apply_sector, 
                                  apply_product_code,
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
                                  apply_track
                                ) VALUES(
                                  '$apply_user_name', 
                                  '$apply_user_email',
                                  '$apply_user_phone',
                                  '$apply_user_job', 
                                  '$apply_user_company', 
                                  '$apply_user_depart', 
                                  '$apply_user_grade', 
                                  '', 
                                  '$apply_product_code',
                                  '$apply_user_ex1', 
                                  '', 
                                  '', 
                                  '', 
                                  '', 
                                  '$apply_product_name', 
                                  '$apply_user_event_agree',
                                  '$apply_password',
                                  '$_apply_ci',
                                  '$_apply_di',
                                  '$apply_track'
                                )";
    sql_query($sql);



    $sql = "INSERT INTO cb_unreal_2024_event2_apply (
                                  apply_user_name, 
                                  apply_user_email,
                                  apply_user_phone,
                                  apply_user_job, 
                                  apply_user_company, 
                                  apply_user_depart, 
                                  apply_user_grade, 
                                  apply_sector, 
                                  apply_product_code,
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
                                  apply_track,
                                  apply_temp_yn
                                ) VALUES(
                                  '$apply_user_name', 
                                  '$apply_user_email',
                                  '$apply_user_phone',
                                  '$apply_user_job', 
                                  '$apply_user_company', 
                                  '$apply_user_depart', 
                                  '$apply_user_grade', 
                                  '', 
                                  '$apply_product_code',
                                  '$apply_user_ex1', 
                                  '', 
                                  '', 
                                  '', 
                                  '', 
                                  '$apply_product_name', 
                                  '$apply_user_event_agree',
                                  '$apply_password',
                                  '$_apply_ci',
                                  '$_apply_di',
                                  '$apply_track',
                                  'N'
                                )";
    sql_query($sql);


    $_SESSION["final_idx"] = sql_query("SELECT LAST_INSERT_ID() as idx")->fetch_array()['idx'];



    $ch = curl_init();
    $title = "<언리얼 페스트 2024 서울> 등록 확인";
    $message = "<언리얼 페스트 2024 서울>\n온라인 등록이 완료되었습니다.\n\n일시: 8월 28일(수)~8월 29일(목) 10:00~\n채널: 에픽 라운지\n\n행사 당일 오전 카카오톡/이메일로 접속 링크가 발송됩니다.\n시청 링크를 별도로 받지 못한 경우, 행사 당일 에픽라운지에 접속하여 등록 시 사용한 이메일 주소로 체크인하시면 시청하실 수 있습니다. 등록 정보 변경 및 취소는 FAQs를 참조해 주세요.\n\n-에픽 라운지 사무국";
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
    //$postvars = $postvars.', "attaches":'.$attaches;                      //첨부파일이 있는 경우 주석해제 바랍니다.

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


///echo $_SESSION["final_idx"];
}


?>

