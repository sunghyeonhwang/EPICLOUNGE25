<?php include('include/headcss.php'); ?>
<?php include('include/head.php'); ?>
<div class="content">
	<div class="top-banner-popup">
		<div class="boxy-warp">
			<a href="#">
				<img src="images/ue_sb.png" alt="">
				<span>언리얼 서밋 2002 온라인 등록이 시작되었습니다.</span>
			</a>
			<a href="#" class="close-btn">
				<img src="images/Close_btn.png" alt="">
			</a>
		</div>
	</div>
	<div class="live-training boxy-warp">
	<script>
		// 팝업 오픈
function popupOpen(addrs, w, h){
  if (w === undefined)
    w = 1900;
  if (h === undefined)
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

<a href="javascript:popupOpen('live-training.php');">123</a>

	</div>
</div>
<?php include('include/tail.php'); ?>
<?php include('include/tailjs.php'); ?>