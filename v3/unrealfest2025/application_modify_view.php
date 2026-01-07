<?php
include_once "../common.php";
include_once "member_header.php";

$_SESSION["mode"] = "pay";
//$_SESSION["mode"] = "free";

$_SESSION["prev_post"] = $_POST;
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


$apply_user_email = $_POST['inputEmail'];
$apply_user_phone = str_replace("-", "", $_POST['apply_user_phone']);

$mysqli = new mysqli("localhost","unrealengine","Good121930!@","unrealengine");

$sql = "select count(*) from cb_unreal_2025_event2_apply where apply_user_email = '$apply_user_email' and apply_temp_yn='N' limit 1";
$result = $mysqli -> query($sql);
$obj = $result -> fetch_array();
if(!$obj[0]['count']){
    echo '<script type="text/javascript">';
    echo " alert('등록되지 않은 메일입니다.'); history.go(-1);";
    echo '</script>';
    exit();
};

$sql = "select count(*) from cb_unreal_2025_event2_apply where REPLACE(apply_user_phone, '-', '') = '$apply_user_phone' and apply_temp_yn='N' limit 1";
$result = $mysqli -> query($sql);
$obj = $result -> fetch_array();
if(!$obj[0]['count']){
    echo '<script type="text/javascript">';
    echo " alert('등록되지 않은 연락처입니다.'); history.go(-1);";
    echo '</script>';
    exit();
};

$sql = "select 
*
from cb_unreal_2025_event2_apply where apply_user_email = '$apply_user_email' and REPLACE(apply_user_phone, '-', '') = '$apply_user_phone' and apply_temp_yn='N'  limit 1";
$result = $mysqli -> query($sql);
$obj = $result -> fetch_array();
if(count($obj[0])){
}else{
    echo '<script type="text/javascript">';
    echo " alert('이메일 혹은 전화번호를 확인해주세요.'); history.go(-1);";
    echo '</script>';
    exit();
}
$apply_sc = sql_fetch("select * from cb_unreal_2025_event2_apply where apply_user_email = '$apply_user_email' and REPLACE(apply_user_phone, '-', '') = '$apply_user_phone' and apply_temp_yn='N'  limit 1");
$temp_data = $apply_sc;
$pass_flag = false;
if($apply_sc["free_yn"] == "Y"){
    $pass_flag = true;
}else if($apply_sc["free_yn"] == "N" && $apply_sc["pay_complete"] == "Y"  && empty($apply_sc["refund_time"]) ){
    //결제완료
    $pass_flag = true;
}else{
    $pass_flag = false;
}
/*if($pass_flag == false){
    echo '<script type="text/javascript">';
    echo " alert('결제가 완료되지 않았습니다.'); ";
    echo '</script>';

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


    $_SESSION["VBANK_NUM"]  = $apply_sc["pay_vact_num"];
    $_SESSION["VBANK_NM"]  = $BANK_CODE[$apply_sc["pay_vact_bankcode"]];
    $_SESSION["VBANK_AMOUNT"]  = $apply_sc["pay_totprice"];


    include_once "application_vbank_result.html";
    exit();
}*/

$mysqli -> close();



?>


  <div class="memeber_container">
      <div class="wrap">
       
	   <div class="member_title_box">
			<h3 class="title"><img src="/v3/unrealfest2025/images/member_top_text.svg" /></h3>
		</div>
        <?php
        $old_price = 0;
        switch ($apply_sc["apply_product_code"]) {
            case "NORMAL_ALL":
                $old_price = 120000;
                break;
            case "NORMAL_25":
                $old_price = 60000;
                break;
            case "NORMAL_26":
                $old_price = 60000;
                break;
        }


        $apply_product_name = $obj["apply_product_name"];
        $apply_reg_datetime = $obj["apply_reg_datetime"];


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
        ?>

        <?php if($obj["free_yn"] == "Y"){ ?>
           <div class="ap_qrcode_box"> <p class="complete_title">온라인 등록이 완료되었습니다.<br />온라인 체크인 시, 등록하신 이메일을 입력해 주세요.</p>
		   </div>
        <? }else{ ?>

		
		<div class="ap_qrcode_box">
			<h3 class="h3"><em>언리얼 페스트 서울 2025  등록정보</em> </h3>
			<div class="qr_top_box">
				<div class="qr_img_box_wrap">
					<p class="qr_title"><?=$apply_product_name?></p>
					
					<!--
					<?
                if($obj["apply_track"] == "쿠폰"){

                }else{
                    ?><em class="em_red"><?=$obj["apply_track"]?></em><?
                }?><br />QR코드를 확인하세요.<br /><!--이름과 연락처를 제외한 정보를 수정하실 수 있습니다.-->
			
       
                <?


                if(empty($obj)){
                    ?>
                    <p class="qr_img_box"><img src="https://epiclounge.co.kr/v3/unrealfest2025/qrdata/<?=$_SESSION["final_idx"]?>.jpg" alt="QR 코드" /></p><?
                }else{
                    ?>
                    <p class="qr_img_box"><img src="https://epiclounge.co.kr/v3/unrealfest2025/qrdata/<?=$obj["apply_no"]?>.jpg" alt="QR코드" /></p><?
                }
                ?>


            </div>
			<div class="qr_text_box_wrap">
					<h4>안내 사항</h4>
					<ul>
                        <li>QR 코드는 문자로 발송되며 행사 1일 전 한번 더 발송 될 예정입니다.</li>
                        <li>오프라인 티켓을 구매하시면, 추가로 등록 없이 온라인 중계도 시청하실 수 있습니다.</li>
					</ul>

					<h4>환불 안내</h4>
                    <ul>
                        <li>일반 티켓은 8월 23일, 오후 11시59분까지 취소가 가능합니다.(얼리버드 티켓 환불은 종료되었습니다.)</li>
                        <li>문의:  <a href="tel:023263701" target="_blank">언리얼 페스트 사무국(02-326-3701)</a>, <a href="mailto:unrealfest@epiclounge.co.kr" target="_blank"> 이메일</a></li>
                    </ul>
				</div>
			</div>
			</div>
        <? } ?>


		<div class="member_cont_box">
        <form id="login-form" name="login-form" action="#n" method="post" enctype="multipart/form-data">
            <input type="hidden" name="apply_no" id="apply_no" value="<?=$apply_sc["apply_no"]?>" />
            <input type="hidden" name="apply_user_email" id="apply_user_email" value="<?=$apply_sc["apply_user_email"]?>" />
            <input type="hidden" name="apply_user_phone" id="apply_user_email" value="<?=$apply_sc["apply_user_phone"]?>" />

            <h3 class="h3">기본 정보</h3>
            <div class="member_form_box">
                <div class="member_form_list">
                    <label for="apply_user_name">이름</label>
                    <input type="text" class="intext" name="apply_user_name" id="apply_user_name" disabled  placeholder="본인인증 이름" value="<?=$apply_sc["apply_user_name"]?>"   />
                </div>
                <div class="member_form_list">
                    <label for="apply_user_email">이메일<em class="em_red">*</em></label>
                    <input type="text" class="intext" name="apply_user_email" id="apply_user_email" disabled value="<?=$apply_sc["apply_user_email"]?>"   required placeholder="이메일을 정확히 입력해 주세요." />
                </div>

                <div class="member_form_list">
                    <label for="apply_user_phone">연락처</label>
                    <input type="text" class="intext" name="apply_user_phone" id="apply_user_phone" disabled value="<?=$apply_sc["apply_user_phone"]?>"  placeholder="본인인증 휴대전화" />
                </div>
            </div>
            <span class="bd_line"></span>
            <h3 class="h3">추가 정보</h3>
            <div class="member_form_box">
              <div class="member_form_list">
                  <label for="apply_user_job">직업<em class="em_red">*</em></label>
                  <select class="insel" name="apply_user_job" id="apply_user_job" required>
                      <option value="">선택</option>
                      <option class="normal" <?=$temp_data["apply_user_job"] == "직장인"?"selected='selected'":""?>>직장인</option>
                      <option class="normal" <?=$temp_data["apply_user_job"] == "인디/프리랜서"?"selected='selected'":""?>>인디/프리랜서</option>
                      <option class="normal" <?=$temp_data["apply_user_job"] == "학생/교육기관"?"selected='selected'":""?>>학생/교육기관</option>
                      <option class="normal" <?=$temp_data["apply_user_job"] == "기타"?"selected='selected'":""?>>기타</option>
                  </select>
              </div>
                <div class="member_form_list">
                    <label for="apply_user_company">회사명/소속<em class="em_red">*</em></label>
                    <input type="text" class="intext" name="apply_user_company" id="apply_user_company" value="<?=$temp_data["apply_user_company"]?>"   required placeholder="회사명을 입력해 주세요." />
                </div>
                
                <div class="member_form_list">
                    <label for="apply_user_ex1">산업/관심분야<em class="em_red">*</em></label>
                    <select class="insel" name="apply_user_ex1" id="apply_user_ex1" required>
                        <option value="" <?=$apply_sc["apply_user_ex1"] == "" ? "selected=true":""?>>관심 분야를 선택해 주세요.</option>
                        <option <?=$apply_sc["apply_user_ex1"] == "게임" ? "selected='selected'" : ""?>>게임</option>
                        <option <?=$apply_sc["apply_user_ex1"] == "건축" ? "selected='selected'" : ""?>>건축</option>
                        <option <?=$apply_sc["apply_user_ex1"] == "자동차&운송" ? "selected='selected'" : ""?>>자동차&amp;운송</option>
                        <option <?=$apply_sc["apply_user_ex1"] == "영화&TV" ? "selected='selected'" : ""?>>영화&amp;TV</option>
                        <option <?=$apply_sc["apply_user_ex1"] == "방송&라이브 이벤트" ? "selected='selected'" : ""?>>방송&amp;라이브 이벤트</option>
                        <option <?=$apply_sc["apply_user_ex1"] == "애니메이션" ? "selected='selected'" : ""?>>애니메이션</option>
                        <option <?=$apply_sc["apply_user_ex1"] == "제조" ? "selected='selected'" : ""?>>제조</option>
                        <option <?=$apply_sc["apply_user_ex1"] == "소프트웨어&툴 개발" ? "selected='selected'" : ""?>>소프트웨어&amp;툴 개발</option>
                        <option <?=$apply_sc["apply_user_ex1"] == "VR/AR" ? "selected='selected'" : ""?>>VR/AR</option>
                        <option <?=$apply_sc["apply_user_ex1"] == "교육" ? "selected='selected'" : ""?>>교육</option>
                        <option <?=$apply_sc["apply_user_ex1"] == "기타" ? "selected='selected'" : ""?>>기타</option>
                    </select>
                    
                    <script>
                        $(document).ready(function() {
                            // Select the element using the class selector
                            var select = $('.insel');

                            // Apply the placeholder class to the first option
                            select.addClass('placeholder');

                            // Remove the placeholder class when the select element is focused
                            select.on('focus', function() {
                                $(this).removeClass('placeholder');
                            });

                            // Listen for change events
                            select.on('change', function() {
                                if ($(this).val() === '') {
                                    $(this).addClass('placeholder');
                                } else {
                                    $(this).removeClass('placeholder');
                                }
                            });


                            $("#agree_all").click(function() {
                                var checkedStatus = this.checked;
                                $("input[id^='agree_se']").each(function() {
                                    this.checked = checkedStatus;
                                });
                            });

                            $("input[id^='agree_se']").click(function() {
                                if (!this.checked) {
                                    $("#agree_all").prop('checked', false);
                                } else {
                                    var allChecked = true;
                                    $("input[id^='agree_se']").each(function() {
                                        if (!this.checked) {
                                            allChecked = false;
                                        }
                                    });
                                    $("#agree_all").prop('checked', allChecked);
                                }
                            });
                        });
                    </script>
                </div>
<div class="member_form_list">
                    <label for="apply_user_grade">직무<em class="em_red">*</em></label>
                    <select name="apply_user_grade" id="apply_user_grade">
                        <option value=''>선택</option>
                        <option <?=$temp_data["apply_user_grade"] == "비주얼아트"?"selected='selected'":""?>>비주얼아트</option>
                        <option <?=$temp_data["apply_user_grade"] == "프로그래밍"?"selected='selected'":""?>>프로그래밍</option>
                        <option <?=$temp_data["apply_user_grade"] == "프로덕션"?"selected='selected'":""?>>프로덕션</option>
                        <option <?=$temp_data["apply_user_grade"] == "엔지니어링"?"selected='selected'":""?>>엔지니어링</option>
                        <option <?=$temp_data["apply_user_grade"] == "설계"?"selected='selected'":""?>>설계</option>
                        <option <?=$temp_data["apply_user_grade"] == "기획"?"selected='selected'":""?>>기획</option>
                        <option <?=$temp_data["apply_user_grade"] == "R&D"?"selected='selected'":""?>>R&D</option>
                        <option <?=$temp_data["apply_user_grade"] == "IT"?"selected='selected'":""?>>IT</option>
                        <option <?=$temp_data["apply_user_grade"] == "감독/PD"?"selected='selected'":""?>>감독/PD</option>
                        <option <?=$temp_data["apply_user_grade"] == "비즈니스/마케팅"?"selected='selected'":""?>>비즈니스/마케팅</option>
                        <option <?=$temp_data["apply_user_grade"] == "C-level"?"selected='selected'":""?>>C-level</option>
                        <option <?=$temp_data["apply_user_grade"] == "기타"?"selected='selected'":""?>>기타</option>
                    </select>
                </div>
                
           <span class="bd_line"></span>
           <!--수정하기-->
           <!--<div class="ft_btn_box">
           <a href="javascript:;" onclick="fn_confirm()" id="" class="btn_1" >수정하기</a>
            </div>-->
          <!-- application_modify_view_check.php에서 기존 버튼 부분을 이것으로 교체하세요 -->
          
          <div class="ft_btn_box">
              <!-- 참가 확인증 발급 버튼 -->
             
                  <button onclick="issueCertificate()" class="btn_1" style="background: linear-gradient(135deg, #2D42DD, #AF47F6); color: white; border: none; border-radius: 8px; font-weight: 600; cursor: pointer; transition: transform 0.2s;">
                      참가 확인증 발급받기
              </div>
          </div>
          
          <script>
          function issueCertificate() {
              // PHP에서 올바른 변수 가져오기
              const userData = {
                  apply_user_name: "<?php echo htmlspecialchars($apply_sc['apply_user_name'], ENT_QUOTES, 'UTF-8'); ?>",
                  apply_user_company: "<?php echo htmlspecialchars($apply_sc['apply_user_company'], ENT_QUOTES, 'UTF-8'); ?>"
              };
              
              console.log('사용자 정보:', userData); // 디버깅용
              
              // 빈 값 체크
              if (!userData.apply_user_name || userData.apply_user_name.trim() === '') {
                  alert('사용자 이름 정보를 찾을 수 없습니다.');
                  return;
              }
              
              // 확인증 URL 생성
              const certificateUrl = `application_modify_view_certificate.html?name=${encodeURIComponent(userData.apply_user_name)}&company=${encodeURIComponent(userData.apply_user_company || '')}`;
              
              console.log('생성된 URL:', certificateUrl); // 디버깅용
              
              // 버튼 상태 변경
              const btn = event.target;
              const originalText = btn.innerHTML;
              btn.innerHTML = '확인증 생성 중... ⏳';
              btn.disabled = true;
              
              // 새 창으로 확인증 열기
              const certificateWindow = window.open(certificateUrl, 'certificate', 'width=800,height=1000,scrollbars=yes,resizable=yes');
              
              // 새 창이 열렸는지 확인
              if (!certificateWindow) {
                  alert('팝업이 차단되었습니다. 팝업 허용 후 다시 시도해주세요.');
              } else {
                  // 성공 메시지
                  setTimeout(() => {
                      alert(`${userData.apply_user_name}님의 참가 확인증이 생성되었습니다! 🎉`);
                  }, 1000);
              }
              
              // 버튼 상태 복원
              setTimeout(() => {
                  btn.innerHTML = originalText;
                  btn.disabled = false;
              }, 2000);
          }
          </script>

    </div>
</div>
</form>
<form id="qrform" name="qrform" action="application_qrcode.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="apply_user_email" value="<?=$apply_user_email?>" />
    <input type="hidden" name="apply_user_phone" value="<?=$apply_user_phone?>" />
</form>
</div>
<script>
    function fn_confirm(){
        if(confirm('수정하시겠습니까?')){


            // 파일 선택 여부 확인
            <?
            if(strpos($apply_sc["apply_product_code"],"NORMAL")  !== false){
            ?>


            if($("#apply_user_email").val() == ""){
                alert("이메일을 입력해주세요.");
                return;
            }
            if($("#apply_user_phone").val() == ""){
                alert("연락처를 입력해주세요.");
                return;
            }

            if($("#apply_user_company").val() == ""){
                alert("직장명을 입력해주세요.");
                return;
            }
            if($("#apply_user_depart").val() == ""){
                alert("부서를 입력해주세요.");
                return;
            }
            if($("#apply_user_grade").val() == ""){
                alert("직무를 입력해주세요.");
                return;
            }
            if($("#apply_user_ex1").val() == ""){
                alert("산업/관심 분야를 입력해주세요");
                return;
            }

            // FormData 객체 생성 및 데이터 추가
            var formData = new FormData();
            formData.append('apply_no', $("#apply_no").val());
            formData.append('apply_user_name', $("#apply_user_name").val());
            formData.append('apply_user_email', $("#apply_user_email").val());
            formData.append('apply_user_phone', $("#apply_user_phone").val());
            formData.append('apply_user_company', $("#apply_user_company").val());
            formData.append('apply_user_depart', $("#apply_user_depart").val());
            formData.append('apply_user_grade', $("#apply_user_grade").val());
            formData.append('apply_user_ex1', $("#apply_user_ex1").val());
            formData.append('apply_product_name', $("#apply_product_name").val());
            formData.append('apply_product_price', $("#apply_product_price").val());
            formData.append('apply_product_code', $("#apply_product_code").val());
            formData.append('apply_track', $("#apply_track").val());
            formData.append('apply_user_job', $("#apply_user_job").val());

            $("#spinner").show();
            $.ajax({
                type: "POST",
                url: "/v3/unrealfest2025/_applicaiton_update_std_ajax.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    $("#spinner").hide();
                    alert("수정이 완료되었습니다.");

                    location.href = "/v3/unrealfest2025/index.php";
                },
                complete: function () {
                    // 요청 완료 시 스피너 숨기기
                    $("#spinner").hide();
                }
            });
            <?
            }else{
            ?>



            if($("#apply_user_email").val() == ""){
                alert("이메일을 입력해주세요.");
                return;
            }
            if($("#apply_user_phone").val() == ""){
                alert("연락처를 입력해주세요.");
                return;
            }


            if($("#apply_user_company").val() == ""){
                alert("직장명/학교를 입력해주세요.");
                return;
            }
            if($("#apply_user_depart").val() == ""){
                alert("부서/학과를 입력해주세요.");
                return;
            }
            if($("#apply_user_grade").val() == ""){
                alert("직무/학년을 입력해주세요.");
                return;
            }
            if($("#apply_user_ex1").val() == ""){
                alert("산업/관심 분야를 입력해주세요");
                return;
            }

            // FormData 객체 생성 및 데이터 추가
            var formData = new FormData();
            formData.append('apply_no', $("#apply_no").val());
            formData.append('apply_user_name', $("#apply_user_name").val());
            formData.append('apply_user_email', $("#apply_user_email").val());
            formData.append('apply_user_phone', $("#apply_user_phone").val());
            formData.append('apply_user_company', $("#apply_user_company").val());
            formData.append('apply_user_depart', $("#apply_user_depart").val());
            formData.append('apply_user_grade', $("#apply_user_grade").val());
            formData.append('apply_user_ex1', $("#apply_user_ex1").val());
            formData.append('apply_product_name', $("#apply_product_name").val());
            formData.append('apply_product_price', $("#apply_product_price").val());
            formData.append('apply_product_code', $("#apply_product_code").val());
            formData.append('apply_track', $("#apply_track").val());
            formData.append('apply_user_job', $("#apply_user_job").val());

            $("#spinner").show();
            $.ajax({
                type: "POST",
                url: "/v3/unrealfest2025/_applicaiton_update_std_ajax.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                 $("#spinner").hide();
                    alert("수정이 완료되었습니다.")
                    // 페이지 이동
                    location.href = "/v3/unrealfest2025/index.php";
              //fn_move_main();
                },
                complete: function () {
                    // 요청 완료 시 스피너 숨기기
                    $("#spinner").hide();
                }
            });
            <?
            }
            ?>


        }
    }
    function home(val) {
        if(confirm('메인으로 이동하시겠습니까?')){
            location.replace('https://epiclounge.co.kr/');
        }
    }
    function cancle(val) {
        if(confirm('등록을 취소하시겠습니까?')){
            var email = $("#apply_user_email").val();
            var phone = $("#apply_user_phone").val();
            location.replace('/v3/unrealfest2025/cancel.php?mode2=del2&no=' + val + '&email=' + email + '&phone=' + phone);
        }
    }

    function cancle_coupon(val) {
        if(confirm('등록을 취소하시겠습니까?')){
            var email = $("#apply_user_email").val();
            var phone = $("#apply_user_phone").val();
            location.replace('/v3/unrealfest2025/cancel.php?mode2=del4&no=' + val + '&email=' + email + '&phone=' + phone);
        }
    }

    function cancle_refund(val) {
        if (confirm('결제를 취소하시겠습니까?\n취소 시 오프라인 행사등록이 불가능할 수 있습니다.')) {
            var email = $("#apply_user_email").val();
            var phone = $("#apply_user_phone").val();
            location.replace('/v3/unrealfest2025/cancel.php?mode2=del3&no=' + val + '&email=' + email + '&phone=' + phone);
        }
    }
    
</script>
</body>

</html>
  