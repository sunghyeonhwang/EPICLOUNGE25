<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:type" content="website">
<meta name="naver-site-verification" content="10446384c30a047cc643a6123a048b10eab8a8bc" />
<meta property="og:title" content="게임제작을 위한 시작해요 언리얼" />

<meta property="og:url" content="https://epiclounge.co.kr/v3/event_letsmakegame.php" />
<meta property="og:image" content="https://epiclounge.co.kr/v3/resource/images/event/letsmake_key.jpg" />
<meta property="og:image:height" content="630px" />
<meta property="og:image:width" content="1200px" />
<meta property="og:description" content="게임 제작을 위한 시작해요 언리얼은 언리얼 엔진을 처음 다루는 초심자 분들을 위해 준비한 튜토리얼 형식의 웨비나입니다. 언리얼 엔진의 다운로드부터 모델링 툴을 활용한 레벨 제작, 트리거로 게임의 규칙 설정, 그리고 블루프린트로 다양한 기믹 요소를 제작하는 방법에 대해 배웁니다. 언리얼 엔진 5로 가장 쉽고 빠르게 게임을 제작하고 싶다면 지금 바로 등록해서 참여해 보세요!" />
<meta name="naver-site-verification" content="374c7b8b38a950b57cfd67d5e14696efd33bc057" />
<link rel="shortcut icon" href="https://epiclounge.co.kr/favicon_16.ico" sizes="16x16"> 
<link rel="shortcut icon" href="https://epiclounge.co.kr/favicon_32.ico" sizes="32x32"> 

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-174668456-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-174668456-1');
</script>
<!-- Global site tag (gtag.js) - Google Ads: 760706945 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-760706945"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'AW-760706945');
</script>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '413080733349618');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=413080733349618&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<script type="text/javascript">

function clip(){

	var url = '';
	var textarea = document.createElement("textarea");
	document.body.appendChild(textarea);
	url = window.document.location.href;
	textarea.value = url;
	textarea.select();
	document.execCommand("copy");
	document.body.removeChild(textarea);
	alert("URL이 복사되었습니다.")
}
</script>

<title>게임 제작을 위한 시작해요 언리얼</title>
<!-- Global site tag (gtag.js) - Google Analytics -->
</head>

<body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/static/pretendard.css">
<link rel="stylesheet" href="/v3/resource/css/common.css">
<link rel="stylesheet" href="/v3/resource/css/event_letsmakegame.css">
<script src="/v3/resource/js/jquery-3.4.1.min.js"></script>
<script src="/v3/resource/js/ScrollTrigger.min.js"></script>
<script src="/v3/resource/js/common.js"></script>
<script src="/v3/resource/js/main.js"></script>
<!-- container -->
	
<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>
   <?php
	if(defined('_INDEX_')) { // index에서만 실행
		include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
	}
	?>
	<?php include 'inc/common_header.php'; ?>


<div id="event_wrap">

	<div id="event_main_sec_1">
		<div class="visual_mp4">
			<video autoplay loop muted class="video w_video">
				<source src="https://unrealsummit16.cafe24.com/mov/bg_letsmakegame.mp4" type="video/mp4">
			</video>
		</div>
		<div class="visual_text_box">
			<div class="text_box1">
				<img src="/v3/resource/images/event_letsmakegame/sec_1_text.svg" />
			</div>
			<div class="btn_box">
				<!--<a href="https://epiclounge.co.kr/v2/application_terms.html" target="_blank">무료 등록하기</a>-->
				<!--<a href="https://www.epiclounge.co.kr/v2/application_check_in.html"  target="_blank" class="btn_type_1">시청하기</a>
				<a href="https://epiclounge.co.kr/v2/application_terms.html"  target="_blank" class="btn_type_1">무료 등록하기</a>-->
				<a href="javascript:alert('종료 되었습니다.');" class="btn_type_2">종료</a>

			</div>
		</div>
	</div>


	<div id="event_main_sec_2">
		<div class="wrap">
			<div class="youtube">
				<iframe width="720" height="400" src="https://www.youtube.com/embed/cjWRfbvCeu0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="text_box">
				<p>언리얼 서밋은 언리얼 엔진의 최신 기술, 에코시스템 그리고 영감을 주는 <strong>리얼타임 3D 인터랙티브 콘텐츠 제작 경험을 공유</strong>하기 위해 에픽게임즈 코리아에서 주관하는 연례 컨퍼런스입니다. 
				게임, 영화, TV, 애니메이션, 건축, 그리고 자동차 등의 <strong>전 산업은 언리얼 엔진의 리얼타임 3D 기술로 통합</strong>되고 있고, 크리에이터들의 <strong>스토리텔링과 경험하는 방식을 혁신</strong>하고 있습니다.
			   언리얼 서밋 온라인 2022는 UE5, 디지털 휴먼, 디지털 트윈, 버추얼 프로덕션, 메타버스 등  전 산업을 관통하는 <strong>리얼타임 인터랙티브 콘텐츠 제작의 최신 기술과 미래를 엿볼 수 있는 세션</strong>들이 함께 합니다. <strong>디지털의 미래를 위한 창의적인 영감을 얻어 보세요!</strong></p>
			</div>
		 
		</div>
	 </div>

	 <div id="event_main_sec_3">
		<div class="wrap">
			<h3 class="h3_title">이렇게 구성되었습니다</h3>
			<ul>
				<li class="li_1">
					<span class="text">주 1회, 총 4주차로<br />구성되어 있습니다.</span>
				</li>
				<li class="li_2">
					<span class="text">매주  도전과제를<br />수행하여 강좌 내용을 <br />완전히 습득할 수 있습니다.</span>
				</li>
				<li class="li_3">
					<span class="text">다양한 이벤트에도<br />참여하여 푸짐한 경품도 <br />받아보세요.</span>
				</li>
			</ul>
		</div>
	 </div>


	 <div id="event_main_sec_4">
		<div class="wrap">
			 <h3 class="h3_title">이런 분들께 추천합니다!</h3>
			 <ol>
				<li><span class="num">1</span><span class="text">언리얼 엔진이 완전 처음이신 분들(학생, 직장인, 비전공자 등)</span></li>
				<li><span class="num">2</span><span class="text">언리얼 엔진으로 제작하는 게임에 관심 있지만 어떻게 시작할지 막막하셨던 분들</span></li>
				<li><span class="num">3</span><span class="text">언리얼 엔진으로 나만의 첫 게임을 만들어보고 싶으신 분들</span></li>
			 </ol>
		 </div>
	 </div>


	 <div id="event_main_sec_5">
		<div class="wrap">
			 <h3 class="h3_title">이런 내용을 배우게 됩니다!</h3>

			 <ol>
				<li>
					<span class="left_img_box">
						<span class="weak_text">1주차  2022년 8월 9일 화요일</span>
						<img src="https://unrealsummit16.cafe24.com/mov/1.gif" />
					</span>
					<span class="right_text_box">
						<span class="right_title">게임 제작의 시작</span>
						<ol>
							<li><span class="num">1</span><span class="text">언리얼 엔진 에디터 소개
							<li><span class="num">2</span><span class="text">게임의 승패 규칙 설정</span></li>
							<li><span class="num">3</span><span class="text">정교한 레벨 제작을 위한 편의 기능</span></li>
							<li><span class="num">4</span><span class="text">레벨 구성하기</span></li>
						</ol>
						<ul>
							<li>Q&A</li>
							<li>도전과제 출제</li>
						</ul>
					</span>
				</li>
				<li>
					<span class="left_img_box">
						<span class="weak_text">2주차  2022년 8월 16일 화요일</span>
						<img src="https://unrealsummit16.cafe24.com/mov/2.gif" />
					</span>
					<span class="right_text_box">
						<span class="right_title">레벨 제작을 위한 언리얼 모델링 입문</span>
						<ol>
							<li><span class="num">1</span><span class="text">언리얼 엔진 모델링 기능 소개</span></li>
							<li><span class="num">2</span><span class="text">완성된 모델링의 조정</span></li>
							<li><span class="num">3</span><span class="text">큐브 그리드 모드를 활용한 스테이지 제작</span></li>
							<li><span class="num">4</span><span class="text">레벨 구성하기</span></li>
						</ol>
						<ul>
							<li>과제물 선별 소개</li>
							<li>Q&A</li>
							<li>도전과제 출제</li>
						</ul>
					</span>
				</li>
				<li>
					<span class="left_img_box">
						<span class="weak_text">3주차  2022년 8월 23일 화요일</span>
						<img src="https://unrealsummit16.cafe24.com/mov/3.gif" />
					</span>
					<span class="right_text_box">
						<span class="right_title">블루프린트를 활용한 움직이는 장치 제작</span>
						<ol>
							<li><span class="num">1</span><span class="text">블루프린트를 활용한 배경 관리</span></li>
							<li><span class="num">2</span><span class="text">블루프린트를 활용한 움직이는 오브젝트 제작</span></li>
							<li><span class="num">3</span><span class="text">레벨 제작을 위한 편의 기능 소개</span></li>
							<li><span class="num">4</span><span class="text">하나의 블루프린트를 다용도로 활용하는 방법</span></li>
						</ol>
						<ul>
						<li>과제물 선별 소개</li>
						<li>Q&A</li>
						<li>도전과제 출제</li>
						</ul>
					</span>
				</li>
				<li>
					<span class="left_img_box">
						<span class="weak_text">4주차  2022년 8월30일 화요일</span>
						<img src="https://unrealsummit16.cafe24.com/mov/4.gif" />
					</span>
					<span class="right_text_box">
						<span class="right_title">물리 엔진을 활용한 다양한 장치 제작</span>
						<ol>
							<li><span class="num">1</span><span class="text">텔레포트 장치 제작</span></li>
							<li><span class="num">2</span><span class="text">밟으면 떨어지는 함정 장치 제작</span></li>
							<li><span class="num">3</span><span class="text">캐릭터를 날려보내는 점프대 제작</span></li>
							<li><span class="num">4</span><span class="text">밟으면 미사일이 발사되는 함정 제작</span></li>
						</ol>
						<ul>
						<li>과제물 선별 소개</li>
						<li>Q&A</li>
						<li>도전과제 출제</li>
						</ul>
					</span>
				</li>
			
			 </ol>
		 </div>
	
	</div>

	<div id="event_main_sec_6">
		<div class="wrap">
			 <h3 class="h3_title">시작 전에 준비하세요</h3>
			 <p class="text_1">실습에 필요한 준비물을 미리 준비하여 웨비나를 보며 원활히 수강해 보세요.</p>
			 <div class="btn_box">
				<a href="https://www.unrealengine.com/ko/download" target="_blank" title="새창" class="btn_type_1"><span>언리얼 엔진 다운로드</span></a>
				
					<!--<a href="javascript:alert('수정중입니다.');" class="btn_type_2"><span>프로젝트 다운로드</span></a>-->

				<a href="download/download.html" target="_blank" title="새창" class="btn_type_2"><span>프로젝트 다운로드</span></a>
			 </div>
			 <p class="text_2">언리얼 엔진 설치 후 프로젝트 파일의 압축을 풀고 <em>'시작해요언리얼.uproject'</em> 파일을 더블클릭하여 프로젝트를 열 수 있습니다.</p>
		</div>
	</div>

	<div id="event_main_sec_7">
		<div class="wrap">
			<h3 class="h3_title">모든 세션을 마치면</h3>
			<ul>
				<li>기믹 요소를 갖춘 게임을 제작할 수 있게 됩니다.</li>
				<li>게임의 기초 설계 방법을 이해하고 구현할 수 있게 됩니다.</li>
				<li>블루프린트를 포함한 언리얼 엔진의 다양한 기능을 이해하고 활용할 수 있게 됩니다.</li>
				<li>물리 엔진에 대한 이해도를 높여 게임의 요소로 활용할 수 있게 됩니다.</li>
			</ul>
		</div>
	</div>

	<div id="event_main_sec_10">
		<div class="wrap">
			<h3 class="h3_title">이 분과 함께 합니다</h3>
			<p class="text_1"><strong>이득우</strong> <span>청강문화산업대학교 교수</span></p>
			<div class="left_text">
				<p>언리얼 공인 강사이자 청강문화산업대학교 교수로서, 다양한 교육 활동으로 언리얼 데브그랜트를 수상하였으며, 	언리얼 4 블루프린트 게임 개발, 이득우의 언리얼 C++ 게임 개발의 정석, 이득우의 게임 수학 등 게임 제작을 도와주는 저서도 집필하며 다방면으로 교육 활동을 이어오고 있습니다.</p>
			</div>
			<div class="right_text">
				<ul>
					<li>현) 청강문화산업대학교 교수</li>
					<li>현) 부산인디커넥트 페스티벌 심사위원장</li>
					<li>2022 언리얼 공인 강사(UAI) 선정</li>
					<li>2017 언리얼 데브그랜트 선정</li>
				</ul>
			</div>
		</div>
	</div>

	<div id="event_main_sec_8">
		<div class="wrap">
			<h3 class="h3_title">이벤트</h3>
			<div class="event_info_1">
				<h4>1. 시청 이벤트</h4>
				<p class="text_1">처음부터 끝까지 시청하고 언리얼 한정판 굿즈 받자!</p>
				<p class="text_2">웨비나를 처음부터 끝까지 시청하신 분들 중 추첨을 통해 푸짐한 상품을 드립니다.</p>

				<ul>
					<li>
						<span class="title">참여 기간</span>
						<span class="text_box">8/9(화) - 8/30(화), 4주간 매주 화요일</span>
					</li> 
					<li>
						<span class="title">참여 방법</span>
						<span class="text_box">
							<ul>
								<li><span class="num">1</span>
								<span class="text">등록한 이메일로 체크인하여 웨비나를 시청해 주세요.</span>
								</li>								
								<li><span class="num">2</span>
								<span class="text">웨비나를 처음부터 끝까지 시청하기만 하면 이벤트에 자동 응모!</span>
								</li>
							</ul>
						</span>
					</li>
					<li>
						<span class="title">결과 발표</span>
						<span class="text_box">매주 웨비나 직후 에픽 라운지 이벤트 페이지에 게시</span>
					</li>
					<li>
						<span class="title">참여 혜택</span>
						<span class="text_box">매주 랜덤 굿즈 30명 추첨</span>
					</li>
				</ul>
				<p class="gift_img"><img src="/v3/resource/images/event_letsmakegame/sec_10_img.png" /></p>
			</div>

			
			<div class="event_info_2">
				<h4>2. 도전과제 이벤트</h4>
				<p class="text_1">도전과제를 수행하고 언리얼 한정판 굿즈 받자!</p>
				<p class="text_2">출제자의 의도에 맞게 도전과제를 성실히 수행하신 분들 중 추첨을 통해 푸짐한 상품을 드립니다.</p>

				<ul>
					<li>
						<span class="title">참여 기간</span>
						<span class="text_box">8/9(화) - 9/4(일), 4주간 매주</span>
					</li>
					<li>
						<span class="title">참여 방법</span>
						<span class="text_box">
							<ul>
								<li><span class="num">1</span>
								<span class="text">등록한 이메일로 체크인하여 웨비나를 시청하고 출제된 도전과제를 성실히 수행하세요.</span>
								</li>								
								<li><span class="num">2</span>
								<span class="text">언리얼 엔진 공식 카페 내, 도전과제 게시판에 매주 일요일까지 제출하면 자동 응모!</span>
								</li>
							</ul>
						</span>
					</li>
					<li>
						<span class="title">결과 발표</span>
						<span class="text_box">매주 웨비나 직후 에픽 라운지 이벤트 페이지에 게시<br />(8월 16일부터 1주차 결과 발표 / 4주차 결과는 9월 6일 게시 예정)</span>
					</li>
					<li>
						<span class="title">참여 혜택</span>
						<span class="text_box">매주 랜덤 굿즈 30명 추첨</span>
					</li>
				</ul>
				<p class="gift_img"><img src="/v3/resource/images/event_letsmakegame/sec_11_img.png" /></p>
			</div>
			<ul class="info_ul2" >
				<li>경품은 사정에 따라 변경될 수 있습니다.</li>
				<li>이벤트는 중복해서 참여할 수 있습니다.</li>
			</ul>
		</div>
	</div>

	<div id="event_main_sec_9">
		<div class="wrap">
			<h3 class="h3_title">유의사항</h3>
			<ul>
				<li>웨비나 <em><a href="https://epiclounge.co.kr/v2/application_confirm.html" target="_blank">등록 확인 및 수정</a></em>은 여기에서 진행하실 수 있습니다.</li>
				<li>웨비나 당일 12시까지 등록하신 분들께는 시청 url을 등록하신 이메일로 보내드립니다.</li>
				<li>행사 당일 본 웹페이지 내 ‘<em><a href="javascript:alert('종료 되었습니다.');" class="btn_type_2">시청하기</a></em>’ 버튼을 통해서도 시청하실 수 있습니다.</li>
				<li>방송 진행 중에도 입장하여 시청이 가능합니다.</li>
				<li>무료로 진행되는 본 웨비나는 등록 없이 유튜브에서 시청할 수 있으나, 이벤트 참여를 위해서는 반드시 등록 후 시청하셔야 합니다.</li>
				<li>문의는 <em><a href="mailto:unrealsummit.korea@gmail.com" target="_blank">이메일</a></em> 혹은 <em>전화 02-326-3701</em>를 통해서 가능합니다.</li>
			</ul>
		</div>
	</div>




</div>

<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function() {
		var trigger = new ScrollTrigger({

			offset: {
				x: 0,
				y:0
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
			}, 500);
			return false; //리턴펄스로 스크롤이 최상위로 갔다가 돌아오는 현상 없어짐
		});
	});
	
</script>
<?php include 'inc/common_footer.php'; ?>

</body>
</html>