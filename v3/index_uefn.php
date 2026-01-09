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
  <meta property="og:title" content="에픽 라운지" />
  <meta property="og:type" content="website" />
  <meta property="fb:589663484560989"/>
  <meta name="keywords" content="에픽 라운지"/>
  <meta name="description" content="에픽 라운지">
  <meta property="og:url" content="https://www.epiclounge.co.kr" />
  <meta property="og:image" content="https://unrealsummit16.cafe24.com/2023/challange/last_KeyImage_05112.png" />
  <meta property="og:image:height" content="630px" />
  <meta property="og:image:width" content="1200px" />
  <meta property="og:description" content="언리얼 엔진 5 챌린지 | 중세부터 사이언스 픽션까지 과거와 미래를 넘나드는 여러분만의 특별한 시간을 마음껏 표현해 보세요." />
  
  <meta name="naver-site-verification" content="374c7b8b38a950b57cfd67d5e14696efd33bc057" />
  <link rel="shortcut icon" href="https://epiclounge.co.kr/favicon_16.ico" sizes="16x16"> 
	<link rel="shortcut icon" href="https://epiclounge.co.kr/favicon_32.ico" sizes="32x32">  
  <!-- <meta property="og:title" content="스테이트 오브 언리얼 | 하이라이트" />
  <meta property="og:type" content="website" />
  <meta property="fb:589663484560989"/>
  <meta name="keywords" content="스테이트 오브 언리얼 | 하이라이트 "/>
  <meta name="description" content="스테이트 오브 언리얼 | 하이라이트">
  <meta property="og:url" content="https://www.epiclounge.co.kr" />
  <meta property="og:image" content="https://unrealsummit16.cafe24.com/stu/gdc_ogg.jpg" />
  <meta property="og:image:height" content="630px" />
  <meta property="og:image:width" content="1200px" />
  <meta property="og:description" content="스테이트 오브 언리얼 하이라이트를 마련해 SOU에서 발표된 내용과 그 의미를 함께 짚어 보고자 합니다. SOU를 놓치신 분들이라면, 알람을 설정하여 시청해 보세요!" />
  <meta name="naver-site-verification" content="374c7b8b38a950b57cfd67d5e14696efd33bc057" />
  <link rel="shortcut icon" href="https://epiclounge.co.kr/favicon_16.ico" sizes="16x16"> 
	<link rel="shortcut icon" href="https://epiclounge.co.kr/favicon_32.ico" sizes="32x32">  -->
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
	<div class="visual_slide_list main_slide_13" data-v="4">
		
		<div class="visual_mp4">
			 <video autoplay loop muted class="video w_video"><!--영상 로드시 튀는 현상으로 poster bg로 적용 -->
				<source src="https://unrealsummit16.cafe24.com/2023/start_uefn/bg_uefn.mp4" type="video/mp4">
			</video>
		</div>
		<div class="visual_text_box">
			<div class="text_box1">
				<p class="num_text">
					<img src="https://unrealsummit16.cafe24.com/site/main_num_text_blank.png" />
				</p>
				<p class="info_text">
					<span class="eng_text"><img src="https://unrealsummit16.cafe24.com/2023/start_uefn/uefn_txt2.svg" /></span>
					<!--<span class="kor_text">다시보기</span>-->
				</p>
			</div>
			<div class="text_box2">
	
				<span class="text"></span>
				<a href="https://epiclounge.co.kr/start_uefn2023.php"  target="_blank" class="btn_6">자세히 보기</a>
			</div>
		</div>
	</div>
	<div class="visual_slide_list main_slide_14" data-v="3">
	
	<div class="visual_mp4">
		 <video autoplay loop muted class="video w_video"><!--영상 로드시 튀는 현상으로 poster bg로 적용 -->
			<source src="https://unrealsummit16.cafe24.com/2023/challange/ogoKR_bg5.mp4" type="video/mp4">
		</video>
	</div>
	<div class="visual_text_box">
		<div class="text_box1">
			<p class="num_text">
				<img src="https://unrealsummit16.cafe24.com/site/main_num_text_blank.png" />
			</p>
			<p class="info_text">
				<span class="eng_text"><img src="https://unrealsummit16.cafe24.com/2023/challange/challenge.png" /></span>
				<!--<span class="kor_text">다시보기</span>-->
			</p>
		</div>
		<div class="text_box2">

			<span class="text"></span>
			<a href="https://epiclounge.co.kr/event_challenge.php"  target="_blank" class="btn3">자세히 보기</a>
		</div>
	</div>
</div>
	<div class="visual_slide_list main_slide_13" data-v="2">
		
		<div class="visual_mp4">
			 <video autoplay loop muted class="video w_video">
				<source src="https://unrealsummit16.cafe24.com/2023/site/52_r/52w.mp4" type="video/mp4">
			</video>
		</div>
		<div class="visual_text_box">
			<div class="text_box1">
				<p class="num_text">
					<img src="https://unrealsummit16.cafe24.com/site/main_num_text_blank.png" />
		
				</p>
				<p class="info_text">
					<span class="eng_text"><img src="https://unrealsummit16.cafe24.com/2023/site/52_r/ue52_r.png" /></span>
				</p>
			</div>
			<div class="text_box2">
	
				<span class="text"></span>
				<a href="https://www.youtube.com/live/ZxfV3KBzmqU?feature=share&t=1887"  target="_blank" class="btn_6">자세히 보기</a>
			</div>
		</div>
	</div>
	<div class="visual_slide_list main_slide_13" data-v="3">
		
		<div class="visual_mp4">
			 <video autoplay loop muted class="video w_video">
				<source src="https://cdn2.unrealengine.com/uefn-bg-1920x1080-v01-0ae2fe46b33f.mp4" type="video/mp4">
			</video>
		</div>
		<div class="visual_text_box">
			<div class="text_box1">
				<p class="num_text">
					<img src="https://unrealsummit16.cafe24.com/site/main_num_text_blank.png" />
		
				</p>
				<p class="info_text">
					<span class="eng_text"><img src="https://unrealsummit16.cafe24.com/main/2023/uefn_epiclounge.png" /></span>
					
				</p>
			</div>
			<div class="text_box2">
	
				<span class="text"></span>
				<a href="https://www.unrealengine.com/ko/blog/unreal-editor-for-fortnite-is-now-available-in-beta"  target="_blank" class="btn_6">자세히 보기</a>
			</div>
		</div>
	</div>

	
	
	
	<!--
	<div class="visual_slide_list main_slide_12" data-v="1">
		
		<div class="visual_mp4">
			 <video autoplay loop muted class="video w_video">
				<source src="https://unrealsummit16.cafe24.com/site/345.mp4" type="video/mp4">
			</video>
		</div>
		<div class="visual_text_box">
			<div class="text_box1">
				<p class="num_text">
					<img src="https://unrealsummit16.cafe24.com/site/main_num_text_blank.png" />
					
				</p>
				<p class="info_text">
					<span class="eng_text"><img src="https://unrealsummit16.cafe24.com/site/replay_tt1.png" /></span>
				
				</p>
			</div>
			<div class="text_box2">
	
				<span class="text"></span>
				<a href="https://epiclounge.co.kr/v3/contents/replay.php"  target="_blank" class="btn_6">자세히 보기</a>
			</div>
		</div>
	</div>
-->
	<!--<div class="visual_slide_list main_slide_1" data-v="4">
		
		<div class="visual_mp4">
			 <video autoplay loop muted class="video w_video">
				<source src="https://unrealsummit16.cafe24.com/mov/30_5.mp4" type="video/mp4">
			</video>
		</div>
		<div class="visual_text_box">
			<div class="text_box1">
				<p class="num_text">
					<img src="/v3/resource/images/main/main_num_text2.png" />
					<img src="https://unrealsummit16.cafe24.com/site/main_num_text2_blank.png" />
				</p>
				<p class="info_text">
					<span class="eng_text"><img src="/v3/resource/images/main/ue_logo.png" /></span>
					<span class="kor_text">언리얼 엔진 5 출시</span>
				</p>
			</div>
			<div class="text_box2">
	
			<span class="text">언리얼 엔진 5의 주요 기능과 마이그레이션 방법을 시연을 통해 알려주는<br /> 언리얼 엔진 5 출시 웨비나를 진행했습니다. 리소스에서 확인하세요.</span>
				<a href="https://www.unrealengine.com/ko/unreal-engine-5"  target="_blank">자세히 보기</a>
			</div>
		</div>
	</div>-->
	
	

	

	

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
				<a href="https://epiclounge.co.kr/contents/news_list.php">+ 전체보기</a>
			</div>
			<div class="con">
				<div class="scroll_box">

				
<?

	$main_news_result = sql_query("select * from v3_main_banner_news where bn_use_at = 'Y' order by bn_id desc limit 3");
	foreach($main_news_result as $news){
?>
				<div class="list_box">
					<a href="<?=$news["bn_url"]?>" target="_blank">
						<div class="img_box">
							<img src='/data/main_news/<?php echo $news['bn_id']; ?>' />
						</div>
						<div class="news_text">
							<span class="news_text_title"><?=$news["bn_title"]?></span>
							<span class="news_text_info"><?=$news["bn_info"]?></span>
						</div>
					</a>
				</div>
<?
	}
?>
				</div>
			</div>
		</div>
	</section>

	<section class="bg_slide_box">
		<div class="bg_slide_list_box">
		
<?
	$visual_result = sql_query("select * from v3_main_banner where bn_use_at = 'Y' order by bn_id asc ");

	foreach($visual_result as $visual){
?>
			<div class="bg_slide_list bg_slide_list1" style="background-image:url('/data/main_banner/<?php echo $visual['bn_id']; ?>');">
				<p class="bg_slide_title"><?=$visual["bn_txt_top"]?></p>
				<p class="bg_slide_text"><?=$visual["bn_txt_bot_color_btn"]?></p>
				<p class="bg_slide_btn"><a href="<?=$visual["bn_url"]?>" target="_blank"><?=$visual["bn_btn_txt"]?></a></p>
			</div>
<?
	}
?>
		</div>
		<div class="slider-dots-box"></div>

		
	</section>


	<section class="resource_list">
		<div class="wrap">
			<div class="resource_title">
				<h2>리소스</h2>
				<a href="https://epiclounge.co.kr/contents/news_list.php">+ 전체보기</a>
			</div>
			<div class="con">

<?

	$main_rsc_result = sql_query("select * from v3_main_banner_rsc where bn_use_at = 'Y' order by bn_id desc limit 6");
	foreach($main_rsc_result as $rsc){
?>
				<div class="list_box">
					<a href="<?=$rsc["bn_url"]?>" target="_blank">
						<div class="img_box">
							<img src='/data/main_news/<?php echo $rsc['bn_id']; ?>' />
						</div>
						<div class="text_box">
							<span class="cate"><?=$rsc["bn_tag"]?></span>
							<span class="title"><?=$rsc["bn_title"]?></span>
							<span class="text"><?=$rsc["bn_info"]?></span>
						</div>
					</a>
				</div>
<?
	}
?>
			</div>		
		</div>		
	</section>


	<script>
 
		$('.bg_slide_list_box').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			dots: true,
			appendDots: $('.slider-dots-box'),
			dotsClass: 'slider-dots',
		});


		$(".visual_slide").slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
		autoplay:true,
		autoplaySpeed: 6000,
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
