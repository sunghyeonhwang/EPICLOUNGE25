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
    <meta property="og:description" content="언리얼 페스트" />
    <meta name="naver-site-verification" content="374c7b8b38a950b57cfd67d5e14696efd33bc057" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/static/pretendard.css">
    <link rel="stylesheet" href="/v3/resource/css/common.css">
    <link rel="stylesheet" href="/v3/resource_fest/css/fest.css">
    <!--<script src="/v3/resource_0829/js/common.js"></script>
    <script src="/v3/resource_0829/js/main.js"></script>-->
    <!--fB -->
        <link rel="shortcut icon" href="https://epiclounge.co.kr/favicon_16.ico" sizes="16x16"> 
        <link rel="shortcut icon" href="https://epiclounge.co.kr/favicon_32.ico" sizes="32x32"> 
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
              
                  var url = 'https://epiclounge.co.kr/unrealfest2023.php';    // <a>태그에서 호출한 함수인 clip 생성
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
                    const url = "https://epiclounge.co.kr/unrealfest2023.php";
                    window.open(
                    "https://share.naver.com/web/shareView?url=" + url + "&title=" + title
                  );
                }
                
                // Facebook
                  function shareFacebook() {
                    const title = "언리얼 페스트 2023";
                    const url = "https://epiclounge.co.kr/unrealfest2023.php";
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
                      <img class="v1" alt="">
                      

                     <!--   <img src="https://unrealsummit16.cafe24.com/2023/unrealfest2023/visual_con_re_v1.svg" alt="">
                        <img src="https://unrealsummit16.cafe24.com/2023/unrealfest2023/visual_con_re_v2.svg" alt="">-->
                  
<h3>더 자세한 정보는 7월 초에 공개될 예정입니다. </h3>
                     <div class="btn_wrap">
                        <!-- <button type="button" class="visual_btn type1" onclick="window.open('https://calendar.google.com/calendar/u/0/r/eventedit?dates=20230829T100000/20230901T180000&ctz=Asia/Seoul&text=Unreal+Fest+2023+Seoul&location=%EC%98%A4%ED%94%84%EB%9D%BC%EC%9D%B8+%7C+%EC%9D%B8%ED%84%B0%EC%BB%A8%ED%8B%B0%EB%84%A8%ED%83%88+%EC%BD%94%EC%97%91%EC%8A%A4+(08.29)/+%EC%98%A8%EB%9D%BC%EC%9D%B8+%7C+%EC%97%90%ED%94%BD+%EB%9D%BC%EC%9A%B4%EC%A7%80+(08.29-09.01)&details=%EC%96%B8%EB%A6%AC%EC%96%BC+%ED%8E%98%EC%8A%A4%ED%8A%B8%EB%8A%94+%EC%96%B8%EB%A6%AC%EC%96%BC+%EC%97%94%EC%A7%84%EA%B3%BC+%EB%A6%AC%EC%96%BC%ED%83%80%EC%9E%84+3D+%EC%9D%B8%ED%84%B0%EB%9E%99%ED%8B%B0%EB%B8%8C+%EC%BD%98%ED%85%90%EC%B8%A0+%EC%A0%9C%EC%9E%91%EC%9D%84+%EC%9C%84%ED%95%9C+%EC%B5%9C%EC%8B%A0+%EA%B8%B0%EC%88%A0%EA%B3%BC+%ED%98%81%EC%8B%A0%EC%A0%81%EC%9D%B8+%EC%A0%9C%EC%9E%91+%EA%B2%BD%ED%97%98%EC%9D%84+%EC%A0%9C%EA%B3%B5%ED%95%A9%EB%8B%88%EB%8B%A4.+%EC%96%B8%EB%A6%AC%EC%96%BC+%ED%8E%98%EC%8A%A4%ED%8A%B8%EC%97%90%EC%84%9C+%EC%B0%BD%EC%9E%91%EC%97%90+%ED%95%84%EC%9A%94%ED%95%9C+%EB%AC%B4%ED%95%9C%ED%95%9C+%EC%98%81%EA%B0%90%EC%9D%84+%EC%96%BB%EC%96%B4+%EB%B3%B4%EC%84%B8%EC%9A%94!&uid=7de0eb74-4fae-4cf1-bba0-5eea41eec29b');">캘린더 추가하기</button> -->
                        <button type="button" class="visual_btn type1" onclick="addToGoogleCalendar()">캘린더 추가하기</button> 

                        </div>
                       <img class="v4" alt="">
                   <!--   <img src="https://unrealsummit16.cafe24.com/2023/unrealfest2023/visual_con_re4.svg" alt="">
                    <div class="btn_wrap">
                        <button type="button" class="visual_btn type2"><a href="javascript:alert('종료되었습니다.');">종료</a></button>
                        
                        </div>-->
                        
                        
                    </div>
                    
                </div>
            </div> 
            <!--<div class="visual_menu_wrap">
                <div class="visual_menu">
                    <button type="button" class="visual_menu_btn" data-index="2">ABOUT</button>
                    <button type="button" class="visual_menu_btn" data-index="3">SESSIONS</button>
                    <button type="button" class="visual_menu_btn" data-index="4">EVENTS</button>
                    <button type="button" class="visual_menu_btn" data-index="5">FAQ</button>
                </div>
            </div>
            <div class="scroll_down">
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
            <div class="con_wrap">
                <div class="con">
                    <h3>
                        <!--<span class="sub_title">언리얼 서밋 온라인 2022에 </span>-->
                        <em>언리얼 페스트( UNREAL FEST)는 '언리얼 서밋'의 새로운 글로벌 브랜드입니다. </em>
                    </h3>
                   <div class="text">
                     <p>언리얼 페스트는 모든 크리에이터들을 위해 언리얼 엔진과 리얼타임 3D 인터랙티브 콘텐츠 제작을 위한 최신 기술과 혁신적인 제작 경험을 제공합니다. 언리얼 페스트에서 창작에 필요한 무한한 영감을 얻어 보세요!</p>
                      <!-- <p>언리얼 페스트는 언리얼 엔진과 에픽게임즈의 에코시스템을 구성하는 제품들에 대한 최신 기술, 혁신적인 제작 경험과 같은 정보를 교류하고 영감을 주는 것을 넘어, 인터랙티브 3D 리얼타임 콘텐츠를 제작하는 모든 크리에이터들을 위한 축제로 자리매김할 수 있도록 계속해서 발전해 나갈 예정입니다. -->
                   </div>
                </div>
               <!-- <div class="video">
                    <div class="youtube_wrap">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/GGQmRAppI6I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                </div>-->
            </div>
        </div>
    </section>

   

 <!--   <section class="faq" data-page-index="5">
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
    </section>-->
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
                <a href="" class="sns_btn kakao"><span>카카오톡</span></a>
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