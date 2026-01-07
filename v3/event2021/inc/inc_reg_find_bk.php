<div class="login-warp">
  <div class="boxy-warp1">
    <div class="login-box">
      <h1>
        <a href="<?=PAGE_MAIN?>"><img src="<?=IMG_VIEW_PATH?>/lougne_logo.png" alt=""></a>
      </h1>
      <form id="registration-form" onsubmit="return false;">
        <div class="b-con">
          <p class="t-txt">추가정보<span style="color: #ff0a0a; font-weight: bold;">*</span></p>
          <p class="t-ment">등록시 사용한 이메일/휴대번호를 입력해주세요.</p>
          <ul>
            <li>
              <input type="text" placeholder="이메일주소" id="inputEmail" name="inputEmail">
            </li>
          </ul>
          <ul>
            <li>
              <input type="text" placeholder="휴대전화번호" id="inputPhone" name="inputPhone">
            </li>
          </ul>
          <div class="c-ment">
            <span><a href="<?=PAGE_CONTACT?>">문의하기</a></span>
          </div>
          <div class="login-btn">
            <a href="javascript:;" id="btnSubmit" class="gray-btn">확인</a>
          </div>
          <div class="b-txt">
            <span>사전등록을 안하셨다면?</span>
            <a href="<?=PAGE_REG_TERMS_AGREE?>">사전등록</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>