<div class="login-warp member-warp">
  <div class="boxy-warp1">
    <div class="login-box">
      <h1>
        <a href="<?=PAGE_MAIN?>"><img src="<?=IMG_VIEW_PATH?>/lougne_logo.png" alt=""></a>
      </h1>
      <div class="b-con">
        <form id="registration-form" name="registration-form" method="post" onsubmit="return false;">
          <p class="p-title staricon">등록정보</p>
          <ul>
            <li>
              <input type="text" placeholder="이름" id="inputName" name="inputName" value="">
            </li>

            <li>
              <input type="text" placeholder="이메일 (정확한 이메일 주소를 넣어주세요)" id="inputEmail" name="inputEmail" value="">
            </li>
            <li>
              <input type="text" placeholder="휴대폰 번호 (11자리, 숫자만 입력해 주세요)" id="inputPhone" name="inputPhone" value="">
            </li>
          </ul><br>
          <p>&nbsp;</p>
          <p class="p-title staricon">추가정보</p>
          <ul>
            <li>
              <div class="select-box3">
                <select class="selectBox01" id="inputJob" name="inputJob">
                  <option value="" selected>선택</option>
                  <option>직장인</option>
                  <option>학생</option>
                  <option>교직원</option>
                  <option>인디/프리랜서</option><!--기타랑 동일한 셀렉트 노출-->
                  <option>기타</option>
                </select>
                <i class="fas fa-chevron-down"></i>
              </div>
            </li>
            <!--직장인선택시 노출-->
            
            <li>
              <input type="text" placeholder="직장" id="inputCompany" name="inputCompany">
            </li>
            <li>
              <input type="text" placeholder="부서" id="inputDepart" name="inputDepart">
            </li>
            
            <li>
              <div class="select-box3">
                <select class="selectBox01" id="inputGrade" name="inputGrade">
                  <option value="">추가정보</option>
                </select>
                <i class="fas fa-chevron-down"></i>
              </div>
            </li>
            <!--공통 노출-->
            <li>
              <div class="select-box3">
                <select class="selectBox01" name="inputEx1" id="inputEx1">
                  <option value="" selected>산업/관심분야</option>
                  <option>게임</option>
                  <option>건축</option>
                  <option>자동차 & 운송</option>
                  <option>영화 & TV</option>
                  <option>방송 & 라이브 이벤트</option>
                  <option>제조 </option>
                  <option>소프트웨어 & 툴 개발</option>
                  <option>VR/AR</option>
                  <option>교육</option>
                  <option>기타</option>
                </select>
                <i class="fas fa-chevron-down"></i>
              </div>
            </li>
          </ul>
          <p>&nbsp;</p>
          <p class="s-title">홍보성 알림 수신 동의서</p>
        <textarea name="agreeInfo" cols="30" rows="10">
에픽 라운지는 마케팅 또는 홍보자료 배포를 위하여 다음과 같이 개인정보를 수집 및 이용합니다. 귀하는 개인정보의 수집 및 이용에 대한 동의를 거부할 수 있으나 거부 시 에픽 라운지로부터 유용한 정보를 제공받지 못할 수 있습니다.

개인정보 수집 및 이용목적
- 이메일 또는 문자메시지를 통한 마케팅 또는 홍보자료 배포
- 에픽게임즈의 제품 및 서비스 홍보, 모니터링, 캠페인 효과 측정, 사용자 보호 및 개선, 직장 및 학교정보, 관심분야에 따른 맞춤형 정보 제공 

수집하는 개인정보의 항목
- 이름, 휴대전화번호, 이메일, 직장 및 학교 정보, 직무 및 부서, 학년 및 학과 그리고 관심분야 

개인정보의 보유 및 이용기한
에픽 라운지 개인정보보호정책에 따름</textarea>
          <div class="check-warp">
            <div class="checks">
              <input type="checkbox" id="cf2" name="cf2" value="Y"/>
              <label for="cf2"><span>에픽게임즈의 뉴스, 설문조사, 행사 및 이벤트 정보 수신에 동의합니다.</span></label> <!-- 선택을 안해도 등록 가능 단 관리자에서 선택한사람이 표시되어야 함, OPTIN이란 항목으로-->
            </div>
          </div>
          <div class="login-btn">
            <a href="javascript:;" id="btnRegist">등록하기</a>
          </div>
          <div class="b-txt">
            <span>이미 등록을 하셨나요?</span>
            <a href="<?=PAGE_REG_FIND?>"><span style="color: #e3326e">등록확인</span></a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>