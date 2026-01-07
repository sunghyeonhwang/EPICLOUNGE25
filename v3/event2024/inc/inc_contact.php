
	<script>
		// 팝업 오픈
function popupOpen(addrs, w, h){
  if (w === undefined)
    w = 800;
  if (h === undefined)
    h = 600;
//  if (w === undefined)
//    w = 1900;
//  if (h === undefined)
    h = 900;
  var popWidth = w; // 팝업창 넓이
  var popHeight = h; // 팝업창 높이
  var winWidth = document.body.clientWidth; // 현재창 넓이
  var winHeight = document.body.clientHeight; // 현재창 높이
  var winX = window.screenX || window.screenLeft || 0; // 현재창의 x좌표
  var winY = window.screenY || window.screenTop || 0; // 현재창의 y좌표
  var popLeftPos = (winX + (winWidth - popWidth) / 2); // 팝업 x 가운데
  var popTopPos = (winY + (winHeight - popHeight) / 2)-200; // 팝업 y 가운데


  var popUrl = addrs; //팝업창에 출력될 페이지 URL
  var popOption = "left="+popLeftPos+", top="+popTopPos+", width="+popWidth+", height="+popHeight+", resizable=no, scrollbars=yes, status=no;";    //팝업창 옵션(optoin)
  window.open(popUrl,"",popOption);
}
</script>
<div class="login-warp member-warp">
  <div class="boxy-warp1">
    <div class="login-box">
      <h1>
        <a href="<?=PAGE_MAIN?>"><img src="<?=IMG_VIEW_PATH?>/lougne_logo.png" alt=""></a>
      </h1>
      
      <div class="b-con">
	      <div class="boxp"> 세션에 관련된 질문은 <strong>라이브 Q&A용 질문하기</strong>를 이용해 주세요. </div>
        <form id="registration-form" name="registration-form" method="post" onsubmit="return false;">
          <p class="p-title staricon">문의하기</p>
          <ul>
            <li>
              <input type="text" placeholder="이름" id="inputName" name="inputName" value="<?=IS_TEST ? '테스터' : ''?>">
            </li>

            <li>
              <input type="text" placeholder="이메일 (정확한 이메일 주소를 넣어주세요)" id="inputEmail" name="inputEmail" value="<?=IS_TEST ? '123@unreal.com' : ''?>">
            </li>
            <li>
              <input type="text" placeholder="휴대폰 번호 (11자리, 숫자만 입력해 주세요)" id="inputPhone" name="inputPhone" value="<?=IS_TEST ? '01027771701' : ''?>">
            </li>
          </ul><br>
          <p>&nbsp;</p>
          <p class="p-title staricon">추가정보</p>
          <ul>
            <li>
              <div class="select-box3">
                <select name="inputDiv" id="inputDiv" class="selectBox01">
                    <option value="">분류</option>
                    <option>제휴</option>
                    <option>라이선스</option>
                    <option>교육</option>
                    <option>기타</option>
                </select>
                <i class="fas fa-chevron-down"></i>
              </div>
            </li>

            <li>
              <input type="text" placeholder="직장/학교/기관" id="inputCompany" name="inputCompany" value="<?=IS_TEST ? '서울직장' : ''?>">
            </li>
            <li>
              <input type="text" placeholder="부서/학과" id="inputDepart" name="inputDepart" value="<?=IS_TEST ? '서울부서' : ''?>">
            </li>

            <li>
              <div class="select-box3">
                <span class="input input-text">
                    <textarea class="target-hide-input" id="inputContent" name="inputContent" placeholder="내용을 입력해주세요" style="width:100%;height:200px; font-size: 26px;color:#000; border: #ffffff; background-color: #ededed; padding: 20px 25px;"></textarea>
                </span>
              </div>
            </li>
          </ul>
          <div class="check-warp">
          </div>
          <div class="login-btn">
            <a href="javascript:;" id="btnRegist">문의하기</a>
          </div>
         <!-- <div class="b-txt">
            <a href="<?=PAGE_MAIN?>" class="btn-darkgray">취소</a>
          </div>-->
        </form>
      </div>
    </div>
  </div>
</div>