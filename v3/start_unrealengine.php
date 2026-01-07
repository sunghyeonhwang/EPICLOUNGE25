
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:type" content="website">
<meta name="naver-site-verification" content="10446384c30a047cc643a6123a048b10eab8a8bc" />
  <meta property="og:url" content="https://epiclounge.co.kr/v3/start_unrealengine.php" />
  <meta property="og:image" content="https://unrealsummit16.cafe24.com/site/ue5_start_new.png" />
  <meta property="og:image:height" content="630px" />
  <meta property="og:image:width" content="1200px" />
  <meta property="og:description" content="언리얼 엔진이 처음이신가요? 아래에서 관심 분야별 학습 리소스로 창작의 여정을 시작해 보세요!" />
  <meta name="naver-site-verification" content="374c7b8b38a950b57cfd67d5e14696efd33bc057" />
    <link rel="shortcut icon" href="https://epiclounge.co.kr/favicon_16.ico" sizes="16x16"> 
    <link rel="shortcut icon" href="https://epiclounge.co.kr/favicon_32.ico" sizes="32x32"> 
<title>언리얼 엔진 5 시작하기</title>
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

</head>
<body>
<link rel="stylesheet" href="/v3/resource/css/common.css">
<link rel="stylesheet" href="/v3/resource/css/evnet_0414.css">
<script src="/v3/resource/js/jquery-3.4.1.min.js"></script>
<script src="/v3/resource/js/ScrollTrigger.min.js"></script>
<script src="/v3/resource/js/common.js"></script>
<script src="/v3/resource/js/main.js"></script>
<!-- container -->
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

<div id="quick_banner">
	<ul>
		<li><a href="https://twitter.com/intent/tweet?text=UE 5가 드디어 출시! 
		더 넓은 월드, 더 많은 스토리를 담아 더욱 언리얼한 작품을 만들어 보세요.
		
		https://bit.ly/3ETPGm8" title="새창" target="_blank"><img src="/v3/resource/images/event/quick_sns_1.png" /></a></li>
		<li><a href="https://www.facebook.com/sharer/sharer.php?u=https://epiclounge.co.kr/v3/start_unrealengine.php" title="새창" target="_blank"><img src="/v3/resource/images/event/quick_sns_2.png" /></a></li>
		<li><a href="#n" onclick="clip(); return false;" title="새창" target="_blank"><img src="/v3/resource/images/event/quick_sns_3.png" /></a></li>
	</ul>
	<a href="#event_main_sec_1" class="top_btn"><img src="/v3/resource/images/event/arrow_top_btn.png" /></a>
</div>


<div id="event_main_sec_1">
	<div class="wrap">
		<h1 class="logo">
			<a href="#container"><img src="/v3/resource/images/event/wh_logo.png" /></a>
		</h1>

		<p class="text_1">언리얼 엔진 시작하기</p>
		<p class="text_2">더 높은 자유도와 고퀄리티 그리고 유연성으로 강력해진 언리얼 엔진 5로<br />
더 넓은 월드,  더 많은 스토리를 담아 더욱 언리얼한 작품을 만들어 보세요.<br /> 
아래의 관심 분야별 학습 리소스로 창작의 여정을 시작해 보세요! </p>
		<div class="main_tab tab_layout">
		<div class="tab_button">
			<ul class="clearfix">
				<li class="active"><button class="tab_btn" type="button">공통</button></li>
				<li><button class="tab_btn" type="button">게임</button></li>
				<li><button class="tab_btn" type="button">영화 & TV</button></li>
				<li><button class="tab_btn" type="button">건축</button></li>
				<li><button class="tab_btn" type="button">기타</button></li>
			</ul>
		</div>
			<div class="tab_content tab1 active">
				<div class="list_box_wrap">
					<div class="list_box">
						<a href="https://dev.epicgames.com/community/learning/courses/ZpX/your-first-hour-in-unreal-engine-5/E7L/introduction-to-your-first-hour-in-unreal-engine-5" title="새창" target="_blank">
							<span class="img"><img src="/v3/resource/images/event/event_tab_1_2.jpg" /></span>
							<span class="text">언리얼 엔진 5와의 첫 시간</span>
						</a>
					</div>
					<div class="list_box">
						<a href="https://dev.epicgames.com/community/learning/talks-and-demos/377n/the-matrix-awakens-creating-a-world" title="새창" target="_blank">
							<span class="img"><img src="/v3/resource/images/event/event_tab_1_1.jpg" /></span>
							<span class="text"> 매트릭스 어웨이큰스: 월드 제작하기</span>
						</a>
					</div>
					
					<div class="list_box">
						<a href="https://dev.epicgames.com/community/learning/talks-and-demos/6GGK/the-matrix-awakens-generating-a-world" title="새창" target="_blank">
							<span class="img"><img src="https://unrealsummit16.cafe24.com/site/event_tab_1_31.jpg" /></span>
							<span class="text">매트릭스 어웨이큰스: 월드 생성하기</span>
						</a>
					</div>
					<div class="list_box">
						<a href="https://dev.epicgames.com/community/learning/talks-and-demos/vyn9/unreal-engine-5-guided-tour" title="새창" target="_blank">
							<span class="img"><img src="https://unrealsummit16.cafe24.com/site/event_tab_1_4.jpg" /></span>
							<span class="text">언리얼 엔진 5 가이드 투어</span>
						</a>
					</div>
				</div>
				<div class="all_btn"><a href="https://dev.epicgames.com/community/learning"  title="새창" target="_blank">공통 콘텐츠 전체보기</a></div>
			</div>
			<div class="tab_content tab2">
				<div class="list_box_wrap">
					<div class="list_box">
						<a href="https://dev.epicgames.com/community/learning/paths/Z4/lyra-starter-game" title="새창" target="_blank">
							<span class="img"><img src="/v3/resource/images/event/event_tab_2_1.jpg" /></span>
							<span class="text">라이라 스타터 게임</span>
						</a>
					</div>
					<div class="list_box">
						<a href="https://dev.epicgames.com/community/learning/tutorials/e2V/your-first-game-in-unreal-engine-5" title="새창" target="_blank">
							<span class="img"><img src="https://unrealsummit16.cafe24.com/site/event_tab_2_2.jpeg" /></span>
							<span class="text">언리얼 엔진 5로 첫 게임 만들기</span>
						</a>
					</div>
					<div class="list_box">
						<a href="https://youtu.be/CWx-TWWKfsw" title="새창" target="_blank">
							<span class="img"><img src="/v3/resource/images/event/event_tab_2_3.jpg" /></span>
							<span class="text">스택오봇 UE5 게임 스타터 키트 개요</span>
						</a>
					</div>
					<div class="list_box">
						<a href="https://www.unrealengine.com/ko/onlinelearning-courses/welcome-to-game-development" title="새창" target="_blank">
							<span class="img"><img src="/v3/resource/images/event/event_tab_2_4.jpg" /></span>
							<span class="text">게임 개발을 소개합니다</span>
						</a>
					</div>
				</div>
				<div class="all_btn"><a href="https://dev.epicgames.com/community/getting-started/games" title="새창" target="_blank">게임 콘텐츠 전체보기</a></div>
			</div>
			<div class="tab_content tab3">
				<div class="list_box_wrap">
					<div class="list_box">
						<a href="https://www.unrealengine.com/ko/blog/new-training-videos-explore-slay-virtual-art-department-pipeline" title="새창" target="_blank">
							<span class="img"><img src="/v3/resource/images/event/event_tab_3_1.jpg" /></span>
							<span class="text">애니메이션 | Slay 프로젝트 튜토리얼</span>
						</a>
					</div>
					<div class="list_box">
						<a href="https://www.unrealengine.com/ko/onlinelearning-courses/independent-filmmaking-with-unreal-engine" title="새창" target="_blank">
							<span class="img"><img src="/v3/resource/images/event/event_tab_3_2.jpg" /></span>
							<span class="text">인디 영화 제작을 위한 언리얼 엔진</span>
						</a>
					</div>
					<div class="list_box">
						<a href="https://www.unrealengine.com/ko/onlinelearning-courses/welcome-to-film-and-television" title="새창" target="_blank">
							<span class="img"><img src="/v3/resource/images/event/event_tab_3_3.jpg" /></span>
							<span class="text">영화 & TV를 소개합니다</span>
						</a>
					</div>
					<div class="list_box">
						<a href="https://www.unrealengine.com/ko/onlinelearning-courses/movie-render-queue-essentials" title="새창" target="_blank">
							<span class="img"><img src="https://unrealsummit16.cafe24.com/site/event_tab_3_4.jpeg" /></span>
							<span class="text">무비 렌더 큐 핵심 개념</span>
						</a>
					</div>
				</div>
				<div class="all_btn"><a href="https://dev.epicgames.com/community/learning?industry=film_and_tv" title="새창" target="_blank">영화 & TV 콘텐츠 전체보기</a></div>
			</div>

			
			<div class="tab_content tab4">
				<div class="list_box_wrap">
					<div class="list_box">
						<a href="https://www.unrealengine.com/ko/onlinelearning-courses/lighting-essential-concepts-and-effects" title="새창" target="_blank">
							<span class="img"><img src="/v3/resource/images/event/event_tab_4_1.jpg" /></span>
							<span class="text">라이팅 핵심 개념과 이펙트</span>
						</a>
					</div>
					<div class="list_box">
						<a href="https://www.unrealengine.com/ko/onlinelearning-courses/creating-an-architectural-exterior-real-time-project" title="새창" target="_blank">
							<span class="img"><img src="/v3/resource/images/event/event_tab_4_2.jpg" /></span>
							<span class="text">건축 익스테리어 실시간 프로젝트 제작</span>
						</a>
					</div>
					<div class="list_box">
						<a href="https://www.unrealengine.com/ko/onlinelearning-courses/creating-an-architectural-interior-real-time-project" title="새창" target="_blank">
							<span class="img"><img src="/v3/resource/images/event/event_tab_4_3.jpg" /></span>
							<span class="text">건축 인테리어 실시간 프로젝트 제작</span>
						</a>
					</div>
					<div class="list_box">
						<a href="https://www.unrealengine.com/ko/onlinelearning-courses/welcome-to-architectural-visualization" title="새창" target="_blank">
							<span class="img"><img src="/v3/resource/images/event/event_tab_4_4.jpg" /></span>
							<span class="text">건축 시각화를 소개합니다</span>
						</a>
					</div>
				</div>
				<div class="all_btn"><a href="https://dev.epicgames.com/community/learning?industry=architecture" title="새창" target="_blank">건축 콘텐츠 전체보기</a></div>
			</div>

			
			<div class="tab_content tab5">
				<div class="list_box_wrap">
					<div class="list_box">
						<a href="https://www.unrealengine.com/ko/onlinelearning-courses/getting-started-with-datasmith" title="새창" target="_blank">
							<span class="img"><img src="/v3/resource/images/event/event_tab_5_1.jpg" /></span>
							<span class="text">데이터스미스 시작하기</span>
						</a>
					</div>
					<div class="list_box">
						<a href="https://www.unrealengine.com/ko/onlinelearning-courses/making-a-blueprint-product-configurator" title="새창" target="_blank">
							<span class="img"><img src="/v3/resource/images/event/event_tab_5_2.jpg" /></span>
							<span class="text">블루프린트 제품 컨피규레이터 제작</span>
						</a>
					</div>
					<div class="list_box">
						<a href="https://www.unrealengine.com/ko/onlinelearning-courses/preparing-design-data-for-optimal-performance" title="새창" target="_blank">
							<span class="img"><img src="/v3/resource/images/event/event_tab_5_3.jpg" /></span>
							<span class="text">최적의 퍼포먼스를 위한 디자인 데이터 준비</span>
						</a>
					</div>
					<div class="list_box">
						<a href="https://www.unrealengine.com/ko/onlinelearning-courses/optimizing-projects-for-real-time" title="새창" target="_blank">
							<span class="img"><img src="/v3/resource/images/event/event_tab_5_4.jpg" /></span>
							<span class="text">리얼타임 프로젝트 최적화</span>
						</a>
					</div>
				</div>
				<div class="all_btn"><a href="https://dev.epicgames.com/community/learning?industry=visualization" title="새창" target="_blank">기타 콘텐츠 전체보기</a></div>
			</div>
	
		</div>
		
	</div>
</div>
<div id="event_main_sec_2">
	<div class="wrap">
		<div class="sec_2_top">
			<div class="sec_2_top_left">
				<h3>무료 샘플</h3>
				<ul>
					<li>
						<span class="img"><img src="/v3/resource/images/event/event_sec_left_img1.jpg" /></span>
						<span class="text_box">
							<span class="title">라이라 스타터 게임</span>
							<span class="text">라이라 스타터 게임(Lyra Starter Game)은 언리얼 엔진 5 개발에 맞춰 제작되었으며 신규 게임 제작 시 훌륭한 시작점이 되어줄 샘플 게임플레이 프로젝트입니다.</span>
							<a href="https://unrealengine.com/marketplace/ko/learn/lyra" title="새창" target="_blank">바로가기</a>
						</span>
					</li>
					<li>
						<span class="img"><img src="https://unrealsummit16.cafe24.com/site/2event_sec_left_img12.jpeg" /></span>
						<span class="text_box">
							<span class="title">도시 샘플</span>
							<span class="text">매트릭스 어웨이큰스: 언리얼 엔진 5 익스피어리언스의 도시 씬이 어떻게 구축되었는지 선보입니다. </span>
							<a href="https://unrealengine.com/marketplace/ko/product/city-sample" title="새창" target="_blank">바로가기</a>
						</span>
					</li>
					<li>
						<span class="img"><img src="/v3/resource/images/event/event_sec_left_img2.jpg" /></span>
						<span class="text_box">
							<span class="title">도시 샘플 건물</span>
							<span class="text">24가지의 고유한 건물 키트와 44개의 건물 샘플이 포함된 모듈식 건물 셰이프와 텍스처 및 머티리얼 컬렉션입니다.</span>
							<a href="https://www.unrealengine.com/marketplace/ko/product/city-sample-buildings" title="새창" target="_blank">바로가기</a>
						</span>
					</li>
					<li>
						<span class="img"><img src="/v3/resource/images/event/event_sec_left_img3.jpg" /></span>
						<span class="text_box">
							<span class="title">도시 샘플 차량</span>
							<span class="text">텍스처, 머티리얼, 오디오를 갖춘 13개의 운전 가능한 비히클 컬렉션입니다.</span>
							<a href="https://unrealengine.com/marketplace/ko/product/city-sample-vehicles" title="새창" target="_blank">바로가기</a>
						</span>
					</li>
					<li>
						<span class="img"><img src="/v3/resource/images/event/event_sec_left_img4.jpg" /></span>
						<span class="text_box">
							<span class="title">도시 샘플 군중</span>
							<span class="text">교체 가능한 헤드, 그룸, 바디, 의상을 갖춘 캐릭터 컬렉션입니다.</span>
							<a href="https://unrealengine.com/marketplace/ko/product/city-sample-crowds" title="새창" target="_blank">바로가기</a>
						</span>
					</li>
				</ul>
				<a href="https://www.unrealengine.com/marketplace/ko/profile/Epic+Games" class="sec_2_top_left_btn" title="새창" target="_blank">UE5 에셋 더보기</a>
			</div>
			<div class="sec_2_top_right">
				<h3>문서</h3>
				<p class="text_1">언리얼 엔진 5의 출시노트를 비롯하여  언리얼 엔진의 모든 기능 및 툴에 대한 자세한 설명과 자료를 살펴볼 수 있습니다. 언리얼 온라인 러닝 강좌를 수강하며 함께 활용해 보세요.</p>
				<a href="https://docs.unrealengine.com/5.0/ko/" class="sec_2_top_right_btn" title="새창" target="_blank">문서 페이지 바로가기</a>

			</div>
		</div>
		<div class="sec_2_mid">
			<h3>커뮤니티</h3>
			<p class="title_text">프로젝트 진행에 어려움이 있으신가요? 커뮤니티와 소통하고 뛰어난 실력을 갖춘 커뮤니티 멤버로부터 도움을 받아보세요.</p>
			<div class="list">
				<div class="list_box">
					<h4>공식 카페</h3>
					<p class="text">국내 커뮤니티와 소통하고 뛰어난 실력을 갖춘 커뮤니티 멤버로부터 도움을 받아보세요.</p>
					<a href="https://cafe.naver.com/unrealenginekr" title="새창" target="_blank">방문하기</a>
				</div>
				<div class="list_box">
					<h4>유튜브</h3>
					<p class="text">개발과 제작에 영감을 주는 다양한 영상들을 시청하세요.</p>
					<a href="https://www.youtube.com/channel/UCTQY8S4wYR93jkYC649_p0g" title="새창" target="_blank">방문하기</a>
				</div>
				<div class="list_box">
					<h4>에픽 디벨로퍼 커뮤니티</h3>
					<p class="text">글로벌 커뮤니티와 소통하여 폭넓은 정보와 도움을 받아보세요.</p>
					<a href="https://dev.epicgames.com/community/" title="새창" target="_blank">방문하기</a>
				</div>

			</div>
		</div>
		<div class="sec_2_bot">
			<div class="sec_2_bot_wrap">
				<h3>에픽 메가그랜트</h3>
				<p class="text_1">에픽 메가그랜트는 언리얼 엔진으로 제작된 창의적이고 혁신적인 프로젝트와 오픈 소스 3D 그래픽 생태계를  향상시키는 프로젝트에 재정적인 지원을 제공하기 위해서 마련된 커뮤니티 지원 프로그램입니다. </p>
				<a href="https://www.unrealengine.com/ko/megagrants" title="새창" target="_blank"><span>더 자세히 알아보기</span></a>
			</div>
		</div>
	</div>

</div>
 
<div id="event_main_sec_3">
	<div class="wrap">
		<p class="text">더 넓은 월드, 더 많은 스토리를<br />더욱 언리얼하게</p>
		<a href="https://www.unrealengine.com/ko/download" title="새창" target="_blank"><span>언리얼 엔진 5 다운로드</span></a>
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