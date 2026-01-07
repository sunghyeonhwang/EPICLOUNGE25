<?php
require_once('libs/properties.php');
require_once('../../common.php');
$prop = new properties();

$P_STATUS    = $_REQUEST["P_STATUS"];
$P_RMESG1    = $_REQUEST["P_RMESG1"];
$P_TID       = $_REQUEST["P_TID"];
$P_REQ_URL   = $_REQUEST["P_REQ_URL"];
$P_NOTI      = $_REQUEST["P_NOTI"];
$P_AMT       = $_REQUEST["P_AMT"];

if($_SESSION["prev_post"]["apply_user_phone"] == ""){
    echo "<script>alert('입력정보가 유효하지 않거나 만료되었습니다. 다시 시도하여주세요. 결제가 취소되었습니다.');location.href=\"/v3/application_form.html\";</script>";
    exit;
}
if($_SESSION["prev_post"]["apply_user_phone"] == null){
    echo "<script>alert('입력정보가 유효하지 않거나 만료되었습니다. 다시 시도하여주세요. 결제가 취소되었습니다.');location.href=\"/v3/application_form.html\";</script>";
    exit;
}

if ($_REQUEST["P_STATUS"] === "00") {             // 인증이 P_STATUS===00 일 경우만 승인 요청

    $id_merchant = substr($P_TID,'10','10');     // P_TID 내 MID 구분
    $data = array(

        'P_MID' => $id_merchant,         // P_MID
        'P_TID' => $P_TID                // P_TID

    );

    //##########################################################################
    // 승인요청 API url (authUrl) 리스트 는 properties 에 세팅하여 사용합니다.
    // idc_name 으로 수신 받은 센터 네임을 properties 에서 include 하여 승인요청하시면 됩니다.
    //##########################################################################
    $idc_name 	= $_REQUEST["idc_name"];
    $P_REQ_URL  = $prop->getAuthUrl($idc_name);

    if (strcmp($P_REQ_URL, $_REQUEST["P_REQ_URL"]) == 0) {

        // curl 통신 시작

        $ch = curl_init();                                                //curl 초기화
        curl_setopt($ch, CURLOPT_URL, $_REQUEST["P_REQ_URL"]);            //URL 지정하기
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                   //요청 결과를 문자열로 반환
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);                     //connection timeout 10초
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);                      //원격 서버의 인증서가 유효한지 검사 안함
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));    //POST 로 $data 를 보냄
        curl_setopt($ch, CURLOPT_POST, 1);                                //true시 post 전송


        $response = curl_exec($ch);
        curl_close($ch);

        sql_query("insert into 2023_event_log(log_text,rdate) values('".str_replace("'","`",$response)."',now())");

        parse_str($response, $out);

        $flag_status = (in_array($out["P_STATUS"] , $out) ? $out["P_STATUS"] : $_REQUEST["P_STATUS"] );

        if($flag_status == "00"){

            $prev_data = $_SESSION["prev_post"];

            $apply_user_name = str_replace("'","\'",$prev_data['apply_user_name']);
            $apply_user_email = str_replace("'","\'",$prev_data['inputEmail']);
            $apply_user_phone = str_replace("'","\'",preg_replace("/[^0-9]/u", "", $prev_data['apply_user_phone']));
            $apply_user_job = str_replace("'","\'",$prev_data['apply_user_job']);
            if ($apply_user_job == '직장인') {
                $apply_user_company = str_replace("'","\'",$prev_data['apply_user_company1']);
                $apply_user_depart = str_replace("'","\'",$prev_data['apply_user_depart1']);
                $apply_user_grade = str_replace("'","\'",$prev_data['apply_user_grade1']);
            } else if ($apply_user_job == '학생') {
                $apply_user_company = str_replace("'","\'",$prev_data['apply_user_company2']);
                $apply_user_depart = str_replace("'","\'",$prev_data['apply_user_depart2']);
                $apply_user_grade = str_replace("'","\'",$prev_data['apply_user_grade2']);
            } else if ($apply_user_job == '학생/교육기관') {
                $apply_user_company = str_replace("'","\'",$prev_data['apply_user_company3']);
                $apply_user_depart = str_replace("'","\'",$prev_data['apply_user_depart3']);
                $apply_user_grade = str_replace("'","\'",$prev_data['apply_user_grade3']);
            } else if ($apply_user_job == '인디/프리랜서') {
                $apply_user_company = str_replace("'","\'",$prev_data['apply_user_company4']);
                $apply_user_depart = str_replace("'","\'",$prev_data['apply_user_depart4']);
                $apply_user_grade = str_replace("'","\'",$prev_data['apply_user_grade4']);
            } else if ($apply_user_job == '기타') {
                $apply_user_company = str_replace("'","\'",$prev_data['apply_user_company5']);
                $apply_user_depart = str_replace("'","\'",$prev_data['apply_user_depart5']);
                $apply_user_grade = str_replace("'","\'",$prev_data['apply_user_grade5']);
            }
            $apply_sector = str_replace("'","\'",$prev_data['apply_sector']);
            $apply_user_ex1 = str_replace("'","\'",$prev_data['apply_user_ex1']);
            $apply_user_ex2 = str_replace("'","\'",$prev_data['apply_user_ex2']);
            $apply_user_ex3 = str_replace("'","\'",$prev_data['apply_user_ex3']);
            $apply_user_ex4 = str_replace("'","\'",$prev_data['apply_user_ex4']);
            $apply_user_email2 = str_replace("'","\'",$prev_data['inputEmail2']);
            $apply_product_name = str_replace("'","\'",$prev_data['apply_product_name']);
            $apply_user_event_agree = str_replace("'","\'",$prev_data['apply_user_event_agree']);
            if($apply_user_event_agree == 'on'){
                $apply_user_event_agree = 1;
            }
            $apply_password = md5(str_replace("'","\'",$prev_data['inputEmail']));

            $_apply_ci = $_SESSION["CI"];
            $_apply_di = $_SESSION["DI"];

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
                                  free_yn,
                                  mpay_status,
                                  mpay_rmesg1,
                                  mpay_tid,
                                  mpay_type,
                                  mpay_oid,
                                  mpay_amt,
                                  mpay_authdt,
                                   mpay_resultmap,
                                  pay_vact_num ,
                                  pay_vact_bankcode ,
                                  pay_vact_date ,
                                  pay_complete

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
                                  '$_apply_di','N',
                                  '".(in_array($out["P_STATUS"] , $out) ? $out["P_STATUS"] : $_REQUEST["P_STATUS"] )."',
                                  '".(in_array($out["P_RMESG1"] , $out) ? $out["P_RMESG1"] : $_REQUEST["P_RMESG1"] )."',
                                  '".($out["P_TID"])."',
                                  '".($out["P_TYPE"])."',
                                  '".($out["P_OID"])."',
                                  '".($out["P_AMT"])."',
                                  '".($out["P_AUTH_DT"])."',
                                  '".str_replace("'","`",$response)."',
                                  '".$out["P_VACT_NUM"]."' ,
                                  '".$out["P_VACT_BANK_CODE"]."' ,
                                  '".$out["P_VACT_DATE"].$out["P_VACT_TIME"]."' ,
                                  'Y'
                                )";

            sql_query($sql);

            $_SESSION["final_idx"] = sql_query("SELECT LAST_INSERT_ID() as idx")->fetch_array()['idx'];
            $key_val = base64_encode($_SESSION["final_idx"]);

            if($out["P_TYPE"] == "VBANK"){

                $sql = "UPDATE cb_unreal_2023_event_apply SET pay_complete = 'N',apply_pay_status=1  WHERE apply_no = '".$_SESSION["final_idx"]."'";
                sql_query($sql);

                $BANK_CODE = array(
                    '03' => '기업은행',
                    '04' => '국민은행',
                    '05' => '외환은행',
                    '07' => '수협중앙회',
                    '11' => '농협중앙회',
                    '20' => '우리은행',
                    '23' => 'SC 제일은행',
                    '31' => '대구은행',
                    '32' => '부산은행',
                    '34' => '광주은행',
                    '37' => '전북은행',
                    '39' => '경남은행',
                    '53' => '한국씨티은행',
                    '71' => '우체국',
                    '81' => '하나은행',
                    '88' => '신한은행',
                    '89' => '케이뱅크',
                    '90' => '카카오뱅크',
                    '92' => '토스뱅크',
                    'D1' => '동양종합금융증권',
                    'D2' => '현대증권',
                    'D3' => '미래에셋증권',
                    'D4' => '한국투자증권',
                    'D5' => '우리투자증권',
                    'D6' => '하이투자증권',
                    'D7' => 'HMC 투자증권',
                    'D8' => 'SK 증권',
                    'D9' => '대신증권',
                    'DA' => '하나대투증권',
                    'DB' => '굿모닝신한증권',
                    'DC' => '동부증권',
                    'DD' => '유진투자증권',
                    'DE' => '메리츠증권',
                    'DF' => '신영증권'
                );
                $_SESSION["VBANK_NUM"]  = $out["P_VACT_NUM"];
                $_SESSION["VBANK_NM"]  = $out["P_FN_NM"];
                $_SESSION["VBANK_AMOUNT"]  = $out["P_CSHR_AMT"];

                echo '<script type="text/javascript">';
                echo "location.href='/v3/application_vbank_result.html'";
                echo '</script>';
                exit();
            }else{

                include_once "../phpqrcode/qrlib.php";
                $sOrignText = $apply_password;
                QRcode::png($sOrignText,"../qrdata/".$_SESSION["final_idx"].".png", 0, 7, 2);
                $documentRoot = $_SERVER['DOCUMENT_ROOT'];
                $imagePath =  $documentRoot.'/v3/unrealfest2023/qrdata/'.$_SESSION["final_idx"].'.png';
                $imagePath2 =  $documentRoot.'/v3/unrealfest2023/qrdata/'.$_SESSION["final_idx"].'.jpg';
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

                $ch = curl_init();
                $title = "언리얼 페스트 2023 서울";
                $message = "<언리얼 페스트 2023 서울> 오프라인 등록이 완료되었습니다. 입장 시, 본 QR 코드를 제시해 주세요.\n\n일시: 8월29일(화) 10:30~18:00\n장소: 인터컨티넨탈 서울 코엑스 B1 하모니 볼룸\n\n*동시에 진행하는 온라인 중계 페이지에도 등록하신 이메일 정보로 접속하실 수 있습니다.\n\n에픽 라운지 사무국";

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
                $file[] = array('attc' => 'https://epiclounge.co.kr/v3/unrealfest2023/qrdata/'. $_SESSION["final_idx"].".jpg");
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

                echo '<script type="text/javascript">';
                echo "location.href='/v3/application_qrcode_result.html'";
                echo '</script>';
                exit();
            }

        }else{

            echo '<script type="text/javascript">';
            echo "alert('결제중 오류가 발생하였습니다. 다시 시도해 주시기 바랍니다. 오류가 지속될 경우 관리자에게 문의해 주시기 바랍니다.');";
            echo "location.href='/v3/application_form.html';";
            echo '</script>';
            exit();
        }
    }
}
?>