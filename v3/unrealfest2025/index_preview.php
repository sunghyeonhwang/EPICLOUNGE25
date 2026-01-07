<?php
include_once("index2_google_loader.php");
include_once "../common.php";
include_once "member_header.php";
?>

  <link rel="stylesheet" href="/unrealfest2025/css/main_update.css">
<div id="member_top" class="header_2">
	<div class="wrap">
	<p class="top_btn"><a href="#event_visual"><i class="top_icon"></i></a></p>
	<div class="member_header_seq_box">
		<ul>
			<li class="menu_1"><a href="#event_cont_1">Overview</a></li>
			<li class="menu_2"><a href="#event_cont_2">Agenda</a></li>
			<li class="menu_3"><a href="#event_cont_3">Register</a></li>
			<li class="menu_4"><a href="#event_cont_4">Sponsor</a></li>
			<li class="menu_5"><a href="#event_cont_5">Event</a></li>
			<li class="menu_6"><a href="#event_cont_6">FAQ</a></li>
		</ul>
	</div>
	<p class="confirm_btn"><a href="#event_cont_3" class="btn_1" >등록하기</a><a href="/unrealfest2025/application_confirm.php" class="btn_2" target="_blank">등록 확인</a></p>
	</div>
</div>

<div id="sns_fixed">
	<a href="#"
	   onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent('https://epiclounge.co.kr/v3/unrealfest2025/'), 'facebook-share-dialog', 'width=626,height=436'); return false;"><img
				src="https://unrealsummit16.cafe24.com/2025/ufest25/images/link_icon1.svg"/></a><!-- 페이스북 -->
	<a href="#"
	   onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent('언리얼 페스트 서울 2025 - 세션 정보') + '&url=' + encodeURIComponent('https://epiclounge.co.kr/v3/unrealfest2025/'), 'twitter-share-dialog', 'width=550,height=420'); return false;"><img
				src="https://unrealsummit16.cafe24.com/2025/ufest25/images/link_icon2.svg"/></a><!-- 트위터 -->
				<!--
	<a href="#"
	   onclick="window.open('https://www.instagram.com/sharer.php?u=' + encodeURIComponent('https://epiclounge.co.kr/v3/unrealfest2025/index2.php'), 'instagram-share-dialog', 'width=626,height=436'); return false;"><img
				src="https://unrealsummit16.cafe24.com/2025/ufest25/images/link_icon3.svg"/></a> -->
	<a href="#"
	   onclick="navigator.clipboard.writeText('https://epiclounge.co.kr/v3/unrealfest2025/index2.php').then(() => alert('링크가 복사되었습니다.')); return false;"><img
				src="https://unrealsummit16.cafe24.com/2025/ufest25/images/link_icon4.svg"/></a><!-- 링크 -->
</div>
<div class="event_wrap">
	<div id="event_visual">
		<div class="visual_mp4">
			 <video autoplay="" loop="" muted="" class="video w_video" playsinline="">
				<source src="https://unrealsummit16.cafe24.com/2025/ufest25/3_fusion_2_re2.mp4" type="video/mp4">
			</video>
		</div>
		<div class="visual_text">
			<span class="text_1"><img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/main_vi_text1.svg" alt="로고 이미지" /></span>
			<span class="text_2"><img src="https://unrealsummit16.cafe24.com/2025/ufest25/main_vi_text2.svg" alt="로고 이미지" /></span>
		</div>
	</div>

	<div id="event_cont_1">
		<div class="wrap">
			<div class="section_title fromTopIn" data-scroll=""><h3>Overview</h3></div>

			<div class="text">
				<p class="fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">언리얼 페스트는 언리얼 엔진과 에픽 에코시스템의 최신 기술, 그리고 다양한 산업에서의 혁신적인 리얼타임 3D 인터랙티브 제작 경험을 공유하는 에픽게임즈의 대표 연례 행사입니다. 오는 8월 25일(월)부터 26일(화)까지 양일간 열리는 이번 행사에서는 게임(프로그래밍/아트), 미디어 & 엔터테인먼트, 제조 및 시뮬레이션 등 다양한 산업별 트랙을 통해 총 38개의 세션이 진행됩니다.</p>
				<p class="fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">각 세션에는 3D 콘텐츠 제작을 위한 실전 노하우와 기술 인사이트가 가득 담겨 있어, 다양한 분야의 개발자와 크리에이터에게 유익한 경험을 제공할 것입니다. 또한, 세션 외에도, 최신 기술 체험 전시와 다양한 이벤트가 마련되어 있어 현장에서 더욱 풍부한 경험을 하실 수 있습니다. </p>

				<p class="fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">기술을 넘어, 새로운 아이디어와 영감을 얻고 싶다면, 지금 바로 언리얼 페스트 서울 2025에 등록하세요!</p>
			</div>
		</div>
	</div>

	<div id="event_cont_2">
		<div class="wrap">
			<div class="section_title fromTopIn" data-scroll=""><h3>Agenda</h3></div>
			
			<div class="date_header fromTopIn" data-scroll="">
				<div class="btn_wrap">
				<button type="button" class="date_nav active">
					<span class="date">Day 1. 8월 25일(월)</span>
				</button>
				<button type="button" class="date_nav">
					<span class="date">Day 2. 8월 26일(화)</span>
				</button>
				</div>
				 <a href="#" onclick="alert('전체 세션 정보는 6월 25일 오픈 예정입니다.'); return false;">
					<img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/update_time.svg" />
					Filter
				</a>
			</div>
			<div class="program_wrap ">
				<div class="program_content active">
					<!--  비율 2:1 -->
					<table class="program_table">
					<colgroup>
						<col style="width:16%" />
						<col style="width:28%" />
						<col style="width:28%" />
						<col style="width:28%" />
					</colgroup>
						<thead>
							<tr>
								<th scope="col" class="th_1"><span>시간</span></th>
								<th scope="col" class="th_2"><span>게임: 프로그래밍</span></th>
								<th scope="col" class="th_3"><span>미디어 & 엔터테인먼트</span></th>
								<th scope="col" class="th_4"><span>게임: 아트</span></th>
							</tr>
						</thead>
						<tbody>
							<tr class="active">
								<td class="time_td"><span>09:00</span></td>
								<td colspan="3" class="text_center text_col_3"><span class="text_hello">등록 확인</span></td>
							</tr>
							<tr>
								<td class="time_td"><span>11:00</span></td>
								<td colspan="3" class="text_center text_col_3 big_td">
									<span class="text_hello">환영사</span>
									<span class="text_info"><span style="font-weight: 800;">박성철 대표</span>, 에픽게임즈 코리아	</span>
								</td>
							</tr>
							<tr>
								<td class="time_td"><span>11:10</span></td>
								<td colspan="3" class=" text_col_3 text_left big_td">
									<button type="button" data-btn-pop="pop_1_1"  data-btn-type="1"  class="program_part">
										<!-- <span class="cate">키노트 1</span> -->
										<span class="title">키노트 1</span>
										<span class="text_info">Tim Sweeney</span>,  <span style="font-weight: 400;">Founder & CEO, Epic Games</span>
									</button>
								</td>
							</tr>
						
							<tr>
								<td class="time_td"><span>11:25</span></td>
								<td colspan="3" class=" text_col_3 text_left big_td">
									<button type="button" data-btn-pop="pop_1_2" data-btn-type="1"  class="program_part">
									<!-- <span class="cate">키노트 2</span> -->
									<span class="title">키노트 2</span>
									<span class="text_info">Bill Clifford</span>, <span style="font-weight: 400;">General Manager of Unreal Enigne Ecosystem, Epic Games</span>
									</button>
								</td>
							</tr>
							<tr>
								<td class="time_td"><span>11:40</span></td>
								<td colspan="3" class="big_td text_col_3 text_left">
									<button type="button" data-btn-pop="pop_1_3" data-btn-type="1"  class="program_part">
									<!-- <span class="cate">키노트 3</span> -->
									<span class="title">키노트 3</span>
									<span class="text_info">Marcus Wassmer</span>, <span style="font-weight: 400;">EVP of Engineering, Epic Games</span>
									</button>
								</td>
							</tr>
							<tr>
								<td class="time_td" rowspan="2"><span>13:10</span></td>
								<td class="sm_td">
									<? xls_loader_cel(2,1);?>
								</td>
								
							
								<td class="sm_td" rowspan="2" style="vertical-align:middle">
									<? xls_loader_cel(4,2);?>
								</td>
								
							
								<td class="sm_td" rowspan="2" style="vertical-align:middle">
									<? xls_loader_cel(5,3);?>
								</td>
								
							
							</tr>
							<tr>
								<td class="sm_td" style="padding-top:0px">
									<? xls_loader_cel(3,1);?>
								</td>
							
							
							</tr>
							<tr>
								<td class="time_td"><span>14:10</span></td>
								<td class="sm_td">
									 <?  xls_loader_cel(6,1);?> 
								</td> 

								<td class="sm_td">
									<? xls_loader_cel(7,2);?>
								</td>
							
								<td class="sm_td">
									<? xls_loader_cel(8,3);?>
								</td>
							</tr>
							<tr>
								<td class="time_td"><span>15:30</span></td>
								<td class="sm_td">
									<? xls_loader_cel(9,1);?>
								</td>
							
								<td class="sm_td">
									<? xls_loader_cel(10,2);?>
								</td>
							
								<td class="sm_td">
									<? xls_loader_cel(11,3);?>
								</td>
							</tr>
							<tr>
								<td class="time_td"><span>16:30</span></td>
								<td class="sm_td">
									<? xls_loader_cel(12,1);?>
								</td>
							
								<td class="sm_td">
									<? xls_loader_cel(13,2);?>
								</td>
							
								<td class="sm_td">
									<? xls_loader_cel(14,3);?>
								</td>
							</tr>
						
							<tr>
								<td class="time_td"><span>17:30</span></td>
								<td class="sm_td">
									<? xls_loader_cel(15,1);?>
								</td>
							
								<td class="sm_td" >
									<?  xls_loader_cel(16,2);?>
								</td>
							
								<td class="sm_td">
									<? xls_loader_cel(17,3);?>
								</td>
							</tr>
						
						
							<tr>
								<td class="time_td"><span>18:30</span></td>
								<td colspan="3" class="last_pre">
									경품추첨
								</td>
							</tr>
						
						</tbody>
					</table>

				
				   
				</div>

				<div class="program_content">
					<table class="program_table">
					<colgroup>
						<col style="width:16%" />
						<col style="width:28%" />
						<col style="width:28%" />
						<col style="width:28%" />
					</colgroup>
						<thead>
							<tr>
								<th scope="col" class="th_1"><span>시간</span></th>
								<th scope="col" class="th_2"><span>게임</span></th>
								<th scope="col" class="th_3"><span>미디어 & 엔터테인먼트</span></th>
								<th scope="col" class="th_4"><span>제조 및 시뮬레이션</span></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="time_td"><span>10:00</span></td>
								<td class="sm_td">
								<? xls_loader_cel(18,1);?>
								</td>
							
								<td class="sm_td ">
									<?  xls_loader_cel(19,2);?>
									
								</td>
							
								<td class="sm_td">
									<? xls_loader_cel(20,3);?>
								</td>
							</tr>
							<tr>
								<td class="time_td" rowspan="2"><span>11:00</span></td>
								<td class="sm_td">
									<? xls_loader_cel(21,1);?>
								</td>
								
							
								<td class="sm_td" rowspan="2" style="vertical-align:middle">
									<? xls_loader_cel(23,2);?>
								</td>
								
							
								<td class="sm_td" rowspan="2" style="vertical-align:middle">
									<? xls_loader_cel(24,3);?>
								</td>
								
							
							</tr>
							<tr>
								<td class="sm_td" style="padding-top:0px">
									<? xls_loader_cel(22,1);?>
								</td>
							
							
							</tr>
							<tr>
								<td class="time_td"><span>12:00</span></td>
								<td class="sm_td">
									<? xls_loader_cel(25,1);?>
								</td>
							
								<td class="sm_td">
									<? xls_loader_cel(26,2);?>
								</td>
							
								<td class="sm_td">
									<? xls_loader_cel(27,3);?>
								</td>
							</tr>
							<tr>
								<td class="time_td"><span>14:00</span></td>
								<td class="sm_td">
									<? xls_loader_cel(28,1);?>
								</td>
							
								<td class="sm_td">
									<? xls_loader_cel(29,2);?>
								</td>
							
								<td class="sm_td">
									<? xls_loader_cel(30,3);?>
								</td>
							</tr>
							<tr>
								<td class="time_td"><span>15:00</span></td>
								<td class="sm_td">
									<? xls_loader_cel(31,1);?>
								</td>
							
								<td class="sm_td ">
									<? xls_loader_cel(32,2);?>
									
								</td>
							
								<td class="sm_td ">
									<?  xls_loader_cel(33,3);?>
									
								</td>
							</tr>
						
							<tr>
								<td class="time_td"><span>16:20</span></td>
								<td class="sm_td">
									<? xls_loader_cel(34,1);?>
								</td>
							
								<td class="sm_td">
									<? xls_loader_cel(35,2);?>
								</td>
							
								<td class="sm_td">
									<? xls_loader_cel(36,3);?>
								</td>
							</tr>
						
							<tr>
								<td class="time_td"><span>17:20</span></td>
								<td class="sm_td ">
									<? xls_loader_cel(37,1);?>
									
								</td>
							
								<td class="sm_td">
									<? xls_loader_cel(38,2);?>
								</td>
							
								<td class="sm_td ">
									<? xls_loader_cel(39,3);?>
									
								</td>
							</tr>
						
						
							<tr>
								<td class="time_td"><span>18:10</span></td>
								<td colspan="3" class="last_pre">
									경품추첨
								</td>
							</tr>
						
						</tbody>
					</table> 
				</div>
				</div>
				   
			
					<ul class="bu right_bu type2 fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
						<li>스케줄은 사정에 따라 사전 고지 없이 변경될 수 있습니다.</li>
					</ul>

		</div>
	</div>
	<div id="event_cont_3">
		<div class="wrap">
			
			<div class="section_title fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once"><h3>Register</h3></div>
			
			<div class="ticket_buy_box fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
				<div class="ticket_offline ticket_box">
					<div class="text_box">
						<h3 class="h3">얼리버드 할인</h3>
						<p class="text_1">
							<strong>50</strong>
							<span>%<br>OFF</span>
						</p>
						<p class="text_2">오프라인<span>(+온라인)</span></p>
						<p class="text_3">기간: ~7/16(수)까지</p>
						<a href="application_step1.php" >등록하기</a>
					</div>
				</div>
	
				<div class="ticket_online ticket_box">
					<div class="text_box">
						<h3 class="h3">온라인</h3>
						<p class="text_1"><strong>FREE</strong></p>
						<p class="text_2">온라인</p>
						<a href="application_step1_online.php">등록하기</a>
					</div>
				</div>
			</div>		
			<ul class="bu left_bu fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
				<li>오프라인 티켓 수량이 한정되어 있어 조기 마감될 수 있으니 서둘러 등록해 주세요.</li>
			</ul>
			
	
	
		</div>
	</div>
	
	<div id="event_cont_4">
		<div class="wrap">
			<div class="section_title fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once"><h3>Sponsor</h3></div>
			<div class="sponsor_box1 fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
			<p class="sp_img sp_1"><a href="https://www.hp.com/kr-ko/workstations/industries/creative-pros.html" title="새창" target="_blank"><span></span></a></p>
			<p class="sp_img sp_2"><a href="https://xsolla.com/" title="새창" target="_blank"><span></span></a></p>
			</div>
			<div class="sponsor_box2 fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
				<p class="sp_img">
					<a href="https://www.perforce.com/" title="새창" target="_blank"><img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/sponsor_img3.png"></a>
				</p>
				<p class="sp_img">
					<a href="https://www.unlimitreal.com/channels/L2NoYW5uZWxzLzY2NTg/pages/unlimitreal" title="새창" target="_blank"><img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/sponsor_img4.png"></a>
				</p>
				<p class="sp_img">
					<a href="https://www.samwooim.com/" title="새창" target="_blank"><img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/sponsor_img5.png"></a>
				</p>
				<p class="sp_img">
					<a href="https://monsteratech.com/" title="새창" target="_blank"><img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/sponsor_img6.png"></a>
				</p>
				<p class="sp_img">
					<a href="https://www.visol.co.kr/index.htm" title="새창" target="_blank"><img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/visol.jpg"></a>
				</p>
			</div>
		</div>
	</div>
	
	<div id="event_cont_5">
		<div class="wrap">
			<div class="section_title fromTopIn" data-scroll=""><h3>Event</h3></div>
			<div class="event_box_list no_pd">
				<div class="qr_event_box1 qr_event_box fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
					<div class="off_ch">
						<p class="text"><img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/event_icon.svg"><span>오프라인 전용</span></p>
					</div>
					<div class="text_box">
						<h4>오프라인 등록 이벤트</h4>
						<p class="text_1">현장 참석자 전원에게 한정판 굿즈 증정!</p>
						<p class="text_date"><img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/cal_icn_1.svg"><span>8.25(월) ~ 8.26(화)</span></p>
						<p class="list_box">
							<img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/event_t2.png">
							<img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/event_t1.png">
						</p>
					</div>
				</div>

				<div class="qr_event_box2 fromTopIn" data-scroll="">
					<div class="qr_event_box2_1 qr_event_box">
						<div class="off_ch">
							<p class="text"><img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/event_icon.svg"><span>오프라인 전용</span></p>
						</div>
						<div class="text_box">
							<h4>얼리버드 체크인 이벤트</h4>
							<p class="text_1">현장 체크인 선착순 300명 한정판 굿즈 <br>추가 증정!</p>
							<p class="text_date"><img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/cal_icn_2.svg"><span>8.25(월)</span></p>
							<p class="list_box">
								<img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/off_event_img3.png">
							</p>
						</div>
					</div>
					<div class="qr_event_box2_2 qr_event_box">
						<div class="off_ch">
							<p class="text"><img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/event_icon.svg"><span>오프라인 전용</span></p>
						</div>
						<div class="text_box">
							<h4>언리얼 스탬프 투어</h4>
							<p class="text_1">세션 듣고 부스 체험하면, <br>도장 모아 한정판 굿즈에 도전!</p>
							<p class="text_date"><img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/cal_icn_3.svg"><span>8.25(월) ~ 8.26(화)</span></p>
							<p class="list_box">
								<img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/off_event_img4.png">
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
						<p class="text"><img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/event_icon.svg"><span>오프라인 전용</span></p>
					</div>
					<div class="text_box">
						<h4>경품 추첨 이벤트</h4>
						<p class="text_1">오프라인 참석자 대상, 세션 종료 후 경품 추첨<br> (1일 1회)</p>
						<p class="text_date"><img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/event_cal_green.png"><span>8.25(월) ~ 8.26(화)</span></p>
						<p class="list_box">
							<img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/off_event_img5.png">
						</p>
					</div>
				</div> -->
				
				<!-- <div class="qr_event_box5 qr_event_box fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
					<div class="on_ch">
						<p class="text"><img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/event_icon2.svg"><span>온라인전용</span></p>
					</div>
					<div class="text_box">
						<h4>출석 체크 이벤트</h4>
						<p class="text_1">양일간 시청한 분 중 추첨을 통해 300명께 굿즈 증정!</p>
						<p class="text_2">*온라인 체크인 시 자동 응모</p>
						<p class="text_date"><img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/event_cal_orange.png"><span>8.25(월) ~ 8.26(화)</span></p>
						<p class="list_box">
							<img src="https://unrealsummit16.cafe24.com/2025/ufest25/images/event_online_img.png">
						</p>
					</div>
					   

			  </div> -->
		  </div>
			
			<ul class="bu right_bu type2 fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
				<li>경품은 사정에 따라 변경되거나 이미지와 다를 수 있습니다.</li>
			</ul>
	
		</div>
	</div>
	
	<div id="event_cont_6">
		<div class="wrap">
			<div class="section_title fromTopIn" data-scroll=""><h3>FAQ</h3></div>
			<div class="faq">
			  <div class="tabs  fromTopIn" data-scroll="">
				<button type="button" class="faq_tab_btn active">등록안내</button>
				<button type="button" class="faq_tab_btn">참석 및 시청</button>
				<button type="button" class="faq_tab_btn">기타 사항</button>
				</div>
				<div class="tab_contents">
				<div class="faq_tab_cont active">
			<div class="acc_list">
				<div class="acc_item  fromTopIn " data-scroll="">
					  <button type="button" class="acc_btn">
						  <span class="title">듣고 싶은 트랙이 마감되었는데 다른 트랙을 선택해도 참석이 가능한가요?</span>
					  </button>
					  <div class="acc_con">
						  <p>다른 트랙을 선택해 신청하실 수 있으나, 행사장이 만석일 경우 선택하신 트랙 참가자를 우선으로 입장이 제한될 수 있습니다.</p>
						  <button type="button" class="acc_btn ">
						  <span class="faq_close">닫기</span>
						  </button>
					  </div>
					  
				  </div>
				  <div class="acc_item  fromTopIn " data-scroll="">
					  <button type="button" class="acc_btn">
						  <span class="title">오프라인과 온라인 등록은 어떤 차이점이 있나요?</span>
					  </button>
					  <div class="acc_con">
						  <p>언리얼 페스트 서울 2025는 8월 25일~26일 양일간 오프라인과 온라인으로 진행됩니다.<br />오프라인 등록은 유료이며, 원하는 일자별 세션 참석, 한정판 굿즈 수령, Q&A, 부스 체험 등 다양한 현장 프로그램에 참여하실 수 있습니다. 단, 한정 수량으로 조기 마감될 수 있으니 빠른 등록을 권장합니다.<br />온라인 등록은 무료로, 장소에 관계없이 세션 시청이 가능하며, 오프라인 등록이 마감된 경우에도 이용할 수 있습니다. 단, 발표자 동의 및 송출 환경에 따라 일부 세션은 중계되지 않을 수 있습니다.</p>
						  <button type="button" class="acc_btn ">
						  <span class="faq_close">닫기</span>
						  </button>
					  </div>
					  
				  </div>
					<div class="acc_item fromTopIn" data-scroll="">
						<button type="button" class="acc_btn">
							<span class="title">언리얼 페스트는 사전에 등록해야만 참석할 수 있나요?</span>
						</button>
						<div class="acc_con">
							<p>네. 오프라인 유료 등록과 온라인 무료 등록 모두 행사 시작 전까지 등록을 완료하셔야 참석 및 시청이 가능합니다.</p>
							<button type="button" class="acc_btn ">
							  <span class="faq_close">닫기</span>
							  </button>
						</div>
						
					</div>
					
					<div class="acc_item fromTopIn" data-scroll="">
						<button type="button" class="acc_btn">
							<span class="title">오프라인에 참석하고 싶은데, 이미 판매가 완료된 경우에는 어떻게 하면 될까요?</span>
						</button>
						<div class="acc_con">
							<p>오프라인 등록이 마감된 경우, 온라인 무료 등록을 통해 세션을 시청해 주세요. 단, 일부 세션은 중계되지 않을 수 있습니다.</p>
							<button type="button" class="acc_btn ">
							  <span class="faq_close">닫기</span>
							  </button>
						</div>
						
					</div>
					
					
					<div class="acc_item fromTopIn" data-scroll="">
						<button type="button" class="acc_btn">
							<span class="title">1인 1회만 등록이 가능한가요?</span>
						</button>
						<div class="acc_con">
							<p>네, 오프라인과 온라인 모두 본인 인증으로 1인 1회만 등록 가능합니다. 단, 오프라인 유료 등록자는 동일 이메일로 온라인 중계도 시청하실 수 있습니다.</p>
							<button type="button" class="acc_btn ">
							  <span class="faq_close">닫기</span>
							  </button>
						</div>
						
					</div>
					<div class="acc_item fromTopIn" data-scroll="">
						<button type="button" class="acc_btn">
							<span class="title">단체 등록은 어떻게 하면 될까요?</span>
						</button>
						<div class="acc_con">
							<p>언리얼 페스트는 1인 1회 등록 시스템을 운영하기 때문에, 단체 등록은 지원하지 않으며 15인 이상에 한해 단체 결제만 가능합니다. 결제 후, 각 참가자가 개별로 등록을 완료해야 최종 등록이 완료됩니다.</p>
							<button type="button" class="acc_btn ">
							  <span class="faq_close">닫기</span>
							  </button>
						</div>
						
					</div>
					
					<div class="acc_item fromTopIn" data-scroll="">
						<button type="button" class="acc_btn">
							<span class="title">등록 정보는 어떻게 수정하나요?</span>
						</button>
						<div class="acc_con">
							<p>메뉴바 우측의 <a href="https://epiclounge.co.kr/v3/unrealfest2025/application_confirm.php" target="_blank">등록 확인</a>  페이지에서 직접 수정하실 수 있습니다.</p>
							<button type="button" class="acc_btn ">
							  <span class="faq_close">닫기</span>
							  </button>
						</div>
						
					</div>
				</div>
				</div>
				<div class="faq_tab_cont">
					
					
			<div class="acc_list">
				  <div class="acc_item fromTopIn" data-scroll="">
					  <button type="button" class="acc_btn">
						  <span class="title">행사 당일 언제부터 입장/시청할 수 있나요?</span>
					  </button>
					  <div class="acc_con">
						  <p>오프라인은 오전 9시부터 등록 확인 후 입장이 가능하며, 세션룸 입장은 첫 세션 직전에 시작됩니다. 그 전까지 다양한 현장 이벤트에 참여하실 수 있습니다. 온라인은 각 일자 첫 세션 30분 전부터 시청 가능합니다.</p>
						  <button type="button" class="acc_btn ">
							<span class="faq_close">닫기</span>
							</button>
					  </div>                      
				  </div>                            
				  <div class="acc_item fromTopIn" data-scroll="">
					  <button type="button" class="acc_btn">
						  <span class="title">오프라인에 등록해도 온라인으로 시청이 가능한가요?</span>
					  </button>
					  <div class="acc_con">
						  <p>네, 오프라인 유료 등록자는 등록 시 사용한 이메일 주소로 온라인 중계도 시청하실 수 있습니다.</p>
						  <button type="button" class="acc_btn ">
							<span class="faq_close">닫기</span>
							</button>
					  </div>
				  </div>                            
				  <div class="acc_item fromTopIn" data-scroll="">
					  <button type="button" class="acc_btn">
						  <span class="title">온라인 등록자도 오프라인에 참석할 수 있나요?</span>
					  </button>
					  <div class="acc_con">
						  <p>아니요, 오프라인 티켓을 구매하지 않은 경우 오프라인 행사에 참석하실 수 없습니다.</p>
						  <button type="button" class="acc_btn ">
							<span class="faq_close">닫기</span>
							</button>
					  </div>                      
				  </div>
	
				  <div class="acc_item fromTopIn" data-scroll="">
					  <button type="button" class="acc_btn">
						  <span class="title">온라인으로 등록한 경우, 어떻게 시청하면 되나요?</span>
					  </button>
					  <div class="acc_con">
						  <p>행사 당일 첫 세션 30분 전에 시청 링크가 카카오톡(또는 문자)과 이메일로 발송됩니다. 못 받으셨다면 본 페이지에서 이메일로 체크인해 시청하실 수 있습니다.</p>
						  <button type="button" class="acc_btn ">
							<span class="faq_close">닫기</span>
							</button>
					  </div>                      
				  </div>
							
				  <div class="acc_item fromTopIn" data-scroll="">
					  <button type="button" class="acc_btn">
						  <span class="title">모바일/태블릿으로 시청이 가능한가요?</span>
					  </button>
					  <div class="acc_con">
						  <p>네, 모바일과 태블릿으로 시청이 가능합니다. 다만, 실시간 채팅에 참여하시려면 PC로 시청하시는 것을 권장드립니다.</p>
						  <button type="button" class="acc_btn ">
							<span class="faq_close">닫기</span>
							</button>
					  </div>                      
				  </div>
							
				  <div class="acc_item fromTopIn" data-scroll="">
					  <button type="button" class="acc_btn">
						  <span class="title">최적의 시청 환경은 무엇인가요?</span>
					  </button>
					  <div class="acc_con">
						  <p>크롬 버전 137.0 이상의 Windows / Linux / macOS 브라우저 환경에서 최적의 시청이 가능합니다.</p>
						  <button type="button" class="acc_btn ">
							<span class="faq_close">닫기</span>
							</button>
					  </div>
					  
				  </div>
							
				  <div class="acc_item fromTopIn" data-scroll="">
					  <button type="button" class="acc_btn">
						  <span class="title">세션 영상을 다시 볼 수 있나요?</span>
					  </button>
					  <div class="acc_con">
						  <p> 네, 발표자의 동의를 받은 세션에 한해 에픽 라운지에 공개될 예정입니다.</p>
						  <button type="button" class="acc_btn ">
							<span class="faq_close">닫기</span>
							</button>
					  </div>
					  
				  </div>
				</div>
							
				</div>
				<div class="faq_tab_cont">
			<div class="acc_list">
					
				  <div class="acc_item fromTopIn" data-scroll="">
					  <button type="button" class="acc_btn">
						  <span class="title">오프라인 행사에 참석한 후 참석 확인증을 받고 싶습니다.</span>
					  </button>
					  <div class="acc_con">
						  <p>행사 종료 후 홈페이지 메뉴바 우측의 <a href="https://epiclounge.co.kr/v3/unrealfest2025/application_confirm.php" target="_blank">등록 확인</a>에서 본인 확인을 하시면 참가 확인증을 확인하고 다운로드하실 수 있습니다.</p>
						  <button type="button" class="acc_btn ">
							<span class="faq_close">닫기</span>
							</button>
					  </div>
				  </div>
				  <div class="acc_item fromTopIn" data-scroll="">
					  <button type="button" class="acc_btn">
						  <span class="title">결제 오류 발생 시 어떻게 해야하나요?</span>
					  </button>
					  <div class="acc_con">
						  <p><a href="https://www.inicis.com/blog/archives/category/cs" target="_blank">이니시스 고객센터</a>로 문의해 주세요. 결제 오류 외의 문의는 <a href="tel:023263701" target="_blank">언리얼 페스트 사무국 전화</a> 또는 <a href="mailto:info@epiclounge.co.kr" target="_blank">이메일</a>로 연락해 주시기 바랍니다. 운영시간은 오전 10시~오후 5시(점심시간 12시~1시 제외)입니다.</p>
						  <button type="button" class="acc_btn ">
							<span class="faq_close">닫기</span>
							</button>
					  </div>
				  </div>
				  <div class="acc_item fromTopIn" data-scroll="">
					  <button type="button" class="acc_btn">
						  <span class="title">부득이하게 오프라인 참석이 어렵게 되었습니다. 환불할 수 있을까요?</span>
					  </button>
					  <div class="acc_con">
						  <p>메뉴바 우측의 <a href="https://epiclounge.co.kr/v3/unrealfest2025/application_confirm.php" target="_blank">등록 확인</a> 페이지에서 직접 결제 취소하실 수 있습니다. 환불은 8월 24일(일) 오전 9시까지 취소한 경우에만 가능하며, 최대 5일 이내 전액 환불됩니다. 단, 얼리버드 티켓은 해당 기간 이후에는 취소가 불가능합니다.</p>
						  <button type="button" class="acc_btn ">
							<span class="faq_close">닫기</span>
							</button>
					  </div>
				  </div>
				  <div class="acc_item fromTopIn" data-scroll="">
					  <button type="button" class="acc_btn">
						  <span class="title">오프라인 참석 시 주차 지원이 가능한가요?</span>
					  </button>
					  <div class="acc_con">
						  <p>아니요, 별도 주차는 지원되지 않으므로 대중교통 이용을 권장드립니다.</p>
						  <button type="button" class="acc_btn ">
							<span class="faq_close">닫기</span>
							</button>
					  </div>
				  </div>
				  <div class="acc_item fromTopIn" data-scroll="">
					  <button type="button" class="acc_btn">
						  <span class="title">행사에 관한 문의를 하고 싶습니다.</span>
					  </button>
					  <div class="acc_con">
						  <p><a href="tel:023263701" target="_blank">언리얼 페스트 사무국 전화</a> 또는 <a href="mailto:info@epiclounge.co.kr" target="_blank">이메일</a>로 문의해 주세요. 운영 시간은 오전 10시부터 오후 5시까지이며, 점심시간(12시~1시)에는 응대가 어렵습니다.</p>
						  <button type="button" class="acc_btn ">
							<span class="faq_close">닫기</span>
							</button>
					  </div>
				  </div>
				
				



				  </div>

				</div>



				</div>
			<script>
			$(document).ready(function() {
				$('.faq_tab_btn').click(function() {
					var index = $(this).index();

					$('.faq_tab_btn').removeClass('active');
					$('.faq_tab_cont').removeClass('active');

					$(this).addClass('active');
					$('.faq_tab_cont').eq(index).addClass('active');
				});

				$('.acc_btn').click(function() {
					var $accCon = $(this).next('.acc_con');
					$accCon.toggleClass('active');
				});

				$('.close').click(function() {
					$(this).prev('.acc_con').removeClass('active');
				});
			  });
			</script>
		</div>
	</div>

	</div>
<?php
include_once "member_footer.php";
?>


	<!--팝업 1일차-->
	<?php
	$last_index = 40;
	$cate_str = "자동차,공통,방송&라이브,영화&TV,게임/영화&TV,방송&라이브이벤트,게임,프로덕션,애니메이션,디지털트윈,디지털휴먼,버추얼프로덕션,시뮬레이션,XR,프로그래밍,비주얼 아트,기획,ALL";
	$cate_list = explode(",", $cate_str);


	$level_str = "초급,중급,고급";
	$level_list = explode(",", $level_str);

	$trans_str = "통역,없음";
	$trans_list = explode(",", $trans_str);

	for($i=1; $i<=$last_index; $i++) {
		$pop_line = $i;
		$period = xls_loader("A".$pop_line);
		$period = str_replace('ㅣ', '<span class="divider">ㅣ</span>', $period);
		$title = xls_loader("B".$pop_line);
		$cate_game = xls_loader("C".$pop_line);
		$cate_game = str_ireplace("ALL", "공통", $cate_game);
		$cate_grade = xls_loader("D".$pop_line);
		$cate_type = xls_loader("E".$pop_line);
		$speaker_name = xls_loader("F".$pop_line);
		$speaker_job = xls_loader("G".$pop_line);
		$calendar_add = xls_loader("U".$pop_line);

		$speaker_contenst1 = xls_loader("H".$pop_line);
//         // Convert Google Drive URL to direct photo link
//         $speaker_img = xls_loader("I".$pop_line);
// 
//         $speaker_img = substr($speaker_img, 0, strrpos($speaker_img, "/view"));
//         $speaker_img = str_replace(
//             "https://drive.google.com/file/d/",
//             "https://lh3.google.com/u/0/d/",
//             $speaker_img
//         );

		//https://drive.google.com/file/d/1KOyLmwPbxtKKmgOH_K5cGoz6xHUsI5Ks/view?usp=drive_link
		//https://lh3.google.com/u/0/d/1KOyLmwPbxtKKmgOH_K5cGoz6xHUsI5Ks=k
		// 강연자 1 이미지
		$speaker_img = xls_loader("I".$pop_line);
		// 구글 드라이브 링크인 경우에만 변환
		if (strpos($speaker_img, 'drive.google.com') !== false) {
			$speaker_img = substr($speaker_img, 0, strrpos($speaker_img, "/view"));
			$speaker_img = str_replace(
				"https://drive.google.com/file/d/",
				"https://lh3.google.com/u/0/d/",
				$speaker_img
			);
		}
		// 다른 링크들은 그대로 사용


		$speaker2_name = xls_loader("J".$pop_line);
		$speaker2_job = xls_loader("K".$pop_line);
		$speaker2_contenst1 = xls_loader("L".$pop_line);
	   // 강연자 2 이미지
	   $speaker2_img = xls_loader("M".$pop_line);
	   // 구글 드라이브 링크인 경우에만 변환
	   if (strpos($speaker2_img, 'drive.google.com') !== false) {
		   $speaker2_img = substr($speaker2_img, 0, strrpos($speaker2_img, "/view"));
		   $speaker2_img = str_replace(
			   "https://drive.google.com/file/d/",
			   "https://lh3.google.com/u/0/d/",
			   $speaker2_img
		   );
	   }

	  $speaker3_name = xls_loader("N".$pop_line);    // N열로 수정
	  $speaker3_job = xls_loader("O".$pop_line);     // O열로 수정
	  $speaker3_contenst1 = xls_loader("P".$pop_line); // P열로 수정
	  $speaker3_img = xls_loader("Q".$pop_line);     // Q열로 수정 (추정)
		// 구글 드라이브 링크인 경우에만 변환
		if (strpos($speaker3_img, 'drive.google.com') !== false) {
			$speaker3_img = substr($speaker3_img, 0, strrpos($speaker3_img, "/view"));
			$speaker3_img = str_replace(
				"https://drive.google.com/file/d/",
				"https://lh3.google.com/u/0/d/",
				$speaker3_img
			);
		}

		$session_info = xls_loader("R".$pop_line);
		
		$session_listinfo = xls_loader("S".$pop_line);
		$session_target = xls_loader("T".$pop_line);
	

		//$cate_list
		$cate_game_list = explode(",", $cate_game);
		$cate_grade_list = explode(",", $cate_grade);
		$cate_type_list = explode(",", $cate_type);

		?>
		<div class="pop pop_cate_1 pop_target_<?=$i?>" data-panel-pop="pop_target_<?=$i?>">
			<button type="button" class="close">닫기</button>
			<div class="pop_inner">
				<div class="pop_scroll">
					<div class="pop_title">
						<!-- 날짜는 하드코딩 -->
						<span class="date"><?=$period?></span> <span class="cal_btn"> <a href="<?=$calendar_add?>" title="새창" target="_blank">캘린더 추가</a></span>

						<!-- 날짜는 하드코딩 -->
						<!-- 제목은 땡겨옴 -->
						<h2><?=$title?></h2>
						<!-- 제목은 땡겨옴 -->
						<div class="pop_info_box">
							<?php
							for($j=0; $j<count($cate_game_list); $j++) {
								$cate_game_name = trim($cate_game_list[$j]);
								$cate_game_idx= 0;
								for ($k = 0; $k < count($cate_list); $k++) {
									if (space_del($cate_game_name)  == space_del($cate_list[$k])) {
										$cate_game_idx = $k;
										break;
									}
								}
								?>
								<span class="pop_cate part_<?=$cate_game_idx+1?>"><?=$cate_game_name?></span>
								<?
							}
							?>

							<?php
							for($j=0; $j<count($cate_grade_list); $j++) {
								$cate_grade_name = trim($cate_grade_list[$j]);
								$cate_grade_idx= 0;
								for ($k = 0; $k < count($level_list); $k++) {
									if (space_del($cate_grade_name) == space_del($level_list[$k])) {
										$cate_grade_idx = $k;
										break;
									}
								}
								?>
								<span class="pop_level level_<?=$cate_grade_idx+1?>"><?=$cate_grade_name?></span>
								<?
							}
							?>
							<!-- 프로그래밍은 cate_1, 비주얼아트는 2 미디어&엔터테인먼트는3 구글시트 c에 순서대로 숫자바뀌면됨-->

							<!-- 초급은1 중급2 고급은3-->

							<?php
							for($j=0; $j<count($cate_type_list); $j++) {
								$cate_type_name = trim($cate_type_list[$j]);
								$cate_type_idx= 0;
								for ($k = 0; $k < count($trans_list); $k++) {
									if (space_del($cate_type_name) == space_del($trans_list[$k])) {
										$cate_type_idx = $k;
										break;
									}
								}
								?>
								<span class="pop_division division_<?=$cate_type_idx+1?>"><?=$cate_type_name?></span>
								<?
							}
							?>
							<!-- 통역 or 구분뿐이긴한데 추가될수있음 -->
						</div>
					</div>

					<div class="pop_con_wrap">
						<div class="pop_con">
							<!-- 발표자 박스1 -->
							<div class="owner_wrap">
								<!-- 출연자 사진위치 -->
								<div class="img"  style="background-image:url('<?=$speaker_img?>')"><?=$speaker_name?> 이미지</div>
								<!-- 출연자 사진위치 -->

								<div class="owner">
									<div class="owner_name">
										<!-- 발표자 이름 -->
										<strong><?=$speaker_name?></strong>
										<!-- 발표자 이름 -->

										<!-- 발표자 직업 -->
										<span><?=$speaker_job?></span>
										<!-- 발표자 직업 -->
									</div>

									<!-- 발표자 내용-->
									<div class="owner_company"><?=$speaker_contenst1?></div>
									<!-- 발표자 내용-->
								</div>
							</div>

							<!-- 발표자 박스1 -->




							<?php
							if($speaker2_name){
								?>



								<!-- 발표자 박스2 -->
								<div class="owner_wrap">
									<!-- 출연자 사진위치 -->
									<div class="img"  style="background-image:url('<?=$speaker2_img?>')"><?=$speaker2_name?> 이미지</div>
									<!-- 출연자 사진위치 -->

									<div class="owner">
										<div class="owner_name">
											<!-- 발표자 이름 -->
											<strong><?=$speaker2_name?></strong>
											<!-- 발표자 이름 -->

											<!-- 발표자 직업 -->
											<span><?=$speaker2_job?></span>
											<!-- 발표자 직업 -->
										</div>

										<!-- 발표자 내용-->
										<div class="owner_company"><?=$speaker2_contenst1?></div>
										<!-- 발표자 내용-->
									</div>
								</div>

								<!-- 발표자 박스2 -->
								<?
							}
							?>



							<?php
							if($speaker3_name){
								?>

								<!-- 발표자 박스3 -->
								<div class="owner_wrap">
									<!-- 출연자 사진위치 -->
									<div class="img"  style="background-image:url('<?=$speaker3_img?>')"><?=$speaker3_name?> 이미지</div>
									<!-- 출연자 사진위치 -->

									<div class="owner">
										<div class="owner_name">
											<!-- 발표자 이름 -->
											<strong><?=$speaker3_name?></strong>
											<!-- 발표자 이름 -->

											<!-- 발표자 직업 -->
											<span><?=$speaker3_job?></span>
											<!-- 발표자 직업 -->
										</div>

										<!-- 발표자 내용-->
										<div class="owner_company"><?=$speaker3_contenst1?></div>
										<!-- 발표자 내용-->
									</div>
								</div>

								<!-- 발표자 박스3 -->
								<?
							}
							?>


							<!-- 세션소개 -->
							<div class="text_box">
								<div class="title">세션소개</div>
								<div class="text"><?=$session_info?></div>
							</div>

							<!-- 세션소개 -->

							<?php
							if($session_listinfo){
								?>

								<!-- 세션목차  목차가 없으면 해당 박스가 안보임 -->
								<div class="text_box">
									<div class="title">세션목차</div>
									<div class="text"><?=$session_listinfo?></div>
								</div>
								<!-- 세션목차 -->
								<?
							}
							?>

							<?php
							if($session_target){
								?>

								<!-- 권장대상  목차가 없으면 해당 박스가 안보임 -->
								<div class="text_box">
									<div class="title">권장대상</div>
									<div class="text"><?=$session_target?></div>
								</div>
								<!-- 권장대상 -->
								<?
							}
							?>

						</div>
					</div>
					<div class="sns_share_btn">
						
						<a href="#"
						   onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent('https://epiclounge.co.kr/v3/unrealfest2025/index2.php?popidx=<?=$i?>'), 'facebook-share-dialog', 'width=626,height=436'); return false;"><img
									src="https://unrealsummit16.cafe24.com/2025/ufest25/images/link_icon1.svg"/></a><!-- 페이스북 -->
						<a href="#"
						   onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent('언리얼 페스트 서울 2025 - 세션 정보') + '&url=' + encodeURIComponent('https://epiclounge.co.kr/v3/unrealfest2025/index2.php?popidx=<?= $i ?>'), 'twitter-share-dialog', 'width=550,height=420'); return false;"><img
									src="https://unrealsummit16.cafe24.com/2025/ufest25/images/link_icon2.svg"/></a><!-- 트위터 -->
						
						<!--<a href="#"
						   onclick="window.open('https://www.instagram.com/sharer.php?u=' + encodeURIComponent('https://epiclounge.co.kr/v3/unrealfest2025/index2.php?popidx=<?=$i?>'), 'instagram-share-dialog', 'width=626,height=436'); return false;"><img
									src="https://unrealsummit16.cafe24.com/2025/ufest25/images/link_icon3.svg"/></a>-->
						<a href="#"
						   onclick="navigator.clipboard.writeText('https://epiclounge.co.kr/v3/unrealfest2025/index2.php?popidx=<?=$i?>').then(() => alert('링크가 복사되었습니다.')); return false;"><img
									src="https://unrealsummit16.cafe24.com/2025/ufest25/images/link_icon4.svg"/></a><!-- 링크 -->
					</div>
					<button class="inner_close">
						<span>CLOSE</span>
					</button>
				</div>
			</div>
			<!--팝업끝-->
		</div>

		<?php
	}
	?>


 


	<!--팝업끝-->

</div>
	<script>
		$(document).ready(function() {
			$('body').addClass('header_2_off');
		});

  // JavaScript 코드
		document.addEventListener('scroll', function() {
			const targetDiv = document.getElementById('event_visual');
			const body = document.body;
			
			const rect = targetDiv.getBoundingClientRect();
			const viewportHeight = window.innerHeight;

			// targetDiv의 하단이 viewport의 상단을 통과하면 header_2_on 클래스를 추가
			if (rect.bottom <= 0) {
				body.classList.add('header_2_on');
				body.classList.remove('header_2_off');
			} 
			// targetDiv의 상단이 viewport의 상단을 통과하여 화면 위로 완전히 사라지면 header_2_on 클래스를 제거
			else if (rect.top >= viewportHeight || rect.bottom > 0) {
				body.classList.remove('header_2_on');
				body.classList.add('header_2_off');
			}
		});
		// JavaScript 코드


		// 부드러운 스크롤을 위한 코드
		document.querySelectorAll('.member_header_seq_box ul li a').forEach(anchor => {
			anchor.addEventListener('click', function(e) {
				e.preventDefault();
				const targetId = this.getAttribute('href').substring(1);
				document.getElementById(targetId).scrollIntoView({
					behavior: 'smooth'
				});
			});
		});
	</script>

	<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function() {
		var trigger = new ScrollTrigger({

			offset: {
				x: 0,
				y: 50
			},
			addHeight: true
		}, document.body, window);
	});



	$(function(){
		$("a").on("click", function(){
			var divName = $(this).attr("id"), 
				topPosition = $("."+ divName).offset().top;
			$('html, body').animate({
				scrollTop: topPosition - 0
			}, 1000);
			return false; //리턴펄스로 스크롤이 최상위로 갔다가 돌아오는 현상 없어짐
		});
	});
	$(document).ready(function() {
	$(window).on('scroll', function() {
		var header = $('.header_2');
		var sections = [
			{ el: $('#event_cont_1'), className: 'menu_1_on' },
			{ el: $('#event_cont_2'), className: 'menu_2_on' },
			{ el: $('#event_cont_3'), className: 'menu_3_on' },
			{ el: $('#event_cont_4'), className: 'menu_4_on' },
			{ el: $('#event_cont_5'), className: 'menu_5_on' },
			{ el: $('#event_cont_6'), className: 'menu_6_on' },
		];

		var addedClass = false;

		$.each(sections, function(index, section) {
			var rect = section.el[0].getBoundingClientRect();
			if (rect.top <= 100 && rect.bottom >= 100) {
				header.attr('class', 'header_2 ' + section.className);
				addedClass = true;
				return false; // Break the loop
			}
		});

		if (!addedClass) {
			header.attr('class', 'header_2');
		}
	});
});

</script>



<script>
		$(function() {
		  

			var $schedule = $('.wrap'),
				$filterBtn = $schedule.find('.filter_btn.filter');
			 $filterBtn.on('click', function(){
				var $this = $(this),
					$thisParent = $this.closest('.filter_wrap');
				$thisParent.toggleClass('active');
			});

			var $dateNav = $('.date_nav'),
				$programWrap = $schedule.find('.program_wrap');
			$dateNav.on('click', function(){
				var $this = $(this),
					thisIndex = $this.index();
				$this.addClass('active');
				$this.siblings().removeClass('active');
				$programWrap.find('.program_content').eq(thisIndex).addClass('active').siblings().removeClass('active');
			}).triggerHandler('click');


			var $faq = $('.faq'),
				$faqAccBtn = $faq.find('.acc_btn');
			$faqAccBtn.on('click', function(){
				var $this = $(this),
					$thisParent = $this.closest('.acc_item');
				$thisParent.toggleClass('active');
			});

	  
			var $pop = $('.pop'),
				$popClose = $pop.find('.close'),
				$popInnerClose = $pop.find('.inner_close');
			$popClose.on('click', function () {
				$pop.removeClass('active');
			});
			$popInnerClose.on('click', function () {
				$pop.removeClass('active');
			});

			//NAV



			var $popupBtn = $('[data-btn-pop]');
			$popupBtn.on('click', function(){
				var $this = $(this);
				var target = $this.data('btn-pop');
				var type = $this.data('btn-type');
				$('.pop_target_'+target).addClass('active');
				$('.pop_target_'+target).removeClass('pop_cate_1');
				$('.pop_target_'+target).addClass('pop_cate_'+type);

			//    $thisPanel.find('.pop_inner').focus();
			});
			$('.pop .close, .pop .inner_close').on('click', function(){
				$(".pop_cate_1").removeClass('active');
			})
		});
	</script>


<script>
	$(document).ready(function () {
		// Get URL parameters
		const urlParams = new URLSearchParams(window.location.search);
		const popIdx = urlParams.get('popidx');

		// If popidx parameter exists, trigger corresponding popup and focus button
		if (popIdx) {
			setTimeout(function () {
				const $btn = $(`[data-btn-pop="${popIdx}"]`);
				$btn.focus();
				$('.pop_target_' + popIdx).addClass('active');
			}, 1500);
		}
	});
</script>



	

  </body>

</html>