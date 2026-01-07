<?php
    include_once "../../common.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
<?php
	header('Content-Type: text/html; charset=euc-kr');
    //**************************************************************************
	// 파일명 : ipin_popup3.php
	// - 팝업페이지
	// 아이핀 서비스 인증 결과 화면(return url)
	// 암호화된 인증결과정보를 복호화한다.
	//**************************************************************************
	
	/**************************************************************************
	 * okcert3 아이핀 서비스 파라미터
	 **************************************************************************/
	/* 팝업창 리턴 항목 */
	$MDL_TKN  =	$_REQUEST["MDL_TKN"];			// 모듈토큰

	// ########################################################################
	// # KCB로부터 부여받은 회원사코드(아이디) 설정 (12자리)
	// ########################################################################
	$CP_CD = "V62330000000";				// 회원사코드(아이디)
	
	//'''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''
    //' 타겟 : 운영/테스트 전환시 변경 필요
    //'''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''
	$target = "PROD"; // 테스트="TEST", 운영="PROD"
	
	//'''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''
    //' 라이센스 파일
    //'''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''
    $license = "ipin_V62330000000_TIS_01_PROD_AES_license.dat";
	
	
	/**************************************************************************
	okcert3 request param JSON String
	**************************************************************************/
	$params = '{ "MDL_TKN":"'.$MDL_TKN.'" }';
    
	
	$svcName = "TIS_IPIN_POPUP_RESULT";
	$out = NULL;
	
	// okcert3 실행
	//$ret = okcert3_u($target, $CP_CD, $svcName, $params, $license, $out);	// UTF-8
	$ret = okcert3($target, $CP_CD, $svcName, $params, $license, $out);		// EUC-KR
	
	/**************************************************************************
	okcert3 응답 정보
	**************************************************************************/
	$RSLT_CD = "";						// 결과코드
	$RSLT_MSG = "";						// 결과메시지
	$TX_SEQ_NO = ""; 					// 거래일련번호
	
	$RSLT_NAME		= "";
	$RSLT_BIRTHDAY	="";
	$RSLT_SEX_CD	= "";
	$RSLT_NTV_FRNR_CD="";
	
	$DI			= "";
	$CI 		= "";
	$CI2 		= "";
	$CI_UPDATE	= "";
	$VSSN		= "";
	
	$RETURN_MSG = "";					// 리턴메시지
	

	if($ret == 0) {		// 함수 실행 성공일 경우 변수를 결과에서 얻음
		$out = iconv("euckr","utf-8",$out);		// 인코딩 icnov 처리. okcert3 호출(EUC-KR)일 경우에만 사용 (json_decode가 UTF-8만 가능)
		$output = json_decode($out,true);		// $output = UTF-8

		$RSLT_CD = $output['RSLT_CD'];
		$RSLT_MSG  = iconv("utf-8","euckr", $output["RSLT_MSG"]);	// 다시 EUC-KR 로 변환
		
		if(isset($output["TX_SEQ_NO"])) $TX_SEQ_NO = $output["TX_SEQ_NO"]; // 필요 시 거래 일련 번호 에 대하여 DB저장 등의 처리
		if(isset($output["RETURN_MSG"]))  $RETURN_MSG  = $output['RETURN_MSG'];

		if( $RSLT_CD == "T000" ) { // T000 : 정상건
			$RSLT_NAME  = iconv("utf-8","euckr",$output['RSLT_NAME']); // 다시 EUC-KR 로 변환
			$RSLT_BIRTHDAY	= $output['RSLT_BIRTHDAY'];
			$RSLT_SEX_CD	= $output['RSLT_SEX_CD'];
			$RSLT_NTV_FRNR_CD=$output['RSLT_NTV_FRNR_CD'];
			
			$DI			= $output['DI'];
			$CI 		= $output['CI'];
			$CI2 		= $output['CI2'];
			$CI_UPDATE	= $output['CI_UPDATE'];
			$VSSN		= $output['VSSN'];

            $_SESSION["RSLT_NAME"] = $output['RSLT_NAME'];
            $_SESSION["RSLT_BIRTHDAY"] = $RSLT_BIRTHDAY;
            $_SESSION["RSLT_SEX_CD"] = $RSLT_SEX_CD;
            $_SESSION["RSLT_NTV_FRNR_CD"] = $RSLT_NTV_FRNR_CD;
            $_SESSION["DI"] = $DI;
            $_SESSION["CI"] = $CI;

        }
	}
?>
<title>KCB 아이핀 서비스 샘플 3</title>
<script language="javascript" type="text/javascript" >
	function fncOpenerSubmit() {
		opener.document.kcbResultForm.CP_CD.value    	= "<?=$CP_CD?>";
		opener.document.kcbResultForm.RSLT_CD.value   	= "<?=$RSLT_CD?>";
		opener.document.kcbResultForm.RSLT_MSG.value  	= "<?=$RSLT_MSG?>";
		opener.document.kcbResultForm.TX_SEQ_NO.value 	= "<?=$TX_SEQ_NO?>";
		
		opener.document.kcbResultForm.RETURN_MSG.value  = "<?=$RETURN_MSG?>";
<?php
 	if ($ret == 0) {
?>
        opener.document.frm.apply_user_name.value        = "<?=$RSLT_NAME?>";
        opener.document.frm.apply_di.value          = "<?=$DI?>";
        opener.document.frm.apply_ci.value          = "<?=$CI?>";
        if (opener.document.frm.apply_real_type) {
            opener.document.frm.apply_real_type.value = "ipin";
        }
<?php
	}
?>
        if(opener.document.kcbResultForm.apply_track.value == "쿠폰") {

            if (opener.document.kcbResultForm.apply_product_code.value == "NORMAL_ALL" ||
                opener.document.kcbResultForm.apply_product_code.value == "NORMAL_25" ||
                opener.document.kcbResultForm.apply_product_code.value == "NORMAL_26") {

                //opener.document.kcbResultForm.action = "/v3/unrealfest2025/application_step2_coupon1.html";
                //opener.document.kcbResultForm.submit();
                self.close();
            } else if (opener.document.kcbResultForm.apply_product_code.value == "STD_ALL" ||
                opener.document.kcbResultForm.apply_product_code.value == "STD_28" ||
                opener.document.kcbResultForm.apply_product_code.value == "STD_29") {

                //opener.document.kcbResultForm.action = "/v3/unrealfest2025/application_step2_coupon2.html";
                //opener.document.kcbResultForm.submit();
                self.close();
            } else {
                //opener.document.kcbResultForm.action = "/v3/unrealfest2025/application_step2_online.html";
                //opener.document.kcbResultForm.submit();
                self.close();
            }

        }else {

            if (opener.document.kcbResultForm.apply_product_code.value == "NORMAL_ALL" ||
                opener.document.kcbResultForm.apply_product_code.value == "NORMAL_25" ||
                opener.document.kcbResultForm.apply_product_code.value == "NORMAL_26") {

                //opener.document.kcbResultForm.action = "/v3/unrealfest2025/application_step2.php";
                //opener.document.kcbResultForm.submit();
                self.close();
            } else if (opener.document.kcbResultForm.apply_product_code.value == "STD_ALL" ||
                opener.document.kcbResultForm.apply_product_code.value == "STD_28" ||
                opener.document.kcbResultForm.apply_product_code.value == "STD_29") {

                //opener.document.kcbResultForm.action = "/v3/unrealfest2025/application_step2_student.html";
                //opener.document.kcbResultForm.submit();
                self.close();
            } else {
                //opener.document.kcbResultForm.action = "/v3/unrealfest2025/application_step2_online.html";
                //opener.document.kcbResultForm.submit();
                self.close();
            }
            //opener.document.kcbResultForm.action = "/v3/application_form.html";
        }
	}
</script>
</head>
<body>
<?php
	if($ret == 0) {
		//인증결과 복호화 성공
		// 인증결과를 확인하여 페이지분기등의 처리를 수행해야한다.
	 	if ($RSLT_CD == "T000") {
			echo ("<script>alert('본인인증성공'); fncOpenerSubmit();</script>");
		}
		else {
			echo ("<script>alert('본인인증실패 : ".$RSLT_CD." : ".$RSLT_MSG."'); fncOpenerSubmit();</script>");
		}
	} else {
		//인증결과 복호화 실패
		echo ("<script>alert('인증결과복호화 실패 Fuction fail / ret: ".$ret."'); self.close(); </script>");
	}
?>
</body>
</html>
