<?
include_once "../common.php";
include_once "member_header.php";


if($_SESSION["CI"] == ""){
    echo "<script>alert('본인 인증이 필요합니다.');location.href=\"application_step1_online.html\";</script>";
    exit;
}

//$_SESSION["mode"] = "pay";
//$_SESSION["mode"] = "free";



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



$birthdate = $_SESSION["RSLT_BIRTHDAY"];
$currentDate = date('Y-m-d');
$age = date_diff(date_create($birthdate), date_create($currentDate))->y;
if($age < 18){
    echo "<script>alert('18세 이상만 신청이 가능합니다.');location.href=\"index.html\";</script>";
    exit;

}


$ci = $_SESSION["CI"];

$mysqli = new mysqli("localhost","unrealengine","Good121930!@","unrealengine");
$sql = "select count(*) from cb_unreal_2025_event2_apply where apply_ci = '$ci' and apply_temp_yn = 'N' limit 1";
$result = $mysqli -> query($sql);
$obj = $result -> fetch_array();
if($obj[0]['count']){
    echo '<script type="text/javascript">';
    echo " alert('이미 등록되어 있습니다.'); location.href='index.html';";
    echo '</script>';
    exit();
};
?>
<?php

$temp_data = sql_fetch("select * from cb_unreal_2025_event2_apply where apply_ci = '$ci' order by apply_no desc  limit 1");

?>

<style>
    /* 스피너 스타일 */
    #spinner {
        display: none; /* 초기에는 숨김 */
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        z-index: 1000;
        text-align: center;
    }
    #spinner img {
        position: relative;
        top: 50%;
        transform: translateY(-50%);
    }
</style>


<script type="text/javascript">
        document.getElementById('header_list_2').className = "active";

	//	var body = document.body;
	//	body.classList.add("modal_on");
        $(document).ready(function() {
            reload_job();
            $("#apply_user_job").change(function(){
                reload_job();
            });
        });
        function reload_job(){
            $("#apply_user_grade").val("")
            var job = $("#apply_user_job").val();
            if(job == "학생"){
                $(".student").show();
                $(".normal").hide();
            }else{
                $(".student").hide();
                $(".normal").show();
            }
        }


</script>
  <div class="memeber_container">
      <div class="wrap">

          <form name="frm" method="post" action="">
              <fieldset>
              <input type="hidden" name="apply_product_name" id="apply_product_name" value="" />
              <input type="hidden" name="apply_product_price" id="apply_product_price" value="" />
              <input type="hidden" name="apply_product_code" id="apply_product_code" value="" />
              <input type="hidden" name="apply_track" id="apply_track" value="" />
				
				<h3 class="h3  mt_100"">기본 정보</h3>
				<div class="member_form_box">
					<div class="member_form_list">
						<label for="apply_user_name">이름</label>
						<input type="text" class="intext" name="apply_user_name" id="apply_user_name" placeholder="본인 인증 이름" value="<?=$_SESSION["RSLT_NAME"]?>" readonly  />
					</div>
					<div class="member_form_list">
						<label for="apply_user_email">이메일<em class="em_red">*</em></label>
						<input type="text" class="intext" name="apply_user_email" id="apply_user_email" value="<?=$temp_data["apply_user_email"]?>"   required placeholder="이메일을 정확히 입력해 주세요." />
					</div>
					
					<div class="member_form_list">
						<label for="apply_user_phone">연락처<em class="em_red">*</em></label>
						<input type="text" class="intext" name="apply_user_phone" id="apply_user_phone" value="<?=$_SESSION["TEL_NO"]?>" placeholder="본인 인증 휴대전화" />
					</div>
				</div>
				<span class="bd_line"></span>

				
				<h3 class="h3">추가 정보</h3>
				<div class="member_form_box">
          
                    <div class="member_form_list">
                      
                        <label for="apply_user_job">회사명/소속(추가)<em class="em_red">*</em></label>
                        <select name="apply_user_job" id="apply_user_job" >
                            <option <?=$temp_data["apply_user_job"] == "직장인"?"selected='selected'":""?>>직장인</option>
                            <option <?=$temp_data["apply_user_job"] == "학생"?"selected='selected'":""?>>학생</option>
                            <option <?=$temp_data["apply_user_job"] == "인디/프리랜서"?"selected='selected'":""?>>인디/프리랜서</option>
                            <option <?=$temp_data["apply_user_job"] == "교육자 및 교육 기관"?"selected='selected'":""?>>교육자 및 교육 기관</option>

                            <option <?=$temp_data["apply_user_job"] == "기타"?"selected='selected'":""?>>기타</option>
                        </select>
                    </div>
					<div class="member_form_list">
						<label for="apply_user_company">직장명/학교<em class="em_red">*</em></label>
						<input type="text" class="intext" name="apply_user_company" id="apply_user_company" value="<?=$temp_data["apply_user_company"]?>"   required placeholder="회사명을 입력해 주세요." />
					</div>
					<div class="member_form_list">
						<label for="apply_user_depart">부서/학과<em class="em_red">*</em></label>
						<input type="text" class="intext" name="apply_user_depart" id="apply_user_depart" value="<?=$temp_data["apply_user_depart"]?>"   required placeholder="부서명을 입력해 주세요." />
					</div>
					
					<div class="member_form_list">
						<label for="apply_user_grade">직무/학년<em class="em_red">*</em></label>
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
                            <!-- 구분자 -->
                            <option class="student" <?=$temp_data["apply_user_grade"] == "4" ? "selected=true":""?>>4</option>
                            <option class="student" <?=$temp_data["apply_user_grade"] == "3" ? "selected=true":""?>>3</option>
                            <option class="student" <?=$temp_data["apply_user_grade"] == "2" ? "selected=true":""?>>2</option>
                            <option class="student" <?=$temp_data["apply_user_grade"] == "1" ? "selected=true":""?>>1</option>
                        </select>
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
				</div>
				<span class="bd_line"></span>


                  <?
                  //약관동의  include
                  include_once "agree_include.php";
                  ?>

				<div class="ft_btn_box">
                    <input type="button" onclick="on_free()"  name="" id="" class="btn_1" value="무료 등록하기" />
				</div>
			</fieldset>
		</form>
	</div>
</div>





<script>
    function on_free() {

        if($("#agree_se1").is(":checked") == false){
            alert("이용약관에 동의해 주세요.");
            return;
        }
        if($("#agree_se2").is(":checked") == false){
            alert("개인정보 이용 동의서에 동의해 주세요.");
            return;
        }
        if($("#agree_se3").is(":checked") == false){
            alert("개인정보 제 3자 제공에 대한 동의서에 동의해 주세요.");
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

        $("#spinner").show();
        $.ajax({
            type: "POST",
            url: "/v3/unrealfest2025/_applicaiton_online_ajax.php",
            data: {
                apply_user_name: $("#apply_user_name").val(),
                agree_se4: $("#agree_se4").prop("checked"),
                apply_user_email:  $("#apply_user_email").val(),
                apply_user_phone:  $("#apply_user_phone").val(),
                apply_user_job:  $("#apply_user_job").val(),
                apply_user_company:  $("#apply_user_company").val(),
                apply_user_depart:  $("#apply_user_depart").val(),
                apply_user_grade:  $("#apply_user_grade").val(),
                apply_user_ex1:  $("#apply_user_ex1").val(),
                apply_product_name:  $("#apply_product_name").val(),
                apply_product_price: $("#apply_product_price").val(),
                apply_product_code: $("#apply_product_code").val(),
                apply_track: $("#apply_track").val()
            },
            success: function (data) {

                if(data == "중복된 신청입니다."){
                    alert("중복된 신청입니다");
                    return;
                }else{
                    location.href = "application_step3_online.html";

                }
            },
            complete: function () {
                // 요청 완료 시 스피너 숨기기
                $("#spinner").hide();
            }
        });
    }
</script>

<!-- 스피너 요소 -->
<div id="spinner" style="display: none;">
    <img src="img/spinner.gif" alt="Loading...">
</div>
</body>

</html>
