<?
$g5_path="board";
include_once("../common.php");
include_once("../board/lib/latest.lib.php");


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
<div class="container">
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
    <section class="goods" data-page-index="4" id="register">
        <div class="wrap">
            <h2>REGISTER</h2>
            <div class="register_box">
				<div class="register_box_wrap">
					<div class="register_ti" id="#register">
						  
						<div class="top_ticket price_ticket">
							<div class="ticket_wrap">
								<div class="price_ticket_1"><span>오프라인</span></div>
								<div class="price_ticket_2">오프라인</div>
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
										<a href="application_terms.html?pay_method=Y" class="" target="_blank">유료 구매하기</a>
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
										<a href="application_terms.html?pay_method=N" class="" target="_blank">무료 등록</a>
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