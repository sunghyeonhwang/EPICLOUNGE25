<?php
include_once "../common.php";
include_once "member_header.php";
?>

  <div class="memeber_container">
      <div class="wrap">
       
	   <div class="member_title_box">
      <h3 class="title"><a href="https://epiclounge.co.kr/unrealfest2025/"><img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/member_top_text.svg" /></a></h3>
		</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>

    <form id="login-form" name="login-form" action="application_modify_view_check.php" method="post">
	 
		<div class="member_top_bl_box">
			<h4 class="purple_title">등록정보 확인</h4>
			<br />
			<p class="purple_text warring" style="color: #F7D048">등록 정보를 확인 및 수정하실 수 있습니다.</p>
		</div>

		<div class="member_cont_box">
			<h3 class="h3">등록 시 작성한 정보를 입력해 주세요</h3>
			<div class="member_form_box type2">
				<div class="member_form_list">
					<label for="inputEmail">이메일<em class="em_red">*</em></label>
					<input type="text" class="intext" name="inputEmail" id="inputEmail" placeholder="이메일을 입력해 주세요." value=""   />
				</div>
		
				
				<div class="member_form_list">
					<label for="apply_user_phone">연락처<em class="em_red">*</em></label>
					<input type="text" class="intext" name="apply_user_phone" id="apply_user_phone" value=""  placeholder="'-'를 제외한 휴대폰 번호만 입력해 주세요." />
				</div>
		</div>
		
		<p class="ft_18 mt_20">※ 체크인 문제 발생 시 <a href="mailto:unrealfest@epiclounge.co.kr" target="_blank" style="font-weight: bold; color:#0066FF ">고객센터</a>에 문의하세요.</p>
		<div class="ft_btn_box big_btn">  <a  id="btnLoginAction" href="javascript:;"  class="btn_1">확인</a></div>
    </form>
  </div>
</div> 















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
            if (form.apply_user_phone.value == "") {
              alert("연락처를 입력해 주세요.");
              form.apply_user_phone.focus();
              return false;
            } 
            if ($('#login-form').valid()) { // test for validity
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
