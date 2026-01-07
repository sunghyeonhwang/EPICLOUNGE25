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
    <meta property="og:type" content="website">
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:image:height" content="630px" />
    <meta property="og:image:width" content="1200px" />
    <meta property="og:description" content="" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/static/pretendard.css">
<link rel="stylesheet" href="/v3/resource/css/common.css">
    <link rel="stylesheet" href="/v3/resource_0829/css/main.css">
    <link rel="stylesheet" href="/v3/resource_0829/css/event_letsmakegame.css">
    <script src="/v3/resource_0829/js/jquery-3.4.1.min.js"></script>
    <script src="/v3/resource_0829/js/slick.min.js"></script>
    <script src="/v3/resource_0829/js/ScrollTrigger.min.js"></script>
<script src="/v3/resource/js/main.js"></script>
    <!--<script src="/v3/resource_0829/js/common.js"></script>
    <script src="/v3/resource_0829/js/main.js"></script>-->

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
                            <button type="button" class="visual_btn type1">무료 등록하기</button>
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
                        <span class="sub_title">언리얼 서밋 온라인 2022에 </span>
                        <em>모든 산업의 크리에이터분들을 초대합니다.</em>
                    </h3>
                    <div class="text">
                       언리얼 서밋은 언리얼 엔진의 최신 기술, 에코시스템 그리고 영감을 주는 리얼타임 3D 인터랙티브 콘텐츠 제작 경험을 공유하기 위해 에픽게임즈 코리아에서 주관하는 연례 컨퍼런스입니다. <br/>
                       게임, 영화, TV, 애니메이션, 건축, 그리고 자동차 등의 전 산업은 언리얼 엔진의 리얼타임 3D 기술로 통합되고 있고, 크리에이터들의 스토리텔링과 경험하는 방식을 혁신하고 있습니다.<br/>
                       언리얼 서밋 온라인 2022는 UE5, 디지털 휴먼, 디지털 트윈, 버추얼 프로덕션, 메타버스 등  전 산업을 관통하는 리얼타임 인터랙티브 콘텐츠 제작의 최신 기술과 미래를 엿볼 수 있는 세션들이 함께 합니다. <br/>디지털의 미래를 위한 창의적인 영감을 얻어 보세요.
                    </div>
                </div>
                <div class="video">
                    <div class="youtube_wrap">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/g_ViG57oVjc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                     <button type="button" class="filter_btn">기획<span class="sub">2</span></button>-->
                     <button type="button" class="filter_btn all">필터열기<span class="sub"></span></button>
                    <button type="button" class="filter_btn filter">필터열기</button>
                </div>
                <div class="filters">
                    <ul class="filter_list">
                        <!--<li class="filter_item filter_item1">
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
                        <li class="filter_item filter_item2">
                            <h3 class="title">분야</h3>
                            <div class="check_wrap">
                                <span class="check">
                                    <input id="check2-1" type="checkbox" />
                                    <label for="check2-1">공통</label>
                                </span>
                                <span class="check">
                                    <input id="check2-2" type="checkbox" />
                                    <label for="check2-2">프로그래밍</label>
                                </span>
                                <span class="check">
                                    <input id="check2-3" type="checkbox" />
                                    <label for="check2-3">비주얼아트</label>
                                </span>
                                <span class="check">
                                    <input id="check2-4" type="checkbox" />
                                    <label for="check2-4">기획/프로덕션</label>
                                </span>
                                <span class="check">
                                    <input id="check2-5" type="checkbox" />
                                    <label for="check2-5">버추얼 프로덕션</label>
                                </span>
                                <span class="check">
                                    <input id="check2-6" type="checkbox" />
                                    <label for="check2-6">디지털 트윈</label>
                                </span>
                                <span class="check">
                                    <input id="check2-7" type="checkbox" />
                                    <label for="check2-7">디지털 휴먼</label>
                                </span>
                                <span class="check">
                                    <input id="check2-8" type="checkbox" />
                                    <label for="check2-8">메타버스</label>
                                </span>
                                <span class="check">
                                    <input id="check2-9" type="checkbox" />
                                    <label for="check2-9">언리얼 엔진 5</label>
                                </span>
                                <span class="check">
                                    <input id="check2-10" type="checkbox" />
                                    <label for="check2-10">기타</label>
                                </span>
                            </div>
                        </li>
                        <li class="filter_item filter_item2">
                            <h3 class="title">플랫폼</h3>
                            <div class="check_wrap">
                                <span class="check">
                                    <input id="check3-1" type="checkbox" />
                                    <label for="check3-1">크로스플랫폼</label>
                                </span>
                                <span class="check">
                                    <input id="check3-2" type="checkbox" />
                                    <label for="check3-2">PC</label>
                                </span>
                                <span class="check">
                                    <input id="check3-3" type="checkbox" />
                                    <label for="check3-3">모바일</label>
                                </span>
                                <span class="check">
                                    <input id="check3-4" type="checkbox" />
                                    <label for="check3-4">콘솔</label>
                                </span>
                                <span class="check">
                                    <input id="check3-5" type="checkbox" />
                                    <label for="check3-5">기타</label>
                                </span>
                            </div>
                        </li>
                        <li class="filter_item filter_item3">
                            <h3 class="title">난이도</h3>
                            <div class="check_wrap">
                                <span class="check">
                                    <input id="check4-1" type="checkbox" />
                                    <label for="check4-1">초급</label>
                                </span>
                                <span class="check">
                                    <input id="check4-2" type="checkbox" />
                                    <label for="check4-2">중급</label>
                                </span>
                                <span class="check">
                                    <input id="check4-3" type="checkbox" />
                                    <label for="check4-3">고급</label>
                                </span>
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
                        <button type="button" data-btn-pop="pop_1" class="program_part part1">
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
                        <button type="button" data-btn-pop="pop_2" class="program_part part2">
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
                        <button type="button" data-btn-pop="pop" class="program_part part1">
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
                        <button type="button" data-btn-pop="pop" class="program_part part2">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">4</span>
                                    <span class="time">14:40-15:30</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>카오스 물리 엔진 200% 활용 하기</h3>
                                <span class="owner">강정훈, 에픽게임즈 코리아</span>
                            </span>
                        </button>
                    </article>
                    <!-- 비율 1:1 -->
                    <article class="program program3">
                        <button type="button" data-btn-pop="pop" class="program_part part1">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">5</span>
                                    <span class="time">16:20-17:10</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>모델링 모드와 프랙처 모드로 부서진 배경 프랍 제작하기</h3>
                                <span class="owner">권오찬, 에픽게임즈 코리아</span>
                            </span>
                        </button>
                        <button type="button" data-btn-pop="pop" class="program_part part2">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">6</span>
                                    <span class="time">15:40-16:10</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>완전히 유연한 게임플레이 제작: UE5 모듈형 게임플레이</h3>
                                <span class="owner">박창현, 에픽게임즈 코리아</span>
                            </span>
                        </button>
                    </article>
             
                    <article class="program program4">
                        <button type="button" data-btn-pop="pop" class="program_part part1">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">7</span>
                                    <span class="time">16:20-17:10</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>완전히 유연한 게임플레이 제작: UE5 모듈형 게임플레이 </h3>
                                <span class="owner">박창현 에픽게임즈 코리아</span>
                            </span>
                        </button>
                    </article>
					
            <div class="schedule_bottom">
                <p class="info"><span>17:10 경품 추첨 &nbsp;</span><span >*당첨 확률은 시청 시간에 비례해 높아집니다.</span></p>
                <div class="bottom_text">
                    <p>각 세션을 클릭하면 상세 내용을 확인할 수 있습니다.</p>
                    <p>스케줄은 사정에 따라 사전 고지 없이 변경될 수 있습니다.</p>
                </div>
            </div>
                </div>
              
                <div class="program_content">
                    <article class="program program1">
                        <button type="button" data-btn-pop="pop" class="program_part part1">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">1</span>
                                    <span class="time">13:00-13:50</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>군중 애니메이션: 도시 샘플 플러그인으로 쉽게 따라하기</h3>
                                <span class="owner">박성제 에픽게임즈 코리아</span>
                            </span>
                        </button>
                        <button type="button" data-btn-pop="pop" class="program_part part2">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">2</span>
                                    <span class="time">14:00-14:50</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>[카트라이더: 드리프트] 멀티 플랫폼을 위한 최적화 드라이브</h3>
                                <span class="owner">강길전 니트로 스튜디오</span>
                            </span>
                        </button>
                    </article>
                    <article class="program program2">
                        <button type="button" data-btn-pop="pop" class="program_part part1">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">3</span>
                                    <span class="time">15:00-15:50</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>인디 게임 [RP7]의 아트 디렉션: 픽셀 게임이 풀 3D 게임으로 변하기까지</h3>
                                <span class="owner">이규영 터틀 크림</span>
                            </span>
                        </button>
                        <button type="button" data-btn-pop="pop" class="program_part part2">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">4</span>
                                    <span class="time">16:00-16:50</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>언리얼 엔진을 활용한 [퍼스트 디센던트] 제작기</h3>
                                <span class="owner">김준환 넥슨게임즈</span>
                            </span>
                        </button>
                    </article>
                    <article class="program program4">
                        <button type="button" data-btn-pop="pop" class="program_part part1">
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
						<p class="info"><span>17:50 경품 추첨 &nbsp;</span><span >*당첨 확률은 시청 시간에 비례해 높아집니다.</span></p>
						<div class="bottom_text">
							<p>각 세션을 클릭하면 상세 내용을 확인할 수 있습니다.</p>
							<p>스케줄은 사정에 따라 사전 고지 없이 변경될 수 있습니다.</p>
						</div>
					</div>
                </div>
                <div class="program_content">
                    <article class="program program1">
                        <button type="button" data-btn-pop="pop" class="program_part part1">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">1</span>
                                    <span class="time">13:00-13:30</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>콘텐츠 산업의 미래를 여는 리얼타임 3D 기술 언리얼 엔진</h3>
                                <span class="owner">최용승 에픽게임즈 코리아</span>
                            </span>
                        </button>
                        <button type="button" data-btn-pop="pop" class="program_part part2">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">2</span>
                                    <span class="time">13:40-14:30</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>언리얼 엔진 프리비즈를 통한 탄력적인 영상 연출 파이프라인</h3>
                                <span class="owner">김진우 쿠트 이미지웍스</span>
                            </span>
                        </button>
                    </article>
                    <article class="program program2">
                        <button type="button" data-btn-pop="pop" class="program_part part1">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">3</span>
                                    <span class="time">14:40-15:30</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>언리얼 엔진을 활용한 3D 애니메이션 [극장판 윌벤져스: 수상한 캠핑 대소동] 제작기</h3>
                                <span class="owner">오충원, 신창환 스튜디오게일</span>
                            </span>
                        </button>
                        <button type="button" data-btn-pop="pop" class="program_part part2">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">4</span>
                                    <span class="time">15:40-16:30</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>버추얼 프로덕션 TV & 라이브 이벤트 적용 사례</h3>
                                <span class="owner">비브스튜디오</span>
                            </span>
                        </button>
                    </article>
                    <article class="program program3">
                        <button type="button" data-btn-pop="pop" class="program_part part1">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">5</span>
                                    <span class="time">16:40-17:30</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>메타휴먼 기반의 버추얼 캐릭터 제작기: 실제 개발 사례를 중심으로 </h3>
                                <span class="owner">최성민 자이언트스텝</span>
                            </span>
                        </button>
                        <button type="button" data-btn-pop="pop" class="program_part part2">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">6</span>
                                    <span class="time">17:40-18:30</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>Neflix VP Open House in Korea: 성공적인 버추얼 프로덕션 콘텐츠 제작과 언리얼 엔진</h3>
                                <span class="owner">임주영 웨스트월드</span>
                            </span>
                        </button>
                    </article>
                   
					<div class="schedule_bottom">
						<p class="info"><span>18:30 경품 추첨 &nbsp;</span><span >*당첨 확률은 시청 시간에 비례해 높아집니다.</span></p>
						<div class="bottom_text">
							<p>각 세션을 클릭하면 상세 내용을 확인할 수 있습니다.</p>
							<p>스케줄은 사정에 따라 사전 고지 없이 변경될 수 있습니다.</p>
						</div>
					</div>
                </div>
                <div class="program_content">
                    <article class="program program1">
                        <button type="button" data-btn-pop="pop" class="program_part part1">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">1</span>
                                    <span class="time">13:00-13:45</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>제조 산업 디지털 트랜스포메이션을 지원하는 에픽 에코시스템</h3>
                                <span class="owner">진득호 에픽게임즈 코리아</span>
                            </span>
                        </button>
                        <button type="button" data-btn-pop="pop" class="program_part part2">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">2</span>
                                    <span class="time">13:55-14:40</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>[VARLOS] 항만 모니터링 시스템: 효율적인 항만 물류 관리를 위한 디지털 트윈</h3>
                                <span class="owner">김대희, 이은규 삼우이머션</span>
                            </span>
                        </button>
                    </article>
                    <article class="program program2">
                        <button type="button" data-btn-pop="pop" class="program_part part1">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">3</span>
                                    <span class="time">14:50-15:35</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>BIM 데이터를 XR 콘텐츠로 자동 생성하는 파이프라인과 건설 현장에서의 증강휴먼 운용 과정</h3>
                                <span class="owner">정재헌 에스엘즈</span>
                            </span>
                        </button>
                        <button type="button" data-btn-pop="pop" class="program_part part2">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">4</span>
                                    <span class="time">15:45-16:30</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>서울을 UE5 디지털 트윈으로 구현한 [Project RYU]</h3>
                                <span class="owner">류충현 류 프로덕션</span>
                            </span>
                        </button>
                    </article>
                    <article class="program program3">
                        <button type="button" data-btn-pop="pop" class="program_part part1">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">5</span>
                                    <span class="time">16:40-17:25</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>서울시 공간정보플랫폼 S-Map 데이터를 활용한 Cesium 언리얼 엔진 통합</h3>
                                <span class="owner">김태현 서울기술연구원</span>
                            </span>
                        </button>
                        <button type="button" data-btn-pop="pop" class="program_part part2">
                            <span class="img_wrap">
                                <span class="img" style="background-image:url(/v3/resource_0829/images/main/session_bg.jpg)"></span>
                                <span class="title">
                                    <span class="num">6</span>
                                    <span class="time">17:35-18:20</span>
                                </span>
                            </span>
                            <span class="program_con">
                                <h3>리얼타임 레이 트레이싱을 이용한 차량 아웃사이드 미러 및 디지털 사이드 미러 구현</h3>
                                <span class="owner">류승열 현대자동차</span>
                            </span>
                        </button>
                    </article>
                
					
					<div class="schedule_bottom">
						<p class="info"><span>18:20 경품 추첨 &nbsp;</span><span >*당첨 확률은 시청 시간에 비례해 높아집니다.</span></p>
						<div class="bottom_text">
							<p>각 세션을 클릭하면 상세 내용을 확인할 수 있습니다.</p>
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
                        <span class="num"><span class="num_inner">1</span></span>
                        <span class="title_wrap">
                            <em class="title">일찍 등록하고 경품 받자!</em>
                            <span class="con">언리얼 서밋을 사전 등록하는 분들 중 추첨을 통해 xxx분에게 xx를 드립니다.</span>
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
                                    2022.8.29(월) ~ 2022.9.4(일)
                                </div>
                            </li>
                            <li class="event_con_item item3">
                                <h4>당첨자 발표: </h4>
                                <div class="event_item_con">
                                   2022.9.4(일)
                                </div>
                            </li>
                            <li class="event_con_item item4">
                                <h4>경품:</h4>
                                <div class="event_item_con">
                                    <div class="inner_list">
                                        <div class="inner_item">
                                            <div class="img"><img src="/v3/resource_0829/images/main/icecream.png" alt=""></div>
                                            <div class="title">베스킨 라빈스 싱클킹 100명 </div>
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
                                등록한 날짜에 언리얼 서밋 온라인 2022 체크인하기<br>
                                원하는 트랙의 세션을 시청하기만 하면 자동 응모!
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
                        <p class="warning"></p>
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
                               매일 모든 세션 종료 후 즉시 추첨 및 발표ac
                               </div>
                           </li>
                           <li class="event_con_item item4">
                               <h4>경품</h4>
                               <div class="event_item_con">
               
                               </div>
                           </li>
                       </ul>
                       <p class="warning"></p>
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
                               언리얼 서밋 기간 중 매일 오후6시
                               </div>
                           </li>
                           <li class="event_con_item item4">
                               <h4>경품</h4>
                               <div class="event_item_con">
									<div class="inner_item">
										<div class="img"><img src="/v3/resource_0829/images/main/bl_img2.png" alt=""></div>
										<div class="title">배달의민족 1만원권 총 40명</div>
									</div>
                                        
               
                               </div>
                           </li>
                       </ul>
                       <p class="warning"></p>
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
                        <p>네, <a href="" target="_blank" style="color:#FFC700">무료 등록</a>을 하셔야 시청하실 수 있습니다.</p>
                    </div>
                    <button type="button" class="close"></button>
                </div>
                <div class="acc_item">
                    <button type="button" class="acc_btn">
                        <span class="title">등록 정보는 어떻게 수정하나요?</span>
                    </button>
                    <div class="acc_con">
                        <p><a href="" target="_blank" style="color:#FFC700"> 등록 확인 </a>을 통해 등록 정보를 수정하실 수 있습니다.</p>
                    </div>
                    <button type="button" class="close"></button>
                </div>
                <div class="acc_item">
                    <button type="button" class="acc_btn">
                        <span class="title">1인 1회만 등록이 가능한가요?</span>
                    </button>
                    <div class="acc_con">
                        <p>동일한 휴대번호/이메일 주소로 1회만 등록이 가능하며, 추가 등록은 불가능합니다.</p>
                    </div>
                    <button type="button" class="close"></button>
                </div>
                <div class="acc_item">
                    <button type="button" class="acc_btn">
                        <span class="title">언리얼 서밋 온라인 2022는 어떻게 시청하나요?</span>
                    </button>
                    <div class="acc_con">
                        <p>1. 무료 등록을 하신 경우 등록된 이메일 주소로 시청 링크를 발송해 드립니다.<br/>
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
                        <p>언리얼 서밋 온라인 2021 등록과 관련된 궁금하신 사항은 사무국으로 문의해 주세요.<br/>
                            <a href="" target="_blank" style="color:#FFC700">메일</a> 및 <a href="" target="_blank" style="color:#FFC700">전화(02-326-3701)</a>로 문의가 가능하며, 오전 10시 - 오후 5시 (점심시간 12시 - 1시)까지 운영됩니다.</p>
                    </div>
                    <button type="button" class="close"></button>
                </div>
            </div>
        </div>
    </section>

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


    <nav class="nav">
        <div class="direction">
            <button type="button" class="up"></button>
            <button type="button" class="down"></button>
        </div>
        <div class="sns">
            <div class="title">SNS</div>
            <div class="btn_wrap">
                <a href="" class="sns_btn kakao"><span>카카오톡</span></a>
                <a href="" class="sns_btn cafe"><span>네이버카페</span></a>
                <a href="" class="sns_btn facebook"><span>페이스북</span></a>
                <a href="" class="sns_btn link"><span>링크</span></a>
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
                    <h2>카오스 물리 엔진 200% 활용 하기</h2>
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
                        <span class="date">2022.09.28 14:00-14:50</span>
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
<?php include 'inc/common_footer.php'; ?>

</div>
</body>
</html>