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

if($_SESSION["final_idx"] == ""){
    echo "<script>alert('입력정보가 유효하지 않거나 만료되었습니다. 다시 시도하여주세요. 결제가 취소되었습니다.');location.href=\"/v3/unrealfest2025/application_step1.html\";</script>";
    exit;
}
if($_SESSION["final_idx"] == null){
    echo "<script>alert('입력정보가 유효하지 않거나 만료되었습니다. 다시 시도하여주세요. 결제가 취소되었습니다.');location.href=\"/v3/unrealfest2025/application_step1.html\";</script>";
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



    $apply_no = $_SESSION["final_idx"];

    $prev_data = sql_fetch("select * from cb_unreal_2025_event2_apply where apply_no = '$apply_no'");
    $apply_password = md5(str_replace("'","\'",$prev_data['apply_user_email']));


    $apply_user_name = $prev_data["apply_user_name"];
    $apply_user_phone = $prev_data["apply_user_phone"];
    $apply_user_email = $prev_data["apply_user_email"];
    $apply_product_code = $prev_data["apply_product_code"];
    $apply_coupon_no = $prev_data["apply_coupon_no"];

    //최종 등록전에 좌석 최종확인

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
            echo '<script type="text/javascript">';
            echo "alert('해당 트랙의 티켓이 모두 판매되었습니다.');";
            //echo "location.href='/v3/application_form.html';";
            echo "history.back(-1);";
            echo '</script>';
            exit();
        }
    }else if($code == "STD_28" || $code == "NORMAL_25"){
        $sql = "select count(*) as cnt from cb_unreal_2025_event2_apply where  apply_pay_status <> 0 and apply_coupon_no < 10000  and apply_temp_yn = 'N' and apply_track like '%".$result_25_tarck."%' and (apply_product_code like '%25' or apply_product_code like '%ALL')";
        $result_cnt = sql_fetch($sql);


        if($result_cnt["cnt"] >= $limit_cnt1) {
            echo '<script type="text/javascript">';
            echo "alert('해당 트랙의 티켓이 모두 판매되었습니다.');";
            //echo "location.href='/v3/application_form.html';";
            echo "history.back(-1);";
            echo '</script>';
            exit();
        }

    }else if($code == "STD_29" || $code == "NORMAL_26"){
        $sql = "select count(*) as cnt from cb_unreal_2025_event2_apply where  apply_pay_status <> 0 and apply_coupon_no < 10000  and apply_temp_yn = 'N' and apply_track like '%".$result_26_tarck."%' and (apply_product_code like '%26' or apply_product_code like '%ALL')";
        $result_cnt = sql_fetch($sql);


        if($result_cnt["cnt"] >= $limit_cnt2) {
            echo '<script type="text/javascript">';
            echo "alert('해당 트랙의 티켓이 모두 판매되었습니다.');";
            //echo "location.href='/v3/application_form.html';";
            echo "history.back(-1);";
            echo '</script>';
            exit();
        }
    }


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

        sql_query("insert into 2025_event_log(log_idx,log_text,rdate) values('$apply_no','".str_replace("'","`",$response)."',now())");


        parse_str($response, $out);

        $flag_status = (in_array($out["P_STATUS"] , $out) ? $out["P_STATUS"] : $_REQUEST["P_STATUS"] );

        if($flag_status == "00"){

            sql_query("UPDATE cb_unreal_2025_event2_coupon SET usage_date = now(),user_name='$apply_user_name',user_email='$apply_user_email' WHERE coupon_key = '$apply_coupon_no'");

            $_apply_ci = $_SESSION["CI"];
            $_apply_di = $_SESSION["DI"];

            $prev_data = sql_fetch("select * from cb_unreal_2025_event2_apply where apply_no = '$apply_no'");
            $apply_password = md5(str_replace("'","\'",$prev_data['apply_user_email']));

            $sql = "UPDATE cb_unreal_2025_event2_apply SET
                                  apply_password = '".$apply_password."',
                                  free_yn = 'N',
                                  apply_pay_status = 10,
                                  mpay_status = '".(in_array($out["P_STATUS"] , $out) ? $out["P_STATUS"] : $_REQUEST["P_STATUS"] )."',
                                  mpay_rmesg1 = '".(in_array($out["P_RMESG1"] , $out) ? $out["P_RMESG1"] : $_REQUEST["P_RMESG1"] )."',
                                  mpay_tid = '".($out["P_TID"])."',
                                  mpay_type = '".($out["P_TYPE"])."',
                                  mpay_oid = '".($out["P_OID"])."',
                                  mpay_amt = '".($out["P_AMT"])."',
                                  mpay_authdt = '".($out["P_AUTH_DT"])."',
                                  mpay_resultmap = '".str_replace("'","`",$response)."',
                                  pay_vact_num = '".$out["P_VACT_NUM"]."',
                                  pay_vact_bankcode = '".$out["P_VACT_BANK_CODE"]."',
                                  pay_vact_date = '".$out["P_VACT_DATE"].$out["P_VACT_TIME"]."',
                                  pay_complete = 'Y',
                                  apply_temp_yn = 'N'
                                WHERE apply_no = '$apply_no'";
            sql_query($sql);

            $key_val = base64_encode($_SESSION["final_idx"]);

            if($out["P_TYPE"] == "VBANK"){

                $sql = "UPDATE cb_unreal_2025_event2_apply SET pay_complete = 'N',apply_pay_status=1  WHERE apply_no = '".$_SESSION["final_idx"]."'";
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
                echo "location.href='/v3/unrealfest2025/application_vbank_result.html'";
                echo '</script>';
                exit();
            }else{

                include_once "../phpqrcode/qrlib.php";
                $sOrignText = $apply_password;
                QRcode::png($sOrignText,"../qrdata/".$_SESSION["final_idx"].".png", 0, 7, 2);
                $documentRoot = $_SERVER['DOCUMENT_ROOT'];
                $imagePath =  $documentRoot.'/v3/unrealfest2025/qrdata/'.$_SESSION["final_idx"].'.png';
                $imagePath2 =  $documentRoot.'/v3/unrealfest2025/qrdata/'.$_SESSION["final_idx"].'.jpg';
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

                $call_date = " 8월 25일(월)~26일(화) 오전 9시";
                if($apply_product_code == "STD_28" || $apply_product_code == "NORMAL_25") {
                    $call_date = "8월 25일(월) 오전 9시";
                }else if($apply_product_code == "STD_29" || $apply_product_code == "NORMAL_26") {
                    $call_date = "8월 26일(화) 오전 9시";
                }

                $ch = curl_init();
                $title = "<언리얼 페스트 서울 2025> 등록 확인";
                $message = "<언리얼 페스트 서울 2025> 오프라인 등록이 완료되었습니다. \n행사장 내 셀프 체크인 기기에서 QR코드를 스캔한 후 간편하게 입장하세요.\n\n일시: ".$call_date."\n장소: 코엑스 그랜드볼룸\n\n\n자세한 내용은 FAQ를 참고하세요.\n\nhttp://bit.ly/ufs25\n\n- 언리얼 페스트 사무국";

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
                $file[] = array('attc' => 'https://epiclounge.co.kr/v3/unrealfest2025/qrdata/'. $_SESSION["final_idx"].".jpg");
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
                echo "location.href='/v3/unrealfest2025/application_qrcode.php'";
                echo '</script>';
                exit();
            }

        }else{

            echo '<script type="text/javascript">';
            echo "alert('결제중 오류가 발생하였습니다. 다시 시도해 주시기 바랍니다. 오류가 지속될 경우 관리자에게 문의해 주시기 바랍니다.');";
            //echo "location.href='/v3/unrealfest2025/application_form.html';";
            echo "history.back(-1);";
            echo '</script>';
            exit();
        }
    }
}
else{
    echo "<script>alert('입력정보가 유효하지 않거나 만료되었습니다. 다시 시도하여주세요. 결제가 취소되었습니다.');history.back(-2);</script>";
    exit;
}
?>