<div class="login-warp member-warp">
  <div class="boxy-warp1">
    <div class="login-box">
      <h1>
        <a href="<?=PAGE_MAIN?>"><img src="<?=IMG_VIEW_PATH?>/lougne_logo.png" alt=""></a>
      </h1>
      <div class="b-con">
        <form id="registration-form" name="registration-form" method="post" onsubmit="return false;">
          <p class="s-title staricon">작품등록</p>
          <ul>
	          <li>
              <div class="select-box3">
                <select class="selectBox01" id="inputDepart" name="inputDepart">
                  <option value="" selected>분야선택</option>
                  <option>게임</option>
                  <option>M&E</option>
                  <option>건축</option>

                </select>
                <i class="fas fa-chevron-down"></i>
              </div>
            </li>
            <li>
              <input type="text" placeholder="작품명" id="inputProjectName" name="inputProjectName" value="">
            </li>
			<li>
              <input type="text" placeholder="패키지 버전" id="inputProjectVersion" name="inputProjectVersion" value="">
            </li>
            <li>
              <input type="text" placeholder="프로젝트 파일" id="inputProjectFile" name="inputProjectFile" value="">
            </li>
            <li>
              <textarea placeholder="100자 이내 소개글을 적어주세요" id="inputIntro" name="inputIntro" value=""></textarea>
            </li>
            <li>
              <textarea placeholder="조작 방법을 적어주세요" id="inputHowToUse" name="inputHowToUse" value=""></textarea>
            </li>
            <li>
              <textarea placeholder="애셋 출처" id="inputAssetFrom" name="inputAssetFrom" value=""></textarea>
            </li>

          </ul><br>
          <p>&nbsp;</p>
          <p class="s-title staricon">팀원 정보 입력</p>
           <p>최대 5인. 모든 팀원에 대한 아래 정보를 기입해주세요</p>
          <p class="p-title"> 대표팀원</p>

          <ul>

            <li>
              <input type="text" placeholder="이름" id="inputMem01Name" name="inputMem01Name">
            </li>
            <li>
              <input type="text" placeholder="소속" id="inputMem01Company" name="inputMem01Company">
            </li>
            <li>
              <input type="text" placeholder="이메일 (정확한 이메일 주소를 넣어주세요)" id="inputMem01Email" name="inputMem01Email" value="">
            </li>
            <li>
              <input type="text" placeholder="휴대폰 번호 (11자리, 숫자만 입력해 주세요)" id="inputMem01Phone" name="inputMem01Phone" value="">
            </li>
          </ul>
          <p>&nbsp;</p>
          <p class="p-title ">팀원
1</p>
          <ul>
            <!--직장인선택시 노출-->
            <li>
              <input type="text" placeholder="이름" id="inputMem02Name" name="inputMem02Name">
            </li>
            <li>
              <input type="text" placeholder="소속" id="inputMem02Company" name="inputMem02Company">
            </li>
            <li>
              <input type="text" placeholder="이메일 (정확한 이메일 주소를 넣어주세요)" id="inputMem02Email" name="inputMem02Email" value="">
            </li>
            <li>
              <input type="text" placeholder="휴대폰 번호 (11자리, 숫자만 입력해 주세요)" id="inputMem02Phone" name="inputMem02Phone" value="">
            </li>
          </ul>
          <p>&nbsp;</p>

          <p class="p-title ">팀원
2</p>
          <ul>
            <!--직장인선택시 노출-->
            <li>
              <input type="text" placeholder="이름" id="inputMem03Name" name="inputMem03Name">
            </li>
            <li>
              <input type="text" placeholder="소속" id="inputMem03Company" name="inputMem03Company">
            </li>
            <li>
              <input type="text" placeholder="이메일 (정확한 이메일 주소를 넣어주세요)" id="inputMem03Email" name="inputMem03Email" value="">
            </li>
            <li>
              <input type="text" placeholder="휴대폰 번호 (11자리, 숫자만 입력해 주세요)" id="inputMem03Phone" name="inputMem03Phone" value="">
            </li>
          </ul>
          <p>&nbsp;</p>

          <p class="p-title">팀원
3</p>
          <ul>
            <!--직장인선택시 노출-->
            <li>
              <input type="text" placeholder="이름" id="inputMem04Name" name="inputMem04Name">
            </li>
            <li>
              <input type="text" placeholder="소속" id="inputMem04Company" name="inputMem04Company">
            </li>
            <li>
              <input type="text" placeholder="이메일 (정확한 이메일 주소를 넣어주세요)" id="inputMem04Email" name="inputMem04Email" value="">
            </li>
            <li>
              <input type="text" placeholder="휴대폰 번호 (11자리, 숫자만 입력해 주세요)" id="inputMem04Phone" name="inputMem04Phone" value="">
            </li>
          </ul>
          <p>&nbsp;</p>

          <p class="p-title ">팀원
4</p>
          <ul>
            <!--직장인선택시 노출-->
            <li>
              <input type="text" placeholder="이름" id="inputMem05Name" name="inputMem05Name">
            </li>
            <li>
              <input type="text" placeholder="소속" id="inputMem05Company" name="inputMem05Company">
            </li>
            <li>
              <input type="text" placeholder="이메일 (정확한 이메일 주소를 넣어주세요)" id="inputMem05Email" name="inputMem05Email" value="">
            </li>
            <li>
              <input type="text" placeholder="휴대폰 번호 (11자리, 숫자만 입력해 주세요)" id="inputMem05Phone" name="inputMem05Phone" value="">
            </li>
          </ul>
          <p>&nbsp;</p>

          <div class="check-warp">
            <div class="checks">
              <input type="checkbox" id="cf2" name="cf2" value="Y"/>
              <label for="cf2"><span>언리얼 엔진 및 에픽게임즈의 뉴스, 설문조사, 행사 및 이벤트 정보 수신에 동의합니다.</span></label> <!-- 선택을 안해도 등록 가능 단 관리자에서 선택한사람이 표시되어야 함, OPTIN이란 항목으로-->
            </div>
          </div>
          <div class="login-btn">
            <a href="javascript:;" id="btnRegist">제출하기</a>
          </div>
                  </form>
      </div>
    </div>
  </div>
</div>