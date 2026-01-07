<?php
require_once('libs/INIStdPayUtil.php');
require_once('libs/HttpClient.php');
require_once('libs/properties.php');
require_once('../../common.php');

        $util = new INIStdPayUtil();
        $prop = new properties();

        try {

            //#############################
            // 인증결과 파라미터 수신
            //#############################

            if (strcmp("0000", $_REQUEST["resultCode"]) == 0) {

                //############################################
                // 1.전문 필드 값 설정(***가맹점 개발수정***)
                //############################################

                $mid            = "MOIepiclou";
                $signKey 	    = "Wno0S3hIQVhUZ1BKSHFYMXRIVUJpQT09";

                //$mid 			= "INIpayTest";  								// 상점아이디
                //$signKey 		= "SU5JTElURV9UUklQTEVERVNfS0VZU1RS"; 			// 웹 결제 signkey

                $timestamp      = $util->getTimestamp();
                $charset        = "UTF-8";
                $format         = "JSON";
                $authToken      = $_REQUEST["authToken"];
                $authUrl        = $_REQUEST["authUrl"];
                $netCancel      = $_REQUEST["netCancelUrl"];
                $merchantData   = $_REQUEST["merchantData"];

				//##########################################################################
				// 승인요청 API url (authUrl) 리스트 는 properties 에 세팅하여 사용합니다.
				// idc_name 으로 수신 받은 센터 네임을 properties 에서 include 하여 승인요청하시면 됩니다.
				//##########################################################################
                $idc_name 	= $_REQUEST["idc_name"];
                $authUrl    = $prop->getAuthUrl($idc_name);
                $apply_no = $_SESSION["final_idx"];

                $prev_data = sql_fetch("select * from cb_unreal_2024_event2_apply where apply_no = '$apply_no'");
                $apply_password = md5(str_replace("'","\'",$prev_data['apply_user_email']));

                $apply_user_name = $prev_data["apply_user_name"];
                $apply_user_phone = $prev_data["apply_user_phone"];
                $apply_user_email = $prev_data["apply_user_email"];
                $apply_product_code = $prev_data["apply_product_code"];
                $apply_coupon_no = $prev_data["apply_coupon_no"];




                //최종 등록전에 좌석 최종확인

                $code = $prev_data["apply_product_code"];
                $track = $prev_data["apply_track"];



                $sql = "select date1 from 2024_event_ticket where name = '".$track."'";
                $result = sql_fetch($sql);


                $limit_cnt = $result["date1"];
                $limit_cnt = $limit_cnt - 100;
                $result_cnt = 0;
                if($code == "STD_ALL" || $code == "NORMAL_ALL"){
                    $sql = "select count(*) as cnt from cb_unreal_2024_event2_apply where apply_pay_status <> 0 and apply_temp_yn = 'N' and apply_track = '".$track."' and (apply_product_code like '%28' or apply_product_code like '%ALL')";
                    $row_cnt = sql_fetch($sql);
                    $result_cnt1 = $row_cnt["cnt"];

                    $sql = "select count(*) as cnt from cb_unreal_2024_event2_apply where apply_pay_status <> 0 and apply_temp_yn = 'N' and apply_track = '".$track."' and (apply_product_code like '%29' or apply_product_code like '%ALL')";
                    $row_cnt = sql_fetch($sql);
                    $result_cnt2 = $row_cnt["cnt"];

                    if($result_cnt1 >= $limit_cnt || $result_cnt2 >= $limit_cnt) {
                        echo '<script type="text/javascript">';
                        echo "alert('해당 트랙의 티켓이 모두 판매되었습니다.');";
                        //echo "location.href='/v3/application_form.html';";
                        echo "history.back(-1);";
                        echo '</script>';
                        exit();
                    }
                }else if($code == "STD_28" || $code == "NORMAL_28"){
                    $sql = "select count(*) as cnt from cb_unreal_2024_event2_apply where apply_track = '".$track."' and (apply_product_code like '%28' or apply_product_code like '%ALL')";
                    $result_cnt = sql_fetch($sql);

                }else if($code == "STD_29" || $code == "NORMAL_29"){
                    $sql = "select count(*) as cnt from cb_unreal_2024_event2_apply where apply_track = '".$track."' and (apply_product_code like '%29' or apply_product_code like '%ALL')";
                    $result_cnt = sql_fetch($sql);
                }

                if($result_cnt["cnt"] >= $limit_cnt){
                    $netcancelResultString = ""; // 망취소 요청 API url(고정, 임의 세팅 금지)
                    $netCancel    = $prop->getNetCancel($idc_name);

                    if (strcmp($netCancel, $_REQUEST["netCancelUrl"]) == 0) {
                        $httpUtil = new HttpClient();
                        //#####################
                        // 2.signature 생성
                        //#####################
                        $signParam["authToken"] = $authToken;   // 필수
                        $signParam["timestamp"] = $timestamp;   // 필수
                        // signature 데이터 생성 (모듈에서 자동으로 signParam을 알파벳 순으로 정렬후 NVP 방식으로 나열해 hash)
                        $signature = $util->makeSignature($signParam);

                        $veriParam["authToken"] = $authToken;   // 필수
                        $veriParam["signKey"]   = $signKey;     // 필수
                        $veriParam["timestamp"] = $timestamp;   // 필수
                        // verification 데이터 생성 (모듈에서 자동으로 signParam을 알파벳 순으로 정렬후 NVP 방식으로 나열해 hash)
                        $verification = $util->makeSignature($veriParam);


                        //#####################
                        // 3.API 요청 전문 생성
                        //#####################
                        $authMap["mid"]          = $mid;            // 필수
                        $authMap["authToken"]    = $authToken;      // 필수
                        $authMap["signature"]    = $signature;      // 필수
                        $authMap["verification"] = $verification;   // 필수
                        $authMap["timestamp"]    = $timestamp;      // 필수
                        $authMap["charset"]      = $charset;        // default=UTF-8
                        $authMap["format"]       = $format;         // default=XML

                        if ($httpUtil->processHTTP($netCancel, $authMap)) {
                            $netcancelResultString = $httpUtil->body;
                        } else {
                            //echo "Http Connect Error\n";
                            //echo $httpUtil->errormsg;

                            echo '<script type="text/javascript">';
                            echo "alert('결제중 오류가 발생하였습니다. 다시 시도해 주시기 바랍니다. 오류가 지속될 경우 관리자에게 문의해 주시기 바랍니다.');";
                            //echo "location.href='/v3/application_form.html';";
                            echo "history.back(-1);";
                            echo '</script>';
                            exit();
                            throw new Exception("Http Connect Error");
                        }

                        //echo "<br/>## 망취소 API 결과 ##<br/>";

                        /*##XML output##*/
                        //$netcancelResultString = str_replace("<", "&lt;", $$netcancelResultString);
                        //$netcancelResultString = str_replace(">", "&gt;", $$netcancelResultString);

                        // 취소 결과 확인
                        //echo "<p>". $netcancelResultString . "</p>";
                    }

                    echo '<script type="text/javascript">';
                    echo "alert('해당 트랙의 티켓이 모두 판매되었습니다.');";
                    //echo "location.href='/v3/application_form.html';";
                    echo "history.back(-1);";
                    echo '</script>';
                    exit();


                    exit;
                }
                //좌석확인 끝


                if (strcmp($authUrl, $_REQUEST["authUrl"]) == 0) {

                    //#####################
                    // 2.signature 생성
                    //#####################
                    $signParam["authToken"] = $authToken;   // 필수
                    $signParam["timestamp"] = $timestamp;   // 필수
                    // signature 데이터 생성 (모듈에서 자동으로 signParam을 알파벳 순으로 정렬후 NVP 방식으로 나열해 hash)
                    $signature = $util->makeSignature($signParam);

                    $veriParam["authToken"] = $authToken;   // 필수
                    $veriParam["signKey"]   = $signKey;     // 필수
                    $veriParam["timestamp"] = $timestamp;   // 필수
                    // verification 데이터 생성 (모듈에서 자동으로 signParam을 알파벳 순으로 정렬후 NVP 방식으로 나열해 hash)
                    $verification = $util->makeSignature($veriParam);


                    //#####################
                    // 3.API 요청 전문 생성
                    //#####################
                    $authMap["mid"]          = $mid;            // 필수
                    $authMap["authToken"]    = $authToken;      // 필수
                    $authMap["signature"]    = $signature;      // 필수
                    $authMap["verification"] = $verification;   // 필수
                    $authMap["timestamp"]    = $timestamp;      // 필수
                    $authMap["charset"]      = $charset;        // default=UTF-8
                    $authMap["format"]       = $format;         // default=XML

                    try {

                        $httpUtil = new HttpClient();

                        //#####################
                        // 4.API 통신 시작
                        //#####################

                        $authResultString = "";
                        if ($httpUtil->processHTTP($authUrl, $authMap)) {
                            $authResultString = $httpUtil->body;

                        } else {
                            echo "Http Connect Error\n";
                            echo $httpUtil->errormsg;

                            throw new Exception("Http Connect Error");
                        }

                        //############################################################
                        //5.API 통신결과 처리(***가맹점 개발수정***)
                        //############################################################

                        sql_query("insert into 2024_event_log(log_idx,log_text,rdate) values('$apply_no','".str_replace("'","`",$authResultString)."',now())");
                        $resultMap = json_decode($authResultString, true);

                        if($resultMap["resultCode"] == "0000"){

                            $_apply_ci = $_SESSION["CI"];
                            $_apply_di = $_SESSION["DI"];

                            sql_query("UPDATE cb_unreal_2024_event2_coupon SET usage_date = now(),user_name='$apply_user_name',user_email='$apply_user_email' WHERE coupon_key = '$apply_coupon_no'");

                            $chker_tel = $resultMap["buyerTel"];

                            $row_checker = sql_fetch("select * from cb_unreal_2024_event2_apply where apply_user_phone ='$chker_tel' order by apply_no desc limit 1");
                            if($row_checker["apply_no"] == $apply_no) {
                                $sql = "UPDATE cb_unreal_2024_event2_apply SET
                                  apply_password = '".$apply_password."',
                                  free_yn = 'N',
                                  apply_pay_status = 10,
                                  pay_resultCode = '".$resultMap["resultCode"]."',
                                  pay_resultMsg = '".$resultMap["resultMsg"]."',
                                  pay_tid = '".$resultMap["tid"]."',
                                  pay_moid = '".$resultMap["MOID"]."',
                                  pay_totprice = '".$resultMap["TotPrice"]."',
                                  pay_goodname = '".$resultMap["goodName"]."',
                                  pay_appldate = '".$resultMap["applDate"]."',
                                  pay_appltime = '".$resultMap["applTime"]."',
                                  pay_vact_num = '".$resultMap["VACT_Num"]."',
                                  pay_vact_bankcode = '".$resultMap["VACT_BankCode"]."',
                                  pay_vact_date = '".$resultMap["VACT_Date"]."',
                                  pay_applnum = '".$resultMap["applNum"]."',
                                  pay_paymethod = '".$resultMap["payMethod"]."',
                                  pay_result_map = '".str_replace("'","`",$authResultString)."',
                                  pay_complete = 'Y',
                                  apply_temp_yn = 'N'
                                WHERE apply_no = '$apply_no'";
                                sql_query($sql);
                            }else{

                                $sql_chker_insert = "INSERT INTO `cb_unreal_2024_event2_apply` (
                                                        `apply_parent_no`,
                                                        `apply_order_no`,
                                                        `apply_uuid`,
                                                        `apply_coupon_no`,
                                                        `apply_user_name`,
                                                        `apply_user_email`,
                                                        `apply_user_phone`,
                                                        `apply_user_job`,
                                                        `apply_user_company`,
                                                        `apply_user_depart`,
                                                        `apply_user_grade`,
                                                        `apply_user_ex1`,
                                                        `apply_user_ex2`,
                                                        `apply_user_ex3`,
                                                        `apply_user_event_agree`,
                                                        `apply_user_div_code`,
                                                        `apply_product_code`,
                                                        `apply_product_name`,
                                                        `apply_product_price`,
                                                        `apply_vbank_info`,
                                                        `apply_pay_type`,
                                                        `apply_pay_status`,
                                                        `apply_trackcode`,
                                                        `apply_barcode_url`,
                                                        `apply_ip`,
                                                        `apply_reg_datetime`,
                                                        `apply_mod_datetime`,
                                                        `apply_useragent`,
                                                        `apply_title`,
                                                        `apply_sector`,
                                                        `apply_file`,
                                                        `apply_password`,
                                                        `apply_user_ex4`,
                                                        `apply_user_email2`,
                                                        `apply_sns`,
                                                        `apply_ci`,
                                                        `apply_di`,
                                                        `pay_resultCode`,
                                                        `pay_resultMsg`,
                                                        `pay_tid`,
                                                        `pay_moid`,
                                                        `pay_totprice`,
                                                        `pay_goodname`,
                                                        `pay_appldate`,
                                                        `pay_appltime`,
                                                        `pay_vact_num`,
                                                        `pay_vact_bankcode`,
                                                        `pay_vact_date`,
                                                        `pay_applnum`,
                                                        `pay_paymethod`,
                                                        `pay_result_map`,
                                                        `mpay_status`,
                                                        `mpay_payment`,
                                                        `mpay_rmesg1`,
                                                        `mpay_tid`,
                                                        `mpay_type`,
                                                        `mpay_oid`,
                                                        `mpay_amt`,
                                                        `mpay_authdt`,
                                                        `mpay_resultmap`,
                                                        `free_yn`,
                                                        `refund_msg`,
                                                        `refund_time`,
                                                        `refund_date`,
                                                        `pay_complete`,
                                                        `wait_yn`,
                                                        `repair_memo`,
                                                        `team_yn`,
                                                        `send_sms_yn`,
                                                        `apply_track`,
                                                        `apply_student_file`,
                                                        `apply_temp_yn` 
                                                    ) SELECT
                                                    `apply_parent_no`,
                                                    `apply_order_no`,
                                                    `apply_uuid`,
                                                    `apply_coupon_no`,
                                                    `apply_user_name`,
                                                    `apply_user_email`,
                                                    `apply_user_phone`,
                                                    `apply_user_job`,
                                                    `apply_user_company`,
                                                    `apply_user_depart`,
                                                    `apply_user_grade`,
                                                    `apply_user_ex1`,
                                                    `apply_user_ex2`,
                                                    `apply_user_ex3`,
                                                    `apply_user_event_agree`,
                                                    `apply_user_div_code`,
                                                    `apply_product_code`,
                                                    `apply_product_name`,
                                                    `apply_product_price`,
                                                    `apply_vbank_info`,
                                                    `apply_pay_type`,
                                                    '10',
                                                    `apply_trackcode`,
                                                    `apply_barcode_url`,
                                                    `apply_ip`,
                                                    `apply_reg_datetime`,
                                                    `apply_mod_datetime`,
                                                    `apply_useragent`,
                                                    `apply_title`,
                                                    `apply_sector`,
                                                    `apply_file`,
                                                    `apply_password`,
                                                    `apply_user_ex4`,
                                                    `apply_user_email2`,
                                                    `apply_sns`,
                                                    `apply_ci`,
                                                    `apply_di`,
                                                    '".$resultMap["resultCode"]."',
                                                    '".$resultMap["resultMsg"]."',
                                                    '".$resultMap["tid"]."',
                                                    '".$resultMap["MOID"]."',
                                                    '".$resultMap["TotPrice"]."',
                                                    '".$resultMap["goodName"]."',
                                                    '".$resultMap["applDate"]."',
                                                    '".$resultMap["applTime"]."',
                                                    '".$resultMap["VACT_Num"]."',
                                                    '".$resultMap["VACT_BankCode"]."',
                                                    '".$resultMap["VACT_Date"]."',
                                                    '".$resultMap["applNum"]."',
                                                    '".$resultMap["payMethod"]."',
                                                    '".str_replace("'","`",$authResultString)."',

                                                    `mpay_status`,
                                                    `mpay_payment`,
                                                    `mpay_rmesg1`,
                                                    `mpay_tid`,
                                                    `mpay_type`,
                                                    `mpay_oid`,
                                                    `mpay_amt`,
                                                    `mpay_authdt`,
                                                    `mpay_resultmap`,
                                                    'N',
                                                    `refund_msg`,
                                                    `refund_time`,
                                                    `refund_date`,
                                                    'Y',
                                                    `wait_yn`,
                                                    `repair_memo`,
                                                    `team_yn`,
                                                    `send_sms_yn`,
                                                    `apply_track`,
                                                    `apply_student_file`,
                                                    'N' 
                                                    FROM
                                                        cb_unreal_2024_event2_apply_temp 
                                                    WHERE
                                                        apply_user_phone = '$chker_tel' 
                                                    ORDER BY
                                                        apply_no DESC 
                                                        LIMIT 1";

                                sql_query($sql_chker_insert);
                                $_SESSION["final_idx"] = sql_query("SELECT LAST_INSERT_ID() as idx")->fetch_array()['idx'];
                                $apply_no = $_SESSION["final_idx"];
                                $prev_data = sql_fetch("select * from cb_unreal_2024_event2_apply where apply_no = '$apply_no'");
                                $apply_password = md5(str_replace("'","\'",$prev_data['apply_user_email']));
                                $apply_user_name = $prev_data["apply_user_name"];
                                $apply_user_phone = $prev_data["apply_user_phone"];
                                $apply_user_email = $prev_data["apply_user_email"];
                                $apply_product_code = $prev_data["apply_product_code"];
                                $apply_coupon_no = $prev_data["apply_coupon_no"];
                            }






                            $key_val = base64_encode($_SESSION["final_idx"]);
//
                            if($resultMap["payMethod"] == 'VBank'){
                                $sql = "UPDATE cb_unreal_2024_event2_apply SET pay_complete = 'N',apply_pay_status=1 WHERE apply_no = '".$_SESSION["final_idx"]."'";
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

                                $_SESSION["VBANK_NUM"]  = $resultMap["VACT_Num"];
                                $_SESSION["VBANK_NM"]  = $BANK_CODE[$resultMap["VACT_BankCode"]];
                                $_SESSION["VBANK_AMOUNT"]  = $resultMap["TotPrice"];

                                echo '<script type="text/javascript">';
                                echo "location.href='/v3/unrealfest2024_test/application_vbank_result.html'";
                                echo '</script>';
                                exit();
                            }else{
                                include_once "../phpqrcode/qrlib.php";
                                $sOrignText = $apply_password;
                                QRcode::png($sOrignText,"../qrdata/".$_SESSION["final_idx"].".png", 0, 7, 2);
                                $documentRoot = $_SERVER['DOCUMENT_ROOT'];
                                $imagePath =  $documentRoot.'/v3/unrealfest2024_test/qrdata/'.$_SESSION["final_idx"].'.png';
                                $imagePath2 =  $documentRoot.'/v3/unrealfest2024_test/qrdata/'.$_SESSION["final_idx"].'.jpg';
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
                                $file[] = array('attc' => 'https://epiclounge.co.kr/v3/unrealfest2024_test/qrdata/'. $_SESSION["final_idx"].".jpg");
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
                                echo "location.href='/v3/unrealfest2024_test/application_step3_offline.html'";
                                echo '</script>';
                                exit();
                            }
                        }else{
                            echo '<script type="text/javascript">';
                            echo "alert('결제중 오류가 발생하였습니다. 다시 시도해 주시기 바랍니다. 오류가 지속될 경우 관리자에게 문의해 주시기 바랍니다.\\n".$resultMap["resultMsg"]."');";
                            //echo "location.href='/v3/application_form.html';";
                            echo "history.back(-1);";
                            echo '</script>';
                            exit();
                            throw new Exception("Http Connect Error");
                        }




                    } catch (Exception $e) {
                        //    $s = $e->getMessage() . ' (오류코드:' . $e->getCode() . ')';
                        //####################################
                        // 실패시 처리(***가맹점 개발수정***)
                        //####################################
                        //---- db 저장 실패시 등 예외처리----//
                       /* $s = $e->getMessage() . ' (오류코드:' . $e->getCode() . ')';
                        echo $s;*/

                        //#####################
                        // 망취소 API
                        //#####################

                        $netcancelResultString = ""; // 망취소 요청 API url(고정, 임의 세팅 금지)
                        $netCancel    = $prop->getNetCancel($idc_name);

                        if (strcmp($netCancel, $_REQUEST["netCancelUrl"]) == 0) {

                            if ($httpUtil->processHTTP($netCancel, $authMap)) {
                                $netcancelResultString = $httpUtil->body;
                            } else {
                                //echo "Http Connect Error\n";
                                //echo $httpUtil->errormsg;

                                echo '<script type="text/javascript">';
                                echo "alert('결제중 오류가 발생하였습니다. 다시 시도해 주시기 바랍니다. 오류가 지속될 경우 관리자에게 문의해 주시기 바랍니다.');";
                                //echo "location.href='/v3/application_form.html';";
                                echo "history.back(-1);";
                                echo '</script>';
                                exit();
                                throw new Exception("Http Connect Error");
                            }

                            //echo "<br/>## 망취소 API 결과 ##<br/>";

                            /*##XML output##*/
                            //$netcancelResultString = str_replace("<", "&lt;", $$netcancelResultString);
                            //$netcancelResultString = str_replace(">", "&gt;", $$netcancelResultString);

                            // 취소 결과 확인
                            //echo "<p>". $netcancelResultString . "</p>";
                        }

                        echo '<script type="text/javascript">';
                        echo "alert('결제중 오류가 발생하였습니다. 다시 시도해 주시기 바랍니다. 오류가 지속될 경우 관리자에게 문의해 주시기 바랍니다.');";
                        //echo "location.href='/v3/application_form.html';";
                        echo "history.back(-1);";
                        echo '</script>';
                        exit();
                    }

                } else {
                    echo '<script type="text/javascript">';
                    echo "alert('결제중 오류가 발생하였습니다. 다시 시도해 주시기 바랍니다. 오류가 지속될 경우 관리자에게 문의해 주시기 바랍니다.');";
                    //echo "location.href='/v3/application_form.html';";
                    echo "history.back(-1);";
                    echo '</script>';
                    exit();
                }

            } else {

            }

        } catch (Exception $e) {
            /*$s = $e->getMessage() . ' (오류코드:' . $e->getCode() . ')';
            echo $s;*/

            echo '<script type="text/javascript">';
            echo "alert('결제중 오류가 발생하였습니다. 다시 시도해 주시기 바랍니다. 오류가 지속될 경우 관리자에게 문의해 주시기 바랍니다.');";
            //echo "location.href='/v3/application_form.html';";
            echo "history.back(-1);";
            echo '</script>';
            exit();
        }
?>