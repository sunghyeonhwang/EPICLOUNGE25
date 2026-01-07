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
    <meta property="og:url" content="https://epiclounge.co.kr/v3/unrealsummit2022.php" />
    <meta property="og:image" content="https://epiclounge.co.kr/v3/resource/images/event/usm_key.jpg" />
    <meta property="og:image:height" content="630px" />
    <meta property="og:image:width" content="1200px" />
    <meta property="og:description" content="언리얼 서밋은 언리얼 엔진의 최신 기술, 에코시스템 그리고 영감을 주는 리얼타임 3D 인터랙티브 콘텐츠 제작 경험을 공유하기 위해 에픽게임즈 코리아에서 주관하는 연례 컨퍼런스입니다." />
    <meta name="naver-site-verification" content="374c7b8b38a950b57cfd67d5e14696efd33bc057" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/static/pretendard.css">
    <link rel="stylesheet" href="/v3/resource/css/common.css">
    <link rel="stylesheet" href="/v3/resource_0829/css/main2.css">
    <link rel="stylesheet" href="/v3/resource_0829/css/event_letsmakegame.css">
    <script src="/v3/resource_0829/js/jquery-3.4.1.min.js"></script>
    <script src="/v3/resource_0829/js/slick.min.js"></script>
    <script src="/v3/resource_0829/js/ScrollTrigger.min.js"></script>
    <script src="/v3/resource/js/main.js"></script>
    <!--<script src="/v3/resource_0829/js/common.js"></script>
    <script src="/v3/resource_0829/js/main.js"></script>-->
    <!--fB -->
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
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
<script>
        
        // NAVER
          function shareNaver() {
            const title = "타이틀 입력";
            const url = "https://epiclounge.co.kr";
            window.open(
            "https://share.naver.com/web/shareView?url=" + url + "&title=" + title
          );
        }
        
        // Facebook
          function shareFacebook() {
            const title = "타이틀 입력";
            const url = "https://sample.com/index.php";
            window.open(
            "http://www.facebook.com/sharer/sharer.php?u=" + url + "&title=" + title
          );
        }
        
        // Twitter
          function shareTwitter() {
            const text = "내용 입력";
            const url = "https://sample.com/index.php";
            window.open(
            "https://twitter.com/intent/tweet?text=" + url + text
          );
        }
        
        // Telegram
          function shareTelegram() {
            const text = "내용 입력";
            const url = "https://sample.com/index.php";
            window.open("https://telegram.me/share/url?url=" + url + "&text=" + text);
        }
        </script>


    <title>언리얼 서밋 온라인 2022</title>
</head>
<body>

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
<div class="container">
    <section class="visual" data-page-index="1">
        <div class="visual_bg">
            <video id="video" class="video" poster="/common/images/main/visualPoster.jpg" autoplay="" muted="" loop="">
                Sorry, your browser doesn't support embedded videos.
                <source src="/common/html/main/main.mp4" type="video/mp4">
            </video>
        </div>
        <div class="wrap">
            <div class="visual_con">
                <div class="visual_con_inner">
                    <div class="logo">
                        <img src="/v3/resource_0829/images/main/logo_re.svg" alt="로고">
                    </div>
                    <div class="con_inner">
                        <img src="/v3/resource_0829/images/main/visual_con_re.svg" alt="">
                        <img src="/v3/resource_0829/images/main/visual_con2_re.svg" alt="">
                        <!--                    <h2>-->
                        <!--                        <div class="line1">언리얼 서밋</div>-->
                        <!--                        <div class="line2"></div>-->
                        <!--                        <div class="date"><span></span></div>-->
                        <!--                        <button type="button" class="more">캘린더 추가</button>-->
                        <!--                        <a href="#n" class="more">캘린더 추가</a>-->
                        <!--                    </h2>-->
                        <div class="btn_wrap">
                            <button type="button" class="visual_btn type1"><a href="https://www.epiclounge.co.kr/v2/application_terms.html" target="_blank">무료 등록하기</a></button>
                            <!--<button type="button" class="visual_btn type2">등록확인</button>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="visual_menu_wrap">
                <div class="visual_menu">
                    <!--<button type="button" class="visual_menu_btn" data-index="2">언리얼 서밋 소개</button>
                    <button type="button" class="visual_menu_btn" data-index="3">스케줄</button>
                    <button type="button" class="visual_menu_btn" data-index="4">이벤트</button>
                    <button type="button" class="visual_menu_btn" data-index="5">FAQ</button>-->
                    <button type="button" class="visual_menu_btn" data-index="2">ABOUT</button>
                    <button type="button" class="visual_menu_btn" data-index="3">SESSIONS</button>
                    <button type="button" class="visual_menu_btn" data-index="4">EVENTS</button>
                    <button type="button" class="visual_menu_btn" data-index="5">FAQ</button>
                </div>
            </div>
            <div class="scroll_down">
                <span>SCROLL DOWN</span>
            </div>
        </div>
    </section>
    <script>
        $(function() {
            var $section = $('.container section');

            var $visual = $('.visual'),
                $menumBtn = $visual.find('.visual_menu_btn');
            $menumBtn.on('click', function(){
                var $this = $(this),
                    thisIndex = $this.attr('data-index');
                $('html,body').animate({scrollTop : $('.container section[data-page-index='+ thisIndex +']').offset().top},300);
            })

            var $event = $('.event'),
                $eventBtn = $event.find('.acc_btn');
            $eventBtn.on('click', function(){
                var $this = $(this),
                    $thisParent = $this.closest('.event_item');
                $thisParent.toggleClass('active');
            });

            var $schedule = $('.schedule'),
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

            var $goods = $('.goods'),
                $goodsSlide = $goods.find('.goods_slide'),
                $goodsNav = $goods.find('.goods_nav'),
                $goodsPrev = $goodsNav.find('.prev'),
                $goodsNext = $goodsNav.find('.next');
            $goodsSlide.slick({
                //기본
                autoplay: false,
                dots: false,
                swipe: true,
                draggable: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                variableWidth: false,
                infinite: true,
                prevArrow: $goodsPrev,
                nextArrow: $goodsNext,
                centerMode: true,
                //추가 기능
                isRunOnLowIE: false,
                pauseOnArrowClick: true,
                pauseOnDirectionKeyPush: true,
                pauseOnSwipe: true,
                pauseOnDotsClick: true,
                responsive: [
                    {
                        breakpoint: 1299,
                        settings: {
                            swipe: true,
                            draggable: true,
                            swipeToSlide: true,
                            slidesToShow: 1,
                            variableWidth: true,

                        }
                    }]
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
            var $nav = $('nav.nav'),
                $direction = $nav.find('.direction'),
                $navUp = $direction.find('.up'),
                $navDown = $direction.find('.down');
            $navUp.on('click', function(){
                var winTop = $(window).scrollTop();
                var scrollOption = true;
                var thisSection = '';
                $section.each(function(){
                    var $this = $(this);
                    if($this.offset().top + ($this.height() / 2) > winTop && scrollOption){
                        thisSection = $this.attr('data-page-index');
                        scrollOption = false;
                    }
                });
                var prev = (parseInt(thisSection)-1) > 0 ? (parseInt(thisSection)-1) : 1;
                $('html,body').animate({scrollTop:$('.container section[data-page-index ='+ prev +' ]').offset().top},200)
            });
            $navDown.on('click', function(){
                var winTop = $(window).scrollTop();
                var scrollOption = true;
                var thisSection = '';
                $section.each(function(){
                    var $this = $(this);
                    if($this.offset().top + ($this.height() / 2) > winTop && scrollOption){
                        thisSection = $this.attr('data-page-index');
                        scrollOption = false;
                    }
                });
                var next = (parseInt(thisSection)+1) < $section.length ? (parseInt(thisSection)+1) : $section.length;
                $('html,body').animate({scrollTop:$('.container section[data-page-index ='+next +' ]').offset().top},200)
            });


            var $popupBtn = $('[data-btn-pop]');
            $popupBtn.on('click', function(){
                var $this = $(this);
//            $thisPanel = $('.pop').attr('data-panel-pop',$this.attr('data-btn-pop'));
                $('.'+$this.attr('data-btn-pop')+'').addClass('active');
                console.log(('['+$this.attr('data-btn-pop')+']'));
                $thisPanel.find('.pop_inner').focus();
            });
            $('.pop .close, .pop .inner_close').on('click', function(){
                $(this).closest('.pop').removeClass('active');
            })
        });
    </script>
    <section class="intro" data-page-index="2">
        <div class="wrap">
            <!--<h2>
                <img src="/v3/resource_0829/images/main/intro_title1.svg" alt="언리얼 서밋">
                <img src="/v3/resource_0829/images/main/intro_title2.svg" alt="ONLINE2022">
            </h2>-->
            <div class="con_wrap">
                <div class="con">
                    <h3>
                        <!--<span class="sub_title">언리얼 서밋 온라인 2022에 </span>-->
                        <em>모든 산업의 크리에이터분들을 초대합니다.</em>
                    </h3>
                    <div class="text">
                        <p><strong>언리얼 서밋은</strong> 언리얼 엔진의 최신 기술, 에코시스템 그리고 영감을 주는 <strong>리얼타임 3D 인터랙티브 콘텐츠 제작 경험을 공유</strong>하기 위해 에픽게임즈 코리아에서 주관하는 연례 컨퍼런스입니다. 
                        게임, 영화, TV, 애니메이션, 건축, 그리고 자동차 등의 <strong>전 산업은 언리얼 엔진의 리얼타임 3D 기술로 통합</strong>되고 있고, 크리에이터들의 <strong>스토리텔링과 경험하는 방식을 혁신</strong>하고 있습니다.
                       언리얼 서밋 온라인 2022는 UE5, 디지털 휴먼, 디지털 트윈, 버추얼 프로덕션, 메타버스 등  전 산업을 관통하는 <strong>리얼타임 인터랙티브 콘텐츠 제작의 최신 기술과 미래를 엿볼 수 있는 세션</strong>들이 함께 합니다. <strong>디지털의 미래를 위한 창의적인 영감을 얻어 보세요!</strong>
                    </div>
                </div>
                <div class="video">
                    <div class="youtube_wrap">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/GGQmRAppI6I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <!--<video class="video" poster="/common/images/main/visualPoster.jpg" autoplay="" muted="" loop="">
                        Sorry, your browser doesn't support embedded videos.
                        <source src="/common/html/main/main.mp4" type="video/mp4">
                    </video>-->
                </div>
            </div>
        </div>
    </section>

    <section class="schedule" data-page-index="3">
        <div class="wrap">
            <h2>SESSIONS</h2>
            <div class="filter_wrap">
                <div class="filter_nav">
                    <!-- <button type="button" class="filter_btn">언리얼 엔진 5<span class="sub">1</span></button>
                     <button type="button" class="filter_btn">개발자<span class="sub">5</span></button>
                     <button type="button" class="filter_btn">비주얼 아트<span class="sub">4</span></button>
                     <button type="button" class="filter_btn">기획<span class="sub">2</span></button>
                     <button type="button" class="filter_btn all">필터<span class="sub"></span></button>-->
                    <button type="button" class="filter_btn filter">필터<img src="/v3/resource_0829/images/main/arrow.png"></button>
                </div>
                <div class="filters">
                    <ul class="filter_list">
                        <!-- <li class="filter_item filter_item1">
                             <h3 class="title">산업</h3>
                             <div class="check_wrap">
                                 <span class="check type1">
                                     <input id="check1-1" type="checkbox" />
                                     <label for="check1-1">공통</label>
                                 </span>
                                 <span class="check type1">
                                     <input id="check1-2" type="checkbox" />
                                     <label for="check1-2">게임</label>
                                 </span>
                                 <span class="check type3">
                                     <input id="check1-3" type="checkbox" />
                                     <label for="check1-3">영화&TV</label>
                                 </span>
                                 <span class="check large">
                                     <input id="check1-4" type="checkbox" />
                                     <label for="check1-4">방송&라이브 이벤트</label>
                                 </span>
                                 <span class="check">
                                     <input id="check1-5" type="checkbox" />
                                     <label for="check1-5">애니메이션</label>
                                 </span>
                                 <span class="check large">
                                     <input id="check1-6" type="checkbox" />
                                     <label for="check1-6">건축&시뮬레이션</label>
                                 </span>
                                 <span class="check">
                                     <input id="check1-7" type="checkbox" />
                                     <label for="check1-7">자동차&운송</label>
                                 </span>
                             </div>
                         </li>-->
                        <li class="filter_item filter_item1">
                            <h3 class="title">분야</h3>
                            <div class="check_wrap">
                                <span class="check">
                                    <input id="check2-2" type="checkbox" value="프로그래밍"/>
                                    <label for="check2-2">프로그래밍</label>
                                </span>
                                <span class="check">
                                    <input id="check2-3" type="checkbox" value="비주얼아트"/>
                                    <label for="check2-3">비주얼아트</label>
                                </span>
                                <span class="check">
                                    <input id="check2-4" type="checkbox" value="기획/프로덕션"/>
                                    <label for="check2-4">기획/프로덕션</label>
                                </span>
                                <span class="check">
                                    <input id="check2-1" type="checkbox" value="서비스"/>
                                    <label for="check2-1">서비스</label>
                                </span>
                                <span class="check">
                                    <input id="check2-12" type="checkbox" value="XR/VR/AR/MR"/>
                                    <label for="check2-12">XR/VR/AR/MR</label>
                                </span>
                                <span class="check">
                                    <input id="check2-13" type="checkbox" value="UE5"/>
                                    <label for="check2-13">UE5</label>
                                </span>
                                <span class="check">
                                    <input id="check2-5" type="checkbox" value="버추얼 프로덕션"/>
                                    <label for="check2-5">버추얼 프로덕션</label>
                                </span>
                                <span class="check">
                                    <input id="check2-14" type="checkbox" value="디지털 휴먼" />
                                    <label for="check2-14">디지털 휴먼</label>
                                </span>
                                <span class="check">
                                    <input id="check2-6" type="checkbox" value="디지털 트윈" />
                                    <label for="check2-6">디지털 트윈</label>
                                </span>
                                <span class="check">
                                    <input id="check2-8" type="checkbox" value="메타버스"/>
                                    <label for="check2-8">메타버스</label>
                                </span>
                            </div>
                        </li>
                        <li class="filter_item filter_item2">
                            <h3 class="title">플랫폼</h3>
                            <div class="check_wrap">
                                <span class="check">
                                    <input id="check3-1" type="checkbox" value="크로스 플랫폼" />
                                    <label for="check3-1">크로스플랫폼</label>
                                </span>
                                <span class="check">
                                    <input id="check3-2" type="checkbox" value="PC"/>
                                    <label for="check3-2">PC</label>
                                </span>
                                <span class="check">
                                    <input id="check3-3" type="checkbox" value="모바일"/>
                                    <label for="check3-3">모바일</label>
                                </span>
                                <span class="check">
                                    <input id="check3-4" type="checkbox" value="콘솔"/>
                                    <label for="check3-4">콘솔</label>
                                </span>
                                <span class="check">
                                    <input id="check3-5" type="checkbox" value="기타2"/>
                                    <label for="check3-5">기타</label>
                                </span>
                            </div>
                        </li>
                        <li class="filter_item filter_item3">
                            <h3 class="title">난이도</h3>
                            <div class="check_wrap">
                                <span class="check">
                                    <input id="check4-1" type="checkbox" value="초급" />
                                    <label for="check4-1">초급</label>
                                </span>
                                <span class="check">
                                    <input id="check4-2" type="checkbox" value="중급" />
                                    <label for="check4-2">중급</label>
                                </span>
                              <!-- <span class="check">
                                    <input id="check4-3" type="checkbox" value="고급"/>
                                    <label for="check4-3">고급</label>
                                </span>-->
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="date_header">
                <button type="button" class="date_nav">
                    <span class="date">09/27(화)</span>
                    <span class="date_title">공통</span>
                </button>
                <button type="button" class="date_nav">
                    <span class="date">9/28(수)</span>
                    <span class="date_title">게임</span>
                </button>
                <button type="button" class="date_nav">
                    <span class="date">9/29(목)</span>
                    <span class="date_title">영화, TV & 애니메이션</span>
                </button>
                <button type="button" class="date_nav">
                    <span class="date">9/30(금)</span>
                    <span class="date_title">건축 & 자동차</span>
                </button>
            </div>
            <div class="program_wrap">
                <div class="program_content">
                    <!--  비율 2:1 -->
                    <article class="program program1">
                        <button type="button" data-btn-pop="" class="program_part part1" data-category="">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">1</span>
                                    <span class="time">13:00-13:15</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>오프닝 환영사</h3>
                                <span class="owner">박성철 대표, 에픽게임즈 코리아</span>
                            </span>
                        </button>
                        <button type="button" class="program_part part2"  data-category="공통,메타버스,크로스 플랫폼,초급">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">2</span>
                                    <span class="time">13:20-13:50</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>콘텐츠 제작의 미래</h3>
                                <span class="owner">신광섭, 에픽게임즈 코리아</span>
                            </span>
                        </button>
                    </article>
                    <!-- 비율 1:2 -->
                    <article class="program program2">
                        <button type="button"  data-btn-pop=""  class="program_part part1" data-category="공통,비주얼아트,UE5,디지털 휴먼,PC,초급,">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">3</span>
                                    <span class="time">14:00-14:30</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>메타휴먼: 메시 투 메타휴먼과 IK 리타기팅</h3>
                                <span class="owner">권오찬, 에픽게임즈 코리아</span>
                            </span>
                        </button>
                        <button type="button"  class="program_part part2" data-category="공통,게임,프로그래밍,비주얼아트,크로스 플랫폼,초급,">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">4</span>
                                    <span class="time">14:40-15:30</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>카오스 물리 엔진 200% 활용하기</h3>
                                <span class="owner">강정훈, 에픽게임즈 코리아</span>
                            </span>
                        </button>
                    </article>
                    <!-- 비율 1:1 -->
                    <article class="program program3">
                        <button type="button"  class="program_part part1" data-category="공통,비주얼아트,UE5,PC,초급,">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">5</span>
                                    <span class="time">15:40-16:10</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>모델링 모드와 프랙처 모드로 부서진 배경 프랍 제작하기</h3>
                                <span class="owner">권오찬, 에픽게임즈 코리아</span>
                            </span>
                        </button>
                        <button type="button"  class="program_part part2" data-category="공통,프로그래밍,크로스 플랫폼,초급,">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">6</span>
                                    <span class="time">16:20-17:10</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>완전히 유연한 게임플레이 제작: UE5 모듈형 게임플레이</h3>
                                <span class="owner">박창현, 에픽게임즈 코리아</span>
                            </span>
                        </button>
                    </article>

                    <div class="schedule_bottom">
                        <p class="info"><span class="info time">17:10</span><span>경품 추첨</span></p>
                        <div class="bottom_text">
                            <p>각 세션의 정보는 곧 업데이트 될 예정입니다.</p>
                            <p>스케줄은 사정에 따라 변경될 수 있습니다.</p>
                        </div>
                    </div>
                </div>

                <div class="program_content">
                    <article class="program program1">
                        <button type="button"  class="program_part part1" data-category="게임,비주얼아트,UE5,버추얼 프로덕션,디지털 휴먼,디지털 트윈,메타버스,크로스 플랫폼,PC,콘솔,중급,">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">1</span>
                                    <span class="time">13:00-13:50</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>군중 애니메이션: 도시 샘플 플러그인으로 쉽게 따라하기</h3>
                                <span class="owner">박성제, 에픽게임즈 코리아</span>
                            </span>
                        </button>
                        <button type="button" class="program_part part2" data-category="게임,프로그래밍,크로스 플랫폼,PC,모바일,콘솔,중급">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">2</span>
                                    <span class="time">14:00-14:50</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>[카트라이더: 드리프트] 멀티 플랫폼을 위한 최적화 드라이브</h3>
                                <span class="owner">강길전, 니트로 스튜디오</span>
                            </span>
                        </button>
                    </article>
                    <article class="program program2">
                        <button type="button"  class="program_part part1" data-category="게임,비주얼아트,크로스 플랫폼,PC,콘솔,중급,">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">3</span>
                                    <span class="time">15:00-15:50</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>인디 게임 [RP7]의 아트 디렉션: 픽셀 게임이 풀 3D 게임으로 변하기까지</h3>
                                <span class="owner">이규영, 터틀 크림</span>
                            </span>
                        </button>
                        <button type="button"class="program_part part2" data-category="게임,프로그래밍,UE5,크로스 플랫폼,PC,콘솔,중급">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">4</span>
                                    <span class="time">16:00-16:50</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>언리얼 엔진을 활용한 [퍼스트 디센던트] 제작기</h3>
                                <span class="owner">김준환, 넥슨게임즈</span>
                            </span>
                        </button>
                    </article>
                    <article class="program program3">
                        <button type="button"  class="program_part part1" data-category="프로그래밍,UE5,모바일,중급,">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">5</span>
                                    <span class="time">17:00-17:50</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>UE5 모바일 렌더링 업데이트</h3>
                                <span class="owner">Jack Porter, Dmitriy Dyomin, Epic Games Korea</span>
                            </span>
                        </button>
                    </article>

                    <div class="schedule_bottom">
                        <p class="info"><span class="info time">17:50</span><span>경품 추첨</span></p>
                        <div class="bottom_text">
                            <p>각 세션의 정보는 곧 업데이트 될 예정입니다.</p>
                            <p>스케줄은 사정에 따라 사전 고지 없이 변경될 수 있습니다.</p>
                        </div>
                    </div>
                </div>
                <div class="program_content">
                    <article class="program program1">
                        <button type="button" data-btn-pop="" class="program_part part1" data-category="영화 & TV,애니메이션,비즈니스/마케팅,XR/VR/AR/MR,UE5,버추얼 프로덕션,디지털 휴먼,메타버스,크로스 플랫폼,중급,">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">1</span>
                                    <span class="time">13:00-13:30</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>콘텐츠 산업의 미래를 여는 리얼타임 3D 기술 언리얼 엔진</h3>
                                <span class="owner">최용승, 에픽게임즈 코리아</span>
                            </span>
                        </button>
                        <button type="button" data-btn-pop="" class="program_part part2" data-category="영화 & TV,애니메이션,비주얼아트,기획/프로덕션,UE5,중급,">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">2</span>
                                    <span class="time">13:40-14:30</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>언리얼 엔진 프리비즈를 통한 탄력적인 영상 연출 파이프라인</h3>
                                <span class="owner">김진우, 쿠트 이미지웍스</span>
                            </span>
                        </button>
                    </article>
                    <article class="program program2">
                        <button type="button" data-btn-pop="" class="program_part part1" data-category="애니메이션,비주얼아트,기획/프로덕션,기타,중급,">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">3</span>
                                    <span class="time">14:40-15:30</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>언리얼 엔진을 활용한 3D 애니메이션 [극장판 윌벤져스: 수상한 캠핑 대소동] 제작기</h3>
                                <span class="owner">오충원, 신창환, 스튜디오게일</span>
                            </span>
                        </button>
                        <button type="button" data-btn-pop="" class="program_part part2" data-category="영화 & TV,기획/프로덕션,XR/VR/AR/MR,버추얼 프로덕션,PC,초급,">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">4</span>
                                    <span class="time">15:40-16:30</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>버추얼 프로덕션 TV & 라이브 이벤트 적용 사례</h3>
                                <span class="owner">서준호, 유영빈, 금덕인, 비브스튜디오</span>
                            </span>
                        </button>
                    </article>
                    <article class="program program3">
                        <button type="button" data-btn-pop="" class="program_part part1" data-category="영화 & TV,프로그래밍,비주얼아트,XR/VR/AR/MR,디지털 휴먼,메타버스,PC,초급,">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">5</span>
                                    <span class="time">16:40-17:30</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>메타휴먼 기반의 버추얼 캐릭터 제작기: 실제 개발 사례를 중심으로 </h3>
                                <span class="owner">최성민, 자이언트스텝</span>
                            </span>
                        </button>
                        <button type="button" data-btn-pop="" class="program_part part2" data-category="영화 & TV,XR/VR/AR/MR,UE5,버추얼 프로덕션,기타,초급,">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">6</span>
                                    <span class="time">17:40-18:30</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>Netflix VP Open House in Korea: 성공적인 버추얼 프로덕션 콘텐츠 제작과 언리얼 엔진</h3>
                                <span class="owner">임주영, 웨스트월드</span>
                            </span>
                        </button>
                    </article>

                    <div class="schedule_bottom">
                        <p class="info"><span class="info time">18:30</span><span>경품 추첨</span></p>
                        <div class="bottom_text">
                            <p>각 세션의 정보는 곧 업데이트 될 예정입니다.</p>
                            <p>스케줄은 사정에 따라 사전 고지 없이 변경될 수 있습니다.</p>
                        </div>
                    </div>
                </div>
                <div class="program_content">
                    <article class="program program1">
                        <button type="button" data-btn-pop="" class="program_part part1" data-category="건축, 제조 & 시뮬레이션,기획/프로덕션,서비스,XR/VR/AR/MR,UE5,디지털 트윈,메타버스,기타,초급,">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">1</span>
                                    <span class="time">13:00-13:45</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>제조 산업 디지털 트랜스포메이션을 지원하는 에픽 에코시스템</h3>
                                <span class="owner">진득호, 에픽게임즈 코리아</span>
                            </span>
                        </button>
                        <button type="button" data-btn-pop="" class="program_part part2" data-category="건축, 제조 & 시뮬레이션,XR/VR/AR/MR,디지털 트윈,PC,중급,">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">2</span>
                                    <span class="time">13:55-14:40</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>[VARLOS] 항만 모니터링 시스템: 효율적인 항만 물류 관리를 위한 디지털 트윈</h3>
                                <span class="owner">김대희, 이은규, 삼우이머션</span>
                            </span>
                        </button>
                    </article>
                    <article class="program program2">
                        <button type="button" data-btn-pop="" class="program_part part1" data-category="건축, 제조 & 시뮬레이션,서비스,XR/VR/AR/MR,디지털 트윈,PC,모바일,MS Hololens,초급,기타">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">3</span>
                                    <span class="time">14:50-15:35</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>BIM 데이터를 XR 콘텐츠로 자동 생성하는 파이프라인과 건설 현장에서의 증강휴먼 운용 과정</h3>
                                <span class="owner">이유미, 에스엘즈</span>
                            </span>
                        </button>
                        <button type="button" data-btn-pop="" class="program_part part2" data-category="공통,비주얼아트,UE5,디지털 트윈,PC,중급,">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">4</span>
                                    <span class="time">15:45-16:30</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>서울을 UE5 디지털 트윈으로 구현한 [Project RYU]</h3>
                                <span class="owner">류충현, 류 프로덕션</span>
                            </span>
                        </button>
                    </article>
                    <article class="program program3">
                        <button type="button" data-btn-pop="" class="program_part part1" data-category="건축, 제조 & 시뮬레이션,서비스,UE5,디지털 트윈,메타버스,PC,초급,">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">5</span>
                                    <span class="time">16:40-17:25</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>서울시 공간정보플랫폼 S-Map 데이터를 활용한 Cesium 언리얼 엔진 통합</h3>
                                <span class="owner">김태현, 서울기술연구원</span>
                            </span>
                        </button>
                        <button type="button" data-btn-pop="" class="program_part part2" data-category="자동차 & 운송,비주얼아트,PC,초급,">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">6</span>
                                    <span class="time">17:35-18:20</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>리얼타임 레이 트레이싱을 이용한 차량 아웃사이드 미러 및 디지털 사이드 미러 구현</h3>
                                <span class="owner">류승열, 현대자동차</span>
                            </span>
                        </button>
                    </article>


                    <div class="schedule_bottom">
                        <p class="info"><span class="info time">18:20</span><span>경품 추첨</span></p>
                        <div class="bottom_text">
                            <p>각 세션의 정보는 곧 업데이트 될 예정입니다.</p>
                            <p>스케줄은 사정에 따라 사전 고지 없이 변경될 수 있습니다.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="event" data-page-index="4">
        <div class="wrap">
            <h2>EVENTS</h2>
            <ul class="event_list">
                <li class="event_item">
                    <button type="button" class="acc_btn">
                        <span class="num"><span class="num_inner"> </span></span>
                        <span class="title_wrap">
                            <em class="title">추후 업데이트 예정</em>
                            <span class="con">언리얼 서밋 온라인 2022 이벤트를 기대해주세요!</span>
                        </span>
                    </button>

                </li>
                <!--
                <li class="event_item">
                    <button type="button" class="acc_btn">
                        <span class="num"><span class="num_inner">1</span></span>
                        <span class="title_wrap">
                            <em class="title">일찍 등록하고 경품 받자!</em>
                            <span class="con">언리얼 서밋을 사전 등록하는 분들 중 추첨을 통해 300분에게 베스킨라빈스 싱클킹을 드립니다.</span>
                        </span>
                    </button>
                    <div class="event_a">
                        <ul class="event_con_list">
                            <li class="event_con_item item1">
                                <h4>참여 방법:</h4>
                                <div class="event_item_con">
                                    1. 이벤트 기간 내에 언리얼 서밋 온라인 2022 사전 등록 완료하기<br/>
                                    2. 등록한 일자에 세션을 시청하면 자동 응모!
                                </div>
                            </li>
                            <li class="event_con_item item2">
                                <h4>이벤트 기간: </h4>
                                <div class="event_item_con">
                                    2022.8.31(수) ~ 2022.9.4(일)
                                </div>
                            </li>
                            <li class="event_con_item item3">
                                <h4>당첨자 발표: </h4>
                                <div class="event_item_con">
                                   2022.10.5(수)
                                </div>
                            </li>
                            <li class="event_con_item item4">
                                <h4>경품:</h4>
                                <div class="event_item_con">
                                    <div class="inner_list">
                                        <div class="inner_item">
                                            <div class="img"><img src="/v3/resource_0829/images/main/icecream.png" alt=""></div>
                                            <div class="title">베스킨라빈스 싱클킹 300명 </div>
                                        </div>

                                    </div>
                                </div>
                            </li>
                        </ul>
                        <p class="warning">사정에 따라 경품은 변경될 수 있습니다.</p>
                    </div>
                    <button type="button" class="close"><span>닫기</span></button>
                </li>
                <li class="event_item">
                    <button type="button" class="acc_btn">
                        <span class="num"><span class="num_inner">2</span></span>
                        <span class="title_wrap">
                            <em class="title">매일! 매 세션! 시청만 해도 언리얼 굿즈가?</em>
                            <span class="con">세션을 열심히 시청하기만 하면 매일 매일 각 세션이 종료될 때마다 즉시 추첨하여 다양한 경품을 드립니다.</span>
                        </span>
                    </button>
                    <div class="event_a">
                        <ul class="event_con_list">
                            <li class="event_con_item item1">
                                <h4>참여방법 : </h4>
                                <div class="event_item_con">
                                1. 등록한 날짜에 언리얼 서밋 온라인 2022 체크인하기<br>
                                2. 원하는 트랙의 세션을 시청하기만 하면 자동 응모!
                                </div>
                            </li>
                            <li class="event_con_item item2">
                                <h4>이벤트 기간</h4>
                                <div class="event_item_con">
                                2022.9.27(화) ~ 2022.9.30(금)
                                </div>
                            </li>
                            <li class="event_con_item item3">
                                <h4>당첨자 발표: </h4>
                                <div class="event_item_con">
                                매 세션 종료 후 즉시 15명씩 추첨 및 발표
                                </div>
                            </li>
                            <li class="event_con_item item4">
                                <h4>경품</h4>
                                <div class="event_item_con type2">
추후 발표 예정입니다.
									<div class="inner_item">
										<div class="img"><img src="/v3/resource_0829/images/main/bl_img.jpg" alt=""></div>
										<div class="title">언리얼 파우치 20명</div>
									</div>
									<div class="inner_item">
										<div class="img"><img src="/v3/resource_0829/images/main/bl_img.jpg" alt=""></div>
										<div class="title">언리얼 파우치 20명</div>
									</div>
									<div class="inner_item">
										<div class="img"><img src="/v3/resource_0829/images/main/bl_img.jpg" alt=""></div>
										<div class="title">언리얼 파우치 20명</div>
									</div>
									<div class="inner_item">
										<div class="img"><img src="/v3/resource_0829/images/main/bl_img.jpg" alt=""></div>
										<div class="title">언리얼 파우치 20명</div>
									</div>
									<div class="inner_item">
										<div class="img"><img src="/v3/resource_0829/images/main/bl_img.jpg" alt=""></div>
										<div class="title">언리얼 파우치 20명</div>
									</div>
									<div class="inner_item">
										<div class="img"><img src="/v3/resource_0829/images/main/bl_img.jpg" alt=""></div>
										<div class="title">언리얼 파우치 20명</div>
									</div>

                                </div>
                            </li>
                        </ul>
                       <p class="warning">사정에 따라 경품은 변경될 수 있습니다.</p>
                    </div>
                    <button type="button" class="close"><span>닫기</span></button>
                </li>
               <li class="event_item">
                   <button type="button" class="acc_btn">
                       <span class="num"><span class="num_inner">3</span></span>
                       <span class="title_wrap">
                           <em class="title">매일 매일! 모든 세션 종료 후 역대급 경품이 와르르~</em>
                           <span class="con">세션을 끝까지 시청하기만 하면 매일 매일 모든 세션이 종료된 후 즉시 추첨을 통해 푸짐한 경품을 드립니다.</span>
                       </span>
                   </button>
                   <div class="event_a">
                       <ul class="event_con_list">
                           <li class="event_con_item item1">
                               <h4>참여방법 : </h4>
                               <div class="event_item_con">
                               1. 등록한 날짜에 언리얼 서밋 온라인 2022 체크인하기<br />
							   2. 세션을 끝까지 시청하기만 하면 자동 응모!
                               </div>
                           </li>
                           <li class="event_con_item item2">
                               <h4>이벤트 기간</h4>
                               <div class="event_item_con">
                               2022.9.27(화) ~ 2022.9.30(금)
                               </div>
                           </li>
                           <li class="event_con_item item3">
                               <h4>당첨자 발표: </h4>
                               <div class="event_item_con">
                               매일 모든 세션 종료 후 즉시 추첨 및 발표
                               </div>
                           </li>
                           <li class="event_con_item item4">
                               <h4>경품</h4>
                               <div class="event_item_con">
               추후 공지 예정
                               </div>
                           </li>
                       </ul>
                       <p class="warning">사정에 따라 경품은 변경될 수 있습니다.</p>
                   </div>
                   <button type="button" class="close"><span>닫기</span></button>
               </li>
               <li class="event_item">
                   <button type="button" class="acc_btn">
                       <span class="num"><span class="num_inner">4</span></span>
                       <span class="title_wrap">
                           <em class="title">설문을 통해 여러분의 소중한 의견을 공유해 주세요!</em>
                           <span class="con">매일 모든 세션 종료 후에 진행되는 설문조사에 성실히 답변해 주시면 추첨을 통해 경품을 드립니다</span>
                       </span>
                   </button>
                   <div class="event_a">
                       <ul class="event_con_list">
                           <li class="event_con_item item1">
                               <h4>참여방법 : </h4>
                               <div class="event_item_con">
                               1. 등록한 날짜에 언리얼 서밋 온라인 2022 체크인하기<br />
							   2. 매일 마지막 세션 종료 후 진행되는 설문에 성실히 응답하기
                               </div>
                           </li>
                           <li class="event_con_item item2">
                               <h4>이벤트 기간</h4>
                               <div class="event_item_con">
                               2022.9.27(화) ~ 2022.9.30(금)
                               </div>
                           </li>
                           <li class="event_con_item item3">
                               <h4>당첨자 발표: </h4>
                               <div class="event_item_con">
                              2022.10.11(화)
                               </div>
                           </li>
                           <li class="event_con_item item4">
                               <h4>경품</h4>
                               <div class="event_item_con">
									<div class="inner_item">
										<div class="img"><img src="https://unrealsummit16.cafe24.com/v3/resource_0830/bl_img2.png" alt=""></div>
										<div class="title">배달의민족 1만원권 총 80명</div>
									</div>


                               </div>
                           </li>
                       </ul>
                       <p class="warning">사정에 따라 경품은 변경될 수 있습니다.</p>
                   </div>
                   <button type="button" class="close"><span>닫기</span></button>
               </li>-->
            </ul>
        </div>
    </section>
    <section class="faq" data-page-index="5">
        <div class="wrap">
            <h2>FAQ</h2>
            <div class="acc_list">
                <div class="acc_item">
                    <button type="button" class="acc_btn">
                        <span class="title">무료 등록을 반드시 해야 하나요?</span>
                    </button>
                    <div class="acc_con">
                        <p>네, <a href="https://www.epiclounge.co.kr/v2/application_terms.html" target="_blank" style="color:#FFC700">무료 등록</a>을 하셔야 시청하실 수 있습니다.</p>
                    </div>
                    <button type="button" class="close"></button>
                </div>
                <div class="acc_item">
                    <button type="button" class="acc_btn">
                        <span class="title">등록 정보는 어떻게 수정하나요?</span>
                    </button>
                    <div class="acc_con">
                        <p><a href="https://www.epiclounge.co.kr/v2/application_confirm.html" target="_blank" style="color:#FFC700"> 등록 확인 </a>을 통해 등록 정보를 수정하실 수 있습니다.</p>
                    </div>
                    <button type="button" class="close"></button>
                </div>
                <div class="acc_item">
                    <button type="button" class="acc_btn">
                        <span class="title">1인 1회만 등록이 가능한가요?</span>
                    </button>
                    <div class="acc_con">
                        <p>동일한 휴대전화번호/이메일 주소로 1회만 등록이 가능하며, 추가 등록은 불가능합니다.</p>
                    </div>
                    <button type="button" class="close"></button>
                </div>
                <div class="acc_item">
                    <button type="button" class="acc_btn">
                        <span class="title">언리얼 서밋 온라인 2022는 어떻게 시청하나요?</span>
                    </button>
                    <div class="acc_con">
                        <p>1. 무료 등록을 하신 경우 등록된 이메일 주소로 첫 세션시작 30분전 시청 링크를 발송해 드립니다.<br/>
                            2. 무료 등록을 하셨으나 시청 링크를 이메일로 받지 못하셨다면, 행사 당일 본 페이지에 접속하여 등록 확인을 하시면 시청하실 수 있습니다.</p>
                    </div>
                    <button type="button" class="close"></button>
                </div>
                <div class="acc_item">
                    <button type="button" class="acc_btn">
                        <span class="title">행사 당일 언제부터 입장/시청할 수 있나요?</span>
                    </button>
                    <div class="acc_con">
                        <p>시작 30분 전부터 참여하실 수 있습니다.</p>
                    </div>
                    <button type="button" class="close"></button>
                </div>
                <div class="acc_item">
                    <button type="button" class="acc_btn">
                        <span class="title">모바일/태블릿으로 시청이 가능한가요?</span>
                    </button>
                    <div class="acc_con">
                        <p>모바일과 태블릿으로 시청하실 수 있습니다. 다만, 방송 시청 외에 실시간 채팅 및 Q&A에 참여하고자 하시는 분들이라면 PC 시청을 권장드립니다.</p>
                    </div>
                    <button type="button" class="close"></button>
                </div>
                <div class="acc_item">
                    <button type="button" class="acc_btn">
                        <span class="title">최적의 시청 환경은 무엇인가요?</span>
                    </button>
                    <div class="acc_con">
                        <p>크롬 버전 84 이상의 브라우저 환경에서 최적의 시청이 가능합니다.</p>
                    </div>
                    <button type="button" class="close"></button>
                </div>
                <div class="acc_item">
                    <button type="button" class="acc_btn">
                        <span class="title">발표자료를 다시 볼 수 있나요?</span>
                    </button>
                    <div class="acc_con">
                        <p>행사 종료 후 발표자의 동의 하에 에픽 라운지에서 세션을 다시 보실 수 있습니다.</p>
                    </div>
                    <button type="button" class="close"></button>
                </div>
                <div class="acc_item">
                    <button type="button" class="acc_btn">
                        <span class="title">행사에 관한 문의를 하고 싶습니다.</span>
                    </button>
                    <div class="acc_con">
                        <p>언리얼 서밋 온라인 2022 등록과 관련된 궁금하신 사항은 사무국으로 문의해 주세요.<br/>
                            <a href="mailto:unrealsummit.korea@gmail.com" target="_blank" style="color:#FFC700">메일</a> 및 <a href="tel:023263701" target="_blank" style="color:#FFC700">전화(02-326-3701)</a>로 문의가 가능하며, 오전 10시 - 오후 5시 (점심시간 12시 - 1시)까지 운영됩니다.</p>
                    </div>
                    <button type="button" class="close"></button>
                </div>
            </div>
        </div>
    </section>
    <!--
        <section class="goods" data-page-index="6">
            <div class="wrap">
                <h2>GOODS</h2>
                <div class="goods_nav">
                    <button type="button" class="prev"><svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="18px" height="12px">
                        <path fill-rule="evenodd"  fill="rgb(66, 69, 81)"
                              d="M6.206,11.206 C5.816,11.597 5.183,11.597 4.792,11.206 L0.293,6.706 C0.97,6.315 0.97,5.683 0.293,5.293 L4.792,0.791 C5.183,0.401 5.816,0.401 6.206,0.791 C6.597,1.182 6.597,1.815 6.206,2.206 L3.413,4.999 L17.0,4.999 C17.552,4.999 17.999,5.446 17.999,5.999 C17.999,6.552 17.552,6.999 17.0,6.999 L3.413,6.999 L6.206,9.792 C6.597,10.182 6.597,10.816 6.206,11.206 Z"/>
                    </svg></button>
                    <button type="button" class="next"><svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="18px" height="12px">
                        <path fill-rule="evenodd"  fill="rgb(66, 69, 81)"
                              d="M6.206,11.206 C5.816,11.597 5.183,11.597 4.792,11.206 L0.293,6.706 C0.97,6.315 0.97,5.683 0.293,5.293 L4.792,0.791 C5.183,0.401 5.816,0.401 6.206,0.791 C6.597,1.182 6.597,1.815 6.206,2.206 L3.413,4.999 L17.0,4.999 C17.552,4.999 17.999,5.446 17.999,5.999 C17.999,6.552 17.552,6.999 17.0,6.999 L3.413,6.999 L6.206,9.792 C6.597,10.182 6.597,10.816 6.206,11.206 Z"/>
                    </svg></button>
                </div>
                <div class="goods_slide">
                    <div class="goods_item">
                        <a href="" class="goods_anchor">
                            <div class="img" style="background-image:url(/v3/resource_0829/images/main/slide1.jpg)"></div>
                            <div class="goods_con">
                                <h3>언리얼 엔진 5 블루투스 스피커</h3>
                                <div class="price">₩5,000</div>
                            </div>
                        </a>
                    </div>
                    <div class="goods_item">
                        <a href="" class="goods_anchor">
                            <div class="img" style="background-image:url(/v3/resource_0829/images/main/slide2.jpg)"></div>
                            <div class="goods_con">
                                <h3>언리얼 엔진 5 블루투스 스피커</h3>
                                <div class="price">₩24,000</div>
                            </div>
                        </a>
                    </div>
                    <div class="goods_item">
                        <a href="" class="goods_anchor">
                            <div class="img" style="background-image:url(/v3/resource_0829/images/main/slide3.jpg)"></div>
                            <div class="goods_con">
                                <h3>언리얼 엔진 5 블루투스 스피커</h3>
                                <div class="price">₩34,000</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    -->

    <nav class="nav">
        <div class="direction">
            <button type="button" class="up"></button>
            <button type="button" class="down"></button>
        </div>
        <div class="sns">
            <div class="title">SNS</div>
            <div class="btn_wrap">
               <!-- <button type="button"class="sns_btn kakao"> <a href="javascript:shareKakao()" id="kakao-link-btn"  ><span>카카오톡</span></a></button>-->
                 <button type="button"  class="sns_btn cafe" onclick="shareNaver()" value="네이버공유하기" ><span>네이버카페</a></span></button>
                 <button type="button" class="sns_btn facebook" onclick="shareFacebook()""><span>페이스북</span></button>
                 <a href="javascript:alert('링크가 복사 되었습니다.');" class="sns_btn link" ><span class="copy-btn">링크</span></a>
                <div class="sns_share">
                  <button class="sns_share_btn" onclick="">SNS공유</button>
                  <div>
                   
                      
                      
                      
                
                  </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="pop pop_2" data-panel-pop="pop_2">
        <button type="button" class="close">닫기</button>
        <div class="pop_inner">
            <div class="pop_scroll">
                <div class="pop_title">
                    <div class="pop_date">
                        <span class="date">2022.09.27 13:20-13:50</span>
                        <span class="category">공통</span>
                    </div>
                    <h2>작은 스튜디오에서 규모있는 게임을 만들기 위한 방법들: 모션캡처, 자바스크립트, WebRTC, 그리고 딥러닝</h2>
                    <div class="calendar_btn_wrap">
                        <button class="calendar_btn" type="button">캘린더 저장 버튼</button>
                        <span class="calendar_title">캘린더 저장</span>
                    </div>
                </div>
                <div class="pop_con_wrap">
                    <div class="title_img">
                        <div class="img" style="background-image:url(/v3/resource_0829/images/main/123.jpg)">이미지</div>
                    </div>
                    <div class="pop_con">
                        <div class="left">
                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)">신광섭 이미지</div>
                                <div class="owner">
                                    <div class="owner_name">신광섭 에픽게임즈 코리아</div>
                                    <div class="owner_company">2008년 스튜디오게일 창립 이래 다양한 애니메이션의 기획, 감독, 총괄 제작 업무를 담당해 왔으며 언리얼 엔진을 활용하여 제작한 애니메이션 ‘극장판 윌벤져스: 수상한 캠핑 대소동’의 연출을 맡았고 2023년 방영 예정인 네이버 웹툰 원작의 OTT 시리즈 애니메이션 ‘나노리스트’ 연출을 담당하고 있습니다.</div>
                                </div>
                            </div>
                            <div class="text_box">
                                <div class="title">소개</div>
                                <div class="text">이 세션에서는 언리얼 엔진을 활용한 애니메이션 '극장판 윌벤져스: 수상한 캠핑 대소동'의 제작 사례를 소개합니다. 마야와 언리얼 엔진을 활용한 전반적인 제작의 프로젝트 구성 및 레이 트레이싱을 활용한 제작시 직면하는 이슈들과 해결점들을 다루어 봅니다. 그리고 애니메이션 제작에 좀 더 효율적으로 언리얼 엔진을 활용하기 위한 R&D 사항들도 함께 소개합니다.</div>

                                <div class="title">대상</div>
                                <div class="text2">언리얼 엔진을 활용한 3D 애니메이션 제작 실무자 및 개발 준비 중인 제작자</div>

                            </div>
                        </div>
                        <div class="right">
                            <ul class="right_list">
                                <li class="right_item">
                                    <div class="title">산업</div>
                                    <div class="con">
                                        <span>공통</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">분야</div>
                                    <div class="con">
                                        <span>메타버스</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">플랫폼</div>
                                    <div class="con">
                                        <span>크로스 플랫폼</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">난이도</div>
                                    <div class="con">
                                        <span>초급</span>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <button class="inner_close">
                <span>CLOSE</span>
            </button>
        </div>
    </div>



    <div class="pop pop_3" data-panel-pop="pop_3">
        <button type="button" class="close">닫기</button>
        <div class="pop_inner">
            <div class="pop_scroll">
                <div class="pop_title">
                    <div class="pop_date">
                        <span class="date">2022.09.27 14:00-14:30</span>
                        <span class="category">공통</span>
                    </div>
                    <h2>메타휴먼: 메시 투 메타휴먼과 IK 리타기팅</h2>
                    <div class="calendar_btn_wrap">
                        <button class="calendar_btn" type="button">캘린더 저장 버튼</button>
                        <span class="calendar_title">캘린더 저장</span>
                    </div>
                </div>
                <div class="pop_con_wrap">
                    <div class="title_img">
                        <div class="img" style="background-image:url(/v3/resource_0829/images/main/123.jpg)">이미지</div>
                    </div>
                    <div class="pop_con">
                        <div class="left">
                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">권오찬 에픽게임즈 코리아</div>
                                    <div class="owner_company">에픽게임즈 코리아에서 교육 에반젤리스트로 재직 중으로 이전에는 다양한 게임 개발사에서 AD/TA로 게임을 개발했고 여러 교육기관에서 언리얼 엔진 강의 및 인디 개발팀 멘토링을 진행해 왔습니다.</div>
                                </div>
                            </div>
                            <div class="text_box">
                                <div class="title">소개</div>
                                <div class="text">모든 산업의 콘텐츠 제작 방식이 언리얼 엔진의 리얼타임 3D 렌더링을 통해 통합되고 있습니다. 현재 콘텐츠 제작 방식의 변화와 혁신 그리고 향후 제작 방식에는 어떤 변화가 생길지 살펴보며, 이를 위한 에픽의 준비와 에코시스템에 대해서 알아봅니다.</div>

                                <div class="title">대상</div>
                                <div class="text2">메타휴먼을 이용하여 콘텐츠를 제작하는 크리에이터</div>

                            </div>
                        </div>
                        <div class="right">
                            <ul class="right_list">
                                <li class="right_item">
                                    <div class="title">산업</div>
                                    <div class="con">
                                        <span>공통</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">분야</div>
                                    <div class="con">
                                        <span>비주얼아트</span>
                                        <span>UE5</span>
                                        <span>디지털 휴먼</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">플랫폼</div>
                                    <div class="con">
                                        <span>PC</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">난이도</div>
                                    <div class="con">
                                        <span>초급</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="text_box">
                                <div class="title">목차</div>
                                <div class="text">
                                    1. 메시 투 메타휴먼으로 커스텀 페이스 만들기 <br />
                                    2. IK 리타기팅으로 애니메이션 리타기팅하기
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="inner_close">
                <span>CLOSE</span>
            </button>
        </div>
    </div>





    <div class="pop pop_4" data-panel-pop="pop_4">
        <button type="button" class="close">닫기</button>
        <div class="pop_inner">
            <div class="pop_scroll">
                <div class="pop_title">
                    <div class="pop_date">
                        <span class="date">2022.09.27 14:40-15:30</span>
                        <span class="category">공통</span>
                    </div>
                    <h2>카오스 물리 엔진 200% 활용하기</h2>
                    <div class="calendar_btn_wrap">
                        <button class="calendar_btn" type="button">캘린더 저장 버튼</button>
                        <span class="calendar_title">캘린더 저장</span>
                    </div>
                </div>
                <div class="pop_con_wrap">
                    <div class="title_img">
                        <div class="img" style="background-image:url(/v3/resource_0829/images/main/123.jpg)">이미지</div>
                    </div>
                    <div class="pop_con">
                        <div class="left">
                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">강정훈 에픽게임즈 코리아</div>
                                    <div class="owner_company">에픽게임즈 코리아 에서 디벨로퍼 릴레이션 으로 근무하면서 기술 지원을 담당하고 있습니다. 이전에는 삼성전자, 하복코리아, 9M Interactive 등의 회사에서 소프트웨어 엔지니어로 근무했습니다.</div>
                                </div>
                            </div>
                            <div class="text_box">
                                <div class="title">소개</div>
                                <div class="text">언리얼 엔진 5에서 기본 물리 엔진으로 채택된 카오스를 활용한 다양한 기법들에 대해 소개드립니다.</div>

                                <div class="title">대상</div>
                                <div class="text2">카오스 물리 엔진을 활용하고 싶은 게임 프로그래머/아티스트</div>

                            </div>
                        </div>
                        <div class="right">
                            <ul class="right_list">
                                <li class="right_item">
                                    <div class="title">산업</div>
                                    <div class="con">
                                        <span>공통</span>
                                        <span>게임</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">분야</div>
                                    <div class="con">
                                        <span>프로그래밍</span>
                                        <span>비주얼아트</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">플랫폼</div>
                                    <div class="con">
                                        <span>크로스 플랫폼</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">난이도</div>
                                    <div class="con">
                                        <span>초급</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="text_box">
                                <div class="title">목차</div>
                                <div class="text">
                                    1. 카오스 물리 엔진 소개<br />
                                    2. 카오스에서 달라진 점 <br />
                                    3. 물리 속성 이해하기 <br />
                                    4. Ragdoll 세팅 <br />
                                    5.  물리 기반 Secondary Motion <br />
                                    6. 카오스 Cloth 소개 <br />
                                    7. 카오스 Destruction 소개
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="inner_close">
                <span>CLOSE</span>
            </button>
        </div>
    </div>








    <div class="pop pop_5" data-panel-pop="pop_5">
        <button type="button" class="close">닫기</button>
        <div class="pop_inner">
            <div class="pop_scroll">
                <div class="pop_title">
                    <div class="pop_date">
                        <span class="date">2022.09.27 15:40-16:10</span>
                        <span class="category">공통</span>
                    </div>
                    <h2>모델링 모드와 프랙처 모드로 부서진 배경 프랍 제작하기</h2>
                    <div class="calendar_btn_wrap">
                        <button class="calendar_btn" type="button">캘린더 저장 버튼</button>
                        <span class="calendar_title">캘린더 저장</span>
                    </div>
                </div>
                <div class="pop_con_wrap">
                    <div class="title_img">
                        <div class="img" style="background-image:url(/v3/resource_0829/images/main/123.jpg)">이미지</div>
                    </div>
                    <div class="pop_con">
                        <div class="left">
                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">권오찬 에픽게임즈 코리아</div>
                                    <div class="owner_company"></div>
                                </div>
                            </div>
                            <div class="text_box">
                                <div class="title">소개</div>
                                <div class="text">이 세션에서는 언리얼 엔진의 모델링 모드와 프랙처 모드를 이용하여 다른 DCC 툴 없이 언리얼 엔진만으로 다양한 부서진 배경 프랍들을 제작하는 방법을 소개합니다.</div>

                                <div class="title">대상</div>
                                <div class="text2">좀 더 효과적으로 환경을 제작하는데 관심 있는 레벨 디자이너</div>

                            </div>
                        </div>
                        <div class="right">
                            <ul class="right_list">
                                <li class="right_item">
                                    <div class="title">산업</div>
                                    <div class="con">
                                        <span>공통</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">분야</div>
                                    <div class="con">
                                        <span>비주얼아트</span>
                                        <span>UE5</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">플랫폼</div>
                                    <div class="con">
                                        <span>PC</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">난이도</div>
                                    <div class="con">
                                        <span>초급</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="text_box">
                                <div class="title">목차</div>
                                <div class="text">
                                    1. 부서진 콘크리트 기둥 만들기<br />
                                    2. 부서진 벽돌 벽 만들기<br />
                                    3. Packed Level Instances
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="inner_close">
                <span>CLOSE</span>
            </button>
        </div>
    </div>




    <div class="pop pop_6" data-panel-pop="pop_6">
        <button type="button" class="close">닫기</button>
        <div class="pop_inner">
            <div class="pop_scroll">
                <div class="pop_title">
                    <div class="pop_date">
                        <span class="date">2022.09.27 16:20-17:10</span>
                        <span class="category">공통</span>
                    </div>
                    <h2>완전히 유연한 게임플레이 제작: UE5 모듈형 게임플레이 </h2>
                    <div class="calendar_btn_wrap">
                        <button class="calendar_btn" type="button">캘린더 저장 버튼</button>
                        <span class="calendar_title">캘린더 저장</span>
                    </div>
                </div>
                <div class="pop_con_wrap">
                    <div class="title_img">
                        <div class="img" style="background-image:url(/v3/resource_0829/images/main/123.jpg)">이미지</div>
                    </div>
                    <div class="pop_con">
                        <div class="left">
                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">박창현 에픽게임즈 코리아</div>
                                    <div class="owner_company">에픽게임즈 코리아에서 디벨로퍼 릴레이션스 리드로 기술 지원을 담당하고 있습니다. 이전에는 넥슨 레드, 넥슨 GT, 데브시스터즈에서 게임 프로젝트 개발에 참여했습니다.</div>
                                </div>
                            </div>
                            <div class="text_box">
                                <div class="title">소개</div>
                                <div class="text">산업 분야와 관계없이 인터랙티브한 사용자 경험을 제공하기 위해서는 언리얼 엔진을 활용하여 게임플레이를 제작해야 합니다. 게임모드, 플레이어 컨트롤러와 폰, 월드와 액터 등 언리얼 엔진이 제공하는 게임플레이 프레임워크(Gameplay Framework)는 이미 사용자들이 손쉽게 사용자 경험을 제작할 수 있도록 돕고 있습니다.
                                    이 세션에서는 라이라' 샘플 게임을 통해 언리얼 엔진 5에서 새롭게 추가된 게임 피처 시스템(Game Feature System)의 동작 방식을 살펴보고, 모듈형 게임플레이 제작이 사용자에게 어떤 의미를 갖게 되는지 함께 확인하려고 합니다. </div>

                                <div class="title">대상</div>
                                <div class="text2">인터랙티브 콘텐츠 제작자</div>

                            </div>
                        </div>
                        <div class="right">
                            <ul class="right_list">
                                <li class="right_item">
                                    <div class="title">산업</div>
                                    <div class="con">
                                        <span>공통</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">분야</div>
                                    <div class="con">
                                        <span>프로그래밍</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">플랫폼</div>
                                    <div class="con">
                                        <span>크로스 플랫폼</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">난이도</div>
                                    <div class="con">
                                        <span>초급</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="text_box">
                                <div class="title">목차</div>
                                <div class="text">
                                    1. 게임 피처 시스템 <br />
                                    2. 라이라의 모듈형 게임플레이<br />
                                    3. 완전히 유연한 게임플레이 제작
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="inner_close">
                <span>CLOSE</span>
            </button>
        </div>
    </div>






    <div class="pop pop_7" data-panel-pop="pop_7">
        <button type="button" class="close">닫기</button>
        <div class="pop_inner">
            <div class="pop_scroll">
                <div class="pop_title">
                    <div class="pop_date">
                        <span class="date">2022.09.28 13:00-13:50</span>
                        <span class="category">게임</span>
                    </div>
                    <h2>군중 애니메이션: 도시샘플 플러그인으로 쉽게 따라하기</h2>
                    <div class="calendar_btn_wrap">
                        <button class="calendar_btn" type="button">캘린더 저장 버튼</button>
                        <span class="calendar_title">캘린더 저장</span>
                    </div>
                </div>
                <div class="pop_con_wrap">
                    <div class="title_img">
                        <div class="img" style="background-image:url(/v3/resource_0829/images/main/123.jpg)">이미지</div>
                    </div>
                    <div class="pop_con">
                        <div class="left">
                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">박성제 에픽게임즈 코리아</div>
                                    <div class="owner_company">에픽게임즈 코리아에서 디벨로퍼 릴레이션/테크니컬 아티스트로 재직 중으로 이전에는 엔씨소프트, 위메이드에서 게임 개발에 참여했습니다.</div>
                                </div>
                            </div>
                            <div class="text_box">
                                <div class="title">소개</div>
                                <div class="text">언리얼 엔진 5 출시와 더불어 제공된 '도시 샘플'에서 공개한 AnimToTexture라는 플러그인을 사용하여 수천개의 캐릭터의 움직임을 인스턴스 스태틱 메시로 쉽게 변환하는 방법을 설명합니다. 기존 VAT방식에서 더 진보하여 Bone과 Weight 값을 이용하여 Triangle 수의 제한을 없애고, 더 작은 용량의 텍스처로 애니메이션을 표현할 수 있습니다. </div>

                                <div class="title">대상</div>
                                <div class="text2">최적화에 관심 있는 프로그래머/아티스트</div>

                            </div>
                        </div>
                        <div class="right">
                            <ul class="right_list">
                                <li class="right_item">
                                    <div class="title">산업</div>
                                    <div class="con">
                                        <span>게임</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">분야</div>
                                    <div class="con">
                                        <span>비주얼아트</span>
                                        <span>UE5</span>
                                        <span>버추얼 프로덕션</span>
                                        <span>디지털 휴먼</span>
                                        <span>디지털 트윈</span>
                                        <span>메타버스</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">플랫폼</div>
                                    <div class="con">
                                        <span>크로스 플랫폼</span>
                                        <span>PC</span>
                                        <span>콘솔</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">난이도</div>
                                    <div class="con">
                                        <span>중급</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="text_box">
                                <div class="title">목차</div>
                                <div class="text">
                                    1. AnimToTexture 플러그인 <br />
                                    2. 스켈레탈 메시를 스태틱메시로 변환하기<br />
                                    3. AnimToTexture 데이터 에셋 생성<br />
                                    4. Position, Rotation, Weight 텍스처 생성<br />
                                    5. 인스턴스 스태틱 메시 생성하는 방법<br />
                                    6. 커스텀 데이터로 애니메이션 랜덤 요소 추가하기
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="inner_close">
                <span>CLOSE</span>
            </button>
        </div>
    </div>








    <div class="pop pop_8" data-panel-pop="pop_8">
        <button type="button" class="close">닫기</button>
        <div class="pop_inner">
            <div class="pop_scroll">
                <div class="pop_title">
                    <div class="pop_date">
                        <span class="date">2022.09.28 14:00-14:50</span>
                        <span class="category">게임</span>
                    </div>
                    <h2>[카트라이더: 드리프트] 멀티 플랫폼을 위한 최적화 드라이브</h2>
                    <div class="calendar_btn_wrap">
                        <button class="calendar_btn" type="button">캘린더 저장 버튼</button>
                        <span class="calendar_title">캘린더 저장</span>
                    </div>
                </div>
                <div class="pop_con_wrap">
                    <div class="title_img">
                        <div class="img" style="background-image:url(/v3/resource_0829/images/main/123.jpg)">이미지</div>
                    </div>
                    <div class="pop_con">
                        <div class="left">
                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">강길전 니트로 스튜디오</div>
                                    <div class="owner_company">니트로 스튜디오에서 클라이언트 프로그래머로 재직 중으로 언리얼 엔진 4를 사용하여 '카트라이더: 드리프트' 개발에 초창기부터 참여했습니다.
                                        기본 아키텍처 설계, 멀티 플랫폼 지원, 주행 물리, 동기화 및 코어 플레이 등을 개발했습니다.</div>
                                </div>
                            </div>
                            <div class="text_box">
                                <div class="title">소개</div>
                                <div class="text">카트라이더: 드리프트'는 언리얼 엔진 4로 개발된 멀티 플랫폼/크로스 플레이(PC, XBOX, Playstation, Mobile) 캐주얼 레이싱 게임 프로젝트입니다.
                                    본 세션은 카트라이더: 드리프트 개발팀이 언리얼 엔진을 활용하여 콘솔부터 모바일 환경과 같은 다양한 환경에서 쾌적한 플레이를 구현하기 위해 어떠한 최적화 작업들을 진행했는지 게임 프레임워크와 관련된 실전 사례에 대해 다룹니다.</div>

                                <div class="title">대상</div>
                                <div class="text2">최적화에 관심 있는 프로그래머/아티스트</div>

                            </div>
                        </div>
                        <div class="right">
                            <ul class="right_list">
                                <li class="right_item">
                                    <div class="title">산업</div>
                                    <div class="con">
                                        <span>게임</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">분야</div>
                                    <div class="con">
                                        <span>프로그래밍</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">플랫폼</div>
                                    <div class="con">
                                        <span>크로스 플랫폼</span>
                                        <span>PC</span>
                                        <span>모바일</span>
                                        <span>콘솔</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">난이도</div>
                                    <div class="con">
                                        <span>중급</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="text_box">
                                <div class="title">목차</div>
                                <div class="text">
                                    1. 프로젝트 소개<br />
                                    2. 최적화에 대한 정의<br />
                                    3. 최적화 목표 -  프로젝트 특성에 맞는 맞춤형 전략<br />
                                    4. 프로파일링 작업 플로우<br />
                                    5. 카트라이더: 드리프트 최적화 실전 사례
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="inner_close">
                <span>CLOSE</span>
            </button>
        </div>
    </div>














    <div class="pop pop_9" data-panel-pop="pop_9">
        <button type="button" class="close">닫기</button>
        <div class="pop_inner">
            <div class="pop_scroll">
                <div class="pop_title">
                    <div class="pop_date">
                        <span class="date">2022.09.28 15:00-15:50</span>
                        <span class="category">게임</span>
                    </div>
                    <h2>인디 게임 [RP7]의 아트 디렉션: 픽셀게임이 풀3D 게임으로 변하기까지</h2>
                    <div class="calendar_btn_wrap">
                        <button class="calendar_btn" type="button">캘린더 저장 버튼</button>
                        <span class="calendar_title">캘린더 저장</span>
                    </div>
                </div>
                <div class="pop_con_wrap">
                    <div class="title_img">
                        <div class="img" style="background-image:url(/v3/resource_0829/images/main/123.jpg)">이미지</div>
                    </div>
                    <div class="pop_con">
                        <div class="left">
                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">이규영 터틀 크림</div>
                                    <div class="owner_company">터틀 크림의 아트 디렉터입니다. 낮에는 라이엇 게임즈 R&D 부서 시니어 배경 아티스트로서, 다양한 언리얼 프로토타입 게임 제작에 참여합니다. 퇴근 후에는 인디 게임 RP7 제작하고 있습니다.</div>
                                </div>
                            </div>
                            <div class="text_box">
                                <div class="title">소개</div>
                                <div class="text">인디 게임 ‘RP7’의 아트 디렉션이 개발 진행 상황에 맞춰 어떻게 바뀌어 갔는지에 대한 세션입니다. 픽셀 게임으로 시작했던 이 게임은, 2.5D로 바뀌었다가 현재는 풀3D 스타일로 바뀌었습니다. 어떻게 아트 디렉션이 이렇게 성립되었는지, 그로 인해서 작업 파이프라인이 어떻게 바뀌었는지 다루겠습니다.</div>

                                <div class="title">대상</div>
                                <div class="text2">인디 게임 개발을 꿈꾸는 아티스트</div>

                            </div>
                        </div>
                        <div class="right">
                            <ul class="right_list">
                                <li class="right_item">
                                    <div class="title">산업</div>
                                    <div class="con">
                                        <span>게임</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">분야</div>
                                    <div class="con">
                                        <span>비주얼아트</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">플랫폼</div>
                                    <div class="con">
                                        <span>크로스 플랫폼</span>
                                        <span>PC</span>
                                        <span>콘솔</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">난이도</div>
                                    <div class="con">
                                        <span>중급</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="text_box">
                                <div class="title">목차</div>
                                <div class="text">
                                    1. 픽셀 아트<br />
                                    2. 2.5D<br />
                                    3. 풀3D<br />
                                    4. 풀3D 보완 팁
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="inner_close">
                <span>CLOSE</span>
            </button>
        </div>
    </div>













    <div class="pop pop_10" data-panel-pop="pop_10">
        <button type="button" class="close">닫기</button>
        <div class="pop_inner">
            <div class="pop_scroll">
                <div class="pop_title">
                    <div class="pop_date">
                        <span class="date">2022.09.28 16:00-16:50</span>
                        <span class="category">게임</span>
                    </div>
                    <h2>언리얼 엔진을 활용한 [퍼스트 디센던트] 제작기</h2>
                    <div class="calendar_btn_wrap">
                        <button class="calendar_btn" type="button">캘린더 저장 버튼</button>
                        <span class="calendar_title">캘린더 저장</span>
                    </div>
                </div>
                <div class="pop_con_wrap">
                    <div class="title_img">
                        <div class="img" style="background-image:url(/v3/resource_0829/images/main/123.jpg)">이미지</div>
                    </div>
                    <div class="pop_con">
                        <div class="left">
                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">김준환 넥슨게임즈</div>
                                    <div class="owner_company">넥슨게임즈에서 '프로젝트 매그넘' 스튜디오의 리드 엔진 프로그래머로 재직 중이며 상용엔진 사용은 이번 프로젝트가 처음이지만, 이전에는 펄어비스 BlackDesertEngine의  PS4, XB1 포팅 및 최적화에 참여했고 블루사이드의 BluesideEngine 개발에 참여했습니다.</div>
                                </div>
                            </div>
                            <div class="text_box">
                                <div class="title">소개</div>
                                <div class="text">RPG와 3인칭 슈터 전투가 결합된 새로운 IP인 '퍼스트 디센던트' 제작을 위해 언리얼 엔진 4.23를 시작으로 언리얼 엔진 5에 이르기까지의 개발 노력과 멀티 플랫폼을 지원하는 동시에 높은 비주얼 퀄리티와 성능을 유지하기 위한 작업들을 이야기해 보려고 합니다.</div>

                                <div class="title">대상</div>
                                <div class="text2">UE 버전 업 및 최적화를 고민하는 게임 개발 직군</div>

                            </div>
                        </div>
                        <div class="right">
                            <ul class="right_list">
                                <li class="right_item">
                                    <div class="title">산업</div>
                                    <div class="con">
                                        <span>게임</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">분야</div>
                                    <div class="con">
                                        <span>프로그래밍</span>
                                        <span>UE5</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">플랫폼</div>
                                    <div class="con">
                                        <span>크로스 플랫폼</span>
                                        <span>PC</span>
                                        <span>콘솔</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">난이도</div>
                                    <div class="con">
                                        <span>중급</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="text_box">
                                <div class="title">목차</div>
                                <div class="text">
                                    1. 개발 정책 <br />
                                    2. 언리얼 엔진 버전 업 및 프로젝트 이벤트 대응 <br />
                                    3. 높은 비주얼 퀄리티 유지 및 멀티 플랫폼 대응
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="inner_close">
                <span>CLOSE</span>
            </button>
        </div>
    </div>















    <div class="pop pop_11" data-panel-pop="pop_11">
        <button type="button" class="close">닫기</button>
        <div class="pop_inner">
            <div class="pop_scroll">
                <div class="pop_title">
                    <div class="pop_date">
                        <span class="date">2022.09.28 17:00-17:50</span>
                        <span class="category">게임</span>
                    </div>
                    <h2>언리얼 엔진 5 모바일 렌더링 업데이트</h2>
                    <div class="calendar_btn_wrap">
                        <button class="calendar_btn" type="button">캘린더 저장 버튼</button>
                        <span class="calendar_title">캘린더 저장</span>
                    </div>
                </div>
                <div class="pop_con_wrap">
                    <div class="title_img">
                        <div class="img" style="background-image:url(/v3/resource_0829/images/main/123.jpg)">이미지</div>
                    </div>
                    <div class="pop_con">
                        <div class="left">
                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">Jack Porter</div>
                                    <div class="owner_company">Jack Porter는 1999년 '언리얼 토너먼트' 출시를 시작으로 22년 이상 언리얼 엔진 개발자로 일해 왔습니다. 언리얼 엔진 1부터 5까지 다양한 분야에서 기능 개발에 참여해 왔고, 현재는 iOS, 안드로이드 그리고 스위치를 위한 모바일 렌더러와 언리얼 엔진 모바일 팀의 리드를 담당하고 있습니다.</div>
                                </div>
                            </div>
                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">Dmitriy Dyomin</div>
                                    <div class="owner_company">Dmitriy Dyomin은 언리얼 엔진 모바일 팀의 시니어 엔진 프로그래머로 재직 중입니다. 언리얼 엔진 모바일 렌더러의 많은 기능을 개발 및 최적하고, 에픽의 내부 팀과 협업하여 모바일 플랫폼용 게임 출시를 담당하고 있습니다.</div>
                                </div>
                            </div>
                            <div class="text_box">
                                <div class="title">소개</div>
                                <div class="text">Jack과 Dmitriy는 언리얼 엔진 5.0 모바일 렌더링 개선 사항과 향후 언리얼 엔진 5.1에서 제공되는 기능에 대해서 공유합니다. 새로운 기능과 개선 사항뿐만 아니라, 다양한 모바일 게임 장르와 디바이스를 위한 기능 구현, 성능, 퀄리티 등의 세부 사항을 다루고, 향후 모바일 렌더링 계획과 하드웨어 성능에 대해서 공유합니다.</div>

                                <div class="title">대상</div>
                                <div class="text2">UE5로 모바일 게임 출시를 준비하는 프로그래머와 테크니컬 아티스트</div>

                            </div>
                        </div>
                        <div class="right">
                            <ul class="right_list">
                                <li class="right_item">
                                    <div class="title">산업</div>
                                    <div class="con">
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">분야</div>
                                    <div class="con">
                                        <span>프로그래밍</span>
                                        <span>UE5</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">플랫폼</div>
                                    <div class="con">
                                        <span>모바일</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">난이도</div>
                                    <div class="con">
                                        <span>중급</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="text_box">
                                <div class="title">목차</div>
                                <div class="text">
                                    1. UE 5.0과 5.1의 모바일 렌더링 새로운 기능 및 개선 사항<br />
                                    2. 모바일 디퍼드 렌더러의 이점과 사용 시기<br />
                                    3. UE5 모바일 렌더링 개선을 위한 로드맵<br />
                                    4. '나나이트' 및 '루멘'에 대한 현재 및 향후 모바일 하드웨어
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="inner_close">
                <span>CLOSE</span>
            </button>
        </div>
    </div>






    <div class="pop pop_12" data-panel-pop="pop_12">
        <button type="button" class="close">닫기</button>
        <div class="pop_inner">
            <div class="pop_scroll">
                <div class="pop_title">
                    <div class="pop_date">
                        <span class="date">2022.09.29 13:00-13:30</span>
                        <span class="category">영화, TV & 애니메이션</span>
                    </div>
                    <h2>콘텐츠 산업의 미래를 여는 리얼타임 3D 기술 언리얼 엔진</h2>
                    <div class="calendar_btn_wrap">
                        <button class="calendar_btn" type="button">캘린더 저장 버튼</button>
                        <span class="calendar_title">캘린더 저장</span>
                    </div>
                </div>
                <div class="pop_con_wrap">
                    <div class="title_img">
                        <div class="img" style="background-image:url(/v3/resource_0829/images/main/123.jpg)">이미지</div>
                    </div>
                    <div class="pop_con">
                        <div class="left">
                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">최용승 에픽게임즈 코리아</div>
                                    <div class="owner_company">에픽게임즈 코리아에서 미디어&엔터테인먼트 분야의 사업개발 담당자로서 언리얼 엔진의 비즈니스 전략을 구축하는 업무를 담당하고 있습니다. 에픽게임즈 코리아 합류 전에는 광고, VFX 그리고 극장사업개발등 다양한 경험을 축적하였습니다.</div>
                                </div>
                            </div>

                            <div class="text_box">
                                <div class="title">소개</div>
                                <div class="text">언리얼 엔진의 리얼타임 3D 기술은 콘텐츠 제작 방식에 붐을 일으키며 영화, TV, 애니메이션, 라이브 콘서트 등 다양한 콘텐츠를 통해 쉽게 찾아볼 수 있습니다. 이번 세션에서 3D 콘텐츠 시장에 혁신적인 변화를 가져온 사례들과 이를 통해 현재 가장 핫한 트렌드인 메타버스 에코시스템 구축에 어떠한 전략으로 다가갈 수 있는지에 대해 이야기할 예정입니다.</div>

                                <div class="title">대상</div>
                                <div class="text2">리얼타임 3D 콘텐츠를 준비하는 영상 제작 관계자 및 크리에이터</div>

                            </div>
                        </div>
                        <div class="right">
                            <ul class="right_list">
                                <li class="right_item">
                                    <div class="title">산업</div>
                                    <div class="con">
                                        <span>영화 & TV</span>
                                        <span>애니메이션</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">분야</div>
                                    <div class="con">
                                        <span>XR/VR/AR/MR</span>
                                        <span>UE5</span>
                                        <span>버추얼 프로덕션</span>
                                        <span>디지털 휴먼</span>
                                        <span>메타버스</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">플랫폼</div>
                                    <div class="con">
                                        <span>크로스 플랫폼</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">난이도</div>
                                    <div class="con">
                                        <span>중급</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="text_box">
                                <div class="title">목차</div>
                                <div class="text">1. 국내 리얼타임 3D 콘텐츠 시장의 새로운 창작의 도전<br />
                                    2. 애니메이션의 미래: 언리얼 엔진<br />
                                    3. 한 차원 더 나아가는 버추얼 프로덕션<br />
                                    4. 언리얼 엔진을 통한 메타버스 생태계 구축
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="inner_close">
                <span>CLOSE</span>
            </button>
        </div>
    </div>












    <div class="pop pop_13" data-panel-pop="pop_13">
        <button type="button" class="close">닫기</button>
        <div class="pop_inner">
            <div class="pop_scroll">
                <div class="pop_title">
                    <div class="pop_date">
                        <span class="date">2022.09.29 13:40-14:30</span>
                        <span class="category">영화, TV & 애니메이션</span>
                    </div>
                    <h2>언리얼 엔진 프리비즈를 통한 탄력적인 영상 연출 파이프라인</h2>
                    <div class="calendar_btn_wrap">
                        <button class="calendar_btn" type="button">캘린더 저장 버튼</button>
                        <span class="calendar_title">캘린더 저장</span>
                    </div>
                </div>
                <div class="pop_con_wrap">
                    <div class="title_img">
                        <div class="img" style="background-image:url(/v3/resource_0829/images/main/123.jpg)">이미지</div>
                    </div>
                    <div class="pop_con">
                        <div class="left">
                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">김진우 쿠트 이미지웍스</div>
                                    <div class="owner_company">쿠트 이미지웍스를 운영 중으로 지난 8년간 언리얼 엔진 등의 다양한 게임엔진을 활용하여 게임 시네마틱, 컷신 및 애니메이션을 제작해 왔습니다.</div>
                                </div>
                            </div>

                            <div class="text_box">
                                <div class="title">소개</div>
                                <div class="text">이 세션에서는 2020년 'ICEMAN' 프로젝트를 시작으로 변화를 거듭해 온 CooT의 영상 제작 파이프라인 히스토리를 소개하며, 언리얼 엔진을 활용하여 영상제작을 시작하려는 개인 및 기업들에게 프리비즈 연출 방법에 대해서 공유합니다.</div>

                                <div class="title">대상</div>
                                <div class="text2">소규모 애니메이션 제작사 및 프리랜서 영상 제작자</div>

                            </div>
                        </div>
                        <div class="right">
                            <ul class="right_list">
                                <li class="right_item">
                                    <div class="title">산업</div>
                                    <div class="con">
                                        <span>영화 & TV</span>
                                        <span>애니메이션</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">분야</div>
                                    <div class="con">
                                        <span>비주얼아트</span>
                                        <span>기획/프로덕션</span>
                                        <span>UE5</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">플랫폼</div>
                                    <div class="con">
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">난이도</div>
                                    <div class="con">
                                        <span>중급</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="text_box">
                                <div class="title">목차</div>
                                <div class="text">1. 영상제작을 위한 게임엔진 활용 히스토리 소개 <br />
                                    2. 언리얼 엔진을 선택한 이유 <br />
                                    3. 언리얼 엔진 프리비즈를 통한 파이프라인 개발 방법<br />
                                    4. 프리비즈 단계를 계속 이어가는 프로덕션의 마무리 과정
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="inner_close">
                <span>CLOSE</span>
            </button>
        </div>
    </div>










    <div class="pop pop_14" data-panel-pop="pop_14">
        <button type="button" class="close">닫기</button>
        <div class="pop_inner">
            <div class="pop_scroll">
                <div class="pop_title">
                    <div class="pop_date">
                        <span class="date">2022.09.29 14:40-15:30</span>
                        <span class="category">영화, TV & 애니메이션</span>
                    </div>
                    <h2>언리얼 엔진을 활용한 3D 애니메이션 [극장판 윌벤져스: 수상한 캠핑 대소동] 제작기</h2>
                    <div class="calendar_btn_wrap">
                        <button class="calendar_btn" type="button">캘린더 저장 버튼</button>
                        <span class="calendar_title">캘린더 저장</span>
                    </div>
                </div>
                <div class="pop_con_wrap">
                    <div class="title_img">
                        <div class="img" style="background-image:url(/v3/resource_0829/images/main/123.jpg)">이미지</div>
                    </div>
                    <div class="pop_con">
                        <div class="left">
                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">오충원  스튜디오게일</div>
                                    <div class="owner_company">㈜스튜디오게일의 VD(Visual Development) 실장으로 재직 중이며 CG/VFX 경력 23년차로 그간 다양한 애니메이션 및 전시영상 제작에 참여해 왔습니다. 최근 개봉한 ‘극장판 윌벤져스: 수상한 캠핑 소동’  애니메이션 제작 시 언리얼 엔진을 활용하였고 이를 위한 전반적인 R&D를 담당했습니다. </div>
                                </div>
                            </div>

                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">신창환  스튜디오게일</div>
                                    <div class="owner_company">㈜스튜디오게일의 대표이사로 (사)한국애니메이션제작자협회 회장직을 겸하고 있습니다. 2008년 스튜디오게일 창립 이래 다양한 애니메이션의 기획, 감독, 총괄 제작 업무를 담당해 왔으며 언리얼 엔진을 활용하여 제작한 애니메이션 ‘극장판 윌벤져스: 수상한 캠핑 대소동’의 연출을 맡았고 2023년 방영 예정인 네이버 웹툰 원작의 OTT 시리즈 애니메이션 ‘나노리스트’ 연출을 담당하고 있습니다.</div>
                                </div>
                            </div>

                            <div class="text_box">
                                <div class="title">소개</div>
                                <div class="text">이 세션에서는 언리얼 엔진을 활용한 애니메이션 '극장판 윌벤져스: 수상한 캠핑 대소동'의 제작 사례를 소개합니다. 마야와 언리얼 엔진을 활용한 전반적인 제작의 프로젝트 구성 및 레이 트레이싱을 활용한 제작시 직면하는 이슈들과 해결점들을 다루어 봅니다. 그리고 애니메이션 제작에 좀 더 효율적으로 언리얼 엔진을 활용하기 위한 R&D 사항들도 함께 소개합니다.</div>

                                <div class="title">대상</div>
                                <div class="text2">언리얼 엔진을 활용한 3D 애니메이션 제작 실무자 및 개발 준비 중인 제작자</div>

                            </div>
                        </div>
                        <div class="right">
                            <ul class="right_list">
                                <li class="right_item">
                                    <div class="title">산업</div>
                                    <div class="con">
                                        <span>애니메이션</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">분야</div>
                                    <div class="con">
                                        <span>비주얼아트</span>
                                        <span>기획/프로덕션</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">플랫폼</div>
                                    <div class="con">
                                        <span>극장, IPTV</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">난이도</div>
                                    <div class="con">
                                        <span>중급</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="text_box">
                                <div class="title">목차</div>
                                <div class="text">
                                    1. 효율적인 언리얼 프로젝트 구성의 방향  <br />
                                    2. 애니메이션 영상 제작을 위한 룩 디벨롭먼트 과정 <br />
                                    3. Fur 작업의 공정 및 랜더링 <br />
                                    4. 최종 렌더링 및 합성
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="inner_close">
                <span>CLOSE</span>
            </button>
        </div>
    </div>








    <div class="pop pop_15" data-panel-pop="pop_15">
        <button type="button" class="close">닫기</button>
        <div class="pop_inner">
            <div class="pop_scroll">
                <div class="pop_title">
                    <div class="pop_date">
                        <span class="date">2022.09.29 15:40-16:30</span>
                        <span class="category">영화, TV & 애니메이션</span>
                    </div>
                    <h2>버추얼 프로덕션 TV & 라이브 이벤트 적용 사례</h2>
                    <div class="calendar_btn_wrap">
                        <button class="calendar_btn" type="button">캘린더 저장 버튼</button>
                        <span class="calendar_title">캘린더 저장</span>
                    </div>
                </div>
                <div class="pop_con_wrap">
                    <div class="title_img">
                        <div class="img" style="background-image:url(/v3/resource_0829/images/main/123.jpg)">이미지</div>
                    </div>
                    <div class="pop_con">
                        <div class="left">
                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">서준호 (주)비브스튜디오스</div>
                                    <div class="owner_company">㈜비브스튜디오에서 버추얼 센터 본부장으로 재직 중이며 곤지암 버추얼 스튜디오 운영 총괄과 버추얼 프로덕션 테크니컬 프로듀서를 맡고 있습니다.</div>
                                </div>
                            </div>

                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">유영빈  비브스튜디오스</div>
                                    <div class="owner_company">㈜비브스튜디오스 Real-time Center 애니메이터 팀장으로 재직 중이며 언리얼 엔진을 활용한 In-camera VFX / AR Show Event 프로젝트에 다수 참여했습니다.</div>
                                </div>
                            </div>

                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">금덕인  비브스튜디오스</div>
                                    <div class="owner_company">㈜비브스튜디오스에서 버추얼 센터 TA실 실장으로 재직 중이며 버추얼 프로덕션 테크니컬 슈퍼바이저를 맡고 있습니다.</div>
                                </div>
                            </div>

                            <div class="text_box">
                                <div class="title">소개</div>
                                <div class="text">버추얼 프로덕션 TV & 라이브 이벤트 적용 시 언리얼 엔진을 활용한 사전 시각화, 높은 품질의 가상 공간 디자인 및 커스터마이징 방법, 그리고 버추얼 프로덕션 종류별 운용 기술 특징을 소개합니다.</div>

                                <div class="title">대상</div>
                                <div class="text2">버추얼 프로덕션 도입을 준비하는 VFX 스튜디오</div>

                            </div>
                        </div>
                        <div class="right">
                            <ul class="right_list">
                                <li class="right_item">
                                    <div class="title">산업</div>
                                    <div class="con">
                                        <span>영화 & TV</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">분야</div>
                                    <div class="con">
                                        <span>기획/프로덕션</span>
                                        <span>XR/VR/AR/MR</span>
                                        <span>버추얼 프로덕션</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">플랫폼</div>
                                    <div class="con">
                                        <span>PC</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">난이도</div>
                                    <div class="con">
                                        <span>초급</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="text_box">
                                <div class="title">목차</div>
                                <div class="text">1. 비브스튜디오스 버추얼 센터 및 버추얼 프로덕션 TV & 라이브 이벤트 소개<br />
                                    2. 버추얼 프로덕션 제작 파이프라인 <br />
                                    3. 버추얼 프로덕션 종류별 운용 기술 특징
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="inner_close">
                <span>CLOSE</span>
            </button>
        </div>
    </div>






    <div class="pop pop_16" data-panel-pop="pop_16">
        <button type="button" class="close">닫기</button>
        <div class="pop_inner">
            <div class="pop_scroll">
                <div class="pop_title">
                    <div class="pop_date">
                        <span class="date">2022.09.29 16:40-17:30</span>
                        <span class="category">영화, TV & 애니메이션</span>
                    </div>
                    <h2>메타휴먼 기반의 버추얼 캐릭터 제작기: 실제 개발 사례를 중심으로</h2>
                    <div class="calendar_btn_wrap">
                        <button class="calendar_btn" type="button">캘린더 저장 버튼</button>
                        <span class="calendar_title">캘린더 저장</span>
                    </div>
                </div>
                <div class="pop_con_wrap">
                    <div class="title_img">
                        <div class="img" style="background-image:url(/v3/resource_0829/images/main/123.jpg)">이미지</div>
                    </div>
                    <div class="pop_con">
                        <div class="left">
                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">최성민 자이언트스텝</div>
                                    <div class="owner_company">게임 업계에서 6년간 클라이언트 및 서버 개발에 참여했고 현재는 자이언트스텝에서 개발 팀장으로서 R&D를 진행하고 있습니다. 디지털 휴먼 프로젝트와 XR 콘서트 등 여러 프로젝트에 참여했습니다.</div>
                                </div>
                            </div>
                            <div class="text_box">
                                <div class="title">소개</div>
                                <div class="text">이 세션에서는 자이언트스텝에서 그동안 진행했던 디지털 휴먼 개발 이력과 에픽게임즈의 메타휴먼 공개 이후에 진행된 내용들, 사실적인 캐릭터를 만들기 위한 노력들, 그리고 향후 어떤 과제들이 남아있는지 현재 공개한 캐릭터인 이솔(SORI)을 중심으로 전체적인 개발 스토리를 다룰 예정입니다.</div>

                                <div class="title">대상</div>
                                <div class="text2">디지털 휴먼 제작에 관심 있는 프로그래머/아티스트</div>

                            </div>
                        </div>
                        <div class="right">
                            <ul class="right_list">
                                <li class="right_item">
                                    <div class="title">산업</div>
                                    <div class="con">
                                        <span>영화 & TV</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">분야</div>
                                    <div class="con">
                                        <span>프로그래밍</span>
                                        <span>비주얼아트</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">플랫폼</div>
                                    <div class="con">
                                        <span>PC</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">난이도</div>
                                    <div class="con">
                                        <span>초급</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="text_box">
                                <div class="title">목차</div>
                                <div class="text">1. 자이언트스텝의 디지털 휴먼 개발 일지<br />
                                    2. 메타휴먼의 등장과 메타휴먼을 도입한 이유<br />
                                    3. 사실적인 디지털 휴먼을 위한 연구 개발<br />
                                    4. 향후 해결 과제
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="inner_close">
                <span>CLOSE</span>
            </button>
        </div>
    </div>













    <div class="pop pop_17" data-panel-pop="pop_17">
        <button type="button" class="close">닫기</button>
        <div class="pop_inner">
            <div class="pop_scroll">
                <div class="pop_title">
                    <div class="pop_date">
                        <span class="date">2022.09.29 17:40-18:30</span>
                        <span class="category">영화, TV & 애니메이션</span>
                    </div>
                    <h2>Neflix VP Open House in Korea: 성공적인 버추얼 프로덕션 콘텐츠 제작과 언리얼 엔진 </h2>
                    <div class="calendar_btn_wrap">
                        <button class="calendar_btn" type="button">캘린더 저장 버튼</button>
                        <span class="calendar_title">캘린더 저장</span>
                    </div>
                </div>
                <div class="pop_con_wrap">
                    <div class="title_img">
                        <div class="img" style="background-image:url(/v3/resource_0829/images/main/123.jpg)">이미지</div>
                    </div>
                    <div class="pop_con">
                        <div class="left">
                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">임주영 웨스트월드</div>
                                    <div class="owner_company">웨스트월드에서 기술연구소 및 버추얼 프로덕션 슈퍼바이저로 재직 중으로 넷플릭스 오리지널 시리즈 '고요의 바다', '택배기사'에 언리얼 엔진을 활용한 ICVFX 프로젝트 진행을 총괄했습니다. </div>
                                </div>
                            </div>
                            <div class="text_box">
                                <div class="title">소개</div>
                                <div class="text">이 세션에서는 'Netflix VP Open House in Korea' 행사를 준비하면서 버추얼 프로덕션을 활용한 제작 사례를 성공적으로 시연하기 위해서 프리비즈, 온셋솔루션, 포스트비즈에 이르는 전 단계의 과정에서 언리얼 엔진을 활용하여 짧은 시간에 최고의 퀄리티의 결과물을 만들기 위한 과정을 설명합니다. </div>

                                <div class="title">대상</div>
                                <div class="text2">버추얼 프로덕션을 구현하거나 실제로 사용하길 원하는 제작자 및 스태프</div>

                            </div>
                        </div>
                        <div class="right">
                            <ul class="right_list">
                                <li class="right_item">
                                    <div class="title">산업</div>
                                    <div class="con">
                                        <span>영화 & TV</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">분야</div>
                                    <div class="con">
                                        <span>XR/VR/AR/MR</span>
                                        <span>UE5</span>
                                        <span>버추얼 프로덕션</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">플랫폼</div>
                                    <div class="con">
                                        <span>기타</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">난이도</div>
                                    <div class="con">
                                        <span>초급</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="text_box">
                                <div class="title">목차</div>
                                <div class="text">1. 버추얼 프로덕션이란<br />
                                    2. 프리비즈와 UE: 언리얼 엔진을 이용한 프리비즈의  장점  <br />
                                    3. SimulCam 솔루션과 UE: 온셋 환경에서 언리얼 엔진의 활용성  <br />
                                    4. ICVFX: 촬영만으로 완성되는 콘텐츠
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="inner_close">
                <span>CLOSE</span>
            </button>
        </div>
    </div>








    <div class="pop pop_18" data-panel-pop="pop_18">
        <button type="button" class="close">닫기</button>
        <div class="pop_inner">
            <div class="pop_scroll">
                <div class="pop_title">
                    <div class="pop_date">
                        <span class="date">2022.09.30 13:00-13:45</span>
                        <span class="category">건축 & 자동차</span>
                    </div>
                    <h2>제조 산업 디지털 트랜스포메이션을 지원하는 에픽 에코시스템 </h2>
                    <div class="calendar_btn_wrap">
                        <button class="calendar_btn" type="button">캘린더 저장 버튼</button>
                        <span class="calendar_title">캘린더 저장</span>
                    </div>
                </div>
                <div class="pop_con_wrap">
                    <div class="title_img">
                        <div class="img" style="background-image:url(/v3/resource_0829/images/main/123.jpg)">이미지</div>
                    </div>
                    <div class="pop_con">
                        <div class="left">
                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">진득호 에픽게임즈 코리아</div>
                                    <div class="owner_company">에픽게임즈 코리아 테크니컬 어카운트 매니저로 국내 제조 산업과 건축/엔지니어링/건설 산업에 트랜스포메이션, 디지털 트윈, 메타버스 사업개발을 지원하고 있습니다.</div>
                                </div>
                            </div>
                            <div class="text_box">
                                <div class="title">소개</div>
                                <div class="text">팬데믹으로 인한 뉴노멀은 디지털 트랜스포메이션의 시장의 요구를 앞당김과 동시에 ESG(환경⋅사회⋅지배구조)라는 화두로 진화하면서 제조 및 건설 산업에 커다란 변화를 불러일으켰습니다. 이러한 변화로 많은 기업들은 디지털 트랜스포메이션으로 비즈니스 혁신을 만들어 나가야 하는 과제에 당면해 있습니다.
                                    이 단계에서 에픽게임즈의 제작/개발 지원 생태계와 언리얼 엔진의 리얼타임 렌더링 혁신이 엔터프라이즈 메타버스, 디지털 트윈과 같은 시장의 다양한 디지털 트랜스포메이션 요구사항과 도전들을 해결해 낸 국내/해외의 사례들을 소개합니다.</div>

                                <div class="title">대상</div>
                                <div class="text2">ESG, 디지털 트랜스포메이션과 메타버스, 디지털 트윈을 준비하는 공공/기업 언리얼 엔진에 관심 있거나 도입을 검토하는 공공/기업 BIM, GIS 등 외부 데이터나 정보 플랫폼에서 데이터 통합에 관심있는 시각화 전문가 자동차 및 제조산업 종사자 건축, 엔지니어링, 건설산업 종사자</div>

                            </div>
                        </div>
                        <div class="right">
                            <ul class="right_list">
                                <li class="right_item">
                                    <div class="title">산업</div>
                                    <div class="con">
                                        <span>건축, 제조 & 시뮬레이션</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">분야</div>
                                    <div class="con">
                                        <span>기획/프로덕션</span>
                                        <span>서비스</span>
                                        <span>XR/VR/AR/MR</span>
                                        <span>UE5</span>
                                        <span>디지털 트윈</span>
                                        <span>메타버스</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">플랫폼</div>
                                    <div class="con">
                                        <span>기타</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">난이도</div>
                                    <div class="con">
                                        <span>초급</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="text_box">
                                <div class="title">목차</div>
                                <div class="text">1. 산업 분야별 디지털 트랜스포메이션 목표 및 개념 구조 <br />
                                    2. 언리얼 엔진 디지털 트랜스포메이션 채택 사례 소개 <br />
                                    - 디지털 트윈 분야 <br />
                                    - 엔터프라이즈 메타버스 분야 <br />
                                    3. 에픽게임즈의 에코시스템이 발주처와 제작/개발사를 지원하는 방법
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="inner_close">
                <span>CLOSE</span>
            </button>
        </div>
    </div>










    <div class="pop pop_19" data-panel-pop="pop_19">
        <button type="button" class="close">닫기</button>
        <div class="pop_inner">
            <div class="pop_scroll">
                <div class="pop_title">
                    <div class="pop_date">
                        <span class="date">2022.09.30 13:55-14:40</span>
                        <span class="category">건축 & 자동차</span>
                    </div>
                    <h2>VARLOS 항만 모니터링 시스템: 효율적인 항만 물류 관리를 위한 디지털 트윈 구축</h2>
                    <div class="calendar_btn_wrap">
                        <button class="calendar_btn" type="button">캘린더 저장 버튼</button>
                        <span class="calendar_title">캘린더 저장</span>
                    </div>
                </div>
                <div class="pop_con_wrap">
                    <div class="title_img">
                        <div class="img" style="background-image:url(/v3/resource_0829/images/main/123.jpg)">이미지</div>
                    </div>
                    <div class="pop_con">
                        <div class="left">
                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">김대희 주식회사 삼우이머션</div>
                                    <div class="owner_company">주식회사 삼우이머션 대표이사를 역임하며 본사의 해양, 항공, 의료, 산업 안전 분야의 다양한 교육/훈련 솔루션 개발을 주도했습니다.</div>
                                </div>
                            </div>
                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">이은규  주식회사 삼우이머션</div>
                                    <div class="owner_company">주식회사 삼우이머션에서 VR 개발자로 재직 중으로 해상교통안전, 산업안전 및 항공 분야의 VR 애플리케이션 개발에 참여했습니다.</div>
                                </div>
                            </div>
                            <div class="text_box">
                                <div class="title">소개</div>
                                <div class="text">이 세션에서는 항만 물류 관리를 위한 언리얼 엔진을 활용한 디지털 트윈 구축 과정에서 사용된 위성지도 기반의 지형 매핑, GIS 정보 통합 등의 기술과 IoT 인터페이스 및 프로토콜을 통한 데이터의 처리, 2D/3D로 이원화된 정보 표출 및 다량의 3D 객체 표현을 위한 최적화 방안 등에 대해 다룹니다.</div>

                                <div class="title">대상</div>
                                <div class="text2">디지털 트윈 개발에 관심 있는 개발자 및 다양한 분야에 디지털 트윈을 응용하고자 하는 분</div>

                            </div>
                        </div>
                        <div class="right">
                            <ul class="right_list">
                                <li class="right_item">
                                    <div class="title">산업</div>
                                    <div class="con">
                                        <span>건축, 제조 & 시뮬레이션</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">분야</div>
                                    <div class="con">
                                        <span>XR/VR/AR/MR</span>
                                        <span>디지털 트윈</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">플랫폼</div>
                                    <div class="con">
                                        <span>PC</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">난이도</div>
                                    <div class="con">
                                        <span>중급</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="text_box">
                                <div class="title">목차</div>
                                <div class="text">1. 디지털 트윈과 언리얼 엔진: 디지털 트윈의 개념 및 언리얼 엔진을 이용한 개발의 장점<br />
                                    2. 디지털 트윈의 개발: 실제/가상 위치 좌표의 통일, 대용량 데이터 처리 및 매핑<br />
                                    3. 디지털 트윈 개발의 최적화 기법: 정보 표출의 이원화 및 다수의 3D 객체 렌더링을 위한 최적화 기법
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="inner_close">
                <span>CLOSE</span>
            </button>
        </div>
    </div>










    <div class="pop pop_20" data-panel-pop="pop_20">
        <button type="button" class="close">닫기</button>
        <div class="pop_inner">
            <div class="pop_scroll">
                <div class="pop_title">
                    <div class="pop_date">
                        <span class="date">2022.09.30 14:50-15:35</span>
                        <span class="category">건축 & 자동차</span>
                    </div>
                    <h2>BIM 데이터를 XR 콘텐츠로 자동 생성하는 파이프라인과 건설 현장에서의 증강휴먼 운용 과정</h2>
                    <div class="calendar_btn_wrap">
                        <button class="calendar_btn" type="button">캘린더 저장 버튼</button>
                        <span class="calendar_title">캘린더 저장</span>
                    </div>
                </div>
                <div class="pop_con_wrap">
                    <div class="title_img">
                        <div class="img" style="background-image:url(/v3/resource_0829/images/main/123.jpg)">이미지</div>
                    </div>
                    <div class="pop_con">
                        <div class="left">
                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">정재헌 주식회사 에스엘즈</div>
                                    <div class="owner_company">에스엘즈에서 의장으로 개발총괄 부문을 맡고 있으며 2020년에 에픽 메가그랜트를 수상하였습니다. 한국BIM학회 이사, 국가직무표준 VR/AR 부분 개발심의위원, 서울대학교 환경대학원 강의 등의 활동을 하고 있습니다. </div>
                                </div>
                            </div>
                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">이은규  주식회사 삼우이머션</div>
                                    <div class="owner_company">주식회사 삼우이머션에서 VR 개발자로 재직 중으로 해상교통안전, 산업안전 및 항공 분야의 VR 애플리케이션 개발에 참여했습니다.</div>
                                </div>
                            </div>
                            <div class="text_box">
                                <div class="title">소개</div>
                                <div class="text">2022년 봄에 개장된 따오기아동문화관은 시흥시 물왕저수지 주변의 유휴공간을 활용한 문화공간으로 아이들의 상상력을 불어넣기 위해 비정형의 시설물과 곡선의 포장 패턴 적용 등의 배정된 공사비 한도 내에서 높은 품질과 정확한 시공이 요구되는 프로젝트였습니다. 본 세션에서는 실제 공사에 적용된 사례를 바탕으로 BIM TO XR 자동화 파이프라인과 이를 적용한 증강휴먼 운용 경험을 소개합니다.</div>

                                <div class="title">대상</div>
                                <div class="text2">BIM 데이터를 건설현장에 적용하고자 하는 건설산업 전공자 또는 전문가</div>

                            </div>
                        </div>
                        <div class="right">
                            <ul class="right_list">
                                <li class="right_item">
                                    <div class="title">산업</div>
                                    <div class="con">
                                        <span>건축, 제조 & 시뮬레이션</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">분야</div>
                                    <div class="con">
                                        <span>서비스</span>
                                        <span>XR/VR/AR/MR</span>
                                        <span>디지털 트윈</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">플랫폼</div>
                                    <div class="con">
                                        <span>PC</span>
                                        <span>모바일</span>
                                        <span>MS Hololens</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">난이도</div>
                                    <div class="con">
                                        <span>초급</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="text_box">
                                <div class="title">목차</div>
                                <div class="text">1. XR 기술을 적용한 증강휴먼 건설기술 <br />
                                    2.BIM에서 XR개발 자동생성 파이프라인 <br />
                                    3.가상 데이터와 실제 현장의 정합성 향상<br />
                                    4.증강휴먼 고도화 및 활용 전망
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="inner_close">
                <span>CLOSE</span>
            </button>
        </div>
    </div>








    <div class="pop pop_20" data-panel-pop="pop_20">
        <button type="button" class="close">닫기</button>
        <div class="pop_inner">
            <div class="pop_scroll">
                <div class="pop_title">
                    <div class="pop_date">
                        <span class="date">2022.09.30 15:45-16:30</span>
                        <span class="category">건축 & 자동차</span>
                    </div>
                    <h2>서울을 UE5 디지털 트윈으로 구현한 [Project RYU]</h2>
                    <div class="calendar_btn_wrap">
                        <button class="calendar_btn" type="button">캘린더 저장 버튼</button>
                        <span class="calendar_title">캘린더 저장</span>
                    </div>
                </div>
                <div class="pop_con_wrap">
                    <div class="title_img">
                        <div class="img" style="background-image:url(/v3/resource_0829/images/main/123.jpg)">이미지</div>
                    </div>
                    <div class="pop_con">
                        <div class="left">
                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">류충현 류 프로덕션</div>
                                    <div class="owner_company">류 프로덕션에서 Project RYU 개발 총괄, 유튜브 RYU Russell 러셀에서 언리얼 엔진 기반 채널을 운영 중입니다. </div>
                                </div>
                            </div>
                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">이은규  주식회사 삼우이머션</div>
                                    <div class="owner_company">주식회사 삼우이머션에서 VR 개발자로 재직 중으로 해상교통안전, 산업안전 및 항공 분야의 VR 애플리케이션 개발에 참여했습니다.</div>
                                </div>
                            </div>
                            <div class="text_box">
                                <div class="title">소개</div>
                                <div class="text">한국을 배경으로 하는 Project RYU의 사실적인 가상의 한국 모습을 소규모 팀에서 언리얼 엔진 5로 어떻게 개발하고 있는지 그리고 높은 퀄리티 기반의 디지털 트윈을 제작할 때 어떤 점을 고려해야 하는지 대해 다룹니다.</div>

                                <div class="title">대상</div>
                                <div class="text2">1) 실재하는 공간, 오브젝트, 건축물 등을 UE5에서 재구현하고자 하는 프로젝트<br />
                                    2) 절차적 생성 방식에 관심이 있는 아티스트<br />
                                    3) 환경 구현에 있어 미적 감각 포인트 발전에 관심이 있는 아티스트</div>

                            </div>
                        </div>
                        <div class="right">
                            <ul class="right_list">
                                <li class="right_item">
                                    <div class="title">산업</div>
                                    <div class="con">
                                        <span>공통</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">분야</div>
                                    <div class="con">
                                        <span>비주얼아트</span>
                                        <span>UE5</span>
                                        <span>디지털 트윈</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">플랫폼</div>
                                    <div class="con">
                                        <span>PC</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">난이도</div>
                                    <div class="con">
                                        <span>중급</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="text_box">
                                <div class="title">목차</div>
                                <div class="text">1. Project RYU에 대한 소개<br />
                                    2. 소규모 팀에서 UE5를 이용해 방대한 작업량을 소화할 수 있는 워크플로우<br />
                                    3. 고해상도 디지털 트윈을 제작할 때의 구현 포인트<br />
                                    4. 제작된 리소스의 활용 방안
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="inner_close">
                <span>CLOSE</span>
            </button>
        </div>
    </div>




















    <div class="pop pop_21" data-panel-pop="pop_21">
        <button type="button" class="close">닫기</button>
        <div class="pop_inner">
            <div class="pop_scroll">
                <div class="pop_title">
                    <div class="pop_date">
                        <span class="date">2022.09.30 17:35-18:20</span>
                        <span class="category">건축 & 자동차</span>
                    </div>
                    <h2>리얼타임 레이 트레이싱을 이용한 차량 아웃사이드 미러 및 디지털 사이드 미러 구현</h2>
                    <div class="calendar_btn_wrap">
                        <button class="calendar_btn" type="button">캘린더 저장 버튼</button>
                        <span class="calendar_title">캘린더 저장</span>
                    </div>
                </div>
                <div class="pop_con_wrap">
                    <div class="title_img">
                        <div class="img" style="background-image:url(/v3/resource_0829/images/main/123.jpg)">이미지</div>
                    </div>
                    <div class="pop_con">
                        <div class="left">
                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">김태현 서울기술연구원 </div>
                                    <div class="owner_company">서울기술연구원에서 지난 4년간 스마트 도시 연구실장으로 재직하면서 스마트 시티, 디지털 트윈, 메타버스 등 신기술을 활용한 서울시의 도시 문제 해결, 서울시 적용방안 연구.<br />언리얼 엔진 5를 사용하여 605 제곱킬로미터에 달하는 서울시를 도시 규모의 디지털 트윈을 구성하고 스마트 시티와 메타버스로 확장하는 방안을 연구 수행하고 있습니다.</div>
                                </div>
                            </div>
                            <div class="owner_wrap">
                                <div class="img"  style="background-image:url(/v3/resource_0829/images/main/people.png)"></div>
                                <div class="owner">
                                    <div class="owner_name">류승열  현대자동차</div>
                                    <div class="owner_company">현대자동차 남양연구소 연구개발본부에서 연구원으로 재직 중이며, 이전에는 차체 설계와 검증을 담당하였고, 현재 언리얼 엔진을 활용하여 버추얼 환경에서의 차량 검증법 개발을 하고 있습니다.</div>
                                </div>
                            </div>
                            <div class="text_box">
                                <div class="title">소개</div>
                                <div class="text">언리얼 엔진의 '리얼타임 레이 트레이싱'과 '렌더 타깃'을 활용하여 만든 각각의 아웃사이드 미러 데이터가 실제 차량의 미러와 어느 정도로 유사한지 비교 평가한 연구개발 결과를 공유합니다.</div>

                                <div class="title">대상</div>
                                <div class="text2">리얼타임 레이 트레이싱 또는 자동차 회사에서 진행하는 가상 평가에 관심 있는 분</div>

                            </div>
                        </div>
                        <div class="right">
                            <ul class="right_list">
                                <li class="right_item">
                                    <div class="title">산업</div>
                                    <div class="con">
                                        <span>자동차 & 운송</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">분야</div>
                                    <div class="con">
                                        <span>비주얼아트</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">플랫폼</div>
                                    <div class="con">
                                        <span>PC</span>
                                    </div>
                                </li>
                                <li class="right_item">
                                    <div class="title">난이도</div>
                                    <div class="con">
                                        <span>초급</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="text_box">
                                <div class="title">목차</div>
                                <div class="text">1. 언리얼엔진을 활용하게 된 이유 <br />
                                    2. 언리얼 엔진을 이용한 아웃사이드 미러 제작 과정 <br />
                                    3. 실제 차량과의 비교 평가 내용
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="inner_close">
                <span>CLOSE</span>
            </button>
        </div>
    </div>
    <?php include 'inc/common_footer.php'; ?>

</div>

<script>
$(function() {
    //$("input[type=checkbox]:checked").length
    $("input[type=checkbox]").on("change",function () {
		var str = "";
		$("input[type=checkbox]:checked").each(function(){
			str += $(this).val()+",";
		});
		if(str == ""){
			$(".program_part").addClass("filter_on");
			$(".program_part").removeClass("filter_off");
		}else{
			$(".program_part").removeClass("filter_on");
			$(".program_part").addClass("filter_off");
			
			/*
			$(".program_part").each(function(){
				/var now = $(this).data("category");
				var active_cnt = $("input[type=checkbox]:checked").length;
				$("input[type=checkbox]:checked").each(function(){
					if(now.match($(this).val())){
						active_cnt --;
					}
				});
				if(active_cnt == 0){
					$(this).addClass("filter_on");
					$(this).removeClass("filter_off");
				}else{
					$(this).removeClass("filter_on");
					$(this).addClass("filter_off");
				}
			});
			*/
			$("input[type=checkbox]:checked").each(function(){
				var chkval = $(this).val();
				$(".program_part").each(function(){
					if($(this).data("category").match(chkval)){
						$(this).addClass("filter_on");
						$(this).removeClass("filter_off");
					}
				});

			});
		}

    });
});
</script>
</body>
</html>