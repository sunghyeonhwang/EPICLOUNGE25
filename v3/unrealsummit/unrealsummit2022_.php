
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
    <link rel="stylesheet" href="/v3/resource_0829/css/main.css">
    <link rel="stylesheet" href="/v3/resource_0829/css/event_letsmakegame.css">
    <script src="/v3/resource_0829/js/jquery-3.4.1.min.js"></script>
    <script src="/v3/resource_0829/js/slick.min.js"></script>
    <script src="/v3/resource_0829/js/ScrollTrigger.min.js"></script>
    <!--<script src="/v3/resource_0829/js/common.js"></script>
    <script src="/v3/resource_0829/js/main.js"></script>-->

    <title>게임 제작을 위한 시작해요 언리얼</title>
</head>
<body>
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
                        <img src="/v3/resource_0829/images/main/logo.svg" alt="로고">
                    </div>
                    <div class="con_inner">
                        <img src="/v3/resource_0829/images/main/visual_con.svg" alt="">
                        <img src="/v3/resource_0829/images/main/visual_con2.svg" alt="">
                        <!--                    <h2>-->
                        <!--                        <div class="line1">언리얼 서밋</div>-->
                        <!--                        <div class="line2"></div>-->
                        <!--                        <div class="date"><span></span></div>-->
                        <!--                        <button type="button" class="more">캘린더 추가</button>-->
                        <!--                        <a href="#n" class="more">캘린더 추가</a>-->
                        <!--                    </h2>-->
                        <div class="btn_wrap">
                            <button type="button" class="visual_btn type1">무료등록</button>
                            <button type="button" class="visual_btn type2">등록확인</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="visual_menu_wrap">
                <div class="visual_menu">
                    <button type="button" class="visual_menu_btn" data-index="2">언리얼 서밋 소개</button>
                    <button type="button" class="visual_menu_btn" data-index="3">스케줄</button>
                    <button type="button" class="visual_menu_btn" data-index="4">이벤트</button>
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
      });
    </script>
    <section class="intro" data-page-index="2">
        <div class="wrap">
            <h2>
                <img src="/v3/resource_0829/images/main/intro_title1.svg" alt="언리얼 서밋">
                <img src="/v3/resource_0829/images/main/intro_title2.svg" alt="ONLINE2022">
            </h2>
            <div class="con_wrap">
                <div class="con">
                    <h3>
                        <span class="sub_title">EST 2010</span>
                        <em>UNREAL SUMMIT</em>
                    </h3>
                    <div class="text">
                        2010년을 시작으로 올해 열두 번째를 맞이한 언리얼 서밋은 언리얼 엔진의 최신 기술 및 개발자들과 정보를 공유하는 국내 언리얼 엔진 컨퍼런스입니다.<br/>
                        2022년에는 언리얼 엔진 5 출시에 걸맞게 게임, 엔터테인먼트, 영화, 비디오, 애니메이션, 건축, 자동차등 각 분야의 전문가들의 수준 높은 강의를 온라인으로 들을 수 있습니다.
                    </div>
                </div>
                <div class="video">
                    <div class="youtube_wrap">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/WV3zqWj12_0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
            <h2>스케줄</h2>
            <div class="filter_wrap">
                <div class="filter_nav">
                    <button type="button" class="filter_btn">언리얼 엔진 5<span class="sub">1</span></button>
                    <button type="button" class="filter_btn">개발자<span class="sub">5</span></button>
                    <button type="button" class="filter_btn">비주얼 아트<span class="sub">4</span></button>
                    <button type="button" class="filter_btn">기획<span class="sub">2</span></button>
                    <button type="button" class="filter_btn all">ALL<span class="sub">12</span></button>
                    <button type="button" class="filter_btn filter">필터열기</button>
                </div>
                <div class="filters">
                    <ul class="filter_list">
                        <li class="filter_item filter_item1">
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
                        </li>
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
                        <li class="filter_item filter_item3">
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
                        <li class="filter_item filter_item4">
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
                        <div class="program_part part1">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">1</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                        <div class="program_part part2">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">1</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                    </article>
                    <!-- 비율 1:2 -->
                    <article class="program program2">
                        <div class="program_part part1">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">2</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                        <div class="program_part part2">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">1</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                    </article>
                    <!-- 비율 1:1 -->
                    <article class="program program3">
                        <div class="program_part part1">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">3</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                        <div class="program_part part2">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">1</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                    </article>
                    <!-- 1개만 있을 경우 -->
                    <article class="program program4">
                        <div class="program_part part1">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">4</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="program_content">
                    <article class="program program1">
                        <div class="program_part part1">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">2</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                        <div class="program_part part2">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">1</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                    </article>
                    <article class="program program2">
                        <div class="program_part part1">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">1</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                        <div class="program_part part2">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">1</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                    </article>
                    <article class="program program3">
                        <div class="program_part part1">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">1</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                        <div class="program_part part2">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">1</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                    </article>
                    <article class="program program4">
                        <div class="program_part part1">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">1</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                        <div class="program_part part2">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">1</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="program_content">
                    <article class="program program1">
                        <div class="program_part part1">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">3</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                        <div class="program_part part2">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">1</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                    </article>
                    <article class="program program2">
                        <div class="program_part part1">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">1</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                        <div class="program_part part2">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">1</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                    </article>
                    <article class="program program3">
                        <div class="program_part part1">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">1</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                        <div class="program_part part2">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">1</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                    </article>
                    <article class="program program4">
                        <div class="program_part part1">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">1</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                        <div class="program_part part2">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">1</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="program_content">
                    <article class="program program1">
                        <div class="program_part part1">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">4</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                        <div class="program_part part2">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">1</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                    </article>
                    <article class="program program2">
                        <div class="program_part part1">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">1</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                        <div class="program_part part2">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">1</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                    </article>
                    <article class="program program3">
                        <div class="program_part part1">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">1</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                        <div class="program_part part2">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">1</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                    </article>
                    <article class="program program4">
                        <div class="program_part part1">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">1</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                        <div class="program_part part2">
                            <div class="img_wrap">
                                <div class="img" style="background-image:url(./)"></div>
                                <div class="title">
                                    <span class="num">1</span>
                                    <span class="time">16:20-17:10</span>
                                </div>
                            </div>
                            <div class="program_con">
                                <h3>UE5의 모듈러 게임플레이
                                </h3>
                                <div class="owner">이인기, 포럼디앤피</div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <div class="schedule_bottom">
                <p class="info"><span>14:50 LIVE ! 경품 추첨 | 시청시간에 비례해 당첨확률이 올라갑니다.</span></p>
                <div class="bottom_text">
                    <p>각 세션을 클릭하면 상세 내용을 확인할 수 있습니다.</p>
                    <p>스케줄은 사정에 따라 사전 고지 없이 변경될 수 있습니다.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="event" data-page-index="4">
        <div class="wrap">
            <h2>이벤트</h2>
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
                                    당첨자 발표:
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
                                        <div class="inner_item">
                                            <div class="img"><img src="/v3/resource_0829/images/main/icecream.png" alt=""></div>
                                            <div class="title">베스킨 라빈스 싱클킹 100명 </div>
                                        </div>
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
                        <span class="num"><span class="num_inner">1</span></span>
                        <span class="title_wrap">
                            <em class="title">123</em>
                            <span class="con">123</span>
                        </span>
                    </button>
                    <div class="event_a">
                        <ul class="event_con_list">
                            <li class="event_con_item item1">
                                <h4>참여방법 : </h4>
                                <div class="event_item_con">

                                </div>
                            </li>
                            <li class="event_con_item item2">
                                <h4></h4>
                                <div class="event_item_con">

                                </div>
                            </li>
                            <li class="event_con_item item3">
                                <h4></h4>
                                <div class="event_item_con">

                                </div>
                            </li>
                            <li class="event_con_item item4">
                                <h4></h4>
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
                        <span class="num"><span class="num_inner">1</span></span>
                        <span class="title_wrap">
                            <em class="title">123</em>
                            <span class="con">123</span>
                        </span>
                    </button>
                    <div class="event_a">
                        <ul class="event_con_list">
                            <li class="event_con_item item1">
                                <h4></h4>
                                <div class="event_item_con">

                                </div>
                            </li>
                            <li class="event_con_item item2">
                                <h4></h4>
                                <div class="event_item_con">

                                </div>
                            </li>
                            <li class="event_con_item item3">
                                <h4></h4>
                                <div class="event_item_con">

                                </div>
                            </li>
                            <li class="event_con_item item4">
                                <h4></h4>
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
                        <span class="num"><span class="num_inner">1</span></span>
                        <span class="title_wrap">
                            <em class="title">123</em>
                            <span class="con">123</span>
                        </span>
                    </button>
                    <div class="event_a">
                        <ul class="event_con_list">
                            <li class="event_con_item item1">
                                <h4></h4>
                                <div class="event_item_con">

                                </div>
                            </li>
                            <li class="event_con_item item2">
                                <h4></h4>
                                <div class="event_item_con">

                                </div>
                            </li>
                            <li class="event_con_item item3">
                                <h4></h4>
                                <div class="event_item_con">

                                </div>
                            </li>
                            <li class="event_con_item item4">
                                <h4></h4>
                                <div class="event_item_con">

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
                        <p>네, 무료 등록을 하셔야 시청하실 수 있습니다.</p>
                    </div>
                    <button type="button" class="close"></button>
                </div>
                <div class="acc_item">
                    <button type="button" class="acc_btn">
                        <span class="title">무료 등록을 반드시 해야 하나요?</span>
                    </button>
                    <div class="acc_con">
                        <p>네, 무료 등록을 하셔야 시청하실 수 있습니다.</p>
                    </div>
                    <button type="button" class="close"></button>
                </div>
                <div class="acc_item">
                    <button type="button" class="acc_btn">
                        <span class="title">무료 등록을 반드시 해야 하나요?</span>
                    </button>
                    <div class="acc_con">
                        <p>네, 무료 등록을 하셔야 시청하실 수 있습니다.</p>
                    </div>
                    <button type="button" class="close"></button>
                </div>
                <div class="acc_item">
                    <button type="button" class="acc_btn">
                        <span class="title">무료 등록을 반드시 해야 하나요?</span>
                    </button>
                    <div class="acc_con">
                        <p>네, 무료 등록을 하셔야 시청하실 수 있습니다.</p>
                    </div>
                    <button type="button" class="close"></button>
                </div>
            </div>
        </div>
    </section>

    <section class="goods" data-page-index="6">
        <div class="wrap">
            <h2>굿즈</h2>
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
                        <div class="img" style="background-image:url(./images/main/slide1.jpg)"></div>
                        <div class="goods_con">
                            <h3>언리얼 엔진 5 블루투스 스피커</h3>
                            <div class="price">₩34,000</div>
                        </div>
                    </a>
                </div>
                <div class="goods_item">
                    <a href="" class="goods_anchor">
                        <div class="img" style="background-image:url(./images/main/slide2.jpg)"></div>
                        <div class="goods_con">
                            <h3>언리얼 엔진 5 블루투스 스피커</h3>
                            <div class="price">₩34,000</div>
                        </div>
                    </a>
                </div>
                <div class="goods_item">
                    <a href="" class="goods_anchor">
                        <div class="img" style="background-image:url(./images/main/slide1.jpg)"></div>
                        <div class="goods_con">
                            <h3>언리얼 엔진 5 블루투스 스피커</h3>
                            <div class="price">₩34,000</div>
                        </div>
                    </a>
                </div>
                <div class="goods_item">
                    <a href="" class="goods_anchor">
                        <div class="img" style="background-image:url(./images/main/slide2.jpg)"></div>
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

    <div class="pop">
        <button type="button" class="close">닫기</button>
        <div class="pop_inner">
            <div class="pop_title">
                <div class="pop_date">
                    <span class="date">2022.09.27 13:00~14:00</span>
                    <span class="category">공통</span>
                </div>
                <h2>작은 스튜디오에서 규모있는 게임을 만들기 위한 방법들: 모션캡처, 자바스크립트, WebRTC, 그리고 딥러닝</h2>
                <div class="calendar_btn_wrap">
                    <button class="calendar_btn" type="button">캘린더 저장 버튼
                    </button>
                    <span class="calendar_title">캘린더 저장</span>
                </div>
            </div>
            <div class="pop_con_wrap">
                <div class="title_img">
                    <div class="img" style="background-image:url(../images/main/123.jpg)">이미지</div>
                    <div class="owner_wrap">
                        <div class="img"  style="background-image:url(../images/main/123.jpg)">신광섭 이미지</div>
                        <div class="owner">
                            <div class="owner_name">신광섭</div>
                            <div class="owner_company">에픽게임즈 코리아</div>
                        </div>
                    </div>
                </div>
                <div class="pop_con">
                    <div class="left">
                        <div class="left_title">PS4, Switch , PC 플랫폼으로 인디게임 &lt;울트라 에이지&gt;를 개발하며 겪은 경험들을 공유하고 콘솔 플랫폼 개발부터 출시까지 전체 진행 과정과 멀티 플랫폼으로 개발하면서 생기는 여러 이슈들을 살펴보고 플랫폼 별로 최적화 경험을 공유하고 소규모 팀에서 멀티 플랫폼으로 게임을 개발하기 위한 다양한 팁을 소개합니다.
                        </div>
                        <p>언리얼 엔진 뿐만 아니라, 에픽의 다양한 에코시스템에 관심있는 분이라면 누구나</p>
                    </div>
                    <div class="right">
                        <ul class="right_list">
                            <li class="right_item">
                                <div class="title">산업</div>
                                <div class="con">
                                    <span>공통</span>
                                    <span>언리얼 엔진</span>
                                </div>
                            </li>
                            <li class="right_item">
                                <div class="title">분야</div>
                                <div class="con">
                                    <span>서비스</span>
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
                    </div>
                </div>
            </div>
            <button class="inner_close">
                <span>CLOSE</span>
            </button>
        </div>
    </div>

    <footer class="footer">
        <div class="wrap"></div>
    </footer>
</div>
</body>
</html>