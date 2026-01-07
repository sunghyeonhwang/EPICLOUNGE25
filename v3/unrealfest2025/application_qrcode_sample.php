<?php
include_once "../common.php";
include_once "member_header.php";


?>

  <div class="memeber_container">
      <div class="wrap">
       
	   <div class="member_title_box">
			<h3 class="title"><img src="/v3/unrealfest2025/images/member_top_text.svg" /></h3>
		</div>
		<div class="ap_qrcode_box">
			<h3 class="h3"><em>언리얼 페스트 서울 2025</em> 결제가 완료되었습니다.</em></h3>
			<div class="qr_top_box">
				<div class="qr_img_box_wrap">
					<p class="qr_title">얼리버드 양일권</p>
					<p class="qr_img_box">

                        <?
                            if(empty($obj)){
                            ?>
                        <img src="https://epiclounge.co.kr/v3/unrealfest2025/qrdata/<?=$_SESSION["final_idx"]?>.jpg" alt="QR 코드" /><?
                        }else{
                            ?>
                            <img src="https://epiclounge.co.kr/v3/unrealfest2025/qrdata/<?=$obj["apply_no"]?>.jpg" alt="QR 코드" /><?
                        }
                        ?>
                    </p>
				</div>
				<div class="qr_text_box_wrap">
					<h4>안내 사항</h4>
					<ul>
                        <li>QR 코드는 문자로 발송되며 행사 1일 전 한번 더 발송 될 예정입니다.</li>
                        <li>오프라인 티켓을 구매하시면, 추가로 등록 없이 온라인 중계도 시청하실 수 있습니다.</li>
                        <li>등록정보 변경 및 취소는 <a href="/unrealfest2025/application_confirm.php">등록정보 수정 페이지</a>에서 가능합니다.</li>
					</ul>

					<h4>환불 안내</h4>
					<ul>
						<li>행사 준비 및 좌석 배정 등의 이유로, 얼리버드 판매 기간(~2025.7.16 오후 11시 59분까지)에만 환불이 가능합니다.</li>
						<li>문의: 고객센터 이메일 / 전화: 02-326-370</li>
					</ul>
				</div>
			</div>
		</div>
<script>
    function fn_move_main(){
        location.href = "https://epiclounge.co.kr/v3/unrealfest2025/index.html";
    }
</script>
		<div class="member_cont_box">
			 <div class="ft_btn_box type2 mt_10 mb_50">
				  <button type="button" onclick="fn_move_main()"  name="" id="" class="btn_1" />완료</button>
			  </div>

			  <div class="event_box_list no_pd">
				<h3>Event</h3>
				<div class="qr_event_box1 qr_event_box">
					<div class="off_ch">
						<p class="text"><img src="/v3/unrealfest2025/images/event_icon.svg" /><span>오프라인 전용</span></p>
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

				<div class="qr_event_box2">
					<div class="qr_event_box2_1 qr_event_box">
						<div class="off_ch">
							<p class="text"><img src="/v3/unrealfest2025/images/event_icon.svg" /><span>오프라인 전용</span></p>
						</div>
						<div class="text_box">
							<h4>얼리버드 체크인 이벤트</h4>
							<p class="text_1">현장 체크인 선착순 300명 한정판 굿즈 <br />추가 증정!</p>
							<p class="text_date"><img src="/v3/unrealfest2025/images/event_cal_purple.png"><span>8.25(월)</span></p>
							<p class="list_box">
								<img src="/v3/unrealfest2025/images/off_event_img3.png">
							</p>
						</div>
					</div>
					<div class="qr_event_box2_2 qr_event_box">
						<div class="off_ch">
							<p class="text"><img src="/v3/unrealfest2025/images/event_icon.svg" /><span>오프라인 전용</span></p>
						</div>
						<div class="text_box">
							<h4>언리얼 스탬프 투어</h4>
							<p class="text_1">세션 듣고 부스 체험하면, <br />도장 모아 한정판 굿즈에 도전!</p>
							<p class="text_date"><img src="/v3/unrealfest2025/images/event_cal_purple2.png"><span>8.25(월) ~ 8.26(화)</span></p>
							<p class="list_box">
								<img src="/v3/unrealfest2025/images/off_event_img4.png">
							</p>
						</div>
					</div>
				</div>
				<div class="qr_event_box3 qr_event_box">
					<div class="off_ch">
						<p class="text"><img src="/v3/unrealfest2025/images/event_icon.svg" /><span>오프라인 전용</span></p>
					</div>
					<div class="text_box">
						<h4>경품 추첨 이벤트</h4>
						<p class="text_1">오프라인 참석자 대상, 세션 종료 후 경품 추첨<br /> (1일 1회)</p>
						<p class="text_date"><img src="/v3/unrealfest2025/images/event_cal_green.png"><span>8.25(월) ~ 8.26(화)</span></p>
						<p class="list_box">
							<img src="/v3/unrealfest2025/images/off_event_img5.png">
						</p>
					</div>
				</div>
				
				<div class="qr_event_box5 qr_event_box">
					<div class="on_ch">
						<p class="text"><img src="/v3/unrealfest2025/images/event_icon2.svg" /><span>온라인전용</span></p>
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
				</div>
			  </div>
		  </div>
      </div>
  </div>
<?php
include_once "member_footer.php";
?>


</body>

</html>
