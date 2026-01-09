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
  <meta property="og:title" content="언리얼 엔진 5 얼리 액세스 프리미어 " />
  <meta property="og:type" content="website" />
  <meta property="fb:589663484560989"/>
  <meta name="keywords" content="언리얼 엔진 5 얼리 액세스 프리미어"/>
  <meta name="description" content="언리얼 엔진 5 얼리 액세스 프리미어 ">
  <meta property="og:url" content="https://www.epiclounge.co.kr" />
  <meta property="og:image" content="https://unrealsummit16.cafe24.com/og/ue5.jpg" />
  <meta property="og:image:height" content="630px" />
  <meta property="og:image:width" content="1200px" />
  <meta property="og:description" content="에픽게임즈는 언리얼 엔진 5로 모든 산업의 크리에이터들이 놀라운 리얼타임 콘텐츠와 경험을 제공할 수 있도록 창작의 자유를 제공하는 것을 궁극적인 목표로, 먼저 차세대 게임 개발을 위해 언리얼 엔진 5의 얼리 액세스를 출시했습니다!" />
  <meta name="naver-site-verification" content="374c7b8b38a950b57cfd67d5e14696efd33bc057" />
  <link rel="shortcut icon" href="https://epiclounge.co.kr/favicon_16.ico" sizes="16x16"> 
    <link rel="shortcut icon" href="https://epiclounge.co.kr/favicon_32.ico" sizes="32x32"> 

  <title>언리얼 엔진 5 </title>
</head>
<body>
<link rel="stylesheet" href="/v3/resource/css/main.css">

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
		<li><a href="https://twitter.com/intent/tweet?text=언리얼 엔진 5 출시 웨비나에 무료 등록 하세요!&url=https://epiclounge.co.kr/v3/" title="새창" target="_blank"><img src="/v3/resource/images/event/quick_sns_1.png" /></a></li>
		<li><a href="https://www.facebook.com/sharer/sharer.php?u=https://epiclounge.co.kr/v3/" title="새창" target="_blank"><img src="/v3/resource/images/event/quick_sns_2.png" /></a></li>
		<li><a href="#n" onclick="clip('https://epiclounge.co.kr/v3/'); return false;" title="새창" ><img src="/v3/resource/images/event/quick_sns_3.png" /></a></li>
	</ul>
	<a href="#event_main_sec_1" class="top_btn" onclick="move_top()"><img src="/v3/resource/images/event/arrow_top_btn.png" /></a>
</div>


   <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
<?php include 'inc/common_header.php'; ?>
    <!-- container -->
<div class="container">
<?
	$visual = sql_fetch("select * from v3_main_banner where bn_use_at = 'Y' order by bn_id desc limit 1");
	if($visual){
		$color_class = "";
		switch($visual["bn_color"]){
			case "핑크": $color_class = "visual_pink"; break;
			case "파란": $color_class = "visual_blue"; break;
			case "보라": $color_class = "visual_violet"; break;
			case "하늘": $color_class = "visual_sky"; break;
		}
?>
<section class="visual <?=$color_class?>">
	<div class="visual_mp4">
		 <video autoplay loop muted class="video w_video"><!-- 영상 로드시 튀는 현상으로 poster bg로 적용 -->
			<source src="/v3/data/main_banner/<?php echo $visual['bn_id']; ?>" type="video/mp4">
		</video>
	</div>
    <div class="visual_box">
        <div class="title_wrap">
            <div class="title first"><?=$visual["bn_txt_top"]?></div>
            <div class="title second"><span class="date"><?=$visual["bn_txt_bot_color"]?></span> <?=$visual["bn_txt_bot_color_btn"]?></div>
        </div>
        <div class="btn_wrap">
            <a href="<?=$visual["bn_url"]?>" title="새창" target="_blank"><?=$visual["bn_btn_txt"]?></a>
        </div>
    </div>
</section>
<?
	}else{
?>
<section class="visual">
	<div class="visual_mp4">
		 <video autoplay loop muted class="video w_video"><!-- 영상 로드시 튀는 현상으로 poster bg로 적용 -->
			<source src="https://unrealsummit16.cafe24.com/mov/30s_2.mp4" type="video/mp4">
		</video>
	</div>
    <div class="visual_box">
        <div class="title_wrap">
            <div class="title first">트윈모션</div>
            <div class="title second"><span class="date">2022.1</span> 출시 웨비나</div>
        </div>
        <div class="btn_wrap">
            <button type="button">참가 신청하기</button>
        </div>
    </div>
</section><?
	}
?>

    <section class="news">
        <div class="wrap">
            <h2>새소식</h2>
            <div class="con">
				<div class="main_news_list">
<?

	$main_news_result = sql_query("select * from v3_main_banner_news where bn_use_at = 'Y' order by bn_id desc");
	foreach($main_news_result as $news){
?>
					<a href="<?=$news["bn_url"]?>" target="_blank">					
						<div class="main_news" style="background-image:url('/v3/data/main_news/<?php echo $news['bn_id']; ?>')">
							<div class="main_news_con">
								<div class="sub_title"><?=$news["bn_info"]?></div>
								<div class="title"><?=$news["bn_title"]?></div>
								<div class="badge"><?=$news["bn_tag"]?></div>
							</div>
						</div>
					</a>
<?
	}
?>
				</div>
                <div class="main_news_nav">
<?

	$main_news_result = sql_query("select * from v3_main_banner_news where bn_use_at = 'Y' order by bn_id desc");
	foreach($main_news_result as $news){
?>
                    <div class="main_news_item"><a href="#n" class="img"><img src="/v3/data/main_news/<?php echo $news['bn_id']; ?>_2" alt="<?=$news["bn_info"]?>" /></a></div>
<?
	}
?>
                </div>
            </div>
        </div>
    </section>

    <section class="resource">
        <div class="resource_inner">
				<a href="#n" id="resource_prev"><img src="/v3/resource/images/main/tump_left_arrow.png" /></a>
            <div class="wrap">
                <h2>리소스</h2>
                <div class="resource_slide">
				
<?

	$main_news_result = sql_query("select * from v3_main_banner_rsc where bn_use_at = 'Y' order by bn_id desc");
	foreach($main_news_result as $news){
?>
                    <div class="slide_item">
                        <a href="<?=$news["bn_url"]?>" class="slide_anchor" target="_blank">
                            <span class="img" style="background-image:url(/v3/data/main_res/<?=$news["bn_id"]?>)"><?=$news["bn_id"]?></span>
                            <div class="con_wrap">
                                <div class="title"><?=$news["bn_title"]?></div>
                                <div class="con"><?=$news["bn_info"]?></div>
                            </div>
                        </a>
                    </div>
<?
	}
?>
                </div>

            </div>
				<a href="#n" id="resource_next"><img src="/v3/resource/images/main/tump_right_arrow.png" /></a>
        </div>
    </section>

    <script>
        var $resource = $('.resource'),
            $resourceSlide = $resource.find('.resource_slide');

        $resourceSlide.slick({
            swipe : true,
            draggable : true,
            slidesToShow : 2,
            slidesToScroll: 1,
            autoplaySpeed: 2000,
            speed: 500,
            vertical : false,
            autoplay : false,
            variableWidth:true,
            infinite: true,
          prevArrow: $('#resource_prev'),
		nextArrow: $('#resource_next'),
            pauseOnHover : false,
            centerMode:true,
            arrows:true,
            responsive: [{
                breakpoint: 801,
                settings: {
                    draggable : true,
                    slidesToShow : 1,
                    swipeToSlide: true
                }
            }]
        });

					
		$('.main_news_list').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			autoplay: true,
			//trigger after the slide appears
			// i is current slide index
			afterChange: function (slickSlider, i) {
				//remove all active class
				$('.main_news_nav .slick-slide').removeClass('slick-active');
				//set active class for current slide
				$('.main_news_nav .slick-slide').eq(i).addClass('slick-active');
			}

		});

		//set active class to first slide
		$('.main_news_nav .slick-slide').eq(0).addClass('slick-active');

		$('.main_news_nav').slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			vertical: true,
			asNavFor: '.main_news_list',
			dots: false,
			autoplay: true,
			centerMode: false,
			focusOnSelect: true,
            responsive: [{
                breakpoint:1300,
                settings: {
                    
					slidesToShow: 4
                }
            }]
		});

		$('.main_news_nav').on('mouseenter', '.slick-slide', function (e) {
			var $currTarget = $(e.currentTarget), 
				index = $currTarget.data('slick-index'),
				slickObj = $('.main_news_list').slick('getSlick');
			
			slickObj.slickGoTo(index);
			
		});



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
		/* KD.주석. 
		$("a").on("click", function(){
			var divName = $(this).attr("id"), 
				topPosition = $("."+ divName).offset().top;
			$('html, body').animate({
				scrollTop: topPosition - 0
			}, 500);
			return false; //리턴펄스로 스크롤이 최상위로 갔다가 돌아오는 현상 없어짐
		});*/
	});
	
</script>

</body>
</html>
