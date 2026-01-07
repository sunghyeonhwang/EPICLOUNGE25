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
    <meta property="og:url" content="https://epiclounge.co.kr/unrealfest.php" />
    <meta property="og:image" content="https://unrealsummit16.cafe24.com/2023/fest_src/unrealfest_og_img.jpg" />
    <meta property="og:image:height" content="1080px" />
    <meta property="og:image:width" content="1920px" />
    <meta property="og:description" content="언리얼 페스트 2023 | 언리얼 페스트는 모든 크리에이터들을 위해 언리얼 엔진과 리얼타임 3D 인터랙티브 콘텐츠 제작을 위한 최신 기술과 혁신적인 제작 경험을 제공합니다. 언리얼 페스트에서 창작에 필요한 무한한 영감을 얻어 보세요!" />
    <meta name="naver-site-verification" content="374c7b8b38a950b57cfd67d5e14696efd33bc057" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/static/pretendard.css">
    <link rel="stylesheet" href="/v3/resource/css/common.css">
    <link rel="stylesheet" href="/v3/resource_fest/css/fest_0709.css">
    <!--<script src="/v3/resource_0829/js/common.js"></script>
    <script src="/v3/resource_0829/js/main.js"></script>-->
    <!--fB -->
      <link rel="apple-touch-icon" sizes="57x57" href="/v3/favicon/v3/favicon/apple-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="/v3/favicon/apple-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="/v3/favicon/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="/v3/favicon/apple-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="/v3/favicon/apple-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="/v3/favicon/apple-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="/v3/favicon/apple-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="/v3/favicon/apple-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="/v3/favicon/apple-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="/v3/favicon/android-icon-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="/v3/favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="/v3/favicon/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="/v3/favicon/favicon-16x16.png">
      <link rel="manifest" href="/v3/favicon/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="/v3/favicon/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">
        <!--일정추기-->
      <script>
       function addToGoogleCalendar() {
         var event = {
           'summary': 'Unreal Fest 2023 Seoul',
           'location': '오프라인 | 인터컨티넨탈 서울 코엑스 08.29 / 온라인 | 에픽 라운지 08.29-09.01',
           'description': '유료 오프라인 (1일간) 8.29, 인터컨티넨탈 서울 코엑스\n무료 온라인 (4일간) 8.29~9.1, 에픽 라운지\n\n언리얼 페스트(UNREAL FEST)는 언리얼 서밋의 새로운 글로벌 브랜드입니다. 언리얼 페스트는 언리얼 엔진과 리얼타임 3D 인터랙티브 콘텐츠 제작을 위한 최신 기술과 혁신적인 제작 경험을 제공합니다. 언리얼 페스트에서 창작에 필요한 무한한 영감을 얻어 보세요! \n\n등록 및 세션에 대한 자세한 정보는 7월 중에 공개될 예정입니다.',
           'start': {
             'dateTime': '20230829T103000',
             'timezone': 'Asia/Seoul',
           },
           'end': {
             'dateTime': '20230901T180000',
             'timezone': 'Asia/Seoul',
           },
           'reminders': {
             'useDefault': true,
             'overrides': [
               {'method': 'popup', 'minutes': 30},
             ],
           },
         };
       
            var url = 'https://calendar.google.com/calendar/render?action=TEMPLATE&';
            url += 'text=' + encodeURIComponent(event.summary);
            url += '&dates=' + encodeURIComponent(event.start.dateTime) + '/' + encodeURIComponent(event.end.dateTime);
            url += '&details=' + encodeURIComponent(event.description);
            url += '&location=' + encodeURIComponent(event.location);
            url += '&sf=true&output=xml';
        
            window.open(url);
          }
        </script>
        
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
<script></script>
        <script>
              function clip(){
              
                  var url = 'https://epiclounge.co.kr/unrealfest.php';    // <a>태그에서 호출한 함수인 clip 생성
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
                    const title = "언리얼 페스트 2023";
                    const url = "https://epiclounge.co.kr/unrealfest.php";
                    window.open(
                    "https://share.naver.com/web/shareView?url=" + url + "&title=" + title
                  );
                }
                
                // Facebook
                  function shareFacebook() {
                    const title = "언리얼 페스트 2023";
                    const url = "https://epiclounge.co.kr/unrealfest.php";
                    window.open(
                    "http://www.facebook.com/sharer/sharer.php?u=" + url + "&title=" + title
                  );
                }
            </script>

    <title>언리얼 페스트 2023 | Seoul</title>
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
            <video id="video" class="video" poster="" autoplay="true" muted="" loop="" playsinline="true">
                Sorry, your browser doesn't support embedded videos.
                <source src="https://unrealsummit16.cafe24.com/2023/unrealfest2023/main_video.mp4" type="video/mp4" >
            </video>
        </div>
        <div class="wrap">
            <div class="visual_con">
                <div class="visual_con_inner">
                   <!-- <div class="logo">
                      
                        <img src="/v3/resource_0829/images/main/logo_re.svg" alt="로고">
                    </div>-->
                    <div class="con_inner">
                      <p class="vi_img_1"><img class="main_v1" /></p>
                      <p class="vi_img_2"><img src="https://unrealsummit16.cafe24.com/2023/fest_src/text_date.svg" /></p>
                      <p class="vi_img_3"><img src="https://unrealsummit16.cafe24.com/2023/fest_src/text_date3.svg" /></p>
                      

                     <!--   <img src="https://unrealsummit16.cafe24.com/2023/unrealfest2023/visual_con_re_v1.svg" alt="">
                        <img src="https://unrealsummit16.cafe24.com/2023/unrealfest2023/visual_con_re_v2.svg" alt="">-->
                  
   <!-- <h3>더 자세한 정보는 7월 초에 공개될 예정입니다. </h3>-->
                     <div class="btn_wrap">
                        <!-- <button type="button" class="visual_btn type1" onclick="window.open('https://calendar.google.com/calendar/u/0/r/eventedit?dates=20230829T100000/20230901T180000&ctz=Asia/Seoul&text=Unreal+Fest+2023+Seoul&location=%EC%98%A4%ED%94%84%EB%9D%BC%EC%9D%B8+%7C+%EC%9D%B8%ED%84%B0%EC%BB%A8%ED%8B%B0%EB%84%A8%ED%83%88+%EC%BD%94%EC%97%91%EC%8A%A4+(08.29)/+%EC%98%A8%EB%9D%BC%EC%9D%B8+%7C+%EC%97%90%ED%94%BD+%EB%9D%BC%EC%9A%B4%EC%A7%80+(08.29-09.01)&details=%EC%96%B8%EB%A6%AC%EC%96%BC+%ED%8E%98%EC%8A%A4%ED%8A%B8%EB%8A%94+%EC%96%B8%EB%A6%AC%EC%96%BC+%EC%97%94%EC%A7%84%EA%B3%BC+%EB%A6%AC%EC%96%BC%ED%83%80%EC%9E%84+3D+%EC%9D%B8%ED%84%B0%EB%9E%99%ED%8B%B0%EB%B8%8C+%EC%BD%98%ED%85%90%EC%B8%A0+%EC%A0%9C%EC%9E%91%EC%9D%84+%EC%9C%84%ED%95%9C+%EC%B5%9C%EC%8B%A0+%EA%B8%B0%EC%88%A0%EA%B3%BC+%ED%98%81%EC%8B%A0%EC%A0%81%EC%9D%B8+%EC%A0%9C%EC%9E%91+%EA%B2%BD%ED%97%98%EC%9D%84+%EC%A0%9C%EA%B3%B5%ED%95%A9%EB%8B%88%EB%8B%A4.+%EC%96%B8%EB%A6%AC%EC%96%BC+%ED%8E%98%EC%8A%A4%ED%8A%B8%EC%97%90%EC%84%9C+%EC%B0%BD%EC%9E%91%EC%97%90+%ED%95%84%EC%9A%94%ED%95%9C+%EB%AC%B4%ED%95%9C%ED%95%9C+%EC%98%81%EA%B0%90%EC%9D%84+%EC%96%BB%EC%96%B4+%EB%B3%B4%EC%84%B8%EC%9A%94!&uid=7de0eb74-4fae-4cf1-bba0-5eea41eec29b');">캘린더 추가하기</button> -->
                        <!--<button type="button" class="visual_btn type1" onclick="addToGoogleCalendar()">캘린더 추가하기</button> -->
                        <!--<a class="visual_btn type1"  href="void(0);" onclick="alert('종료되었습니다. 감사합니다.');return false;">종료</a>-->
                     <a class="visual_btn type1"  href="https://epiclounge.co.kr/contents/replay.php" target="_self" style="color:#fff">다시보기</a>

                  <!--   <a class="visual_btn type1"  href="#register" >등록하기</a>-->
                  <!-- <a class="visual_btn type1"  href="https://epiclounge.co.kr/v3/application_check_in.html" style="color:#fff">시청하기</a>-->

						<!--<span>더 자세한 정보는 7월중에 공개될 예정입니다.</span>-->

                        </div>
                   <!--   <img src="https://unrealsummit16.cafe24.com/2023/unrealfest2023/visual_con_re4.svg" alt="">
                    <div class="btn_wrap">
                        <button type="button" class="visual_btn type2"><a href="javascript:alert('종료되었습니다.');">종료</a></button>
                        
                        </div>-->
                        
                        
                    </div>
                    
                </div>
            </div> 
          <div class="visual_menu_wrap">
                <div class="visual_menu">
                    <button type="button" class="visual_menu_btn" data-index="2">ABOUT</button>
                    <button type="button" class="visual_menu_btn" data-index="3">SESSIONS</button>
                    <button type="button" class="visual_menu_btn" data-index="4">REGISTER</button>
                    <button type="button" class="visual_menu_btn" data-index="5">EVENTS</button>
                    <button type="button" class="visual_menu_btn" data-index="6">FAQ</button>
                </div>
            </div>
         <!--   <div class="scroll_down">
                <span>SCROLL DOWN</span>
            </div>-->
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
                $eventBtn2 = $event.find('.close');
            $eventBtn.on('click', function(){
                var $this = $(this),
                    $thisParent = $this.closest('.event_item');
                $thisParent.toggleClass('active');
            });

            $eventBtn2.on('click', function(){
                var $this = $(this),
                    $thisParent = $this.closest('.event_item');
                $thisParent.toggleClass('active');
            });

          var $schedule = $('.schedule'),
        $filterBtn = $schedule.find('.filter_btn.filter');

    $filterBtn.on('click', function() {
        var $this = $(this),
            $thisParent = $this.closest('.filter_wrap');
        $thisParent.toggleClass('active');
    });

    var $dateNav = $('.date_nav'),
        $programWrap = $schedule.find('.program_wrap');

    // 기본으로 active 클래스를 추가할 2번째 버튼을 선택합니다.
    var $defaultActiveButton = $dateNav.eq(3);

    // 초기에 기본으로 active 클래스를 추가합니다.
    $defaultActiveButton.addClass('active');
    $programWrap.find('.program_content').eq(3).addClass('active');

    $dateNav.on('click', function() {
        var $this = $(this),
            thisIndex = $this.index();
        
        // 클릭된 내비게이션 요소에 active 클래스를 추가하고 형제들로부터 제거합니다.
        $this.addClass('active');
        $this.siblings().removeClass('active');
        
        // 프로그램 콘텐츠를 업데이트합니다.
        $programWrap.find('.program_content').eq(thisIndex).addClass('active').siblings().removeClass('active');
    });

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
            <div class="con_wrap">
                <div class="con">
                    <h3>
                        
                        <em>언리얼 페스트(UNREAL FEST)는 '언리얼 서밋'의 새로운 글로벌 브랜드입니다. </em>
                    </h3>
                   <div class="text">
                     <p>언리얼 페스트는 모든 크리에이터들을 위해 언리얼 엔진과 리얼타임 3D 인터랙티브 콘텐츠 제작을 위한 최신 기술과 혁신적인 제작 경험을 제공합니다. 언리얼 페스트에서 창작에 필요한 무한한 영감을 얻어 보세요!</p>
                     
                   </div>
                </div>
               
            </div>
        </div>
    </section>
    <?php include 'unrealfest23_description/schedule.php' ?>

    <section class="goods" data-page-index="4" id="register">
        <div class="wrap">
            <h2>REGISTER</h2>
          <!--  <div class="goods_nav">
                <button type="button" class="prev"><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="18px" height="12px">
                   <path fill-rule="evenodd"  fill="rgb(66, 69, 81)"
                          d="M6.206,11.206 C5.816,11.597 5.183,11.597 4.792,11.206 L0.293,6.706 C0.97,6.315 0.97,5.683 0.293,5.293 L4.792,0.791 C5.183,0.401 5.816,0.401 6.206,0.791 C6.597,1.182 6.597,1.815 6.206,2.206 L3.413,4.999 L17.0,4.999 C17.552,4.999 17.999,5.446 17.999,5.999 C17.999,6.552 17.552,6.999 17.0,6.999 L3.413,6.999 L6.206,9.792 C6.597,10.182 6.597,10.816 6.206,11.206 Z"/>
                </svg></button>
                <button type="button" class="next"><svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="18px" height="12px">
                  <!--  <path fill-rule="evenodd"  fill="rgb(66, 69, 81)"
                          d="M6.206,11.206 C5.816,11.597 5.183,11.597 4.792,11.206 L0.293,6.706 C0.97,6.315 0.97,5.683 0.293,5.293 L4.792,0.791 C5.183,0.401 5.816,0.401 6.206,0.791 C6.597,1.182 6.597,1.815 6.206,2.206 L3.413,4.999 L17.0,4.999 C17.552,4.999 17.999,5.446 17.999,5.999 C17.999,6.552 17.552,6.999 17.0,6.999 L3.413,6.999 L6.206,9.792 C6.597,10.182 6.597,10.816 6.206,11.206 Z"/>
                </svg></button>
            </div>-->
            <div class="register_box">
				<div class="register_box_wrap">
					<div class="register_ti" id="#register">
						  
						<div class="top_ticket price_ticket">
							<div class="ticket_wrap">
								<div class="price_ticket_1"><span>오프라인+온라인</span></div>
								<div class="price_ticket_2">30,000원</div>
								<div class="price_ticket_3">60,000원</div>
								<div class="price_ticket_4">*얼리버드 특별 50% 할인가(~8월6일까지)</div>
							</div>
						</div>
						<div class="mid_ticket price_ticket">
							<div class="ticket_wrap">
								<ul>
									<li>오프라인 1일+온라인 4일권</li>
                  <li><strong>팀 스위니 대표 및 전 산업의 전문가들의 현장감 있는 세션</strong></li>
                  <li>참석자 전원에게 언리얼 한정판 굿즈 증정</li>
									
									<li>오프라인 전용 Q&A 및 경품 추첨 이벤트</li>
									<li>오프라인 등록 시 온라인 자동 등록</li>
								</ul>
								<span class="btn_box">
                  <a href="javascript:alert('등록이 마감되었습니다.');" onfocus="this.blur()" class="" >오프라인 마감</a>
								</span>
							</div>
						</div>
					</div>
					<div class="register_ti" id="#register">
						
							
							<div class="top_ticket free_ticket">
							  	<div class="ticket_wrap">
									<div class="free_ticket_1"><span>온라인</span></div>
									<div class="free_ticket_2">FREE</div>
								 </div>
							</div>
							<div class="mid_ticket free_ticket">
								<div class="ticket_wrap">
									<ul>
										<li>온라인 4일권</li>
										<li>채팅 및 Q&A 이용</li>
                   <li class="off_li"> 1일차 Q&A는 오프라인 참석자만 이용 가능</li>
                   <li>온라인 이벤트</li>
										<li class="off_li">1일차 경품 추첨은 오프라인 대상으로만 진행</li>
										<li class="off_li">오프라인 참석 불가</li>
									</ul>
									<span class="btn_box">
										<!--<a href="application_terms.html?pay_method=N" class="" target="_blank">온라인 등록</a>-->
                    <a href="javascript:alert('등록이 마감되었습니다.');" onfocus="this.blur()" class="" >종료</a>

									</span>

								</div>
							</div>
					</div>
				</div>
				
				<div class="register_info_text">
					<div class="info_left_box">
						<h3>안내</h3>
						<ul>
							<li>QR 코드는 카카오톡(or 문자)으로 발송됩니다.</li>
							<li>행사 당일 오전에 한 번 더 발송될 예정입니다.</li>
							<li>등록 정보 변경 및 취소 정보는 FAQ를 참고해 주세요.</li>
						</ul>
					</div>
					<div class="info_right_box">
						<h3>환불 및 취소 규정</h3>
						<ul>
							<li>행사 1일 전까지: 전액 환불 (오전 9시 30분 마감)</li>
							<li>행사 당일: 환불 불가</li>
							<li>취소 및 환불은 신청 후 최대 5일 이내로 진행됩니다.</li>
						</ul>
					</div>
				</div>
            </div>
        </div>
    </section>

    
      <section class="event" data-page-index="5">
          <div class="wrap">
              <h2>EVENTS</h2>
			  <ul class="tab_btn_event">
			  	<li><button type="button" class="btn_1 on">오프라인</button></li>
			  	<li><button type="button" class="btn_2">온라인</button></li>
			  </ul>
              <ul class="event_list_2 off_line on">
				<li class="li_1"><img src="https://unrealsummit16.cafe24.com/2023/fest_src/off_event_1.png"></li>
				<li class="li_2"><img src="https://unrealsummit16.cafe24.com/2023/fest_src/off_event_2.png"></li>
				<li class="li_3"><img src="https://unrealsummit16.cafe24.com/2023/fest_src/off_event_3.png"></li>
				<li class="li_4"><img src="https://unrealsummit16.cafe24.com/2023/fest_src/off_event_4.png"></li>
				<li class="li_5"><img src="https://unrealsummit16.cafe24.com/2023/fest_src/off_event_5.png"></li>
				<li class="li_6"><img src="https://unrealsummit16.cafe24.com/2023/fest_src/off_event_6.png"></li>
				</ul>
              <ul class="event_list_2 on_line">
				<li class="li_1"><img src="https://unrealsummit16.cafe24.com/2023/fest_src/on_event_1.png"></li>
				<li class="li_2"><img src="https://unrealsummit16.cafe24.com/2023/fest_src/on_event_2.png"></li><br />
				<li class="li_3"><img src="https://unrealsummit16.cafe24.com/2023/fest_src/on_event_3.png"></li>
				<li class="li_4"><img src="https://unrealsummit16.cafe24.com/2023/fest_src/on_event_4.png"></li>
				</ul>

<div class="bottom_text">
          <p>사정에 따라 경품은 변경될 수 있습니다.</p>
        </div>
              <!--    <li class="event_item event_item1">
                      <button type="button" class="acc_btn">
                          <span class="num"><span class="num_inner">1</span></span>
                          <span class="title_wrap">
                <em class="title">매일! <span class="point">매 세션! 시청</span>만 해도 <span class="point">언리얼 굿즈</span>가?</em>
                <span class="con">세션을 열심히 시청하기만 하면 매일 매일 각 세션이 종료될 때마다 즉시 추첨하여 다양한 경품을 드립니다.</span>
              </span>
                      </button>
                      <div class="event_a">
                          <ul class="event_con_list">
                              <li class="event_con_item item1">
                                  <h4>참여 방법</h4>
                                  <div class="event_item_con">
                                      <em>하나</em>이벤트 기간 내에 언리얼 페스트 2023 사전 등록 완료하기<br />
                                      <em>둘</em>등록한 날짜에 세션을 시청하면 자동 응모!
                                  </div>
                              </li>
                              <li class="event_con_item item2">
                                  <h4>이벤트 기간</h4>
                                  <div class="event_item_con">
                                      2023.08.29(화) - 2022.9.1(금)
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
                                                  <img src="https://unrealsummit16.cafe24.com/v3/resource_0829/images/main/prize.png" alt="">
                                              </div>
                                          </div>
                                          <div class="right">
                                              <div class="con">
                                                  <ul class="con_list">
                                                      <li class="con_item">언리얼 텀블러 100명</li>
                                                      <li class="con_item">언리얼 렌즈클리너 30명</li>
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
                  <em class="title">매일 <span class="point">매일!</span> 모든 세션 종료 후 <span class="point">역대급 경품</span>이 와르르~</em>
                  <span class="con">세션을 끝까지 시청하기만 하면 매일 매일 모든 세션이 종료된 후 즉시 추첨을 통해 푸짐한 경품을 드립니다.</span>
              </span>
                      </button>
                      <div class="event_a">
                          <ul class="event_con_list">
                              <li class="event_con_item item1">
                                  <h4>참여방법</h4>
                                  <div class="event_item_con">
                                      <em>하나</em>등록한 날짜에 언리얼 페스트 2023 체크인하기<br />
                                      <em>둘</em>세션을 끝까지 시청하기만 하면 자동 응모!
                                  </div>
                              </li>
                              <li class="event_con_item item2">
                                  <h4>이벤트 기간</h4>
                                  <div class="event_item_con">
                                      2023.08.29(화) - 2022.9.1(금)
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
                                                      <img src="https://unrealsummit16.cafe24.com/2023/unrealfest2023/event2_prize_1.png" alt="">
                                                  </div>
                                                  <span class="giveawaytext"> </span>
    
                                              </div>
                                          </li>
                                          <li class="event_giveaway_item">
                                              <span class="num"><em class="num">2</em>명</span>
                                              <div class="giveaway">
                                                  <div class="img">
                                                      <img src="https://unrealsummit16.cafe24.com/v3/resource_0829/images/main/event2_prize_4.png" alt="">
                                                  </div>
                                                  <span class="giveawaytext">언리얼 아이스박스</span>
    
                                              </div>
                                          </li>
                                          <li class="event_giveaway_item">
                                              <span class="num"><em class="num">2</em>명</span>
                                              <div class="giveaway">
                                                  <div class="img">
                                                      <img src="https://unrealsummit16.cafe24.com/v3/resource_0829/images/main/event2_prize_2.png" alt="">
                                                  </div>
                                                  <span class="giveawaytext">언리얼 마우스</span>
    
                                              </div>
                                          </li>
    <li class="event_giveaway_item">
                                              <span class="num"><em class="num">2</em>명</span>
                                              <div class="giveaway">
                                                  <div class="img">
                                                      <img src="https://unrealsummit16.cafe24.com/2023/fest_src/prize55.png" alt="">
                                                  </div>
                                                  <span class="giveawaytext">언리얼 여권 지갑</span>
                                              </div>
                                          </li>
                                          <li class="event_giveaway_item">
                                              <span class="num"><em class="num">2</em>명</span>
                                              <div class="giveaway">
                                                  <div class="img">
                                                      <img src="https://unrealsummit16.cafe24.com/v3/resource_0829/images/main/event2_prize_3.png" alt="">
                                                  </div>
                                                  <span class="giveawaytext">언리얼 후디</span>
                                              </div>
                                          </li>
                                          <li class="event_giveaway_item">
                                              <span class="num"><em class="num">2</em>명</span>
                                              <div class="giveaway">
                                                  <div class="img">
                                                      <img src="https://unrealsummit16.cafe24.com/v3/resource_0829/images/main/event2_prize_5.png" alt="">
                                                  </div>
                                                  <span class="giveawaytext">언리얼 모자</span>
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
                 <em class="title"><span class="point">설문</span> 을 통해 여러분의 <span class="point">소중한 의견</span>을  <span class="point">공유</span> 해 주세요!</em>
                 <span class="con">매일 모든 세션 종료 후에 진행되는 설문조사에 성실히 답변해 주시면 추첨을 통해 경품을 드립니다.</span>
               </span>
                      </button>
                      <div class="event_a">
                          <ul class="event_con_list">
                              <li class="event_con_item item1">
                                  <h4>참여방법</h4>
                                  <div class="event_item_con">
                                      <em>하나</em>이벤트 기간 내에 언리얼 페스트 2023 사전 등록 완료하기<br />
                                      <em>둘</em>매일 마지막 세션 종료 후 진행되는 설문에 성실히 응답하기
                                  </div>
                              </li>
                              <li class="event_con_item item2">
                                  <h4>이벤트 기간</h4>
                                  <div class="event_item_con">
                                      2023.08.29(화) - 2022.9.1(금)
                                  </div>
                              </li>
                              <li class="event_con_item item3">
                                  <h4>당첨자 발표</h4>
                                  <div class="event_item_con">
                                      2023.9.4(월), 개별 연락 예정
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
                  </li>-->
                  <!--
                  <img src="https://unrealsummit16.cafe24.com/2023/fest_src/event_early.svg">
                  <br>
                  <img src="https://unrealsummit16.cafe24.com/2023/fest_src/event_sonn.svg-->
          </div>
      </section>
        <section class="faq" data-page-index="6">
            <div class="wrap">
                <h2>FAQ</h2>
				<h3>등록 문의</h3>
                <div class="acc_list">
                  <div class="acc_item">
                      <button type="button" class="acc_btn">
                          <span class="title">온라인/오프라인 등록의 차이가 뭔가요?</span>
                      </button>
                      <div class="acc_con">
                          <p>총 4일간 진행되는 언리얼 페스트의 첫 날은 오프라인과 온라인으로 병행되고, 나머지 일자는 온라인으로만 진행됩니다.
                            8월 29일 인터컨티넨탈 서울 코엑스에서 진행하는 1일차 세션을 직접 현장에서 듣고 싶은 분들은 '오프라인 등록'을,  
                            온라인으로 시청하고 싶으신 분들은 '온라인 등록'을 진행해 주세요. <br  />단, '오프라인 등록'은 유료로 진행되며  제한된 좌석 수로 조기 마감될 수 있습니다.</p>
                      </div>
                      <button type="button" class="close"></button>
                  </div>
                    <div class="acc_item">
                        <button type="button" class="acc_btn">
                            <span class="title">오프라인  등록의 혜택은 무엇인가요?</span>
                        </button>
                        <div class="acc_con">
                            <p>오프라인에서 더욱 생생하게 세션을 시청하실 수 있고, 등록 후 참석하시는 전원에게 언리얼 한정판 굿즈를 제공해 드립니다. 
                              이 외에도 현장 이벤트 및 시연 등에 참가하실 수 있는 기회가 제공되고, 온라인으로 중계되는 나머지 일자의 세션들을 별도의 등록 없이 시청하실 수 있습니다.</p>
                        </div>
                        <button type="button" class="close"></button>
                    </div>
                    
                    <div class="acc_item">
                        <button type="button" class="acc_btn">
                            <span class="title">온라인 등록의 혜택은 무엇인가요?</span>
                        </button>
                        <div class="acc_con">
                            <p>총 4일간의 세션을 장소에 관계 없이 무료로 온라인 시청이 가능합니다. 또한 채팅, Q&A, 온라인 이벤트 등으로 더욱 인터랙티브하게 세션을 즐길 수 있습니다.</p>
                        </div>
                        <button type="button" class="close"></button>
                    </div>
                    
                    
                    <div class="acc_item">
                        <button type="button" class="acc_btn">
                            <span class="title">오프라인에 꼭 참석하고 싶은데, 이미 판매가 완료된 경우에는 어떻게 하면 될까요?</span>
                        </button>
                        <div class="acc_con">
                            <p>온라인 등록을 진행해 주시고, 정보 입력란 하단에 있는 '오프라인 대기 등록'을 체크해 두시면, 가능한 경우 별도로 연락을 드립니다.</p>
                        </div>
                        <button type="button" class="close"></button>
                    </div>
                    <div class="acc_item">
                        <button type="button" class="acc_btn">
                            <span class="title">1인 1회만 등록이 가능한가요? 단체 등록은 어떻게 하나요? </span>
                        </button>
                        <div class="acc_con">
                            <p>모든 등록은 본인 인증을 통해 진행되기 때문에 1인 1회만 등록하실 수 있고, 단체 등록은 불가능합니다.</p>
                        </div>
                        <button type="button" class="close"></button>
                    </div>
                    
                    <div class="acc_item">
                        <button type="button" class="acc_btn">
                            <span class="title">꼭 사전에 등록해야만 하나요?</span>
                        </button>
                        <div class="acc_con">
                            <p>네. '오프라인 등록'은 제한된 좌석 수로 조기 마감될 수 있고, 온라인 중계도 '온라인 등록'을 하셔야 시청하실 수 있습니다.</p>
                        </div>
                        <button type="button" class="close"></button>
                    </div>
                    
                    <div class="acc_item">
                        <button type="button" class="acc_btn">
                            <span class="title">등록 정보는 어떻게 수정하나요?</span>
                        </button>
                        <div class="acc_con">
                            <p><a href="https://www.epiclounge.co.kr/v3/application_confirm.html" target="_blank" style="color:#1DC9FF"> 등록 확인 </a>을 통해 등록 정보를 수정하실 수 있습니다.</p>
                        </div>
                        <button type="button" class="close"></button>
                    </div>
                    
				</div>
					
				<h3>참석 및 시청</h3>
                <div class="acc_list">
                    <div class="acc_item">
                        <button type="button" class="acc_btn">
                            <span class="title">오프라인에 등록해도 온라인 웨비나에 참가할 수 있나요? </span>
                        </button>
                        <div class="acc_con">
                            <p>네, 8월29일 부터 9월1일까지 온라인 웨바나에 참가 가능하며, 8월 29일 오프라인 행사장에서 온라인 동시시청도 가능합니다.</p>
                        </div>
                        <button type="button" class="close"></button>
                    </div>
                    <div class="acc_item">
                        <button type="button" class="acc_btn">
                            <span class="title">온라인에 등록해도 오프라인에 참가할 수 있나요?</span>
                        </button>
                        <div class="acc_con">
                            <p>무료 온라인을 등록하신 경우, 오프라인에 참가할 수 없습니다.</p>
                        </div>
                        <button type="button" class="close"></button>
                    </div>
                    <div class="acc_item">
                        <button type="button" class="acc_btn">
                            <span class="title">언리얼 페스트 2023은 어떻게 시청하나요?</span>
                        </button>
                        <div class="acc_con">
                            <p>1. 온라인 등록을 하신 경우 등록된 이메일 주소로 첫 세션시작 30분전 시청 링크를 발송해 드립니다.<br/>
                                2. 온라인 등록을 하셨으나 시청 링크를 이메일로 받지 못하셨다면, 행사 당일 본 페이지에 접속하여 등록 확인을 하시면 시청하실 수 있습니다.</p>
                        </div>
                        <button type="button" class="close"></button>
                    </div>
                    <div class="acc_item">
                        <button type="button" class="acc_btn">
                            <span class="title">행사 당일 언제부터 입장/시청할 수 있나요?</span>
                        </button>
                        <div class="acc_con">
                            <p>오프라인은 당일 1시간 전부터 현장에서 등록 확인이 시작되며 / 온라인 시청은 30분 전부터 접속 가능합니다.</p>
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

				</div>
					
				<h3>기타</h3>
                <div class="acc_list">
                    <div class="acc_item">
                        <button type="button" class="acc_btn">
                            <span class="title">세션은 다시 볼 수 있나요?</span>
                        </button>
                        <div class="acc_con">
                            <p>행사 종료 후 발표자의 동의 하에 에픽 라운지에 한달 내 공개될 예정입니다.</p>
                        </div>
                        <button type="button" class="close"></button>
                    </div>
                    <div class="acc_item">
                        <button type="button" class="acc_btn">
                            <span class="title">행사에 관한 문의를 하고 싶습니다.</span>
                        </button>
                        <div class="acc_con">
                            <p>언리얼 페스트 2023 등록과 관련된 궁금하신 사항은 사무국으로 문의해 주세요.<br/>
                                <a href="mailto:unrealsummit.korea@gmail.com" target="_blank" style="color:#1DC9FF">메일</a> 및 <a href="tel:023263701" target="_blank" style="color:#1DC9FF">전화(02-326-3701)</a>로 문의가 가능하며, 오전 10시 - 오후 5시 (점심시간 12시 - 1시)까지 운영됩니다.</p>
                        </div>
                        <button type="button" class="close"></button>
                    </div>
                    <div class="acc_item">
                        <button type="button" class="acc_btn">
                            <span class="title">결제 오류가 발생 시 어떻게 해야하나요?</span>
                        </button>
                        <div class="acc_con">
                            <p>결제 대행사 <strong><a href="https://manual.inicis.com/help/" target="_blank" style="color:#1DC9FF"> 이니시스 고객센터</a></strong>에 문의를 부탁드립니다.<br/>
                                그외 결제 관련 문의는 언리얼 페스트 사무국  <a href="mailto:unrealsummit.korea@gmail.com" target="_blank" style="color:#1DC9FF">메일</a> 및 <a href="tel:023263701" target="_blank" style="color:#1DC9FF">전화(02-326-3701)</a>로 문의가 가능하며, 오전 10시 - 오후 5시 (점심시간 12시 - 1시)까지 운영됩니다.</p>
                        </div>
                        <button type="button" class="close"></button>
                    </div>
                    <div class="acc_item">
                        <button type="button" class="acc_btn">
                            <span class="title">환불은 어떻게 진행하나요?</span>
                        </button>
                        <div class="acc_con">
                            <p><a href="https://www.epiclounge.co.kr/v3/application_confirm.html" target="_blank" style="color:#1DC9FF"> 등록 확인</a>을 통해 결제 취소가 가능하며, 환불은 신청 후 최대 5일 이내로 진행됩니다.</p>
                        </div>
                        <button type="button" class="close"></button>
                    </div>
                    
                    <div class="acc_item">
                        <button type="button" class="acc_btn">
                            <span class="title">오프라인 참석 시 차량 주차가 가능할까요?</span>
                        </button>
                        <div class="acc_con">
                            <p>
                               주차구역이 혼잡하오니, 대중교통 이용을 권장드립니다.</p>
                        </div>
                        <button type="button" class="close"></button>
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
  copyToClipboard('https://www.epiclounge.co.kr/unrealfest.php');
  alert("복사되었습니다.");
  console.log('Copied!');
}
</script>
            </div>
        </div>
    </nav>
    <!--공통-->
    <?php include 'unrealfest23_description/sessions1.php' ?>
    <!--게임-->
    <?php include 'unrealfest23_description/sessions2.php' ?>
    <!--영화-->
    <?php include 'unrealfest23_description/sessions3.php' ?>
    <!--자동차-->
    <?php include 'unrealfest23_description/sessions4.php' ?>
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