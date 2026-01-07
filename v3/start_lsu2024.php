<?
$g5_path="board";
include_once('../common.php');
?>

<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta property="og:title" content="시작해요 언리얼 2024" />
  <meta property="og:type" content="website" />
  <meta property="fb:589663484560989" />
  <meta name="description" content="시작해요 언리얼 2024" />
  <meta name="description" content="시작해요 언리얼 2024" />
  <meta property="og:url" content="https://epiclounge.co.kr/start_lsu2024.php" />
  <meta property="og:image" content="https://unrealsummit16.cafe24.com/2024/lsu2024/fb_cover.png" />
  <meta property="og:image:height" content="630px" />
  <meta property="og:image:width" content="1200px" />
  <meta property="og:description" content="시작해요 언리얼은 언리얼 엔진을 처음 다루는 초심자 분들을 위해 준비한 튜토리얼 형식의 웨비나입니다. 언리얼 엔진의 다운로드부터 3D 에셋과 라이팅 사용법 그리고 시네마틱 영상 제작까지 단 5회차 강좌를 통해 언리얼 엔진의 기초를 완전히 습득하고 제작한 배경으로 영상을 만들어 볼 수 있습니다. 언리얼 엔진 5를 가장 쉽고 빠르게 시작하고 싶다면. 지금 바로 등록해서 참여해 보세요!" />
  <meta name="naver-site-verification" content="374c7b8b38a950b57cfd67d5e14696efd33bc057" />
<script src="https://kit.fontawesome.com/7d8fea6a30.js" crossorigin="anonymous"></script>
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
  <title>시작해요 언리얼 2024</title>
  </head>
  <body>
  <!--<link rel="stylesheet" href="/v3/resource/css/main_start23.css" />-->
  <link rel="stylesheet" href="/v3/resource/css/lsu2024.css?ver=1232123" />

  <script src="/v3/resource/js/jquery-3.4.1.min.js"></script>
  <script src="/v3/resource/js/slick.min.js"></script>
  <script src="/v3/resource/js/ScrollTrigger.min.js"></script>
  <script src="/v3/resource/js/jquery.menu.min.js"></script>
  <script src="/v3/resource/js/jquery.responsive.min.js"></script>
  <script src="/v3/resource/js/common.js"></script>
  <script src="/v3/resource/js/main.js"></script>
  <style>
   video::-webkit-media-controls {
  display: none;
  }
   video::-media-controls {
  display: none;
  }
  
    </style>
    <script>
    // JavaScript 코드를 사용하여 버튼 요소를 선택합니다.
    const button = document.querySelector('.button');
    
    // 마우스가 버튼 위에 있을 때 이벤트를 처리하는 함수입니다.
    function handleMouseEnter() {
      button.style.backgroundColor = 'red';
    }
    
    // 마우스가 버튼을 벗어날 때 이벤트를 처리하는 함수입니다.
    function handleMouseLeave() {
      button.style.backgroundColor = 'blue';
    }
    
    // 버튼에 마우스 이벤트 리스너를 추가합니다.
    button.addEventListener('mouseenter', handleMouseEnter);
    button.addEventListener('mouseleave', handleMouseLeave);
    </script>
<?php
    include_once('./_common.php');
    
    define('_INDEX_', true);
    if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
    
    ?>
    <?php include 'inc/common_header.php'; ?>
  <!-- container -->
  <div class="container main">
  <section class="sec visual">
  <div class="video_wrap">
    <!-- 샘플 동영상 -->
  <video  autoplay="autoplay" muted="muted" loop="loop" playsinline style="pointer-events: none;">

  <source src="https://unrealsummit16.cafe24.com/2024/lsu2024/LSU24_bg2.mp4" type="video/mp4">
  </video>
  </div>
  <h2 class="skip">비주얼</h2>
  <div class="wrap">
    <div class="visual_text">
    <h3>
    <img src="https://unrealsummit16.cafe24.com/2024/lsu2024/visual_text_lsu24_kr3.svg" alt="시작해요 언리얼 2024" />
    </h3>
   <!-- <div class="date"><strong>3.14~4.18</strong> <span>(</span>3주간<span>)ㅣ</span>매주 화요일, 2 PM</div>-->
   
     
    <!-- <a href="https://epiclounge.co.kr/v3/application_terms.html" class="visual_anchor" target="_blank">무료 등록하기</a>
<a href="https://epiclounge.co.kr/v3/application_check_in.html" class="visual_anchor" target="_blank" style="color: #000">시청하기</a>-->
    <a href="javascript:alert('종료 되었습니다.');"  class="visual_anchor" onfocus="this.blur()" >종료</a>
    </div>
    <br>
  </section>

  <section class="sec intro">
  <div class="wrap">
   <h2 class="sec_title">소개</h2>
    <!--<h3>언리얼 엔진으로 다양한 애니메이션 연출이 포함된 시네마틱 영상을 제작해 보세요!</h3>-->
    <p>
    <em>시작해요 언리얼 2024</em>는 언리얼 엔진 초심자를 위한 튜토리얼 형식의 5주차 웨비나입니다.
    에디터 설명부터 레벨, 라이팅 세팅, 블루프린트와 시퀀서에서 애니메이션 및 나이아가라 이펙트 추가,
    그리고 시네마틱 영상으로 렌더링까지 총 5주간의 강좌를 통해 언리얼 엔진이 처음인 초심자 분들도 <em>인터랙티브 요소를 추가한 고퀄리티 시네마틱 영상을 제작</em>할 수 있게 됩니다.  <em><a href="https://youtube.com/live/5U5ubA15lsE?feature=share" target="_blank">지금 무료 등록하여 언리얼 엔진을 빠르고 쉽게 배워보세요!
    </a></em></p>
    <div class="img">
    <!-- <img src="/v3/resource/images/start23/intro1.jpg" alt="소개 이미지" /> -->
    </div>
   <div class="video">
     <iframe
     width="560"
     height="315"
     src="https://www.youtube.com/embed/wy6aBBNIJkk?amp;autoplay=1&&amp;mute=1&amp;playlist=wy6aBBNIJkk&amp;loop=1&amp;mute=1"    
     title="YouTube video player"
     frameborder="0"
     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
     allowfullscreen
     ></iframe>
   </div>
    
  </div>
  </section>
  
  <!--<section class="sec uefnis">
  <div class="wrap">
    <h2 class="sec_title">UEFN이란?</h2>
    <ul class="uefnis_list">
    <li class="uefnis_item item1">
     <div class="video">
     <iframe width="560" height="315" src="https://www.youtube.com/embed/bTnPihO0PdA" frameborder="0" allowfullscreen></iframe>
     </div>
     
    </li>
    <li class="uefnis_item item2">
    <div class="text">
       <p>포트나이트 언리얼 에디터 (UEFN: Unreal Editor for Fortnite)는 포트나이트에서 게임과 경험을 직접 만들고 퍼블리싱하는 데 사용할 수 있는 언리얼 에디터 버전입니다. UEFN은 언리얼 엔진 5의 강력한 툴과 워크플로를 제공하고, 프로그래밍 언어인 벌스(Verse)을 통해서 강력한 커스터마이징 기능과 신규 로직을 손쉽게 만들 수 있습니다. 또한, 크리에이터 이코노미 2.0의 참여 기반 수익금을 통해 수억 명의 플레이어들이 포트나이트에서 즐길 수 있는 게임과 경험 제작에만 집중할 수 있습니다.</p>
     </div>
    </li>
    
    </ul>
  </div>
  </section>-->
  
  <section class="sec target">
  <div class="wrap">
    <h2 class="sec_title">대상</h2>
    <ul class="target_list">
    <li class="target_item item1">
     <div class="img"><img src="https://unrealsummit16.cafe24.com/2024/lsu2024/target1.jpg" alt="언리얼 엔진이 완전 처음이신 분들 이미지" /></div>
    <div class="con">
  언리얼 엔진이 처음이신 분<br>
   <em> (학생, 직장인, 비전공자 등)</em>
     <!--<p>브랜드</p>-->
    </div>
    </li>
    <li class="target_item item2">
    <div class="img"><img src="https://unrealsummit16.cafe24.com/2024/lsu2024/target2.png" alt="캐릭터를 활용한 스토리텔링을 구현해 보고 싶으신 분 " /></div>
    <div class="con">
    언리얼 엔진의 기초를 <br  />
    배우고 싶으신 분들
    <!--<p>브랜드</p>-->
    </li>
   <li class="target_item item3">
  <div class="img"><img src="https://unrealsummit16.cafe24.com/2024/lsu2024/target3.png" alt="역동감 있는 이펙트를 콘텐츠에 적용해 보고 싶으신 분" /></div>
     <div class="con">
    시네마틱 영상에 <br  />
    스토리텔링을 구현하고 싶으신 분들
     <!--<p>브랜드</p>-->
    </li>
    </ul>
    <div class="btn_wrap">
    <a href="https://epiclounge.co.kr/v3/application_terms.html" class="btn" target="_blank">무료 등록하기</a>
    </div>
  </div>
  </section>

  <section class="sec signature">
  <div class="wrap">
    <h2 class="sec_title">특징</h2>
    <ul class="signature_list">
    <!--<li class="signature_item item6">
      <i class="signature_icon"></i>
      <p class="con">
     5주간의 수강을 완료하면
     다양한 애니메이션 연출이 포함된
     시네마틱 영상을 제작할 수 있게 됩니다.
      </p>
    </li>-->
    <li class="signature_item item1">
    <i class="signature_icon"></i>
    <p class="con">
     시네마틱 영상 제작의 기본 개념과 
     워크플로 전반을 배우게 됩니다. 
     
    </p>
    </li>
    
    <li class="signature_item item3">
    <i class="signature_icon"></i>
    <p class="con">
    5주간의 강좌로 인터랙티브 요소를 추가한 
    고퀄리티 시네마틱 영상을 제작할 수 있습니다.
    </p>
    </li>
    <li class="signature_item item4">
    <i class="signature_icon"></i>
    <p class="con">
       매주 도전과제를 통해 강좌 내용을 완전히 습득할 수 있습니다.
    </p>
    </li>
    <li class="signature_item item5">
    <i class="signature_icon"></i>
    <p class="con">
라이브 Q&A와 채팅을 통해 더욱 인터랙티브한 학습 환경을 제공합니다.
      </p>
    </li>
    </ul>
    
  </div>
  
  </section>

  <section class="sec curriculum">
  <div class="wrap">
    <div class="title_wrap">
    <h2 class="sec_title">커리큘럼</h2>
    <!--<p>매주 다음과 같이 구성됩니다.</p>-->
    </div>
    <ul class="curr_list" >
    <li class="curr_item replay" id="one">
    <div class="curr_item_title">
    <h3>
      <div class="title"><a href="https://youtu.be/V1ZSHU7ajjs" target="_blank">1주차&nbsp;&nbsp;|&nbsp;&nbsp;레벨 제작하기</a></div>
      <span class="status"><a href="https://youtu.be/V1ZSHU7ajjs" target="_blank">다시보기</a></span>
    </h3>
    </div>
    <div class="curr_item_con">
    <div class="img"><img src="https://unrealsummit16.cafe24.com/2024/lsu2024/pic1.jpg" alt="레벨 제작 준비하기 이미지" /></div>
    <div class="text">
      <ol class="curr_con_list">
      <li>언리얼 엔진 학습 방법 알아보기</li>
      <li>언리얼 엔진에서 레벨 구성하기</li>
      <li>퀵셀 메가스캔 / 마켓플레이스 에셋 활용하기</li>
     
      </ol>
      <ul class="curr_sub_list">
      <li>Q&A</li>
      <li>도전과제 출제</li>
      </ul>
      <br>
     
    </div>
    </div>
    </li>
    <li class="curr_item replay" id="two">
    <div class="curr_item_title ">
    <h3>
      <div class="title"><a href="https://youtu.be/lU74t88Uk98" target="_blank">2주차&nbsp;&nbsp;|&nbsp;&nbsp;라이트 세팅 및 시퀀서 추가하기</a></div>
      <span class="status"><a href="https://youtu.be/lU74t88Uk98" target="_blank">다시보기</a></span>
    </h3>
    </div>
    <div class="curr_item_con">
    <div class="img"><img src="https://unrealsummit16.cafe24.com/2024/lsu2024/pic2.jpg" alt="" /></div>
    <div class="text">
      <ol class="curr_con_list">
      <li>언리얼 엔진의 라이팅 알아보기</li>    
      <li>실내외 라이트 세팅하기</li>
      <li>시퀀서로 라이트 애니메이션하기</li>

      </ol>
      <ul class="curr_sub_list">
      <li>과제물 선별 소개</li>
      <li>Q&A</li>
      <li>도전과제 출제</li>
      </ul>
      <br>
      
    </div>
    </div>
    </li>
    <li class="curr_item replay" id="three">
    <div class="curr_item_title">
    <h3>
      <div class="title"><a href="https://youtu.be/xK4qlUOH240" target="_blank">3주차&nbsp;&nbsp;|&nbsp;&nbsp; 캐릭터 애니메이션 작업하기</a></div>
      <span class="status"><a href="https://youtu.be/xK4qlUOH240" target="_blank">다시보기</a></span>
    </h3>
    </div>
    <div class="curr_item_con">
    <div class="img"><img src="https://unrealsummit16.cafe24.com/2024/lsu2024/pic3.jpg" alt="레벨 제작하기 II 이미지" /></div>
    <div class="text">
      <ol class="curr_con_list">
      <li>언리얼 엔진으로 애니메이션 클립 가져오기</li>
      <li>시퀀서에서 캐릭터 애니메이션 적용하기</li>
      <li>애디티브 트랙으로 애니메이션 수정하기</li>
      
      </ol>
      <ul class="curr_sub_list">
      <li>과제물 선별 소개</li>
      <li>Q&A</li>
      <li>도전과제 출제</li>
      </ul>
      <br>
      
    </div>
    </div>
    </li>
    <li class="curr_item replay" id="three">
    <div class="curr_item_title">
    <h3>
      <div class="title"><a href="https://youtu.be/gWyMtDDxJ4M" target="_blank">4주차&nbsp;&nbsp;|&nbsp;&nbsp;나이아가라와 블루프린트 활용하기</a></div>
      <span class="status"><a href="https://youtu.be/gWyMtDDxJ4M" target="_blank">다시보기</a></span>
    </h3>
    </div>
    <div class="curr_item_con">
    <div class="img"><img src="https://unrealsummit16.cafe24.com/2024/lsu2024/pic4.jpg" alt="레벨 제작하기 II 이미지" /></div>
    <div class="text">
      <ol class="curr_con_list">
      <li>블루프린트로 레벨에 애니메이션 추가하기</li>
      <li>캐릭터에 나이아가라 이펙트 추가하기</li>
      <li>시퀀서에서 이벤트 작동시키기</li>
      </ol>
      <ul class="curr_sub_list">
      <li>과제물 선별 소개</li>
      <li>Q&A</li>
      <li>도전과제 출제</li>
      </ul>
      <br>
      
    </div>
    </div>
    </li>
    <li class="curr_item replay" id="three">
    <div class="curr_item_title">
    <h3>
      <div class="title"><a href="https://youtu.be/MiI9BsWLKSk" target="_blank">5주차&nbsp;&nbsp;|&nbsp;&nbsp;영상 연출 및 렌더링하기</a></div>
      <span class="status"><a href="https://youtu.be/MiI9BsWLKSk" target="_blank">다시보기</a></span>
    </h3>
    </div>
    <div class="curr_item_con">
    <div class="img"><img src="https://unrealsummit16.cafe24.com/2024/lsu2024/pic5.jpg" alt="레벨 제작하기 II 이미지" /></div>
    <div class="text">
      <ol class="curr_con_list">
      <li>카메라 추가하고 영상 연출하기</li>
      <li>루멘 렌더링 퀄리티 높이기</li>
      <li>무비 렌더 큐로 영상 렌더링하기</li>
      </ol>
      <ul class="curr_sub_list">
      <li>과제물 선별 소개</li>
      <li>Q&A</li>
      <li>도전과제 출제</li>
      </ul>
      <br>
    
    </div>
    </div>
    </li>
   <div class="btn_wrap">
   <a href="https://epiclounge.co.kr/v3/application_terms.html" class="btn" target="_blank">무료 등록하기</a>
   </div>
  </div>
  </section>

  <section class="sec ready" id="ready">
  <div class="wrap">
    <div class="title_wrap">
    <h2 class="sec_title">사전 필수 준비사항</h2>
    <p> </p>
    </div>
    <div class="con_wrap">
    <ul class="ready_list">
    <li class="ready_item">
    <div class="img"><a href="https://youtu.be/nO1baR47bYE" target="_blank"><img src="https://unrealsummit16.cafe24.com/2024/lsu2024/lsu_highlight_1.png" alt="" /></a></div>
    <div class="ready_con">
     <h3> <span class="rounded-number2">1</span> 시작해요 언리얼 2022 하이라이트 시청</h3>
      <p>본 강연에 참석하기 전, 기본 내용을 다루는 <a href="https://youtu.be/nO1baR47bYE" target="_blank">하이라이트</a>를 꼭! 시청하세요.</p>
    </div>
    </li>
    <li class="ready_item">
    <div class="img"><a href="https://www.unrealengine.com/ko/download" target="_blank"><img src="https://unrealsummit16.cafe24.com/2024/lsu2024/lsu_highlight_3.png" alt="" /></a></div>
    <div class="ready_con">
      <h3><span class="rounded-number2">2</span>언리얼 엔진 5.4 설치</h3>
      <p> <a href="https://www.unrealengine.com/ko/download" target="_blank">언리얼 엔진 5.4 </a>를 미리 설치해 주세요.</p>
    </div>
    </li>
    
     <li class="ready_item">
     <!-- <div class="img"><a href="javascript:alert('4월 19일부터 프로젝트 파일 다운로드가 가능합니다.');" onfocus="this.blur()"><img src="https://unrealsummit16.cafe24.com/2024/lsu2024/lsu_highlight_2.png" alt="" /></a></div>-->
     <div class="img"><a href="https://www.epiclounge.co.kr/download/download_0404.html" target="_blank"><img src="https://unrealsummit16.cafe24.com/2024/lsu2024/lsu_highlight_2.png" alt="" /></a></div>

    <div class="ready_con">
      <h3><span class="rounded-number2">3</span>프로젝트 파일 다운로드</h3>
     <!-- <p>강연에서 사용하는 프로젝트 파일을 반드시 <a href="javascript:alert('4월 19일부터 프로젝트 파일 다운로드가 가능합니다.');" onfocus="this.blur()"> 미리 다운로드</a>해 주세요. (4월 19일 오픈 예정, 5.4 버전 설치 필수)</p>-->
          <p>강연에서 사용하는 <a href="https://www.epiclounge.co.kr/download/download_0404.html" target="_blank"> 프로젝트 파일</a>을 반드시 미리 다운로드해 주세요. </p>

    </div>
    </li> 
    </ul>
    </div>
  </div>
  </section>

  


  <section class="sec event">
  <div class="wrap">
    <h2 class="sec_title">이벤트</h2>
    <ul class="event_list_2 off_line on">
    <li class="li_1"><img src="https://unrealsummit16.cafe24.com/2024/lsu2024/event_pr1_v3.svg"></li>
    <li class="li_2"><img src="https://unrealsummit16.cafe24.com/2024/lsu2024/event_pr2_v3.svg"></li>
    
    </ul>
  <!--  
   <ul class="event_list">
    <li class="event_item item1">
    <div class="event_item_title">
    <h3><span class="rounded-number event1">1</span>시청 이벤트</h3>   
    <p>매주 웨비나를 <span>처음부터 끝까지 시청</span>만 해도 <span>자동응모!</span></p>
    <div class="sub_text">시작해요 언리얼 2024의 매주 웨비나를 <em>처음부터 끝까지 시청하신 분들</em>중 40분을 추첨해 언리얼 엔진 굿즈를 드립니다.</div>
    </div><br>
    <ul class="event_detail_list">
     <li class="event_detail_item">
      <span class="title">참여 기간</span>
      <span class="con">5/2(목)~5/30(목), 한달간 매주</span>
    </li>
    <li class="event_detail_item">
      <span class="title">참여 방법</span>
      <span class="con">
      1. 등록한 이메일로 체크인하여 웨비나를 시청해 주세요.<br />
      2. 웨비나를 처음부터 끝까지 시청하기만 하면 이벤트에 자동 응모!<br />
      </span>
    </li>
    <li class="event_detail_item">
      <span class="title">결과 발표</span>
      <span class="con">매주 웨비나 종료 직전에 발표</span>
      <span style="font-size: 0.8rem;">&nbsp;</span>

    </li>
    <li class="event_detail_item">
      <span class="title">참여 혜택</span>
      <span class="con">매주 랜덤 굿즈 40명 추첨</span>
    </li>
    </ul>
    <div class="event_img">
    <img src="https://unrealsummit16.cafe24.com/2024/lsu2024/viewer_img.png" alt="" />
    </div>
    </li>
    <li class="event_item item2">
    <div class="event_item_title">
    <h3><span class="rounded-number event2">2</span> 도전과제 이벤트</h3>
    <p><span>매주 도전과제</span>를 수행하고 <span> 언리얼 굿즈</span> 받자!</p>
    <div class="sub_text">매주 웨비나 중 출제되는 도전과제를 출제자의 의도에 맞게 성실히 <em>수행하신 분들 중 20분을 추첨</em>해 한정판 굿즈를 드립니다.</div>
    </div><br>
    <ul class="event_detail_list">
    <li class="event_detail_item">
      <span class="title">참여 기간</span>
      <span class="con">5/2(목)~6/4(화), 한달간 매주</span>
    </li>
    <li class="event_detail_item">
      <span class="title">참여 방법</span>
      <span class="con">
      1. 등록한 이메일로 체크인하여 웨비나를 시청하고 출제된 도전과제를 성실히 수행하세요.<br />
      2. 언리얼 엔진 공식 카페 내, 시작해요 언리얼 게시판에 매주 제출하면 자동 응모!</span>
    </li>
    <li class="event_detail_item">
      <span class="title">결과 발표</span>
      <span class="con">매주 웨비나 직후 에픽 라운지 이벤트 페이지에 게시<br /> </span>
      <span style="font-size: 0.8rem;">(5월 9일부터 1주차 결과 발표 및 5주차 결과는 6월 6일 게시 예정)</span>
     
    </li>
    <li class="event_detail_item">
      <span class="title">참여 혜택</span>
      <span class="con">매주 랜덤 한정판 굿즈 20명 추첨</span>
    </li>
    </ul>
    <div class="event_img">
    <img src="https://unrealsummit16.cafe24.com/2024/lsu2024/challange_img.png" alt="" />
    </div>
    </li>
    </ul>-->
    <div class="warning_wrap">
    <ul class="warning">
    <li>경품은 사정에 따라 변경될 수 있습니다.</li>
    </ul>
    </div>
  </div>
  </section>
<!--이벤트-->
<!--이벤트끝-->
  <section class="sec faq">
  <div class="wrap">
    <h2 class="sec_title">FAQ</h2>
    <div class="faq_con">
    <ul class="faq_list">
    <li class="faq_item">
    <div class="q">
      <span class="q_title">사전에 준비할 사항이 있나요?</span>
    </div>
    <div class="a" title="열림">
      총 3가지를 준비해 주세요.<br />
      1. <span><a href="https://youtu.be/nO1baR47bYE" target="_blank"> 시작해요 언리얼 하이라이트 영상</a> </span>을 꼭 시청해 주세요.(약 80분 분량) 전체 영상을 시청하고 오시면 더욱 원활히 강연을 이해할 수 있습니다. <br />
      2. <span><a href="https://www.unrealengine.com/ko/download" target="_blank">언리얼 엔진 5.4 프리뷰 또는 정식 버전(4월 말 출시 예정)을 설치</a></span>해 주세요. 참석 전 미리 설치하면 따라 해 보면서 시청할 수 있습니다. <br />
      3. 강연에서 사용하는 프로젝트 파일을 반드시 미리  <span><a href="https://www.epiclounge.co.kr/download/download_0404.html" target="_blank">다운로드</a></span> 주세요. (5.4 버전 설치 필수)<br /> 
     
      <span></span>
    </div>
    <button type="button" class="more_btn" data-open="false" title="닫힘">닫힘</button>
    </li>
     <li class="faq_item">
     <div class="q">
     <span class="q_title">시작해요 언리얼 하이라이트를 반드시 시청해야 하나요?</span>
     </div>
     <div class="a" title="열림">네, 올해의 시작해요 언리얼에서는 더욱 많은 실전 팁과 노하우를 제공해 드리기 위해서, 조작법을 포함한 기초 내용에 대해 선행 학습이 요구됩니다.<br>
     시청에 필요한 지식만을 <span><a href="https://youtu.be/nO1baR47bYE" target="_blank">시작해요 언리얼 하이라이트</a></span> 영상에 모아놓았으니 반드시 시청해 주세요.
     <br>
     <span><a href="https://www.youtube.com/playlist?list=PLkHDai4yit5Ukjj6VtagKh5rUAwAWiTAB" target="_blank">시작해요 언리얼 전체</a></span>까지 시청하고 오시면 더욱 원활히 강연을 이해할 수 있습니다.
     </div>
     <button type="button" class="more_btn" data-open="false" title="닫힘">닫힘</button>
     </li>
     <li class="faq_item">
     <div class="q">
     <span class="q_title">무료 등록을 반드시 해야 하나요?</span>
     </div>
     <div class="a" title="열림">네, <span><a href="https://epiclounge.co.kr/v3/application_terms.html" target="_blank">무료 등록</a></span>을 완료해야 시청할 수 있으며, 1인 1회만 가능합니다.
     </div>
     <button type="button" class="more_btn" data-open="false" title="닫힘">닫힘</button>
     </li>
    <li class="faq_item">
    <div class="q">
      <span class="q_title">등록 정보는 어떻게 수정하나요?</span>
    </div>
    <div class="a" title="열림"><span><a href="https://epiclounge.co.kr/v3/application_confirm.html" target="_blank">등록 확인</a></span>을 통해 등록 정보를 수정할 수 있습니다.
     
    </div>
    <button type="button" class="more_btn" data-open="false" title="닫힘">닫힘</button>
    </li>
    <li class="faq_item">
    <div class="q">
      <span class="q_title">웨비나는 어떻게 시청하나요?</span>
    </div>
    <div class="a" title="열림">
      웨비나는 PC, 모바일, 태블릿 등에서 시청하실 수 있으나, PC 환경을 권장드립니다.
      <span></span>
    </div>
    <button type="button" class="more_btn" data-open="false" title="닫힘">닫힘</button>
    </li>
    <li class="faq_item">
    <div class="q">
      <span class="q_title">웨비나 도중에는 입장이 불가능한가요?</span>
    </div>
    <div class="a" title="열림">
      방송 진행 중에도 입장하여 시청이 가능합니다.
      <span></span>
    </div>
    <button type="button" class="more_btn" data-open="false" title="닫힘">닫힘</button>
    </li>
 <li class="faq_item">
    <div class="q">
      <span class="q_title">본인 인증시 인증이 완료되지 않고, 계속 본인 인증창이 나타납니다</span>
    </div>
    <div class="a" title="열림">등록 시 본인 인증을 시도 했으나 완료되지 않고 인증창이 계속 나타나는 경우 아래의 방법을 시도해 주세요.<br>
      1. 사용 중인 브라우저의 캐시 및 쿠키 삭제를 해주세요.<br  />
      2. 이후 브라우저를 완전히 종료 해주시고, 다시 브라우저를 열어 본인 인증을 시도해 주세요. <br  />
      3. 캐시 및 쿠키 삭제 후 브라우저를 재시작 했음에도 해결이 안된다면, 다른 브라우저로 본인 인증을 시도해 주세요.</div>
    <button type="button" class="more_btn" data-open="false" title="닫힘">닫힘</button>
    </li>
    <li class="faq_item">
    <div class="q">
      <span class="q_title">문의가 있습니다. 어떻게 문의하면 될까요?</span>
    </div>
    <div class="a" title="열림">문의는 <span><a href="mailto:info@epiclounge.co.kr" target="_blank">이메일</a></span> 혹은 전화 <span><a href="tel:02-326-3701" target="_blank">02-326-3701</a></span>를 통해서 가능합니다.</div>
    <button type="button" class="more_btn" data-open="false" title="닫힘">닫힘</button>
    </li>
    </ul>
    </div>
  </div>
  </section>
  </div>
  <button type="button" class="up remove">위로</button>

  <!-- //container -->
  <!-- footer -->

<?php include 'inc/common_footer.php'; ?>

  <script>
  $(function () {
  function setAcc() {
    var $accBtn = $(".sec.faq .more_btn");
    $accBtn.on("click", function () {
    var $this = $(this),
    $thisParent = $this.closest(".faq_item"),
    $thisAnswer = $this.siblings(".a");
    $thisParent.toggleClass("active");
    if ($thisParent.hasClass("active")) {
    $thisAnswer.attr("title", "열림");
    $this.attr({ "data-open": "true" });
    $this.title("닫기");
    } else {
    $thisAnswer.attr("title", "닫힘");
    $this.attr({ "data-open": "false" });
    $this.text("열기");
    }
    });
  }
  setAcc();
  // function setResVisualHeight() {
  //   var $visual = $(".sec.visual"),
  //     $window = $(window);
  //   function setVisualHeight() {
  //     $visual.outerHeight($window.height() - $("#header").outerHeight());
  //   }
  //   function switchVisualHeight() {
  //     if ($window.width() < 641) {
  //       setVisualHeight();
  //     } else {
  //       $visual.removeAttr("style");
  //     }
  //   }
  //   $window.on("resize", function () {
  //     switchVisualHeight();
  //   });
  // }
  // setResVisualHeight();

  function setUp() {
    var $up = $(".up");
    function setScrollUp() {
    if ($("html,body").scrollTop() <= 200) {
    $up.addClass("remove");
    } else {
    $up.removeClass("remove");
    }
    }
    $(window).on("scroll", function () {
    setTimeout(setScrollUp, 200);
    });

    $(".up").on("click", function () {
    if ($("html,body").scrollTop <= 500) {
    $(this).addClass("remove");
    } else {
    $(this).removeClass("remove");
    $("html,body").animate({ scrollTop: 0 }, 300);
    }
    });
  }
  setUp();
  });
  </script>

  <link rel="stylesheet" href="//rawgit.com/Soldier-B/jquery.toast/master/jquery.toast/jquery.toast.min.css" />
  <script src="//rawgit.com/Soldier-B/jquery.toast/master/jquery.toast/jquery.toast.min.js"></script>
  </body>
</html>
