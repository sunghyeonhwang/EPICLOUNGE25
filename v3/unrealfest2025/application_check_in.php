<?php
include_once "../common.php";
include_once "member_header.php";
?>


<script src="assets/js/jquery-1.7.2.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<style>
	#member_top .member_header_seq_box ul {display:none}
</style>

  <div class="memeber_container">
      <div class="wrap">
       
	   <div class="member_title_box">
      <h3 class="title"><a href="https://epiclounge.co.kr/unrealfest2025/"><img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/member_top_text.svg" /></a></h3>
		</div>
    <form id="login-form" name="login-form" action="live_channel.html" method="post" enctype="multipart/form-data">
      <input type="hidden" name="live" value="1" />
<div class="member_top_bl_box">
			<h4 class="purple_title">온라인 체크인</h4>
			<br />
			<p class="purple_text warring">체크인을 완료하면 언리얼 페스트 서울 2025를 시청하실 수 있습니다.</p>
		</div>
		
		<div class="member_cont_box">
			<h3 class="h3">등록시 작성한 정보를 입력해 주세요</h3>
			<div class="member_form_box type2">
				<div class="member_form_list">
					<label for="inputEmail">이메일<em class="em_red">*</em></label>
					<input type="text" class="intext" name="inputEmail" id="inputEmail" placeholder="이메일을 입력해 주세요." value="" aria-invalid="true">
				</div>


                <div class="member_form_list">
                    <label for="apply_user_track">트랙 선택<em class="em_red">*</em></label>
                    <select class="intext" id="apply_user_track" name="apply_user_track">
                      <!--   <option value="DAY1_TR1">25일 : 게임: 프로그래밍</option>
                        <option value="DAY1_TR3">25일 : 게임: 아트</option>
                        <option value="DAY1_TR2">25일 : 미디어 & 엔터테인먼트</option>-->
                        
                        <option value="DAY2_TR1">26일 : 게임</option>
                        <option value="DAY2_TR2">26일 : 미디어 & 엔터테인먼트</option>
                        <option value="DAY2_TR3">26일 : 제조 및 시뮬레이션</option> 
                    </select>
                </div>
		
				
			
			</div>
		<p class="ft_18 mt_20">체크인 문제 발생시 고객센터로 문의하세요.</p>
		<p class="ft_18">등록을 하지 않으셨다면, 등록을 먼저 진행해 주세요. <a href="application_step1_online.php" target="_blank" class="em_blue underline">등록하기</a></p>
		<div class="ft_btn_box big_btn">  <a  id="btnLoginAction" href="javascript:;"  class="btn_1">확인</a>
		</div>
		</div>
    </form>
    <script>
      $(function() {
        setLogin();
        // 전화번호 숫자만 입력
        $("input:text[numberOnly]").on("keyup", function() {
            $(this).val($(this).val().replace(/[^0-9]/g,""));
        });
      });

      function setLogin() {
          $.validator.addMethod("userEmail", function(value, element) {
              return this.optional(element) || /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i.test(value);
          }, "이메일을 형식에 맞게 입력하세요.");

          $('#login-form').validate({
              debug: true,
              onfocusout: function(element) {
                  $(element).valid();
              },
              errorPlacement: function(error, element) {
                  element.parent().next('.warning').show();
              },
              rules: {
                  inputEmail: {
                      required: true,
                      maxlength: 50,
                      userEmail: true,
                      email: true
                  },
              },
              highlight: function(element) {},
              unhighlight: function(element) {
                  $(element).parent().next('.warning').hide();
              },
              messages: {
                  inputEmail: {
                      required: "이메일을 입력하세요.",
                      maxlength: $.validator.format('이메일은 {0}자 내로 입력하세요.'),
                      email: "이메일을 형식에 맞게 입력하세요."
                  },
              },
              invalidHandler: function(form, validator) {
                  var errors = validator.numberOfInvalids();
                  if (errors) {
                      alert(validator.errorList[0].message);
                      validator.errorList[0].element.focus();
                  }
              }
          });


         $("#btnLoginAction").on("click", function(e) {
         var form = document.forms['login-form'];
         if ($('#login-form').valid()) { // test for validity
            if (form.apply_user_track.value == "") {
              alert("트랙을 선택해 주세요.");
              return false;
            }
           var gsWin = window.open("about:blank", "winName");
           form.target="winName";
           form.submit();
         } else {
             // do stuff if form is not valid
         }
        });
      }
    </script>
  </div>
  </div>
  </div>
<?php
include_once "member_footer.php";
?>


</body>

</html>
