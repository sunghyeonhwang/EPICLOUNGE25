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
    <link rel="stylesheet" href="/v3/resource_0829/css/main.css">
    <link rel="stylesheet" href="/v3/resource_0829/css/event_letsmakegame.css">
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
    <script src="/v3/resource/js/jquery-3.4.1.min.js"></script>
    <script src="/v3/resource/js/ScrollTrigger.min.js"></script>
    <script src="/v3/resource/js/slick.min.js"></script>
    <script src="/v3/resource/js/common.js"></script>
    <script src="/v3/resource/js/main.js"></script>
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
      function clip(){

        var url = 'https://epiclounge.co.kr';    // <a>태그에서 호출한 함수인 clip 생성
        var textarea = document.createElement("textarea");
        //url 변수 생성 후, textarea라는 변수에 textarea의 요소를 생성

        document.body.appendChild(textarea); //</body> 바로 위에 textarea를 추가(임시 공간이라 위치는 상관 없음)
        url = window.document.location.href;  //url에는 현재 주소값을 넣어줌
        textarea.value = url;  // textarea 값에 url를 넣어줌
        textarea.select();  //textarea를 설정
        document.execCommand("copy");   // 복사
        document.body.removeChild(textarea); //extarea 요소를 없애줌

        alert("URL이 복사되었습니다.")  // 알림창
      }
    </script>
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
        const url = "https://epiclounge.co.kr";
        window.open(
          "http://www.facebook.com/sharer/sharer.php?u=" + url + "&title=" + title
        );
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
                                    <input id="check3-5" type="checkbox" value="기타"/>
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
                        <button type="button" data-btn-pop="pop_2"  class="program_part part2"  data-category="공통,메타버스,크로스 플랫폼,초급">
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
                        <button type="button"  data-btn-pop="pop_3"  class="program_part part1" data-category="공통,비주얼아트,UE5,디지털 휴먼,PC,초급,">
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
                        <button type="button" data-btn-pop="pop_4"  class="program_part part2" data-category="공통,게임,프로그래밍,비주얼아트,크로스 플랫폼,초급,">
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
                        <button type="button" data-btn-pop="pop_5"  class="program_part part1" data-category="공통,비주얼아트,UE5,PC,초급,">
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
                        <button type="button"  data-btn-pop="pop_6" class="program_part part2" data-category="공통,프로그래밍,크로스 플랫폼,초급,">
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
                        <p class="info"><span class="info time">17:10 경품 추첨</span></p>
                        <div class="bottom_text">
                            <p>각 세션의 정보는 곧 업데이트 될 예정입니다.</p>
                            <p>스케줄은 사정에 따라 변경될 수 있습니다.</p>
                        </div>
                    </div>
                </div>

                <div class="program_content">
                    <article class="program program1">
                        <button type="button"  data-btn-pop="pop_7" class="program_part part1" data-category="게임,비주얼아트,UE5,버추얼 프로덕션,디지털 휴먼,디지털 트윈,메타버스,크로스 플랫폼,PC,콘솔,중급,">
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
                        <button type="button" data-btn-pop="pop_8" class="program_part part2" data-category="게임,프로그래밍,크로스 플랫폼,PC,모바일,콘솔,중급">
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
                        <button type="button"   data-btn-pop="pop_9" class="program_part part1" data-category="게임,비주얼아트,크로스 플랫폼,PC,콘솔,중급,">
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
                        <button type="button"  data-btn-pop="pop_10" class="program_part part2" data-category="게임,프로그래밍,UE5,크로스 플랫폼,PC,콘솔,중급">
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
                        <button type="button"   data-btn-pop="pop_11" class="program_part part1" data-category="프로그래밍,UE5,모바일,중급,">
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
                        <p class="info"><span class="info time">17:50 경품 추첨</span></p>
                        <div class="bottom_text">
                            <p>각 세션의 정보는 곧 업데이트 될 예정입니다.</p>
                            <p>스케줄은 사정에 따라 사전 고지 없이 변경될 수 있습니다.</p>
                        </div>
                    </div>
                </div>
                <div class="program_content">
                    <article class="program program1">
                        <button type="button" data-btn-pop="pop_12" class="program_part part1" data-category="영화 & TV,애니메이션,비즈니스/마케팅,XR/VR/AR/MR,UE5,버추얼 프로덕션,디지털 휴먼,메타버스,크로스 플랫폼,중급,">
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
                        <button type="button" data-btn-pop="pop_13" class="program_part part2" data-category="영화 & TV,애니메이션,비주얼아트,기획/프로덕션,UE5,중급,">
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
                        <button type="button" data-btn-pop="pop_14" class="program_part part1" data-category="애니메이션,비주얼아트,기획/프로덕션,기타,중급,">
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
                        <button type="button" data-btn-pop="pop_15" class="program_part part2" data-category="영화 & TV,기획/프로덕션,XR/VR/AR/MR,버추얼 프로덕션,PC,초급,">
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
                        <button type="button" data-btn-pop="pop_16" class="program_part part1" data-category="영화 & TV,프로그래밍,비주얼아트,XR/VR/AR/MR,디지털 휴먼,메타버스,PC,초급,">
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
                        <button type="button" data-btn-pop="pop_17" class="program_part part2" data-category="영화 & TV,XR/VR/AR/MR,UE5,버추얼 프로덕션,기타,초급,">
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
                        <p class="info"><span class="info time">18:30 경품 추첨</p>
                        <div class="bottom_text">
                            <p>각 세션의 정보는 곧 업데이트 될 예정입니다.</p>
                            <p>스케줄은 사정에 따라 사전 고지 없이 변경될 수 있습니다.</p>
                        </div>
                    </div>
                </div>
                <div class="program_content">
                    <article class="program program1">
                        <button type="button" data-btn-pop="pop_18" class="program_part part1" data-category="건축, 제조 & 시뮬레이션,기획/프로덕션,서비스,XR/VR/AR/MR,UE5,디지털 트윈,메타버스,기타,초급,">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">1</span>
                                    <span class="time">13:00-13:45</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>건축 및 제조 산업의 디지털 트랜스포메이션을 지원하는 에픽 에코시스템</h3>
                                <span class="owner">진득호, 에픽게임즈 코리아</span>
                            </span>
                        </button>
                        <button type="button" data-btn-pop="pop_19" class="program_part part2" data-category="건축, 제조 & 시뮬레이션,XR/VR/AR/MR,디지털 트윈,PC,중급,">
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
                        <button type="button" data-btn-pop="pop_20" class="program_part part1" data-category="건축, 제조 & 시뮬레이션,서비스,XR/VR/AR/MR,디지털 트윈,PC,모바일,MS Hololens,초급,기타">
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
                        <button type="button" data-btn-pop="pop_21" class="program_part part2" data-category="공통,비주얼아트,UE5,디지털 트윈,PC,중급,">
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
                        <button type="button" data-btn-pop="pop_22" class="program_part part1" data-category="건축, 제조 & 시뮬레이션,서비스,UE5,디지털 트윈,메타버스,PC,초급,">
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
                        <button type="button" data-btn-pop="pop_23" class="program_part part2" data-category="자동차 & 운송,비주얼아트,PC,초급,">
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
                        <p class="info"><span class="info time">18:20 경품 추첨</span></p>
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
                <li class="event_item event_item1">
                    <button type="button" class="acc_btn">
                        <span class="num"><span class="num_inner">1</span></span>
                        <span class="title_wrap">
              <em class="title"><span class="point">매일! 매 세션! 시청만 해도 언리얼 굿즈</span>가?</em>
              <span class="con">세션을 열심히 시청하기만 하면 매일 매일 각 세션이 종료될 때마다 즉시 추첨하여 다양한 경품을 드립니다.</span>
            </span>
                    </button>
                    <div class="event_a">
                        <ul class="event_con_list">
                            <li class="event_con_item item1">
                                <h4>참여 방법</h4>
                                <div class="event_item_con">
                                    <em>하나</em>이벤트 기간 내에 언리얼 서밋 온라인 2022 사전 등록 완료하기<br />
                                    <em>둘</em>등록한 날짜에 세션을 시청하면 자동 응모!
                                </div>
                            </li>
                            <li class="event_con_item item2">
                                <h4>이벤트 기간</h4>
                                <div class="event_item_con">
                                    2022.9.27(화) - 2022.9.30(금)
                                </div>
                            </li>
                            <li class="event_con_item item3">
                                <h4>당첨자 발표</h4>
                                <div class="event_item_con">
                                    매 세션 종료 후 즉시 15명씩 추첨 및 발표
                                </div>
                            </li>
                            <li class="event_con_item item4">
                                <h4>경품</h4>
                                <div class="event_item_con">
                                    <div class="event_item_withImg">
                                        <div class="left">
                                            <div class="img">
                                                <img src="" alt="">
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="con">
                                                <ul class="con_list">
                                                    <li class="con_item">언리얼 텀블러 100명</li>
                                                    <li class="con_item">언리얼  광택용 천 20명</li>
                                                    <li class="con_item">언리얼 티셔츠 150명</li>
                                                    <li class="con_item">언리얼 장우산 30명</li>
                                                    <li class="con_item">언리얼 컵 20명</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <p class="warning">사정에 따라 경품은 변경될 수 있습니다. |  경품은 랜덤으로 발송됩니다.</p>
                    </div>
                    <button type="button" class="close"><span>닫기</span></button>
                </li>
                <li class="event_item event_item2">
                    <button type="button" class="acc_btn">
                        <span class="num"><span class="num_inner">2</span></span>
                        <span class="title_wrap">
                <em class="title">매일 매일! <span class="point">모든 세션 종료 후 역대급 경품</span>이 와르르~</em>
                <span class="con">세션을 열심히 시청하기만 하면 매일 매일 각 세션이 종료될 때마다 즉시 추첨하여 다양한 경품을 드립니다.</span>
            </span>
                    </button>
                    <div class="event_a">
                        <ul class="event_con_list">
                            <li class="event_con_item item1">
                                <h4>참여방법</h4>
                                <div class="event_item_con">
                                    <em>하나</em>등록한 날짜에 언리얼 서밋 온라인 2022 체크인하기<br />
                                    <em>둘</em>세션을 끝까지 시청하기만 하면 자동 응모!
                                </div>
                            </li>
                            <li class="event_con_item item2">
                                <h4>이벤트 기간</h4>
                                <div class="event_item_con">
                                    2022.9.27(화) - 2022.9.30(금)
                                </div>
                            </li>
                            <li class="event_con_item item3">
                                <h4>당첨자 발표</h4>
                                <div class="event_item_con">
                                    매일 모든 세션 종료 후 즉시 추첨 및 발표
                                </div>
                            </li>
                            <li class="event_con_item item4">
                                <h4>경품</h4>
                                <div class="event_item_con">
                                    <ul class="event_giveaway_list">
                                        <li class="event_giveaway_item">
                                            <span class="num"><em class="num">1</em>명</span>
                                            <div class="giveaway">
                                                <div class="img">
                                                    <img src="" alt="">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="event_giveaway_item">
                                            <span class="num"><em class="num">2</em>명</span>
                                            <div class="giveaway">
                                                <div class="img">
                                                    <img src="" alt="">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="event_giveaway_item">
                                            <span class="num"><em class="num">2</em>명</span>
                                            <div class="giveaway">
                                                <div class="img">
                                                    <img src="" alt="">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="event_giveaway_item">
                                            <span class="num"><em class="num">3</em>명</span>
                                            <div class="giveaway">
                                                <div class="img">
                                                    <img src="" alt="">
                                                </div>
                                            </div>
                                        </li>
                                        <li class="event_giveaway_item">
                                            <span class="num"><em class="num">3</em>명</span>
                                            <div class="giveaway">
                                                <div class="img">
                                                    <img src="" alt="">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <p class="warning">사정에 따라 경품은 변경될 수 있습니다.</p>
                    </div>
                    <button type="button" class="close"><span>닫기</span></button>
                </li>
                <li class="event_item event_item3">
                    <button type="button" class="acc_btn">
                        <span class="num"><span class="num_inner">3</span></span>
                        <span class="title_wrap">
               <em class="title">설문을 통해 여러분의 <span class="point">소중한 의견을 공유</span> 해 주세요!</em>
               <span class="con">매일 모든 세션 종료 후에 진행되는 설문조사에 성실히 답변해 주시면 추첨을 통해 경품을 드립니다.</span>
             </span>
                    </button>
                    <div class="event_a">
                        <ul class="event_con_list">
                            <li class="event_con_item item1">
                                <h4>참여방법</h4>
                                <div class="event_item_con">
                                    <em>하나</em>이벤트 기간 내에 언리얼 서밋 온라인 2022 사전 등록 완료하기<br />
                                    <em>둘</em>매일 마지막 세션 종료 후 진행되는 설문에 성실히 응답하기
                                </div>
                            </li>
                            <li class="event_con_item item2">
                                <h4>이벤트 기간</h4>
                                <div class="event_item_con">
                                    2022.9.27(화) - 2022.9.30(금)
                                </div>
                            </li>
                            <li class="event_con_item item3">
                                <h4>당첨자 발표</h4>
                                <div class="event_item_con">
                                    2022.10.11(화), 개별 연락 예정
                                </div>
                            </li>
                            <li class="event_con_item item4">
                                <h4>경품</h4>
                                <div class="event_item_con">
                                    <div class="coupon">
                                        <div class="coupon_count"><em>80</em>명</div>
                                        <div class="img">
                                            <img src="https://epiclounge.co.kr/v3/resource_0829/images/main/coupon.png" alt="배달의민족 상품권 10,000원 권">
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <p class="warning">사정에 따라 경품은 변경될 수 있습니다.</p>
                    </div>
                    <button type="button" class="close"><span>닫기</span></button>
                </li>
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
                <!--<a href="" class="sns_btn kakao"><span>카카오톡</span></a>-->
                <button type="button"  class="sns_btn cafe" onclick="shareNaver()" value="네이버공유하기" ><span>네이버카페</a></span></button>
                <button type="button" class="sns_btn facebook" onclick="shareFacebook()""><span>페이스북</span></button>
                <a href="#" id="sns_urlCoby" class="sns_btn link" title="새창"onclick="copy()">링크</a>

                <script>
                  function copyToClipboard(val) {
                    const t = document.createElement("textarea");
                    document.body.appendChild(t);
                    t.value = val;
                    t.select();
                    document.execCommand('copy');
                    document.body.removeChild(t);
                  }
                  function copy() {
                    copyToClipboard('https://www.epiclounge.co.kr/v3/unrealsummit2022.php');
                    alert("복사되었습니다.");
                    console.log('Copied!');
                  }
                </script>
            </div>
        </div>
    </nav>
    <!--공통-->
    <?php include 'unrealsummit/sessions1.php' ?>
    <!--게임-->
    <?php include 'unrealsummit/sessions2.php' ?>
    <!--영화-->
    <?php include 'unrealsummit/sessions3.php' ?>
    <!--자동차-->
    <?php include 'unrealsummit/sessions4.php' ?>
    <!--푸터-->
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