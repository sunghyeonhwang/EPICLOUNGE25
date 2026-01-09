<?
$g5_path="board";
include_once("board/common.php");
include_once("board/lib/latest.lib.php");
?>

<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta property="og:title" content="언리얼 엔진 5" />
  <meta property="og:type" content="website" />
  <meta property="fb:589663484560989"/>
  <meta name="keywords" content="언리얼 엔진 5 "/>
  <meta name="description" content="언리얼 엔진 5">
  <meta property="og:url" content="https://www.epiclounge.co.kr" />
  <meta property="og:image" content="https://unrealsummit16.cafe24.com/og/ue5.jpg" />
  <meta property="og:image:height" content="630px" />
  <meta property="og:image:width" content="1200px" />
  <meta property="og:description" content="에픽게임즈는 언리얼 엔진 5로 모든 산업의 크리에이터들이 놀라운 리얼타임 콘텐츠와 경험을 제공할 수 있도록 창작의 자유를 제공하는 것을 궁극적인 목표로, 먼저 차세대 게임 개발을 위해 언리얼 엔진 5의 얼리 액세스를 출시했습니다!" />
  <meta name="naver-site-verification" content="374c7b8b38a950b57cfd67d5e14696efd33bc057" />
  <link rel="shortcut icon" href="https://epiclounge.co.kr/favicon_16.ico" sizes="16x16"> 
    <link rel="shortcut icon" href="https://epiclounge.co.kr/favicon_32.ico" sizes="32x32"> 

  <title>에픽 라운지</title>
</head>
<body>
<style>
	#quick_banner {display:none}
</style>
<link rel="stylesheet" href="/v3/resource/css/main2.css">

<script src="/v3/resource/js/jquery-3.4.1.min.js"></script>
<script src="/v3/resource/js/slick.min.js"></script>
<script src="/v3/resource/js/ScrollTrigger.min.js"></script>
<script src="/v3/resource/js/jquery.menu.min.js"></script>  
<script src="/v3/resource/js/jquery.responsive.min.js"></script>
<script src="/v3/resource/js/common.js"></script>
<script src="/v3/resource/js/main.js"></script>


<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>


<div id="quick_banner">
	<ul>
		<li><a href="https://twitter.com/intent/tweet?text=언리얼 엔진 5 출시 웨비나에 무료 등록 하세요!&url=https://epiclounge.co.kr" title="새창" target="_blank"><img src="/v3/resource/images/event/quick_sns_1.png" /></a></li>
		<li><a href="https://www.facebook.com/sharer/sharer.php?u=https://epiclounge.co.kr" title="새창" target="_blank"><img src="/v3/resource/images/event/quick_sns_2.png" /></a></li>
		<li><a href="#n" onclick="clip(); return false;" title="새창" target="_blank"><img src="/v3/resource/images/event/quick_sns_3.png" /></a></li>
	</ul>
	<a href="#event_main_sec_1" class="top_btn"><img src="/v3/resource/images/event/arrow_top_btn.png" /></a>
</div>



   <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
<?php include 'inc/common_header.php'; ?>
    <!-- container -->
<div class="container">

<section class="visual_slide visual_slide_1">

	<div class="visual_slide_list main_slide_0"  data-v="1">
	
	<div class="visual_mp4">
		 <video autoplay loop muted class="video w_video">
			<source src="https://unrealsummit16.cafe24.com/mov/30_6.mp4" type="video/mp4">
		</video>
	</div>
	<div class="visual_text_box">
		<div class="text_box1">
			<p class="info_text">
			<img src="/v3/resource/images/main/sue_logo.png" />
			</p>
		</div>
		<div class="text_box2">
			<a href="https://epiclounge.co.kr/v3/event_0522.php">자세히 보기</a>
		</div>
	</div>
</div>
<div class="visual_slide_list main_slide_3"  data-v="3">
		<div class="visual_img">
			<img  src="https://unrealsummit16.cafe24.com/site/main_v45_img.png" />
		</div>
		<div class="visual_text_box">
			<div class="text_box1">
				<p class="text_box1_1">
					<img src="https://unrealsummit16.cafe24.com/site/main_vi45_text_0.png" />
				</p>
				
				<p class="text_box1_2">
					<img src="https://unrealsummit16.cafe24.com/site/main_vi45_text_1.png" />
				</p>
			</div>
			<div class="text_box2">
				<span class="text">러셀과 함께하는 시작해요 언리얼은 언리얼 엔진을 처음 다루는 초심자 분들을 위해 준비한 튜토리얼 형식의 웨비나입니다. 1주차 강의를 리소스에서 확인하세요.</span>
				<a href="https://epiclounge.co.kr/v3/contents/replay.php" >자세히 보기</a>			</div>
		</div>
</div>

	<div class="visual_slide_list main_slide_1" data-v="1">
		
		<div class="visual_mp4">
		 	<video autoplay loop muted class="video w_video"><!-- 영상 로드시 튀는 현상으로 poster bg로 적용 -->
				<source src="https://unrealsummit16.cafe24.com/mov/30_5.mp4" type="video/mp4">
			</video>
		</div>
		<div class="visual_text_box">
			<div class="text_box1">
				<p class="num_text">
					<img src="/v3/resource/images/main/main_num_text2.png" />
					<!--<img src="https://unrealsummit16.cafe24.com/site/main_num_text2_blank.png" />-->
				</p>
				<p class="info_text">
					<span class="eng_text"><img src="/v3/resource/images/main/ue_logo.png" /></span>
					<span class="kor_text">언리얼 엔진 5 출시</span>
				</p>
			</div>
			<div class="text_box2">
	
				<!--<span class="text">언리얼 엔진 5의 주요 기능과 마이그레이션 방법을 시연을 통해 알려주는<br /> 언리얼 엔진 5 출시 웨비나를 진행했습니다. 리소스에서 확인하세요.</span>-->
				<a href="https://www.unrealengine.com/ko/unreal-engine-5"  target="_blank">자세히 보기</a>
			</div>
		</div>
	</div>
	
	<div class="visual_slide_list main_slide_3"  data-v="3">
			<div class="visual_img">
				<img  src="https://unrealsummit16.cafe24.com/site/main_vi3_img.png" />
			</div>
			<div class="visual_text_box">
				<div class="text_box1">
					<p class="text_box1_1">
						<img src="https://unrealsummit16.cafe24.com/site/main_vi3_text_1.png" />
					</p>
					
					<p class="text_box1_2">
						<img src="https://unrealsummit16.cafe24.com/site/main_vi3_text_2.png" />
					</p>
				</div>
				<div class="text_box2">
					<span class="text">언리얼 엔진 5의 주요 기능과 마이그레이션 방법을 시연을 통해 알려주는 언리얼 엔진 5 출시 웨비나를 진행했습니다. 리소스에서 확인하세요.</span>
					<a href="https://epiclounge.co.kr/v3/contents/replay.php" >자세히 보기</a>			</div>
			</div>
	</div>
	

	

	

	<!--<div class="visual_slide_list main_slide_4"  data-v="4">
		
		<div class="visual_text_box">
			<div class="text_box1">
				<p class="info_text">
					<span class="text_box1_1"><img src="/v3/resource/images/main/main_vi4_text_1.png" /></span>
					<span class="text_box1_2">나나이트 챌린지</span>
				</p>
			</div>
			<div class="text_box2">
				<span class="text">더욱 강력해진 언리얼 엔진 5, 웨비나를 시청하고<br /> 러셀님과 함께하는 공모전에 응모하세요 </span>
				<a href="#N">자세히 보기</a>
			</div>
		</div>
	</div>-->




</section>




    <section class="news_sec">
        <div class="wrap">
			<div class="sec_title">
				<h2>새소식</h2>
				<a href="https://epiclounge.co.kr/v3/contents/news_list.php">+ 전체보기</a>
			</div>
            <div class="con">
				<div class="scroll_box">
				<div class="list_box">
					<a href="https://www.unrealengine.com/ko/blog/learn-unreal-engine-5-fast-with-these-new-courses" target="_blank">
						<div class="news_img">
							<img src="/v3/resource/images/main/news_banner_2.png" />
						</div>
						<div class="news_text">
							
							<span class="news_text_title">뉴스</span>
							<span class="news_text_info">언리얼 엔진 5를 빠르게 학습할 수 있는 신규 강좌를 소개합니다. </span>
							<!--<span class="news_text_date">뉴스</span>-->
						</div>
					</a>
				</div>
				<div class="list_box">
					<a href="https://www.unrealengine.com/ko/blog/unreal-engine-5-is-now-available" target="_blank">
						<div class="news_img">
							<img src="/v3/resource/images/main/news_banner_1.png" />
						</div>
						<div class="news_text">
							<span class="news_text_title">출시 &#38; 업데이트</span>
							<span class="news_text_info">언리얼 엔진 5가 드디어 출시 되었습니다.</span>
							<!--<span class="news_text_date">2022.04.01-30</span>-->
						</div>
					</a>
				</div>
				<div class="list_box">
					<a href="https://www.unrealengine.com/ko/spotlights/samwoo-imersion-completes-an-efficient-port-logistics-with-digital-twins" target="_blank">
						<div class="news_img">
							<img src="/v3/resource/images/main/news_banner_3.png" />
						</div>
						<div class="news_text">
							<span class="news_text_title">블로그</span>
							<span class="news_text_info">디지털 트윈으로 효율적인 항만 물류 관리 시스템을 구축한 삼우이머션</span>
							<!--<span class="news_text_date">2022.04.01-30</span>-->
						</div>
					</a>
				</div>
            </div>
            </div>
        </div>
    </section>

    <section class="bg_slide_box">
		<div class="bg_slide_list_box">
			<div class="bg_slide_list bg_slide_list1">
				<p class="bg_slide_title">에픽 메가그랜트</p>
				<p class="bg_slide_text">에픽 메가그랜트는 언리얼 엔진으로 제작된 창의적이고 혁신적인 프로젝트와 <br />오픈 소스 3D 그래픽 생태계를 향상시키는 프로젝트에 <br />재정적인 지원을 제공하기 위해서 마련된 커뮤니티 지원 프로그램입니다.</p>
				<p class="bg_slide_btn"><a href="https://www.unrealengine.com/ko/megagrants" target="_blank">자세히 보기</a></p>
			</div>
			<div class="bg_slide_list bg_slide_list2" >
				<p class="bg_slide_title">언리얼 엔진 5</p>
				<p class="bg_slide_text">더 넓은 월드, 더 많은 스토리를<br />더욱 언리얼하게</p>
				<p class="bg_slide_btn"><a href="https://www.unrealengine.com/ko/download" target="_blank">UE5 다운로드</a></p>
			</div>
		</div>
		<div class="slider-dots-box"></div>

		
    </section>


    <section class="resource_list">
        <div class="wrap">
			<div class="resource_title">
				<h2>리소스</h2>
				<a href="https://epiclounge.co.kr/v3/contents/news_list.php">+ 전체보기</a>
			</div>
			<div class="con">
				<div class="list_box">
					<a href="https://epiclounge.co.kr/v3/contents/replay_view.php?idx=1176" target="_blank">
						<div class="img_box">
							<img src="https://unrealsummit16.cafe24.com/site/re_img1.png" />
						</div>
						<div class="text_box">
							<span class="cate">다시보기</span>
							<span class="title">UE5 세계를 여행하는 창작자를 위한 안내서 1</span>
							<span class="text">언리얼 엔진 5의 기능과 그 의미, 그리고 로드맵을 공유하는 기초 세션입니다.</span>
						</div>
					</a>
				</div>
				<div class="list_box">
					<a href="https://epiclounge.co.kr/v3/contents/replay_view.php?idx=1174" target="_blank"> 
						<div class="img_box">
							<img src="https://unrealsummit16.cafe24.com/site/re_img2.png" />
						</div>
						<div class="text_box">
							<span class="cate">다시보기</span>
							<span class="title">UE5로 프로젝트 마이그레이션하기</span>
							<span class="text">언리얼 엔진 4.27 프로젝트를 언리얼 엔진 5로 마이그레이션할 때 고려해야 할 사항들을 알아봅니다.</span>
						</div>
					</a>
				</div>
				<div class="list_box">
					<a href="https://www.youtube.com/c/unrealenginekr/featured"  target="_blank">
						<div class="img_box">
							<img src="https://unrealsummit16.cafe24.com/site/re_img3.png" />
						</div>
						<div class="text_box">
							<span class="cate">다시보기</span>
							<span class="title">5월 신규 영상</span>
							<span class="text">5월의 신규 영상 및 한글 자막 영상을 확인하세요!</span>
						</div>
					</a>
				</div>
				<div class="list_box">
					<a href="https://unrealengine.com/marketplace/ko/learn/lyra" target="_blank">
						<div class="img_box">
						<img src="https://unrealsummit16.cafe24.com/site/re_img4.png" />
						</div>
						<div class="text_box">
							<span class="cate">무료 콘텐츠</span>
							<span class="title">라이라 스타터 게임</span>
							<span class="text">언리얼 엔진 5 게임 제작 시 훌륭한 시작점이 되어줄 샘플 프로젝트인 라이라 스타터 게임을 무료로 다운로드하세요.</span>
						</div>
					</a>
				</div>
				<div class="list_box">
					<a href="https://unrealengine.com/marketplace/ko/product/city-sample" target="_blank">
						<div class="img_box">
							<img src="https://unrealsummit16.cafe24.com/site/re_img5.png" />
						</div>
						<div class="text_box">
							<span class="cate">무료 콘텐츠</span>
							<span class="title">도시 샘플</span>
							<span class="text">매트릭스 어웨이큰스: 언리얼 엔진 5 익스피어리언스의 도시 씬이 어떻게 구축되었는지 알아보세요.</span>
						</div>
					</a>
				</div>
				<div class="list_box">
					<a href="https://ue.unrealengine.com/ENG-1745-05-2020-EGK-Whitepaper-Landing-Pages1745---White-Paper---Number-15--VPFG2.html" target="_blank">
						<div class="img_box">
							<img src="https://unrealsummit16.cafe24.com/site/re_img6.png" />
						</div>
						<div class="text_box">
							<span class="cate">백서</span>
							<span class="title">버추얼 프로덕션 현장 가이드 제2권</span>
							<span class="text">언리얼 엔진과 함께 발전하고 있는 관련 산업과 트렌드를 반영한 버추얼 프로덕션 워크플로 및 사례들을 소개합니다.</span>
						</div>
					</a>
				</div>
			</div>		
		</div>		
    </section>


    <script>
 
		$('.bg_slide_list_box').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			dots: true,
			appendDots: $('.slider-dots-box'),
			dotsClass: 'slider-dots',
		});


		$(".visual_slide").slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			arrows: true,
			dots: true,
		}).on('beforeChange', function(event, slick, currentSlide, nextSlide){
			for(i=0;i<10;i++){
				$(".visual_slide").removeClass("visual_slide_"+i);
			}
			$(".visual_slide").addClass("visual_slide_"+$(".visual_slide div.slick-active").data("v"));
			$(".visual_slide div.slick-active").data("v");
		});;

	


    </script>
</div>

<?php include 'inc/common_footer.php'; ?>

<!-- //wrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script type="text/javascript">
var g5_cookie_domain = "";
	document.addEventListener('DOMContentLoaded', function() {
		var trigger = new ScrollTrigger({

			offset: {
				x: 0,
				y:-100
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

</body>
</html>
