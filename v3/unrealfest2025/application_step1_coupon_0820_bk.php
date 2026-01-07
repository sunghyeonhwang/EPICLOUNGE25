<?php
include_once "../common.php";
include_once "member_header_update2.php";
$coupon_serial=  $_GET["coupon_serial"];
$_SESSION["sponsored_coupon_yn"] = "N";
$coupon = sql_fetch("select * from cb_unreal_2025_event2_coupon where coupon_serial = '{$coupon_serial}' ");
if(empty($coupon)){
    $coupon = sql_fetch("select * from cb_unreal_2025_event2_coupon_sponsor where coupon_serial = '{$coupon_serial}' ");
    if(!empty($coupon)){
        $_SESSION["sponsored_coupon_yn"] = "Y";
    }
}
if($coupon_serial) {
    if(empty($coupon)){
        alert("쿠폰번호가 일치하지 않습니다. 다시 확인하여주세요.");
    }else{
        if (!empty($coupon["user_name"]) || !empty($coupon["usage_date"])) {
            alert("이미 사용된 쿠폰입니다.","application_step1_coupon.php");
        }

        $_SESSION["coupon_serial"] = $coupon_serial;
        $_SESSION["coupon_key"] = $coupon["coupon_key"];

    }

}else{

}
$coupon_type = $coupon["coupon_type"];
if($coupon_type == "25#26"){
    $apply_product_name = "일반 양일권";
    $apply_product_code = "NORMAL_ALL";
    $apply_product_type = "1";
}else if($coupon_type == "25"){
    $apply_product_name = "일반 25일권";
    $apply_product_code = "NORMAL_25";
    $apply_product_type = "2";
}else if($coupon_type == "26"){
    $apply_product_name = "일반 26일권";
    $apply_product_code = "NORMAL_26";
    $apply_product_type = "3";

}else{
    $apply_product_name = "일반 양일권";
    $apply_product_code = "NORMAL_ALL";
    $apply_product_type = "1";
}


$coupon_action_ajax = "/v3/unrealfest2025/_applicaiton_coupon_pay_ajax.php";
if($_SESSION["sponsored_coupon_yn"] == "Y"){
    $coupon_action_ajax = "/v3/unrealfest2025/_applicaiton_coupon_sp_pay_ajax.php";
}
?>
<script>
    $(document).ready(function () {
        <?php if(empty($coupon_serial)) { ?>
        // Disable all inputs and buttons except coupon_serial
        $('input:not(#coupon_serial), select, button:not(.coupon_btn)').prop('disabled', true);
        $('input[type="checkbox"]').prop('disabled', true);
        <?php } ?>


        fn_pay_select_normal('<?=$apply_product_type?>')
    });
</script>

<div class="memeber_container">
      <div class="wrap">
       
	   <div class="member_title_box">
      <h3 class="title"><a href="https://epiclounge.co.kr/unrealfest2025/"><img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/member_top_text.svg" /></a></h3>
		</div>
		<div class="ticket_list_box">
			<h3 class="h3">쿠폰 번호</h3>
			<div class="coupon_in_box">
				<form action="" name="" id="">
					<fieldset>
						<input type="text" class="coupon_intext" id="coupon_serial" name="coupon_serial" value="<?=$coupon_serial?>" />
						<button type="submit" class="coupon_btn">쿠폰 확인</button>
					</fieldset>
				</form>
			</div>
		
			<ul class="yellow_bu">
				<li>쿠폰 중복 확인을 반드시 진행 후 등록 정보를 기입해 주세요. </li>
			</ul>
		</div>
          <form id="redirectForm" action="/v3/unrealfest2025/application_step2_coupon.php" method="post"
                style="display:none">
              <input type="hidden" name="index" value="">
          </form>

          <div class="member_cont_box">
	<!--본인인증을 넣으려면 아래 주석 삭제
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
          </div>-->


          <form name="frm" method="post" action="">
              <fieldset>
                  <input type="hidden" name="apply_product_name" id="apply_product_name" value="<?=$apply_product_name?>" />
                  <input type="hidden" name="apply_product_price" id="apply_product_price" value="0" />
                  <input type="hidden" name="apply_product_code" id="apply_product_code" value="<?=$apply_product_code?>" />
                  <input type="hidden" name="apply_track" id="apply_track" value="" />
                  <!--본인인증을 넣으려면 아래 주석 삭제
                   <input type="hidden" name="apply_ci" id="apply_ci" value="" />
                  <input type="hidden" name="apply_di" id="apply_di" value="" /> -->
                  <input type="hidden" name="apply_coupon_no" id="apply_coupon_no" value="<?=$coupon["coupon_key"]?>" />


                  <h3 class="h3  mt_100"">기본 정보</h3>
                  <div class="member_form_box">
                      <div class="member_form_list">
                          <label for="apply_user_name">이름</label>
                          <input type="text" class="intext" name="apply_user_name" required="required" id="apply_user_name" placeholder="이름" value=""   />
                      </div>
                      <div class="member_form_list">
                          <label for="apply_user_email">이메일<em class="em_red">*</em></label>
                          <input type="text" class="intext" name="apply_user_email" id="apply_user_email" value="<?=$coupon["user_email"]?>"   required placeholder="이메일을 정확히 입력해 주세요." />
                      </div>

                      <div class="member_form_list">
                          <label for="apply_user_phone">연락처<em class="em_red">*</em></label>
                          <input type="text" class="intext" name="apply_user_phone" id="apply_user_phone" value="<?=$coupon["user_phone"]?>" placeholder="본인 인증 휴대전화" />
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
                          <input type="text" class="intext" name="apply_user_company" id="apply_user_company" value="<?=$coupon["coupon_name"]?>" <?=$_SESSION["sponsored_coupon_yn"] == "Y" ? "":"readonly"?>  required placeholder="회사명을 입력해 주세요." />
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
                          <script>function on_pay() {
                          // 이름 검증 추가
                          if (!$("#apply_user_name").val() || $("#apply_user_name").val().trim() === "") {
                              alert("이름을 입력해 주세요.");
                              $("#apply_user_name").focus();
                              return;
                          }
                          
                          if($("#apply_user_email").val() == ""){
                              alert("이메일을 입력해주세요.");
                              return;
                          }
                                  // 본인인증을 넣으려면 아래 주석 삭제
                                  // if (!$("#apply_ci").val()) {
                                  //     alert("본인 인증을 진행해 주세요.");
                                  //     return;
                                  // }
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

                                  var track1Selected = $("input[name='apply_track1']:checked").length > 0;
                                  var track2Selected = $("input[name='apply_track2']:checked").length > 0;

                                  if (!track1Selected && !track2Selected) {
                                      alert("최소 1개 이상의 참여 트랙을 선택해주세요.");
                                      return;
                                  }
                                  if ("<?php echo $coupon_type; ?>" === "25#26") {
                                      if (!track1Selected || !track2Selected) {
                                          alert("양일권의 경우 Day 1, Day 2 트랙을 모두 선택해주세요.");
                                          return;
                                      }
                                  } else if ("<?php echo $coupon_type; ?>" === "25" && !track1Selected) {
                                      alert("25일권의 경우 Day 1 트랙을 선택해주세요.");
                                      return;
                                  } else if ("<?php echo $coupon_type; ?>" === "26" && !track2Selected) {
                                      alert("26일권의 경우 Day 2 트랙을 선택해주세요.");
                                      return;
                                  }


                                  $("#spinner").show();

                                  var track1Values = $("input.track1:checked").map(function () {
                                      return $(this).val();
                                  }).get().join(',');

                                  $.ajax({
                                      type: "POST",
                                      url: "<?=$coupon_action_ajax?>",
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
                                          apply_track: track1Values,
                                          apply_coupon_no: $("#apply_coupon_no").val(),
                                          apply_user_job: $("#apply_user_job").val(),
                                      },
                                      success: function (data) {
                                          console.log(data);
                                          var response = data;
                                          if (!response.result) {
                                              alert(response.msg);
                                              return;
                                          } else {
                                              $('#redirectForm input[name="index"]').val(data.index);
                                              $('#redirectForm').submit();
                                          }
                                      },
                                      complete: function () {
                                          // 요청 완료 시 스피너 숨기기
                                          $("#spinner").hide();
                                      }
                                  });
                              }
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
                  <h3 class="h3">참여 예정 트랙<em class="em_red">*</em></h3>
                  <div class="step_1_track">
                      <div class="track_list">
                          <p class="title">DAY 1. 8월 25일(월)</p>
                          <ul <?php if ($coupon_type == "26") echo 'style="opacity:0.5"'; ?>>
                              <li><input type="radio" id="track_list_1_1" required name="apply_track1" class="track1"
                                         value="DAY1_TR1" <?php if ($coupon_type == "26") echo 'disabled'; ?> /><label
                                          for="track_list_1_1">게임: 프로그래밍</label></li>
                              <li><input type="radio" id="track_list_1_2" name="apply_track1" class="track1"
                                         value="DAY1_TR2" <?php if ($coupon_type == "26") echo 'disabled'; ?> /><label
                                          for="track_list_1_2">미디어 & 엔터테인먼트</label></li>
                              <li><input type="radio" id="track_list_1_3" name="apply_track1" class="track1"
                                         value="DAY1_TR3" <?php if ($coupon_type == "26") echo 'disabled'; ?> /><label
                                          for="track_list_1_3">게임: 아트</label></li>
                          </ul>
                      </div>
                      <div class="track_list">
                          <p class="title">DAY 2. 8월 26일(화)</p>
                          <ul <?php if ($coupon_type == "25") echo 'style="opacity:0.5"'; ?>>
                              <li><input type="radio" id="track_list_2_1" required name="apply_track2" class="track1"
                                         value="DAY2_TR1" <?php if ($coupon_type == "25") echo 'disabled'; ?> /><label
                                          for="track_list_2_1">게임</label></li>
                              <li><input type="radio" id="track_list_2_2" name="apply_track2" class="track1"
                                         value="DAY2_TR2" <?php if ($coupon_type == "25") echo 'disabled'; ?> /><label
                                          for="track_list_2_2">미디어 & 엔터테인먼트</label></li>
                              <li><input type="radio" id="track_list_2_3" name="apply_track2" class="track1"
                                         value="DAY2_TR3" <?php if ($coupon_type == "25") echo 'disabled'; ?> /><label
                                          for="track_list_2_3">제조 및 시뮬레이션</label></li>
                          </ul>
                      </div>
                  </div>


                  <script>

                      function reload_track_check(no,track){
                          $.ajax({
                              type: "GET",
                              url: "/v3/unrealfest2025/_applicaiton_ajax.php",
                              data: {
                                  code: $("#apply_product_code").val(),
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
                          <?
                          if($_SESSION["sponsored_coupon_yn"] == "N"){
                          ?>
                          reload_track_check(1,"DAY1_TR1");
                          reload_track_check(2,"DAY1_TR2");
                          reload_track_check(3,"DAY1_TR3");
                          reload_track_check(4,"DAY2_TR1");
                          reload_track_check(5,"DAY2_TR2");
                          reload_track_check(6,"DAY2_TR3");
                          <?
                          }else{

                          }
                          ?>

                      }
                  </script>

                  <span class="bd_line"></span>
                  <h3 class="h3">약관동의<em class="em_red">*</em></h3>
                  <div class="memeber_agree">
                      <ul>
                          <li><input type="checkbox" id="m_agree_1" name="m_agree_1" required/><label for="m_agree_1">만
                                  18세 이상입니다.<em class="em_red">*</em></label></li>
						<li><input type="checkbox" id="m_agree_2" name="m_agree_2" required /><label for="m_agree_2">에픽 라운지 <a href="https://epiclounge.co.kr/contents/ode.php" title="새창" target="_blank">이용 약관</a>에 동의하며,  정보가 에픽 라운지 <a href="https://epiclounge.co.kr/contents/personal.php" title="새창" target="_blank">개인정보 보호정책</a>에 따라 사용됨을 확인합니다.<em class="em_red">*</em></label></li>
						<li><input type="checkbox" id="m_agree_3" name="m_agree_3" /><label for="m_agree_3">광고 수신 동의</label></li>
					</ul>
				  </div>

<!--
                  <?
                  //약관동의  include
                  include_once "agree_include.php";
                  ?>

   -->               <div class="ft_btn_box">
   							<a href="#" onclick="goBack();"  class="btn_cancle">이전</a>
                      <button type="button" onclick="on_pay()"  name="" id="" class="btn_1" />등록하기</button>
                  </div>
					  <script type="text/javascript">
    function goBack(){
        window.history.back();
    }
</script>
              </fieldset>
          </form>
      </div>
      </div>
  </div>
<?php
include_once "member_footer.php";
?>

</body>

</html>
