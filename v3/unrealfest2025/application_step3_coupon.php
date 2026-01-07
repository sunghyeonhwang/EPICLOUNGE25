<?php
include_once "../common.php";
include_once "member_header.php";

$coupon_serial=  $_GET["coupon_serial"];
$coupon = sql_fetch("select * from cb_unreal_2025_event2_coupon where coupon_serial = '{$coupon_serial}' ");
$_SESSION["sponsored_coupon_yn"] = "N";
if(empty($coupon)){
    $coupon = sql_fetch("select * from cb_unreal_2025_event2_coupon_sponsor where coupon_serial = '{$coupon_serial}' ");
    if(!empty($coupon)){
        $_SESSION["sponsored_coupon_yn"] = "Y";
    }
}

$coupon_key = $coupon["coupon_key"];

$temp_data = sql_fetch("select * from cb_unreal_2025_event2_apply where apply_coupon_no = '{$coupon_key}' order by apply_no desc  limit 1");
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
			<h3 class="h3"><em>언리얼 페스트 서울 2025</em> 등록(단체)이 완료되었습니다.</em></h3>
			<div class="qr_top_box">
				<div class="qr_img_box_wrap">
					<!-- <p class="qr_title">얼리버드 양일권</p> -->
					<p class="qr_img_box"><img src="https://epiclounge.co.kr/v3/unrealfest2025/qrdata/<?=$temp_data["apply_no"]?>.jpg" alt="QR 코드" /></p>
				</div>
				<div class="qr_text_box_wrap">
					<h4>안내 사항</h4>
					<ul>
                        <li>QR 코드는 문자로 발송되며 행사 1일 전 한번 더 발송 될 예정입니다.</li>
                        <li>오프라인 티켓을 구매하시면, 추가로 등록 없이 온라인 중계도 시청하실 수 있습니다.</li>
                        <li>등록정보 변경 및 취소는 <a href="/v3/unrealfest2025/application_confirm.php">등록정보 수정 페이지</a>에서 가능합니다.</li>
					</ul>

					<h4>환불 안내</h4>
					<ul>
						<li>행사 준비 및 좌석 배정 등의 이유로, <br>얼리버드 판매 기간(~2025.7.16 오후 11시 59분까지)에만 환불이 가능합니다.</li>
						<li>문의:  <a href="tel:023263701" target="_blank">언리얼 페스트 사무국(02-326-3701)</a>, <a href="mailto:unrealfest@epiclounge.co.kr" target="_blank"> 이메일</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="member_cont_box">
			 <div class="ft_btn_box type2">
				  <a href="/v3/unrealfest2025/" name="" id="" class="btn_1" />완료</a>
			  </div>

			  <div class="qr_event">
				<h3 class="purple_title mt_40">Event</h3>
				<div class="event_box_list no_pd">
				<div class="qr_event_box1 qr_event_box fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
					<div class="off_ch">
						<p class="text"><img src="/v3/unrealfest2025/images/event_icon.svg"><span>오프라인 전용</span></p>
					</div>
					<div class="text_box">
						<h4>오프라인 등록 이벤트</h4>
						<p class="text_1">현장 참석자 전원에게 한정판 굿즈 증정!</p>
						<p class="text_date"><img src="/v3/unrealfest2025/images/event_cal_blue.png"><span>8.25(월) ~ 8.26(화)</span></p>
						<p class="list_box">
							<img src="/v3/unrealfest2025/images/off_event_img1.png">
							<img src="/v3/unrealfest2025/images/off_event_img2.png">
						</p>
					</div>
				</div>

				<div class="qr_event_box2 fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
					<div class="qr_event_box2_1 qr_event_box">
						<div class="off_ch">
							<p class="text"><img src="/v3/unrealfest2025/images/event_icon.svg"><span>오프라인 전용</span></p>
						</div>
						<div class="text_box">
							<h4>얼리버드 체크인 이벤트</h4>
							<p class="text_1">현장 체크인 선착순 300명 한정판 굿즈 <br>추가 증정!</p>
							<p class="text_date"><img src="/v3/unrealfest2025/images/event_cal_purple.png"><span>8.25(월)</span></p>
							<p class="list_box">
								<img src="/v3/unrealfest2025/images/off_event_img3.png">
							</p>
						</div>
					</div>
					<div class="qr_event_box2_2 qr_event_box">
						<div class="off_ch">
							<p class="text"><img src="/v3/unrealfest2025/images/event_icon.svg"><span>오프라인 전용</span></p>
						</div>
						<div class="text_box">
							<h4>언리얼 스탬프 투어</h4>
							<p class="text_1">세션 듣고 부스 체험하면, <br>도장 모아 한정판 굿즈에 도전!</p>
							<p class="text_date"><img src="/v3/unrealfest2025/images/event_cal_purple2.png"><span>8.25(월) ~ 8.26(화)</span></p>
							<p class="list_box">
								<img src="/v3/unrealfest2025/images/off_event_img4.png">
							</p>
						</div>
					</div>
				</div>
				<div class="qr_event_box2 fromTopIn" data-scroll="">
					<div class="qr_event_box2_3 qr_event_box">
						<div class="off_ch">
							<p class="text"><img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/event_icon.svg"><span>오프라인 전용</span></p>
						</div>
						<div class="text_box">
							<h4>경품 추첨 이벤트</h4>
							<p class="text_1">오프라인 참석자 대상, 세션 종료 후 <br>경품 추첨!</p>
							<p class="text_2">(1일 1회)</p>
							<p class="text_date"><img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/cal_icn_411.svg"><span>8.25(월) ~ 8.26(화)</span></p>
							<p class="list_box">
								<img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/off_event_img41.png">
							</p>
						</div>
					</div>
					<div class="qr_event_box2_4 qr_event_box">
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
				<!-- <div class="qr_event_box3 qr_event_box fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
					<div class="off_ch">
						<p class="text"><img src="/v3/unrealfest2025/images/event_icon.svg"><span>오프라인 전용</span></p>
					</div>
					<div class="text_box">
						<h4>경품 추첨 이벤트</h4>
						<p class="text_1">오프라인 참석자 대상, 세션 종료 후 경품 추첨<br> (1일 1회)</p>
						<p class="text_date"><img src="/v3/unrealfest2025/images/event_cal_green.png"><span>8.25(월) ~ 8.26(화)</span></p>
						<p class="list_box">
							<img src="/v3/unrealfest2025/images/off_event_img5.png">
						</p>
					</div>
				</div> -->
				
				<!-- <div class="qr_event_box5 qr_event_box fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
					<div class="on_ch">
						<p class="text"><img src="/v3/unrealfest2025/images/event_icon2.svg"><span>온라인전용</span></p>
					</div>
					<div class="text_box">
						<h4>출석 체크 이벤트</h4>
						<p class="text_1">양일간 시청한 분 중 추첨을 통해 300명께 굿즈 증정!</p>
						<p class="text_2">*온라인 체크인 시 자동 응모</p>
						<p class="text_date"><img src="/v3/unrealfest2025/images/event_cal_orange.png"><span>8.25(월) ~ 8.26(화)</span></p>
						<p class="list_box">
							<img src="/v3/unrealfest2025/images/event_online_img.png">
						</p>
					</div>
					   

			  </div> -->
			  <ul class="bu right_bu type2 fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
				  <li>경품은 사정에 따라 변경되거나 이미지와 다를 수 있습니다.</li>
			  </ul>
			  </div>
		  </div>
      </div>
  </div>
<?php
include_once "member_footer.php";
?>


</body>

</html>
