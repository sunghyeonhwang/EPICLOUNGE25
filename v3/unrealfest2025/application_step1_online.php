<?php
include_once "../common.php";
include_once "member_header_update2.php";
?>

  <div class="memeber_container">
      <div class="wrap">
       
	   <div class="member_title_box">
      <h3 class="title"><a href="https://epiclounge.co.kr/unrealfest2025/"><img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/member_top_text.svg" /></a></h3>
		</div>
	 
		<div class="member_cont_box">
		<div class="online_title">
			<h4>Online Ticket</h4>
			<p>양일간 온라인 중계가 무료로 제공됩니다. 발표자 동의 세션만 중계되며, Q&amp;A는 제외됩니다.</p>
		</div>
		<h3 class="h3">본인 인증</h3>
		<h4 class="h4">본인 인증 방법 선택</h4>
		<div class="ipin_sel">
			<div class="ipin_sel_box phone_box">
				<a href="#n" onclick="jsSubmit()">
					<span class="icon"></span>
					<span class="text_box">
						<span class="title">휴대폰</span>
						<span class="text">본인 명의로 된 휴대폰으로 인증번호를 전송 받아 인증</span>
					</span>
				</a>
			</div>

			
			<div class="ipin_sel_box ipin_box">
				<a href="#n" onclick="jsSubmitPin()">
					<span class="icon"></span>
					<span class="text_box">
						<span class="title">아이핀</span>
						<span class="text">본인 명의로 된 아이핀을 이용 인증</span>
					</span>
				</a>
			</div>
		</div>


            <form name="frm" method="post" action="">
                <fieldset>
                    <input type="hidden" name="apply_product_name" id="apply_product_name" value="" />
                    <input type="hidden" name="apply_product_price" id="apply_product_price" value="" />
                    <input type="hidden" name="apply_product_code" id="apply_product_code" value="" />
                    <input type="hidden" name="apply_track" id="apply_track" value="" />
                    <input type="hidden" name="apply_ci" id="apply_ci" value="" />
                    <input type="hidden" name="apply_di" id="apply_di" value="" />
                    <input type="hidden" name="apply_real_type" id="apply_real_type" value="" />
		<h4 class="h4">안내 사항</h4>
		<ul class="bu type2">
          <li>본인 인증은 휴대폰, 아이핀 한가지 방법으로 선택 가능합니다.</li>
          <li>아이핀으로 아이디 발급이 불가능한 경우 가까운 아이핀 발급기관(나이스평가정보, SCI평가정보, 코리아크레딧뷰로) 본사 방문을 통해 발급이 가능합니다. (보다 자세한 사항은 각 사 홈페이지를 참고하시기 바랍니다.)</li>
          <li>본인 인증 절차가 정상적으로 이루어지지 않을 경우 휴대폰 본인 인증은 코리아크레딧뷰로   <em class="em_blue">전화: <a href="tel:02-708-1000">02-708-1000</a></em>으로 문의하시기 바랍니다.</li>
          <li>본인 인증에 대한 다른 궁금한 사항은 고객센터로 문의하여 주시기 바랍니다. <em class="em_blue"> <a href="https://www.ok-name.co.kr/CommonSvl?tc=kcb.acs.non.mn.cmd.LandMainCmd" target="_blank">고객센터 바로가기</a></em></li>
        </ul>

 <h3 class="h3  mt_100"">기본 정보</h3>
                  <div class="member_form_box">
                      <div class="member_form_list">
                          <label for="apply_user_name">이름</label>
                          <input type="text" class="intext" name="apply_user_name" id="apply_user_name" placeholder="본인 인증 이름" value="<?=$_SESSION["RSLT_NAME"]?>" readonly onclick="on_check_name_phone()"  />
                      </div>
                      <div class="member_form_list">
                          <label for="apply_user_email">이메일<em class="em_red">*</em></label>
                          <input type="text" class="intext" name="apply_user_email" id="apply_user_email" value="<?=$temp_data["apply_user_email"]?>"   required placeholder="이메일을 정확히 입력해 주세요." />
                      </div>

                      <div class="member_form_list">
                          <label for="apply_user_phone">연락처<em class="em_red">*</em></label>
                          <input type="text" class="intext" name="apply_user_phone" id="apply_user_phone" value="<?=$_SESSION["TEL_NO"]?>" placeholder="본인 인증 휴대전화" onclick="on_check_name_phone()"  />
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
                          <label for="apply_user_ex1">산업/관심 분야<em class="em_red">*</em></label>
                          <select class="insel" name="apply_user_ex1" id="apply_user_ex1" required>
                              <option value='' <?=$temp_data["apply_user_ex1"] == "" ? "selected=true":""?>>관심 분야를 선택해 주세요.</option>
                              <option <?=$temp_data["apply_user_ex1"] == "게임" ? "selected='selected'" : ""?>>게임</option>
                              <option <?=$temp_data["apply_user_ex1"] == "건축" ? "selected='selected'" : ""?>>건축</option>
                              <option <?=$temp_data["apply_user_ex1"] == "자동차&운송" ? "selected='selected'" : ""?>>자동차&amp;운송</option>
                              <option <?=$temp_data["apply_user_ex1"] == "영화&TV" ? "selected='selected'" : ""?>>영화&amp;TV</option>
                              <option <?=$temp_data["apply_user_ex1"] == "방송&라이브 이벤트" ? "selected='selected'" : ""?>>방송&amp;라이브 이벤트</option>
                              <option <?=$temp_data["apply_user_ex1"] == "애니메이션" ? "selected='selected'" : ""?>>애니메이션</option>
                              <option <?=$temp_data["apply_user_ex1"] == "제조" ? "selected='selected'" : ""?>>제조</option>
                              <option <?=$temp_data["apply_user_ex1"] == "소프트웨어&툴 개발" ? "selected='selected'" : ""?>>소프트웨어&amp;툴 개발</option>
                              <option <?=$temp_data["apply_user_ex1"] == "VR/AR" ? "selected='selected'" : ""?>>VR/AR</option>
                              <option <?=$temp_data["apply_user_ex1"] == "교육" ? "selected='selected'" : ""?>>교육</option>
                              <option <?=$temp_data["apply_user_ex1"] == "기타" ? "selected='selected'" : ""?>>기타</option>
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
                          <select class="insel" name="apply_user_grade" id="apply_user_grade" required>
                              <option value="">선택</option>
                              <option class="normal" <?=$temp_data["apply_user_grade"] == "비주얼아트"?"selected='selected'":""?>>비주얼아트</option>
                              <option class="normal" <?=$temp_data["apply_user_grade"] == "프로그래밍"?"selected='selected'":""?>>프로그래밍</option>
                              <option class="normal" <?=$temp_data["apply_user_grade"] == "프로덕션"?"selected='selected'":""?>>프로덕션</option>
                              <option class="normal" <?=$temp_data["apply_user_grade"] == "엔지니어링"?"selected='selected'":""?>>엔지니어링</option>
                              <option class="normal" <?=$temp_data["apply_user_grade"] == "설계"?"selected='selected'":""?>>설계</option>
                              <option class="normal" <?=$temp_data["apply_user_grade"] == "기획"?"selected='selected'":""?>>기획</option>
                              <option class="normal" <?=$temp_data["apply_user_grade"] == "R&D"?"selected='selected'":""?>>R&D</option>
                              <option class="normal" <?=$temp_data["apply_user_grade"] == "IT"?"selected='selected'":""?>>IT</option>
                              <option class="normal" <?=$temp_data["apply_user_grade"] == "감독/PD"?"selected='selected'":""?>>감독/PD</option>
                              <option class="normal" <?=$temp_data["apply_user_grade"] == "비즈니스/마케팅"?"selected='selected'":""?>>비즈니스/마케팅</option>
                              <option class="normal" <?=$temp_data["apply_user_grade"] == "C-level"?"selected='selected'":""?>>C-level</option>
                              <option class="normal" <?=$temp_data["apply_user_grade"] == "기타"?"selected='selected'":""?>>기타</option>
                          </select>
                      </div>

                      
                  </div>
				  
                  <span class="bd_line"></span>
                  <h3 class="h3">약관동의<em class="em_red">*</em></h3>
				  <div class="memeber_agree">
				  	<ul>
						<li><input type="checkbox" id="m_agree_1" name="m_agree_1" /><label for="m_agree_1">만 18세 이상입니다.<em class="em_red">*</em></label></li>
            <li><input type="checkbox" id="m_agree_2" name="m_agree_2" /><label for="m_agree_2">에픽 라운지 <a href="https://epiclounge.co.kr/contents/ode.php" title="새창" target="_blank">이용 약관</a>에 동의하며,  정보가 에픽 라운지 <a href="https://epiclounge.co.kr/contents/personal.php" title="새창" target="_blank">개인정보 보호정책</a>에 따라 사용됨을 확인합니다.<em class="em_red">*</em></label></li>
						<li><input type="checkbox" id="m_agree_3" name="m_agree_3" /><label for="m_agree_3">광고 수신 동의</label></li>
					</ul>
				  </div>

<!--
                  <?
                  //약관동의  include
                  include_once "agree_include.php";
                  ?>

   -->               <div class="ft_btn_box">
   							<a href="#" onclick="goBack();" class="btn_cancle">이전</a>
                      <button type="button" onclick="on_pay()"  name="" id="" class="btn_1" />등록하기</button>
					  <script type="text/javascript">
    function goBack(){
        window.history.back();
    }
</script>
                  </div>
              </fieldset>
          </form>
      </div>
    </div>
  </div>

<script>

    function on_check_name_phone(){

        if (!$("#apply_real_type").val()) {
            alert("본인인증을 진행해주시기 바랍니다.");
            return;
        }
    }

    function on_pay() {

        if (!$("#apply_ci").val()) {
            alert("본인인증이 필요합니다.");
            return;
        }
        if($("#apply_user_email").val() == ""){
            alert("이메일을 입력해주세요.");
            return;
        }

        if($("#apply_user_phone").val() == ""){
            alert("연락처를 입력해주세요.");
            return;
        }

        if($("#apply_user_job").val() == ""){
            alert("직업을 입력해주세요.");
            return;
        }
        if($("#apply_user_company").val() == ""){
            alert("회사명을 입력해주세요.");
            return;
        }
        if($("#apply_user_ex1").val() == ""){
            alert("산업/관심 분야를 입력해주세요");
            return;
        }
        if($("#apply_user_grade").val() == ""){
            alert("직무를 입력해주세요.");
            return;
        }
        if (!$("#m_agree_1").is(":checked")) {
            alert("만 18세 이상 동의가 필요합니다.");
            return;
        }
        if (!$("#m_agree_2").is(":checked")) {
            alert("에픽 라운지 이용 약관에 동의해 주세요.");
            return;
        }

        $("#spinner").show();

        var track1Values = $("input.track1:checked").map(function () {
            return $(this).val();
        }).get().join(',');

        $.ajax({
            type: "POST",
            url: "/v3/unrealfest2025/_applicaiton_online_ajax.php",
            data: {
                apply_user_name: $("#apply_user_name").val(),
                agree_se4: $("#m_agree_3").prop("checked"),
                apply_user_email:  $("#apply_user_email").val(),
                apply_user_phone:  $("#apply_user_phone").val(),
                apply_user_company:  $("#apply_user_company").val(),
                apply_user_depart:  $("#apply_user_depart").val(),
                apply_user_grade:  $("#apply_user_grade").val(),
                apply_user_ex1:  $("#apply_user_ex1").val(),
                apply_product_name:  $("#apply_product_name").val(),
                apply_product_price: $("#apply_product_price").val(),
                apply_product_code: $("#apply_product_code").val(),
                apply_user_job: $("#apply_user_job").val(),
					
                apply_track: track1Values,
            },
            success: function (data) {
                console.log(data);
                var response = data;
                if (!response.result) {
                    alert(response.msg);
                    return;
                }
                location.href = "/v3/unrealfest2025/application_step3_online.php";
            },
            complete: function () {
                // 요청 완료 시 스피너 숨기기
                $("#spinner").hide();
            }
        });
    }
</script>

<?php
include_once "member_footer.php";
?>


<script>
    <!--
    function jsSubmit(){

        window.open("/v3/unrealfest2025/real/phone_popup2.php", "auth_popup", "width=430,height=640,scrollbars=yes");
        var form1 = document.form1;
        form1.target = "auth_popup";
        form1.submit();

    }
    //-->
</script>
<script>
    <!--
    function jsSubmitPin(){
        var popupWindow = window.open("/v3/unrealfest2025/real/ipin_popup2.php", "kcbPop", "left=200, top=100, status=0, width=450, height=550");
        popupWindow.focus()	;
    }
    //-->
</script>


<!-- 휴대폰 본인확인 팝업 처리결과 정보 = phone_popup3 에서 값 입력 -->
<form name="kcbResultForm" method="post" class="hidden">
    <input type="hidden" name="CP_CD" />
    <input type="hidden" name="TX_SEQ_NO" />
    <input type="hidden" name="RSLT_CD" />
    <input type="hidden" name="RSLT_MSG" />

    <input type="hidden" name="RSLT_NAME" />
    <input type="hidden" name="RSLT_BIRTHDAY" />
    <input type="hidden" name="RSLT_SEX_CD" />
    <input type="hidden" name="RSLT_NTV_FRNR_CD" />

    <input type="hidden" name="DI" />
    <input type="hidden" name="CI" />
    <input type="hidden" name="CI2" />
    <input type="hidden" name="CI_UPDATE" />
    <input type="hidden" name="TEL_COM_CD" />
    <input type="hidden" name="TEL_NO" />
    <input type="hidden" name="VSSN" />

    <input type="hidden" name="RETURN_MSG" />

    <input type="hidden" name="apply_product_name" value="" id="ipin_apply_product_name">
    <input type="hidden" name="apply_product_price" value="" id="ipin_apply_product_price">
    <input type="hidden" name="apply_product_code" value="" id="ipin_apply_product_code">
    <input type="hidden" name="apply_track" value="" id="ipin_apply_track"><br />

</form>

</body>

</html>
