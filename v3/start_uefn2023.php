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
  <meta property="og:title" content="시작해요 UEFN" />
  <meta property="og:type" content="website" />
  <meta property="fb:589663484560989" />
  <meta name="keywords" content="시작해요 UEFN" />
  <meta name="description" content="시작해요 UEFN" />
  <meta property="og:url" content="https://www.epiclounge.co.k/start23/index.php" />
  <meta property="og:image" content="https://unrealsummit16.cafe24.com/start23_R_image/start23_key_image3.jpg" />
  <meta property="og:image:height" content="630px" />
  <meta property="og:image:width" content="1200px" />
  <meta property="og:description" content="시작해요 UEFN은 언리얼 엔진 초심자를 위한 튜토리얼 형식의 웨비나입니다. 지금 바로 무료 등록하세요!" />
  <meta name="naver-site-verification" content="374c7b8b38a950b57cfd67d5e14696efd33bc057" />
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
  <title>시작해요 UEFN</title>
  </head>
  <body>
  <!--<link rel="stylesheet" href="/v3/resource/css/main_start23.css" />-->
  <link rel="stylesheet" href="/v3/resource/css/uefn.css?ver=1232123" />

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
      <!-- 샘플 동영상 
    <video controls autoplay="autoplay" muted="muted" loop="loop" playsinline style="pointer-events: none;">

    <source src="https://unrealsummit16.cafe24.com/mov/start23_loop_v2.mp4" type="video/mp4">
  </video>-->
    </div>
    <h2 class="skip">비주얼</h2>
    <div class="wrap">
      <div class="visual_text">
      <h3>
        <img src="https://unrealsummit16.cafe24.com/2023/start_uefn/visual_text_uefn2.svg" alt="시작해요 UEFN" />
      </h3>
      <!--<div class="date"><strong>3.14~4.18</strong> <span>(</span>3주간<span>)ㅣ</span>매주 화요일, 2 PM</div>-->
      <!--<a href="https://youtube.com/live/CXKzX5NCC88?feature=share" class="visual_anchor" target="_blank">3주차 | 유튜브 알림 설정하기</a>-->
     <!-- <a href="https://epiclounge.co.kr/v2/application_check_in.html" class="visual_anchor" target="_blank">시청하기</a>-->

       <a href="javascript:alert('종료 되었습니다.');"  class="visual_anchor" onfocus="this.blur()" >종료</a>
      </div>
      <br>
    </section>

    <section class="sec intro">
    <div class="wrap">
      <!--<h2 class="sec_title">소개</h2>-->
      <h3>상상해왔던 자신만의 게임을 손쉽게  만들고 싶으신가요?</h3>
      <p>
      <em>시작해요 UEFN</em>은 포트나이트 언리얼 에디터 (UEFN: Unreal Editor for Fortnite) 초심자를 위한 튜토리얼 형식의 웨비나입니다. 3주간의 커리큘럼을 통해 포트나이트 언리얼 에디터 설치부터 UEFN에서 제공하는 여러 장치들을 활용해 다양한 게임 규칙을 추가하는 것까지 자신만의 특별한 섬을 제작하여 포트나이트에 퍼블리싱하는 방법을 배우게 됩니다. 개발 경험이 전혀 없지만 <em>손쉽게 게임과 경험을 제작하고 커뮤니티와 공유하는 데 관심있는 분들이라면, 지금 바로 <em><a href="https://youtube.com/live/5U5ubA15lsE?feature=share" target="_blank">언리얼 엔진 KR 유튜브 채널</a>에서 알림 설정</em>하세요!</em>
      </p>
      <div class="img">
      <!-- <img src="/v3/resource/images/start23/intro1.jpg" alt="소개 이미지" /> -->
      </div>
     <div class="video">
       <iframe
       width="560"
       height="315"
       src="https://www.youtube.com/embed/DjqUL5KT6Ck?amp;autoplay=1&&amp;mute=1&amp;playlist=DjqUL5KT6Ck&amp;loop=1&amp;mute=1"    
       title="YouTube video player"
       frameborder="0"
       allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
       allowfullscreen
       ></iframe>
     </div>
      
    </div>
    </section>
    
    <section class="sec uefnis">
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
    </section>
    
    <section class="sec target">
    <div class="wrap">
      <h2 class="sec_title">대상</h2>
      <ul class="target_list">
      <li class="target_item item1">
        <!--<div class="img"><img src="/v3/resource/images/start23/target1.jpg" alt="언리얼 엔진이 완전 처음이신 분들 이미지" /></div>-->
        <div class="con">
       UEFN으로 쉽고 빠르게 자신만의 게임과 경험을 만들고 싶은
        <p>누구나</p>
        </div>
      </li>
      <li class="target_item item2">
        <!--<div class="img"><img src="/v3/resource/images/start23/target2.jpg" alt="숙련도를 더욱 올리고 싶은 시작해요 언리얼 2022 수강자 이미지" /></div>-->
        <div class="con">
        비즈니스 고민없이 재미있는 게임과 경험을 제작하고 싶은 
        <p>크리에이터와 개발자</p>
      </li>
      <!--<li class="target_item item3">
      <div class="img"><img src="/v3/resource/images/start23/target3.png" alt="5회의 강좌로 실사 수준의 영상을 만들고 싶으신 분 이미지" /></div
       <div class="con">
      소비자에게 특별한 인터랙션 경험을 제공하고 싶은 
       <p>브랜드</p>
      </li>>-->
      </ul>
    </div>
    </section>

    <section class="sec signature">
    <div class="wrap">
      <h2 class="sec_title">특징</h2>
      <ul class="signature_list">
      <li class="signature_item item1">
        <i class="signature_icon"></i>
        <p class="con">
       손쉽게 게임과 경험을 만들고 포트나이트에 배포하는 방법을 배웁니다.
        </p>
      </li>
      <li class="signature_item item2">
        <i class="signature_icon"></i>
        <p class="con">
       매주 다양한 기믹 요소를 갖춘 게임을 제작합니다.
        </p>
      </li>
      <li class="signature_item item3">
        <i class="signature_icon"></i>
        <p class="con">
        매주 도전과제를 통해 강좌 내용을 완전히 습득할 수 있습니다.
        </p>
      </li>
      <!--<li class="signature_item item4">
        <i class="signature_icon"></i>
        <p class="con">
          새로운 프로그래밍 언어 Verse로 무한의 자유도로 게임을 제작하는 방법에 대해 알게 됩니다.
        </p>
      </li>-->
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
      <p>매주 다음과 같이 구성됩니다.</p>
      </div>
      <ul class="curr_list" >
      <li class="curr_item replay" id="one">
        <div class="curr_item_title">
        <h3>
          <div class="title"><a href="https://youtu.be/J3mqDN33qiY" target="_blank">1주차&nbsp;&nbsp;|&nbsp;&nbsp;동전 수집 게임 제작하기</a></div>
          <span class="status"><a href="https://youtu.be/J3mqDN33qiY" target="_blank">REPLAY</a></span>
        </h3>
        </div>
        <div class="curr_item_con">
        <div class="img"><img src="https://unrealsummit16.cafe24.com/2023/start_uefn/UEFN_W1.jpg" alt="레벨 제작 준비하기 이미지" /></div>
        <div class="text">
          <ol class="curr_con_list">
          <li>포트나이트 언리얼 에디터 소개</li>
          <li>프로젝트 생성 및 편집</li>
          <li>게임 요소 배치 및 제작</li>
          <li>프로젝트 퍼블리싱</li>
          </ol>
          <ul class="curr_sub_list">
          <li>Q&A</li>
          <li>도전과제 출제</li>
          </ul>
          <br>
          <span class="island2"><a href="https://www.fortnite.com/creative/island-codes/8919-7865-0704" target="_blank" >🏝️&nbsp;&nbsp;1주차 섬 8919-7865-0704 방문하기</a></span>
         
        </div>
        </div>
      </li>
      <li class="curr_item con" id="two">
        <div class="curr_item_title2">
        <h3>
          <div class="title"><a href="https://youtu.be/jXZwlWrhezM" target="_blank">2주차&nbsp;&nbsp;|&nbsp;&nbsp;데스런 게임 제작하기</a></div>
          <span class="status"><a href="https://youtu.be/jXZwlWrhezM" target="_blank">2023.06.22 (목) 14:00~15:30</a></span>
        </h3>
        </div>
        <div class="curr_item_con" ">
        <div class="img"><img src="https://unrealsummit16.cafe24.com/2023/start_uefn/UEFN_W2.jpg" alt="레벨 제작하기 I 이미지" /></div>
        <div class="text">
          <ol class="curr_con_list2">
          <li>장치를 활용한 게임 설계</li>
          
        
          
          <li>랜드스케이프 활용</li>
          <li>  장치를 활용한 게임 요소 제작</li>
          <li>게임 엔딩 구현</li>
          </ol>
          <ul class="curr_sub_list">
          <li>과제물 선별 소개</li>
          <li>Q&A</li>
          <li>도전과제 출제</li>
          </ul>
          <br>
          <span class="island"><a href="https://www.fortnite.com/creative/island-codes/3298-5768-4999" target="_blank" >🏝️&nbsp;&nbsp;2주차 섬 3298-5768-4999 방문하기</a></span>
        </div>
        </div>
      </li>
      <li class="curr_item con" id="three">
        <div class="curr_item_title3">
        <h3>
          <div class="title"><a href="https://youtu.be/lKkQnX38A_o" target="_blank">3주차&nbsp;&nbsp;|&nbsp;&nbspPvE 게임 제작하기</a></div>
          <span class="status"><a href="https://youtu.be/lKkQnX38A_o" target="_blank">2023.06.29 (목) 14:00~15:30</a></span>
        </h3>
        </div>
        <div class="curr_item_con">
        <div class="img"><img src="https://unrealsummit16.cafe24.com/2023/start_uefn/UEFN_W3.jpg" alt="레벨 제작하기 II 이미지" /></div>
        <div class="text">
          <ol class="curr_con_list3">
          <li>모델링 기능을 활용한 레벨 그레이박싱</li>
          <li>장치를 활용한 전투 구현</li>
          <li>보스전 제작</li>
          <li>Fab 에셋을 활용한 레벨 제작</li>
          <li>오프닝 시네마틱 제작</li>
          </ol>
          <ul class="curr_sub_list">
          <li>과제물 선별 소개</li>
          <li>Q&A</li>
          <li>도전과제 출제</li>
          </ul>
          <br>
          <span class="island3"><a href="https://www.fortnite.com/creative/island-codes/2546-2423-0163" target="_blank" >🏝️&nbsp;&nbsp;3주차 섬 2546-2423-0163 방문하기</a></span>
        </div>
        </div>
      </li>
      <!--
      <li class="curr_item replay">
        <div class="curr_item_title">
        <h3>
          <div class="title">2주차&nbsp;&nbsp;|&nbsp;&nbsp;레벨 제작하기 I</div>
          <span class="status">REPLAY</span>
        </h3>
        </div>
        <div class="curr_item_con">
        <div class="img"><img src="https://unrealsummit16.cafe24.com/start23_R_image/start_thum2_site.gif" alt="레벨 제작하기 I 이미지" /></div>
        <div class="text">
          <ol class="curr_con_list">
          <li>모델링 툴로 고퀄리티 벽면 제작하기</li>
          <li>3D 에셋으로 기본 레벨 구성하기</li>
          </ol>
          <ul class="curr_sub_list">
          <li>과제물 선별 소개</li>
          <li>Q&A</li>
          <li>도전과제 출제</li>
          </ul>
        </div>
        </div>
      </li>
      <li class="curr_item onair">
        <div class="curr_item_title">
        <h3>
          <div class="title">3주차&nbsp;&nbsp;|&nbsp;&nbsp;레벨 제작하기 II</div>
          <span class="status">ON AIR</span>
        </h3>
        </div>
        <div class="curr_item_con">
        <div class="img"><img src="https://unrealsummit16.cafe24.com/start23_R_image/start_thum3_site.gif" alt="레벨 제작하기 II 이미지" /></div>
        <div class="text">
          <ol class="curr_con_list">
          <li>폴리지 기능을 활용하여 에셋 배치하기</li>
          <li>레벨 인스턴스를 활용하여 에셋 반복 배치하기</li>
          <li>데칼을 추가하여 에셋의 디테일 보완하기</li>
          </ol>
          <ul class="curr_sub_list">
          <li>과제물 선별 소개</li>
          <li>Q&A</li>
          <li>도전과제 출제</li>
          </ul>
        </div>
        </div>
      </li>
      -->
     <!-- <li class="curr_item replay">
        <div class="curr_item_title">
        <h3>
          <div class="title"><a href="https://youtu.be/uRPglZFql9s" target="_blank">4주차&nbsp;&nbsp;|&nbsp;&nbsp;라이팅 및 디테일 추가하기</a></div>
          <span class="status"><a href="https://youtu.be/uRPglZFql9s" target="_blank">REPLAY</a></span>
        </h3>
        </div>
        <div class="curr_item_con">
        <div class="img"><img src="https://unrealsummit16.cafe24.com/start23_R_image/start_thum4_site.gif" alt="라이팅 및 디테일 추가하기 이미지" /></div>
        <div class="text">
          <ol class="curr_con_list">
          <li>라이팅 세팅하기</li>
          <li>퀵셀 메가스캔 트리 활용하기</li>
          <li>레벨에 디테일 추가하기 I</li>
          </ol>
          <ul class="curr_sub_list">
          <li>과제물 선별 소개</li>
          <li>Q&A</li>
          <li>도전과제 출제</li>
          </ul>
        </div>
        </div>
      </li>
      <li class="curr_item replay">
        <div class="curr_item_title">
        <h3>
          <div class="title"><a href="https://youtu.be/ql5X1kZfGmg" target="_blank">5주차&nbsp;&nbsp;|&nbsp;&nbsp;영상 연출 및 렌더링하기</a></div>
          <span class="status"><a href="https://youtu.be/ql5X1kZfGmg" target="_blank">REPLAY</a></span>
        </h3>
        </div>
        <div class="curr_item_con">
        <div class="img"><img src="https://unrealsummit16.cafe24.com/start23_R_image/start_thum5_site.gif" alt="영상 연출 및 렌더링하기 이미지" /></div>
        <div class="text">
          <ol class="curr_con_list">
          <li>레벨에 디테일 추가하기 II</li>
          <li>시퀀서로 카메라 연출하기</li>
          <li>영상 렌더링하기</li>
          </ol>
          <ul class="curr_sub_list">
          <li>과제물 선별 소개</li>
          <li>Q&A</li>
          <li>도전과제 출제</li>
          </ul>
        </div>
        </div>
      </li>
      <li class="curr_item item5 replay" id="six">
        <div class="curr_item_title">
        <h3>
        <div class="title">6주차&nbsp;&nbsp;|&nbsp;&nbsp;Q&A 총정리</div>
          <span class="status">REPLAY</span>
        </h3>
        </div>
        <div class="curr_item_con">
        <div class="img"><img src="https://unrealsummit16.cafe24.com/uch/23/qa.jpg" alt="영상 연출 및 렌더링하기 이미지" /></div>
        <div class="text">
          <ol class="curr_con_list">
          <li>과제물 선별 소개</li>
          <li>Q&#38;A &nbsp;|&nbsp; 러셀 &#38; 에픽게임즈 코리아 권오찬</li>

          </ol>
      <ul class="curr_sub_list">
          <li><a href="https://www.google.com/calendar/render?action=TEMPLATE&text=시작해요%20언리얼%20QnA 총정리&dates=20230418T050000Z/20230418T060000Z&details=여러분들의 성원에 힘입어 QnA 총정리 방송이 특별히 편성되었습니다  총 5주간의 QnA 시간에 다루지 못했던 질문들과 라이브 방송 시 추가되는 질문들을 최대한 답변드릴 수 있는 시간을 마련했으니 에픽 라운지에서 많은 시청 바랍니다&location=에픽%20라운지" target="_blank" style="color:#BDFF00">캘린더 등록하기</a></li>
          </ul>
        </div>
        </div>
      </li>
      </ul>-->

     
    </div>
    </section>

    <section class="sec ready" id="ready">
    <div class="wrap">
      <div class="title_wrap">
      <h2 class="sec_title">사전 준비</h2>
      <p>웨비나 시청 전에 미리 준비하여 강연에 집중해 보세요.</p>
      </div>
      <div class="con_wrap">
      <ul class="ready_list">
        <li class="ready_item">
        <div class="img"><a href="https://store.epicgames.com/" target="_blank"><img src="https://unrealsummit16.cafe24.com/2023/start_uefn/bf01.png" alt="" /></a></div>
        <div class="ready_con">
          <h3>1. 에픽게임즈 런처 설치</h3>
          <p><a href="https://store.epicgames.com/ko/" target="_blank">에픽게임즈 스토어 홈페이지</a>에서  회원가입하여 에픽 계정을 생성하고 에픽게임즈 런처를 다운로드하여 설치해 주세요.</p>
        </div>
        </li>
        <li class="ready_item">
        <div class="img"><a href="https://store.epicgames.com/ko/p/fortnite--uefn" target="_blank"><img src="https://unrealsummit16.cafe24.com/2023/start_uefn/bf02.png" alt="" /></a></div>
        <div class="ready_con">
          <h3>2. 포트나이트 및 UEFN 설치</h3>
          <p>에픽게임즈 런처에서 <a href="https://store.epicgames.com/ko/p/fortnite--uefn" target="_blank">포트나이트와 UEFN을 다운로드</a>하여 설치해 주세요.</p>
          <em>(UEFN은 현재 Window 용으로 준비되어 있습니다.)</em>

        </div>
        </li>
        
       <!-- <li class="ready_item">
        <div class="img"><a href="https://www.fortnite.com/creative/island-codes/9661-3692-7129" target="_blank"><img src="https://unrealsummit16.cafe24.com/2023/start_uefn/bf03.png" alt="" /></a></div>
        <div class="ready_con">
          <h3>3. 제작할 섬 체험하기</h3>
          <p>섬코드 9661-3692-7129 를 입력 후 방문하여 웨비나에서 만들게 될 섬을 미리 탐방해 보세요.</p>
        </div>
        </li> -->
      </ul>
      </div>
    </div>
    </section>

    <section class="sec speaker">
    <div class="wrap">
      <h2 class="sec_title">강연자</h2>
      <div class="con_wrap">
        <li>
          <div class="left-text">
            <h3>이득우 청강문화산업대학교 교수</h3>
            <p>언리얼 공인 강사이자 청강문화산업대학교 교수로서, 다양한 교육 활동으로 언리얼 데브그랜트를 수상하였으며, 언리얼 4 블루프린트 게임 개발, 이득우의 언리얼 C++ 게임 개발의 정석, 이득우의 게임 수학 등 게임 제작을 도와주는 저서도 집필하며 다방면으로 교육 활동을 이어오고 있습니다.</p>
          </div>
        </li>
      <li>
          <div class="right-text">
            <p>현) 청강문화산업대학교 교수</p>
            <p>현) 부산인디커넥트 페스티벌 심사위원장</p>
            <p>2022 언리얼 공인 강사(UAI) 선정</p>
            <p>2017 언리얼 데브그랜트 선정</p>

          </div>
        </li>
        
       
      </div>
    </div>
    </section>


    <section class="sec event">
    <div class="wrap">
      <h2 class="sec_title">이벤트</h2>
      <ul class="event_list">
      <li class="event_item item1">
        <div class="event_item_title">
        <h3>1. 스피드 퀴즈 이벤트</h3>   
        <p>웨비나 내용을 바탕으로 <span> 실시간 스피드 퀴즈  진행!</span></p>
        <div class="sub_text">매주 웨비나 중 진행되는  <em>스피드 퀴즈의 정답</em>을 맞힌 분들 중 30분을 추첨해 한정판 굿즈를 드립니다.</div>
        </div><br>
        <ul class="event_detail_list">
       <li class="event_detail_item">
          <span class="title">참여 기간</span>
          <span class="con">6/15(목)~6/29(목), 3주간 매주</span>
        </li>
        <li class="event_detail_item">
          <span class="title">참여 방법</span>
          <span class="con"
          >1. 언리얼 엔진 유튜브 채널에서 웨비나를 시청해 주세요.<br />
          2. 웨비나 중 출제되는 스피드 퀴즈에서 정답을 맞혀주세요.<br />
          </span>
        </li>
        <li class="event_detail_item">
          <span class="title">결과 발표</span>
          <span class="con">매주 웨비나 종료 직전에 발표</span>
          <span style="font-size: 0.8rem;">&nbsp;</span>

        </li>
        <li class="event_detail_item">
          <span class="title">참여 혜택</span>
          <span class="con">매주 랜덤 굿즈 30명 추첨</span>
        </li>
        </ul>
        <div class="event_img">
        <img src="https://unrealsummit16.cafe24.com/2023/start_uefn/event1v2.png" alt="" />
        </div>
      </li>
      <li class="event_item item2">
        <div class="event_item_title">
        <h3>2. 도전과제 이벤트</h3>
        <p><span>매주 도전과제</span>를 수행하고 <span> 한정판 굿즈</span> 받자!</p>
        <div class="sub_text">매주 웨비나 중 출제되는 도전과제를 출제자의 의도에 맞게 성실히 <em>수행하신 분들 중 20분을 추첨</em>해 한정판 굿즈를 드립니다.</div>
        </div><br>
        <ul class="event_detail_list">
        <li class="event_detail_item">
          <span class="title">참여 기간</span>
          <span class="con">6/15(목)~7/4(화), 3주간 매주</span>
        </li>
        <li class="event_detail_item">
          <span class="title">참여 방법</span>
          <span class="con">
          1. 웨비나를 시청하고 출제된 도전과제를 성실히 수행하세요.<br />
          2. 언리얼 엔진 공식 카페 > 시작해요 언리얼 & UEFN 게시판에 매주 제출, 자동 응모!</span>
        </li>
        <li class="event_detail_item">
          <span class="title">결과 발표</span>
          <span class="con">매주 웨비나 직후 에픽 라운지 이벤트 페이지에 게시<br /> </span>
          <span style="font-size: 0.8rem;">(6월 22일부터 1주차 결과발표 및 3주차 결과는 7월 6일 게시 예정)</span>
         
        </li>
        <li class="event_detail_item">
          <span class="title">참여 혜택</span>
          <span class="con">매주 랜덤 한정판 굿즈 20명 추첨</span>
        </li>
        </ul>
        <div class="event_img">
        <img src="https://unrealsummit16.cafe24.com/2023/start_uefn/event2v.png" alt="" />
        </div>
      </li>
      </ul>
      <div class="warning_wrap">
      <ul class="warning">
        <li>경품은 사정에 따라 변경될 수 있습니다.</li>
      </ul>
      </div>
    </div>
    </section>

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
          총 2가지를 준비해 주세요.<br />
          1.<span><a href="https://store.epicgames.com/" target="_blank"> 에픽게임즈 스토어</a> </span> 홈페이지에서 에픽 계정을 생성 후 에픽게임즈 런처를 설치해 주세요. <br />
          2. <span><a href="https://store.epicgames.com/ko/p/fortnite--uefn" target="_blank">포트나이트와 UEFN을 미리 설치</a></span>하여 웨비나에 집중해 보세요. <br />
          
         
          <span></span>
        </div>
        <button type="button" class="more_btn" data-open="false" title="닫힘">닫힘</button>
        </li>
       
        <li class="faq_item">
        <div class="q">
          <span class="q_title">유튜브 알림을 설정하면 어떤 편의가 제공되나요?</span>
        </div>
        <div class="a" title="열림"><span><a href="https://youtube.com/live/5U5ubA15lsE?feature=share" target="_blank">유튜브 알림을 </a></span>설정해 놓으면 본 웨비나를 시간에 맞춰 시청하실 수 있습니다.</div>
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
          <span class="q_title">문의가 있습니다. 어떻게 문의하면 될까요?</span>
        </div>
        <div class="a" title="열림">문의는 <span><a href="mailto:info.epiclounge.co.kr" target="_blank">이메일</a></span> 혹은 전화 <span><a href="tel:02-326-3701" target="_blank">02-326-3701</a></span>를 통해서 가능합니다.</div>
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
