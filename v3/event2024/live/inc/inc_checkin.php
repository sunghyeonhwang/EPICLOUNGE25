<div class="live-training">
  <div class="boxy-warp">
    <div class="t-logo">
      <img src="images/logo2.png" alt="">
    </div>



    <div id="areaChceckin" class="check-box">
<?
// 이메일 체크인 화면
if (empty($APPLY_ORDER_NO)) {
?>
      <h2> 이메일 주소를 입력해주세요.</h2>

      <form id="login-form" name="login-form" action="/event2021/findApplyByEmail.php" method="post">
        <input type="hidden" name="mode" value="findApplyByEmail">
        <ul>
          <li>
            <div class="red">
              팝업 차단 해제 후 로그인이 필요합니다.
            </div>
          </li>
          <!--<li>
            <div class="red2">
              채팅 시스템은 PC / PAD 환경에서만 사용이 가능합니다.          </div>
          </li>-->
          <li>
              <input type="text" placeholder="이메일주소" id="inputEmail" name="inputEmail">
          </li>
        </ul>
      </form>

      <div class="b-btn">
        <a href="javascript:;" id="btnLoginAction">체크인</a>
      </div>
    <!--  <p>사전등록을 하지 않으셨습니까? 등록 후 입장해 주세요.<a href="<?=PAGE_REG_FORM?>"><span style="font-weight: 700; color: #c877fa">등록하기</span></a> / <a href="<?=PAGE_REG_FIND?>">등록확인</a></p>-->

<?
// 주문번호로 접근시 처리중 화면
} else {
?>

      <h2></h2>
      <ul>
        <li>
          <div style="height:100px;"></div>
        </li>
        <li>
          <img src="https://unrealsummit16.cafe24.com/og/landing.gif" width="50%">
        </li>
        <li>
          <div style="height:100px;"></div>
        </li>
      </ul>

<?
}
?>
    </div>

    <?// 트랙 선택화면(초기 미노출)?>
    <div id="areaSelTrack" class="check-box" style="display:none;">
      <h2><storng>시청하실 트랙을 선택해주세요</storng></h2>
      <p> 채팅시스템은 PC / PAD에서만 사용이 가능합니다 </p>
      <ul>
        <li>
          <div style="height:10px;"></div>
        </li>
      <?
      if (!empty($_DATA[$sel_day])) {
        $tCount = count($_DATA[$sel_day]);
        for ($i = 1; $i <= $tCount; $i++) {
      ?>
        <li>
          <div class="<?=$_DATA[$sel_day][$i]['btnClass']?> hover1">
            <a href="<?=$_DATA[$sel_day][$i]['track_link']?>" id="" data-toggle="modal" >트랙 <?=$i?> : <?=$_DATA[$sel_day][$i]['name']?></a>
          </div>
        </li>
        <li>
          <div style="height:10px;"></div>
        </li>
      <?
        }
      }
      ?>
      </ul>
    </div>

    <div class="foot-con">
     <!-- <span class="l-txt"><a href="<?=PAGE_CONTACT?>" target="_blank">라이선스 및 제휴 문의</a></span>-->
      <span class="r-logo">
         <a href="<?=PAGE_MAIN?>" ><img src="images/logo3.png" alt=""></a>
      </span>
    </div>

  </div>
</div>
