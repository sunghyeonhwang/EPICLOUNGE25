<?php
include_once "../common.php";
include_once "member_header.php";

$index = isset($_POST['index']) ? $_POST['index'] : '';
//$_SESSION['index'] = $index;

//$coupon_key = $_SESSION["coupon_key"];
$temp_data = sql_fetch("select * from cb_unreal_2025_event2_apply where apply_no = '{$index}' order by apply_no desc  limit 1");
$apply_track = $_REQUEST["apply_track"];
if($apply_track == ""){
    $apply_track = $temp_data["apply_track"];
}
//apply_coupon_no
$apply_coupon_no = $temp_data["apply_coupon_no"];
$_SESSION["sponsored_coupon_yn"] = "N";
$coupon = sql_fetch("select * from cb_unreal_2025_event2_coupon where coupon_key = '{$apply_coupon_no}' ");
if(empty($coupon)){
    $coupon = sql_fetch("select * from cb_unreal_2025_event2_coupon_sponsor where coupon_key = '{$apply_coupon_no}' ");
    if(!empty($coupon)){
        $_SESSION["sponsored_coupon_yn"] = "Y";
    }
}
if(empty($coupon)){
    alert("쿠폰번호가 일치하지 않습니다. 다시 확인하여주세요.");
}else{
    if (!empty($coupon["user_name"]) || !empty($coupon["usage_date"])) {
        alert("이미 사용된 쿠폰입니다.","application_step1_coupon.php");
    }

    $_SESSION["coupon_serial"] = $coupon["coupon_serial"];;
    $_SESSION["coupon_key"] = $coupon["coupon_key"];

}


$coupon_type = $coupon["coupon_type"];
if($coupon_type == "25#26"){
    $apply_product_name = "일반 양일권";
    $apply_product_code = "NORMAL_ALL";
}else if($coupon_type == "25"){
    $apply_product_name = "일반 25일권";
    $apply_product_code = "NORMAL_25";
}else{
    $apply_product_name = "일반 26일권";
    $apply_product_code = "NORMAL_26";

}
$apply_track_array = explode(",", $apply_track);


$coupon_action_ajax = "/v3/unrealfest2025/_applicaiton_coupon_pay_end_ajax.php";
if($_SESSION["sponsored_coupon_yn"] == "Y"){
    $coupon_action_ajax = "/v3/unrealfest2025/_applicaiton_coupon_sp_pay_end_ajax.php";
}
?>

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
						<input type="text" class="coupon_intext" id="coupon_box1" name="coupon_box1" value="<?=$_SESSION["coupon_serial"]?>" readonly />
						<button type="button" class="coupon_btn">쿠폰 확인</button>
					</fieldset>
				</form>
			</div>
		
			<ul class="yellow_bu">
				<li>쿠폰 중복 확인을 반드시 진행 후 등록 정보를 기입해 주세요. </li>
			</ul>
		</div>

		<div class="member_cont_box">
	


          <form name="frm" method="post" action="">
              <fieldset>
                  <input type="hidden" name="apply_product_name" id="apply_product_name" value="<?=$apply_product_name?>" />
                  <input type="hidden" name="apply_product_price" id="apply_product_price" value="0" />
                  <input type="hidden" name="apply_product_code" id="apply_product_code" value="<?=$apply_product_code?>" />
                  <input type="hidden" name="apply_track" id="apply_track" value="" />
                  <input type="hidden" name="apply_ci" id="apply_ci" value="" />
                  <input type="hidden" name="apply_di" id="apply_di" value="" />


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
                          <ul <?php if ($coupon_type == "26") echo 'style="opacity:0.5"'; ?>>
                              <li><input type="radio" id="track_list_1_1" required name="apply_track1" class="track1"
                                         readonly onclick="return false"
                                         value="DAY1_TR1" <?php if ($coupon_type == "26") echo 'disabled'; ?> <?php if (in_array("DAY1_TR1", $apply_track_array)) echo 'checked'; ?>/><label
                                          for="track_list_1_1">게임: 프로그래밍</label></li>
                              <li><input type="radio" id="track_list_1_2" name="apply_track1" class="track1" readonly
                                         onclick="return false"
                                         value="DAY1_TR2" <?php if ($coupon_type == "26") echo 'disabled'; ?> <?php if (in_array("DAY1_TR2", $apply_track_array)) echo 'checked'; ?>/><label
                                          for="track_list_1_2">미디어 & 엔터테인먼트</label></li>
                              <li><input type="radio" id="track_list_1_3" name="apply_track1" class="track1" readonly
                                         onclick="return false"
                                         value="DAY1_TR3" <?php if ($coupon_type == "26") echo 'disabled'; ?> <?php if (in_array("DAY1_TR3", $apply_track_array)) echo 'checked'; ?>/><label
                                          for="track_list_1_3">게임: 아트</label></li>
                          </ul>
                      </div>
                      <div class="track_list">
                          <p class="title">DAY 2. 8월 26일(화)</p>
                          <ul <?php if ($coupon_type == "25") echo 'style="opacity:0.5"'; ?>>
                              <li><input type="radio" id="track_list_2_1" required name="apply_track2" class="track1"
                                         readonly onclick="return false"
                                         value="DAY2_TR1" <?php if ($coupon_type == "25") echo 'disabled'; ?> <?php if (in_array("DAY2_TR1", $apply_track_array)) echo 'checked'; ?>/><label
                                          for="track_list_2_1">게임</label></li>
                              <li><input type="radio" id="track_list_2_2" name="apply_track2" class="track1" readonly
                                         onclick="return false"
                                         value="DAY2_TR2" <?php if ($coupon_type == "25") echo 'disabled'; ?> <?php if (in_array("DAY2_TR2", $apply_track_array)) echo 'checked'; ?>/><label
                                          for="track_list_2_2">미디어 & 엔터테인먼트</label></li>
                              <li><input type="radio" id="track_list_2_3" name="apply_track2" class="track1" readonly
                                         onclick="return false"
                                         value="DAY2_TR3" <?php if ($coupon_type == "25") echo 'disabled'; ?> <?php if (in_array("DAY2_TR3", $apply_track_array)) echo 'checked'; ?>/><label
                                          for="track_list_2_3">제조 및 시뮬레이션</label></li>
                          </ul>
                      </div>
                  </div>

                 
<!--
                  <?
                  //약관동의  include
                  include_once "agree_include.php";
                  ?>

   -->               <div class="ft_btn_box">
   						<a href="#n" class="btn_cancle" onclick="history.back()">이전</a>
                      <button type="button" onclick="on_pay()"  name="" id="" class="btn_1" />단체 등록하기</button>
                  </div>
              </fieldset>
          </form>
      </div>
      </div>
  </div>
<script>
    function on_pay(){
        //_applicaiton_coupon_pay_end_ajax.php

        $.ajax({
            type: "POST",
            url: "<?=$coupon_action_ajax?>",
            data: {
                index: "<?= $index ?>"
            },
            success: function (data) {
                console.log(data);
                var response = data;
                if (!response.result) {
                    alert(response.msg);
                    return;
                } else {
                    location.href = "application_step3_coupon.php?coupon_serial=<?=$_SESSION["coupon_serial"]?>";
                }
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

</body>

</html>
