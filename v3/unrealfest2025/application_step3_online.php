<?php
include_once "../common.php";
include_once "member_header.php";


$_SESSION["RSLT_NAME"] = "";
$_SESSION["RSLT_BIRTHDAY"]= "";
$_SESSION["RSLT_SEX_CD"]= "";
$_SESSION["RSLT_NTV_FRNR_CD"]= "";
$_SESSION["TEL_NO"]= "";
$_SESSION["DI"]= "";
$_SESSION["CI"] = "";


?>
<script>
	function fn_move_main() {
		window.location.href = 'https://epiclounge.co.kr/unrealfest2025/';
	}
</script>
  <div class="memeber_container">
      <div class="wrap">
       
	   <div class="member_title_box">
			<h3 class="title"><a href="https://epiclounge.co.kr/unrealfest2025/"><img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/member_top_text.svg" /></a></h3>
		</div>
		<div class="ap_qrcode_box">
			<div class="online_title">
				<h4 class="purple_title">Online Ticket</h4>
			</div>
			<h3 class="h3"><em>언리얼 페스트 서울 2025</em> 온라인 등록이 완료되었습니다.</h3>
			<div class="qr_top_box">
				<div class="online_ticket_info">
					<h4 class="h4">티켓 안내</h4>
					<ul class="bu">
						<li>시청 링크는 행사 당일 카카오톡(or 문자)/ 이메일로 발송될 예정입니다.</li>
						<li>시청 링크를 별도로 받지 못한 경우, 행사 당일 본 페이지에 접속하여 등록 시 사용한 이메일 주소로 체크인하시면 시청하실 수 있습니다.</li>
						<li>등록정보 변경 및 취소는 FAQ를 참조해 주세요.</li>
						<li>문의:  <a href="tel:023263701" target="_blank">언리얼 페스트 사무국(02-326-3701)</a>, <a href="mailto:unrealfest@epiclounge.co.kr" target="_blank"> 이메일</a></li>
					</ul>
				</div>
			</div>
			
		</div>
		
		<div class="member_cont_box">
	<div class="ft_btn_box type2">
		  <button type="button" onclick="fn_move_main()"  name="" id="" class="btn_1" />완료</button>
	  </div>
			<h4 class="purple_title mt_50">Event</h4>
			
					<div class="event_box_list no_pd">
						<div class="qr_event_box14 qr_event_box fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
							<div class="off_ch">
								<p class="text"><img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/event_icon-online.svg"><span>온라인 전용</span></p>
							</div>
							<div class="text_box">
								<h4>출석 체크 이벤트</h4>
								<p class="text_1">양일간 시청한 분 중 추첨을 통해<br>300명께 굿즈 증정! </p>
								<p class="text_2">*온라인 체크인 시 자동 응모</p>
								<p class="text_date"><img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/cal_icn_5.svg"><span>8.25(월) ~ 8.26(화)</span></p>
								<p class="list_box">
									<img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/on_event_img46.png">
								</p>
							</div>
							
						</div>
			
						
				  </div>
					
					<!-- <ul class="bu right_bu type2 fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
						<li>경품은 사정에 따라 변경되거나 이미지와 다를 수 있습니다.</li>
					</ul> -->
	
      </div> 
					   
		</div>
      </div>
  </div>
<?php
include_once "member_footer.php";
?>
</body>

</html>
