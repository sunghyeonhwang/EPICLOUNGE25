<?php
include_once "../common.php";
include_once "member_header.php";

$index = isset($_POST['index']) ? $_POST['index'] : '';


require_once('./inisis_pc/libs/INIStdPayUtil.php');
$SignatureUtil = new INIStdPayUtil();

$mid 			= "MOIepiclou";  								// 상점아이디
$signKey 		= "Wno0S3hIQVhUZ1BKSHFYMXRIVUJpQT09"; 			// 웹 결제 signkey
//
//$mid 			= "INIpayTest";  								// 상점아이디
//$signKey 		= "SU5JTElURV9UUklQTEVERVNfS0VZU1RS"; 			// 웹 결제 signkey

$mKey 	= $SignatureUtil->makeHash($signKey, "sha256");

$timestamp 		= $SignatureUtil->getTimestamp();   			// util에 의해서 자동생성
$use_chkfake	= "Y";											// PC결제 보안강화 사용 ["Y" 고정]
$orderNumber 	= $mid . "_" . $timestamp; 						// 가맹점 주문번호(가맹점에서 직접 설정)



$temp_data = sql_fetch("select * from cb_unreal_2025_event2_apply where apply_no = '{$index}' order by apply_no desc  limit 1");

$_apply_ci = $temp_data["apply_ci"];
$_apply_di = $temp_data["apply_di"];

$apply_product_code = $temp_data["apply_product_code"];
$apply_product_name = $temp_data["apply_product_name"];
$apply_product_price = $temp_data["apply_product_price"];


if ($apply_product_code == "NORMAL_ALL"){

    $apply_product_type = "1";
}else if ($apply_product_code == "NORMAL_25"){
    $apply_product_type = "2";

}else if ($apply_product_code == "NORMAL_26"){
    $apply_product_type = "3";

}else{
    $apply_product_type = "1";

}

$apply_track = $temp_data["apply_track"];
$apply_track_array = explode(",", $apply_track);
if(empty($temp_data)){
    alert("신청된 내역이 없습니다." ,"/v3/unrealfest2025/application_step1.php");
}

function isMobileDevice() {
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $mobileDevices = array('Android', 'iPhone', 'iPad', 'Windows Phone');

    foreach ($mobileDevices as $device) {
        if (stripos($userAgent, $device) !== false) {
            return true;
        }
    }

    return false;
}

if (isMobileDevice()) {
    $device_check = "mobile";
} else {
    $device_check = "pc";
}





//$_REQUEST["apply_product_price"] = 1000;
$price 			= $apply_product_price;        								// 상품가격(특수기호 제외, 가맹점에서 직접 설정)
$product_name = $apply_product_name;
//$price 			= "210000";        								// 상품가격(특수기호 제외, 가맹점에서 직접 설정)

$params = array(
    "oid" => $orderNumber,
    "price" => $price,
    "timestamp" => $timestamp
);

$sign   = $SignatureUtil->makeSignature($params);

$params = array(
    "oid" => $orderNumber,
    "price" => $price,
    "signKey" => $signKey,
    "timestamp" => $timestamp
);

$sign2   = $SignatureUtil->makeSignature($params);



$apply_product_name = $temp_data["apply_product_name"];
$apply_reg_datetime = $temp_data["apply_reg_datetime"];


$current_time = new DateTime();
$target_time = new DateTime('2025-07-23 23:59:59');
$now_early_bird = "N";
$is_early_bird = "N";
if ($current_time <= $target_time) {
    $now_early_bird = "Y";
} else {
    // After target time
    $now_early_bird = "N";
}

if ($apply_reg_datetime <= "2025-07-23 23:59:59") {
    // Before or equal to target time (2025-07-23 23:59:59)
    $is_early_bird = "Y";

    $apply_product_name = str_replace("일반","얼리버드",$apply_product_name);
} else {
    $is_early_bird = "N";
    // After target time
    $apply_product_name = str_replace("얼리버드","일반",$apply_product_name);
}

if($_SERVER["REMOTE_ADDR"] == "59.26.254.32"){
    //$now_early_bird = "N";
    //$is_early_bird = "N";
}
?>

<!--테스트 JS--><!--<script language="javascript" type="text/javascript" src="https://stgstdpay.inicis.com/stdjs/INIStdPay.js" charset="UTF-8"></script>-->
<!--운영 JS--> <script language="javascript" type="text/javascript" src="https://stdpay.inicis.com/stdjs/INIStdPay.js" charset="UTF-8"></script>
<div class="memeber_container">
    <div class="wrap">

        <div class="member_title_box">
         <h3 class="title"><a href="https://epiclounge.co.kr/unrealfest2025/"><img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/member_top_text.svg" /></a></h3>
        </div>
        <div class="ticket_list_box">
            <h4>Offline Ticket</h4>
            <?
            if($is_early_bird == "Y"){
                ?>
                <ul class="ticket_ul">

                    <li class="ticket_type1">
                        <input type="radio" <?=$temp_data["apply_product_code"] == "NORMAL_ALL"? "checked=true":""?>  class="" id="ticket_list_1" name="ticket_list_">
                        <label for="ticket_list_1">
                            <span class="ticket_title">얼리버드 양일권</span>
                            <span class="price_box">
							<span class="text_1">₩120,000</span>
							<span class="text_2">₩60,000</span>
						</span>
                            <span class="info_box">
							<span class="text_1">등록 기간: ~7월23일(수) 오후 11시 59분까지</span>
							<ul>
								<li>25일 & 26일 양일 참가</li>
								<li>참석자 전원 한정판 굿즈 제공</li>
								<li>세션 Q&A 기회</li>
								<li>전시 부스 체험 </li>
								<li>경품 추첨 및 이벤트 참가 기회</li>
							</ul>
						</span>
                        </label>
                    </li>
                    <li class="ticket_type1">
                        <input type="radio" class="" onclick="fn_pay_select_normal('2')"  <?=$temp_data["apply_product_code"] == "NORMAL_25"? "checked=true":""?>  id="ticket_list_2" name="ticket_list_">
                        <label for="ticket_list_2">
                            <span class="ticket_title">얼리버드 25일권</span>
                            <span class="price_box">
						<span class="text_1">₩60,000</span>
							<span class="text_2">₩30,000</span>
					</span>
                            <span class="info_box">
							<span class="text_1">등록 기간: ~7월23일(수) 오후 11시 59분까지</span>
							<ul>
								<li>25일 참가</li>
								<li>참석자 전원 한정판 굿즈 제공</li>
								<li>세션 Q&A 기회</li>
								<li>전시 부스 체험 </li>
								<li>경품 추첨 및 이벤트 참가 기회</li>
							</ul>
						</span>
                        </label>
                    </li>
                    <li class="ticket_type1">
                        <input type="radio" class="" onclick="fn_pay_select_normal('3')"  <?=$temp_data["apply_product_code"] == "NORMAL_26"? "checked=true":""?>  id="ticket_list_3" name="ticket_list_">
                        <label for="ticket_list_3">
                            <span class="ticket_title">얼리버드 26일권</span>
                            <span class="price_box">
						<span class="text_1">₩60,000</span>
							<span class="text_2">₩30,000</span>
					</span>
                            <span class="info_box">
							<span class="text_1">등록 기간: ~7월23일(수) 오후 11시 59분까지</span>
							<ul>
								<li>26일 참가</li>
								<li>참석자 전원 한정판 굿즈 제공</li>
								<li>세션 Q&A 기회</li>
								<li>전시 부스 체험 </li>
								<li>경품 추첨 및 이벤트 참가 기회</li>
							</ul>
						</span>
                        </label>
                    </li>
                </ul>
                <ul class="yellow_bu">
                    <li>얼리버드 티켓은 얼리버드 기간 (7월 23일, 오후 11시59분까지)만 취소가 가능합니다.</li>
                    <li>5인 이상의 단체등록을 진행하고 싶으신 경우에 문의해주세요. <a href="tel:023263701" target="_blank">고객센터 02-326-3701</a>, <a href="mailto:info@epiclounge.co.kr" target="_blank">info@epiclounge.co.kr</a></li>
                </ul>
                <?
            }else if($is_early_bird == "N"){
                ?>
                <ul class="ticket_ul">

                    <li class="ticket_type1">
                        <input type="radio"  disabled  <?=$temp_data["apply_product_code"] == "NORMAL_ALL"? "checked=true":""?>  checked class="" id="ticket_list_1" name="ticket_list_">
                        <label for="ticket_list_1">
                            <span class="ticket_title">양일권</span>
                            <span class="price_box">
							<!-- <span class="text_1">₩120,000</span> -->
							<span class="text_2">₩120,000</span>
						</span>
                            <span class="info_box">

							<ul>
								<li>25일 & 26일 양일 참가</li>
								<li>참석자 전원 한정판 굿즈 제공</li>
								<li>세션 Q&A 기회</li>
								<li>전시 부스 체험 </li>
								<li>경품 추첨 및 이벤트 참가 기회</li>
							</ul>
						</span>
                        </label>
                    </li>
                    <li class="ticket_type1">
                        <input type="radio" class="" disabled  <?=$temp_data["apply_product_code"] == "NORMAL_25"? "checked=true":""?>   id="ticket_list_2" name="ticket_list_">
                        <label for="ticket_list_2">
                            <span class="ticket_title"> 25일권</span>
                            <span class="price_box">

						<!-- <span class="text_1">₩60,000</span> -->
							<span class="text_2">₩60,000</span>
					</span>
                            <span class="info_box">
              <!-- <span class="text_1">등록 기간: ~7월23일(수) 오후 11시 59분까지</span> -->

							<ul>
								<li>25일 참가</li>
								<li>참석자 전원 한정판 굿즈 제공</li>
								<li>세션 Q&A 기회</li>
								<li>전시 부스 체험 </li>
								<li>경품 추첨 및 이벤트 참가 기회</li>
							</ul>
						</span>
                        </label>
                    </li>
                    <li class="ticket_type1">
                        <input type="radio" class="" disabled  <?=$temp_data["apply_product_code"] == "NORMAL_26"? "checked=true":""?>   id="ticket_list_3" name="ticket_list_">
                        <label for="ticket_list_3">
                            <span class="ticket_title"> 26일권</span>
                            <span class="price_box">
						<!-- <span class="text_1">₩60,000</span> -->
							<span class="text_2">₩60,000</span>
					</span>
                            <span class="info_box">

							<ul>
								<li>26일 참가</li>
								<li>참석자 전원 한정판 굿즈 제공</li>
								<li>세션 Q&A 기회</li>
								<li>전시 부스 체험 </li>
								<li>경품 추첨 및 이벤트 참가 기회</li>
							</ul>
						</span>
                        </label>
                    </li>
                </ul>
                <ul class="yellow_bu">
                    <li>일반 티켓은 8월 23일, 오후 11시59분까지 취소가 가능합니다.(얼리버드 티켓 환불은 종료되었습니다.)</li>
                    <li>5인 이상의 단체등록을 진행하고 싶으신 경우에 문의해주세요. <a href="tel:023263701" target="_blank">고객센터 02-326-3701</a>, <a href="mailto:info@epiclounge.co.kr" target="_blank">info@epiclounge.co.kr</a></li>
                </ul>
                <?
            }
            ?>
        </div>

        <div class="member_cont_box">


            <h3 class="h3  mt_100"">기본 정보</h3>
            <div class="member_form_box">
                <div class="member_form_list">
                    <label for="apply_user_name">이름</label>
                    <span class="intext_d"><?=$temp_data["apply_user_name"]?></span>
                </div>
                <div class="member_form_list">
                    <label for="apply_user_email">이메일<em class="em_red">*</em></label>
                    <span class="intext_d"><?=$temp_data["apply_user_email"]?></span>
                </div>

                <div class="member_form_list">
                    <label for="apply_user_phone">연락처<em class="em_red">*</em></label>
                    <span class="intext_d"><?=$temp_data["apply_user_phone"]?></span>
                </div>
            </div>
            <span class="bd_line"></span>


            <h3 class="h3">추가 정보</h3>
            <div class="member_form_box">
                <div class="member_form_list">
                    <label for="apply_user_job">직업<em class="em_red">*</em></label>
                    <span class="intext_d"><?=$temp_data["apply_user_job"]?></span>
                </div>

                <div class="member_form_list">
                    <label for="apply_user_company">회사명/소속<em class="em_red">*</em></label>
                    <span class="intext_d"><?=$temp_data["apply_user_company"]?></span>
                </div>
                <div class="member_form_list">
                    <label for="apply_user_ex1">산업/관심 분야<em class="em_red">*</em></label>
                    <span class="intext_d"><?=$temp_data["apply_user_ex1"]?></span>

                </div>

                <div class="member_form_list">
                    <label for="apply_user_grade">직무<em class="em_red">*</em></label>
                    <span class="intext_d"><?=$temp_data["apply_user_grade"]?></span>
                </div>
              
            </div>
            <span class="bd_line"></span>
            <h3 class="h3">참여 예정 트랙<em class="em_red">*</em></h3>
            <div class="step_1_track">
                <div class="track_list">
                    <p class="title">DAY 1. 8월 25일(월)</p>
                    <ul <?php if (!in_array("DAY1_TR1", $apply_track_array) && !in_array("DAY1_TR2", $apply_track_array) && !in_array("DAY1_TR3", $apply_track_array)) echo 'style="opacity:0.5"'; ?>>
                        <li><input type="radio" id="track_list_1_1" required name="apply_track1" class="track1"
                                   readonly onclick="return false"
                                   value="DAY1_TR1" <?php if (strpos($apply_product_code, "26") !== false) echo 'disabled'; ?> <?php if (in_array("DAY1_TR1", $apply_track_array)) echo 'checked'; ?>/><label
                                    for="track_list_1_1">게임: 프로그래밍</label></li>
                        <li><input type="radio" id="track_list_1_2" name="apply_track1" class="track1" readonly
                                   onclick="return false"
                                   value="DAY1_TR2" <?php if (strpos($apply_product_code, "26") !== false) echo 'disabled'; ?> <?php if (in_array("DAY1_TR2", $apply_track_array)) echo 'checked'; ?>/><label
                                    for="track_list_1_2">미디어 & 엔터테인먼트</label></li>
                        <li><input type="radio" id="track_list_1_3" name="apply_track1" class="track1" readonly
                                   onclick="return false"
                                   value="DAY1_TR3" <?php if (strpos($apply_product_code, "26") !== false) echo 'disabled'; ?> <?php if (in_array("DAY1_TR3", $apply_track_array)) echo 'checked'; ?>/><label
                                    for="track_list_1_3">게임: 아트</label></li>
                    </ul>
                </div>
                <div class="track_list">
                    <p class="title">DAY 2. 8월 26일(화)</p>
                    <ul <?php if (!in_array("DAY2_TR1", $apply_track_array) && !in_array("DAY2_TR2", $apply_track_array) && !in_array("DAY2_TR3", $apply_track_array)) echo 'style="opacity:0.5"'; ?>>
                        <li><input type="radio" id="track_list_2_1" required name="apply_track2" class="track1"
                                   readonly onclick="return false"
                                   value="DAY2_TR1" <?php if (strpos($apply_product_code, "25") !== false) echo 'disabled'; ?> <?php if (in_array("DAY2_TR1", $apply_track_array)) echo 'checked'; ?>/><label
                                    for="track_list_2_1">게임</label></li>
                        <li><input type="radio" id="track_list_2_2" name="apply_track2" class="track1" readonly
                                   onclick="return false"
                                   value="DAY2_TR2" <?php if (strpos($apply_product_code, "25") !== false) echo 'disabled'; ?> <?php if (in_array("DAY2_TR2", $apply_track_array)) echo 'checked'; ?>/><label
                                    for="track_list_2_2">미디어 & 엔터테인먼트</label></li>
                        <li><input type="radio" id="track_list_2_3" name="apply_track2" class="track1" readonly
                                   onclick="return false"
                                   value="DAY2_TR3" <?php if (strpos($apply_product_code, "25") !== false) echo 'disabled'; ?> <?php if (in_array("DAY2_TR3", $apply_track_array)) echo 'checked'; ?>/><label
                                    for="track_list_2_3">제조 및 시뮬레이션</label></li>
                    </ul>
                </div>
            </div>

            <script>
                $(document).ready(function () {
                    fn_pay_select_normal('<?=$apply_product_type?>')
                });
            </script>
            <script>

                function reload_track_check(no,track){
                    $.ajax({
                        type: "GET",
                        url: "/v3/unrealfest2025/_applicaiton_ajax.php",
                        data: {
                            code: '<?=$apply_product_code?>',
                            track: track
                        },
                        success: function (res) {
                            console.log(res);

                            if (res.result == true) {
                                //$("input.track1[value='" + track + "']").prop("disabled", false);
                                //$("input.track1[value='" + track + "']").prop("disabled", false);
                                //$("input.track1[value='" + track + "']").prop("checked", false);
                                //$("input.track1[value='" + track + "']").closest('li').css('opacity', '1');
                                //$("#track" + no + "_ll").removeClass("fullbooking");
                            } else {
                                $("input.track1[value='" + track + "']").prop("checked", false);
                                $("input.track1[value='" + track + "']").prop("disabled", true);
                                $("input.track1[value='" + track + "']").closest('li').css('opacity', '0.2');
                                $("#track"+no+"_ll").addClass("fullbooking");
                            }
                        }
                    });
                }
                function fn_pay_select_normal(type) {
                    reload_track_check(1,"DAY1_TR1");
                    reload_track_check(2,"DAY1_TR2");
                    reload_track_check(3,"DAY1_TR3");
                    reload_track_check(4,"DAY2_TR1");
                    reload_track_check(5,"DAY2_TR2");
                    reload_track_check(6,"DAY2_TR3");
                }
            </script>

            <span class="bd_line"></span>
            <h3 class="h3">결제수단</h3>
            <div class="member_form_list">
                <label for="apply_user_ex1">신용카드</label>
            </div>
            <br><br><br>
            <!--
                        <?
              //약관동의  include
              include_once "agree_include.php";
              ?>
            
              -->   
              <div class="ft_btn_box">
                  <a href="#n" onclick="history.back()" class="btn_cancle">이전</a>
            
                  <?
            
                  if($device_check=="pc"){
                      ?>
                      <button type="button" onclick="on_pay_pc()"  name="" id="" class="btn_1" />결제하기</button>
                      <?
                  }else{
                      ?>
                      <button type="button" onclick="on_pay()"  name="" id="" class="btn_1" />결제하기</button>
                      <?
                  }
                  ?>
              </div>
        </div>

       
    </div>
</div>
</div>
<?php
include_once "member_footer.php";
?>


<script>
    function on_pay() {

        $("input[name=P_INI_PAYMENT]").val("CARD");
        myform = document.mobileweb;
        myform.action = "https://mobile.inicis.com/smart/payment/";
        myform.target = "_self";
        myform.submit();
    }
    function on_pay_pc() {
        $("#P_MOBILE").val($("#apply_user_phone").val());
        $("#P_EMAIL").val($("#apply_user_email").val());

        $("#buyertel").val($("#apply_user_phone").val());
        $("#buyeremail").val($("#apply_user_email").val());


        var paymethod = "CARD";
        if(paymethod == "CARD"){
            $("input[name=gopaymethod]").val("Card");
        }else if(paymethod == "KAKAOPAY"){
            $("input[name=gopaymethod]").val("Card");
        }else if(paymethod == "NAVERPAY"){
            $("input[name=gopaymethod]").val("Card");
        }else if(paymethod == "VBANK"){
            $("input[name=gopaymethod]").val("vbank");
        }
        INIStdPay.pay('SendPayForm_id');
    }
</script>

<form name="mobileweb" id="" method="post" class="mt-5" accept-charset="euc-kr" style="display: none">
    <div class="row g-3 justify-content-between" style="--bs-gutter-x:0rem;">

        <label class="col-10 col-sm-2 input param" style="border:none;">P_INI_PAYMENT</label>
        <label class="col-10 col-sm-9 input">
            <input type="text" name="P_INI_PAYMENT" value="CARD">
        </label>

        <label class="col-10 col-sm-2 input param" style="border:none;">P_MID</label>
        <label class="col-10 col-sm-9 input">
            <input type="text" name="P_MID" value="MOIepiclou">
        </label>

        <label class="col-10 col-sm-2 input param" style="border:none;">P_OID</label>
        <label class="col-10 col-sm-9 input">
            <input type="text" name="P_OID" value="<?=$orderNumber?>">
        </label>

        <label class="col-10 col-sm-2 input param" style="border:none;">P_AMT</label>
        <label class="col-10 col-sm-9 input">
            <input type="text" name="P_AMT" value="<?=$price?>">
        </label>

        <label class="col-10 col-sm-2 input param" style="border:none;">P_GOODS</label>
        <label class="col-10 col-sm-9 input">
            <input type="text" name="P_GOODS" value="<?=$product_name?>">
        </label>

        <label class="col-10 col-sm-2 input param" style="border:none;">P_UNAME</label>
        <label class="col-10 col-sm-9 input">
            <input type="text" name="P_UNAME" value="<?=$_SESSION["RSLT_NAME"]?>">
        </label>

        <label class="col-10 col-sm-2 input param" style="border:none;">P_MOBILE</label>
        <label class="col-10 col-sm-9 input">
            <input type="text" name="P_MOBILE" id="P_MOBILE" value="<?=$_SESSION["TEL_NO"]?>">
        </label>
        <label class="col-10 col-sm-2 input param" style="border:none;">P_EMAIL</label>
        <label class="col-10 col-sm-9 input">
            <input type="text" name="P_EMAIL" id="P_EMAIL" value="<?=$_POST['inputEmail']?>">
        </label>

        <input type="hidden" name="P_NEXT_URL" value="https://epiclounge.co.kr/v3/unrealfest2025/inisis/INImobile_mo_return.php">
        <input type="hidden" name="P_NOTI_URL" value="https://epiclounge.co.kr/v3/unrealfest2025/inisis/vbank_succ.php">

        <input type="hidden" name="P_CHARSET" value="utf8">

        <label class="col-10 col-sm-2 input param" style="border:none;">P_RESERVED</label>
        <label class="col-10 col-sm-9 input">
            <input type="text" name="P_RESERVED" value="below1000=Y&vbank_receipt=Y&centerCd=Y">
        </label>

    </div>
</form>



<form name="SendPayForm_id" id="SendPayForm_id" method="post" class="mt-5" style="display: none">
    <div class="row g-3 justify-content-between" style="--bs-gutter-x:0rem;">
        <input type="hidden" name="version" value="1.0">
        <!--/label-->

        <label class="col-10 col-sm-2 input param" style="border:none;">gopaymethod</label>
        <label class="col-10 col-sm-9 input">
            <input type="text" name="gopaymethod" value="Card:Directbank:vbank">
        </label>

        <label class="col-10 col-sm-2 input param" style="border:none;">mid</label>
        <label class="col-10 col-sm-9 input">
            <input type="text" name="mid" value="<?php echo $mid ?>">
        </label>

        <label class="col-10 col-sm-2 input param" style="border:none;">oid</label>
        <label class="col-10 col-sm-9 input">
            <input type="text" name="oid" value="<?php echo $orderNumber ?>">
        </label>

        <label class="col-10 col-sm-2 input param" style="border:none;">price</label>
        <label class="col-10 col-sm-9 input">
            <input type="text" name="price" value="<?php echo $price ?>">
        </label>

        <label class="col-10 col-sm-2 input param" style="border:none;">timestamp</label>
        <label class="col-10 col-sm-9 input">
            <input type="text" name="timestamp" value="<?php echo $timestamp ?>">
        </label>


        <input type="hidden" name="use_chkfake" value="<?php echo $use_chkfake ?>">
        <input type="hidden" name="signature" value="<?php echo $sign ?>">
        <input type="hidden" name="verification" value="<?php echo $sign2 ?>">
        <input type="hidden" name="mKey" value="<?php echo $mKey ?>">
        <input type="hidden" name="currency" value="WON">


        <label class="col-10 col-sm-2 input param" style="border:none;">goodname</label>
        <label class="col-10 col-sm-9 input">
            <input type="text" name="goodname" value="<?=$product_name?>">
        </label>

        <label class="col-10 col-sm-2 input param" style="border:none;">buyername</label>
        <label class="col-10 col-sm-9 input">
            <input type="text" name="buyername" value="<?=$_SESSION["RSLT_NAME"]?>">
        </label>

        <label class="col-10 col-sm-2 input param" style="border:none;">buyertel</label>
        <label class="col-10 col-sm-9 input">
            <input type="text" name="buyertel" id="buyertel"  value="<?=$_SESSION["TEL_NO"]?>">
        </label>

        <label class="col-10 col-sm-2 input param" style="border:none;">buyeremail</label>
        <label class="col-10 col-sm-9 input">
            <input type="text" name="buyeremail" id="buyeremail" value="<?=$_POST['inputEmail']?>">
        </label>

        <input type="hidden" name="returnUrl" value="https://epiclounge.co.kr/v3/unrealfest2025/inisis_pc/INIstdpay_pc_return.php">
        <input type="hidden" name="closeUrl" value="https://epiclounge.co.kr/v3/unrealfest2025/inisis_pc/close.php">

        <label class="col-10 col-sm-2 input param" style="border:none;">acceptmethod</label>
        <label class="col-10 col-sm-9 input">
            <input type="text" name="acceptmethod" value="HPP(1):below1000:centerCd(Y)">
        </label>

    </div>
</form>
</body>

</html>
