
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--Meta Tag-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta property="og:type" content="website" />
  <meta property="fb:589663484560989"/>
  <meta property="og:url" content="https://epiclounge.co.kr/start_lsu2025.php" />
  <meta property="og:title" content="시작해요 트윈모션 & 언리얼 2025" />
  <meta property="og:image" content="https://unrealsummit16.cafe24.com/2025/start_twinunreal/start_twue_thum.png" />
  <meta property="og:image:height" content="630px" />
  <meta property="og:image:width" content="1200px" />
  <meta property="og:description" content="시작해요 트윈모션 & 언리얼 2025는 리얼타임 3D 창작 툴인 트윈모션과 언리얼 엔진의 초심자를 위한 튜토리얼 형식의 6주차 웨비나입니다.">
  <meta name="naver-site-verification" content="374c7b8b38a950b57cfd67d5e14696efd33bc057" />
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
  <!--메타태그-->
  <link rel="stylesheet" href="_start2025_font.css">
  <title>시작해요 트윈모션 & 언리얼 2025</title>
  <link rel="stylesheet" href="/v3/resource/css/lsu2025_desing.css" />
  <script src="https://epiclounge.co.kr/v3/resource/js/jquery-3.4.1.min.js"></script>
  <script src="https://epiclounge.co.kr/v3/resource/js/slick.min.js"></script>
  <script src="https://epiclounge.co.kr/v3/resource/js/ScrollTrigger.min.js"></script>
  <script src="https://epiclounge.co.kr/v3/resource/js/jquery.menu.min.js"></script>
  <script src="https://epiclounge.co.kr/v3/resource/js/jquery.responsive.min.js"></script>
  <script src="https://epiclounge.co.kr/v3/resource/js/common.js"></script>
  <script src="https://epiclounge.co.kr/v3/resource/js/main.js"></script>
  <script>
  document.addEventListener("DOMContentLoaded", () => {
	document.querySelectorAll(".card").forEach(card => {
	const video = card.querySelector("video");

	card.addEventListener("mouseenter", () => {
	  if (video.readyState >= 2) {
	  video.play();
	  } else {
	  video.load();
	  video.oncanplay = () => {
		video.play();
	  };
	  }
	});

	card.addEventListener("mouseleave", () => {
	  video.pause();
	  video.currentTime = 0;
	});
	});
  });
  </script>

</head>

<body>
 <?php
 include_once('./_common.php');
 
 define('_INDEX_', true);
 if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
 
 ?>
   <?php include 'inc/common_header.php'; ?>
  <!--메인-->
  <section class="main-visual">
  <video autoplay muted loop playsinline>
	<source src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/lsu_2025_bg.mp4" type="video/mp4" />
	브라우저가 영상을 지원하지 않습니다.
  </video>
  <!-- <div class="main-gradient"></div> -->
  <div class="visual-content">
	<img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/main_visual_main2.svg" alt="트윈모션 & 언리얼 2025 텍스트" />
  </div>
  </section>
  <!--소개-->
  <section class="video-section">
  <div class="container">
	<div class="video-wrapper">
	<iframe src="https://www.youtube.com/embed/Kr_tKEN0ics?autoplay=1&mute=1&loop=1&playlist=Kr_tKEN0ics" allow="autoplay; fullscreen" allowfullscreen>
	</iframe>
	</div>

	<div class="video-description">
	<p><strong>시작해요 트윈모션 & 언리얼 2025</strong>는 리얼타임 3D 창작 툴인 트윈모션과 언리얼 엔진의 초심자를 위한 튜토리얼 형식의 6주차 웨비나입니다.</p>
	<p>첫 3주간은 트윈모션의 설치부터 모델링 파일 임포트, 환경 구성, 인터랙션을 구현하고, 나머지 3주간은 언리얼 엔진으로 트윈모션 프로젝트를 가져와 메타휴먼, UMG 등으로 프로젝트를 더욱 풍부하게 구성하고 고도화할 수 있는 다양한 요소를 배우게 됩니다. 6주간의 강좌를 모두 마치면, 두 개의 리얼타임 3D 툴의 기초 개념은 물론 고퀄리티 인터랙티브 3D 결과물까지 직접 제작할 수 있도록 알찬 내용으로 구성했습니다.
</p>
	<p>인터랙티브 3D 콘텐츠를 가장 쉽고 빠르게 제작하는 방법을 배우고 싶다면, <strong>지금 바로 무료 등록</strong>해 보세요!</p>
  <div class="buttons">
	<button class="btn btn-primary"><a href="javascript:alert('종료되었습니다.')" onfocus="this.blur()">종료</a></button>	
  </div>
	</div>
  </div>
  </section>
  <!--인트로-->
  
  <section class="intro-section">
  <div class="container">
   <div class="intro-title"><span style="background: var(--left_pink, linear-gradient(279deg, #00AFFF 21.76%, #C41E71 78.24%)); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">소개</span></div>
	<div class="intro-cards">
	<!-- 카드 2 -->
	<div class="intro-card">
	  <div class="intro-image" style="background-image: url('https://unrealsummit16.cafe24.com/2025/start_twinunreal/intro_black.png');">
	  <img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/twin_logo.svg" alt="Twinmotion 로고" class="intro-logo">
	  </div>
	  <div class="intro-text">
	  <h3 class="card-title">트윈모션이란?</h3>
	  <p class="card-desc">트윈모션은 건축, 영화 & TV, 자동차, 제품 디자인 등 다양한 산업 분야의 크리에이터들이 고퀄리티 시각화는 물론 몰입감 넘치는 경험을 쉽고 빠르게 제작할 수 있는 손쉬운 리얼타임 3D 시각화 솔루션으로, 직관적인 아이콘 기반의 쉬운 UI를 통해 전문가는 물론 초보자도 손쉽게 사용할 수 있습니다.
	  </p>
	  <div class="intro-more">
		<a href="https://www.twinmotion.com/ko" target="_blank" class="btn-more twin">자세히 보기</a>
	  </div>
	  </div>
	</div>
	<!-- 카드 1 -->
	<div class="intro-card">
	  <div class="intro-image" style="background-image: url('https://unrealsummit16.cafe24.com/2025/start_twinunreal/intro_black.png');">
	  <img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/ue_logo.svg" alt="Unreal Engine 로고" class="intro-logo">
	  </div>
	  <div class="intro-text">
	  <h3 class="card-title">언리얼 엔진이란?</h3>
	  <p class="card-desc">언리얼 엔진은 세계에서 가장 개방적이고 진보된 리얼타임 3D 툴로, 게임, 건축, 영화 & TV, 방송 & 라이브 이벤트, 애니메이션, 자동차 & 운송, 시뮬레이션 및 다양한 분야의 크리에이터들이 최첨단 콘텐츠, 인터랙티브 경험, 몰입감 있는 가상 세계를 제작하기 위해 사용하고 있습니다.
	  </p>
	  <div class="intro-more">
		<a href="https://www.unrealengine.com/ko" target="_blank" class="btn-more ue">자세히 보기</a>
	  </div>
	  </div>
	</div>
	
	</div>
  </div>
  </section>

  <!--대상-->
  <section class="target-section">
  <div class="section-title"><span style="background: var(--left_pink, linear-gradient(279deg, #00AFFF 21.76%, #C41E71 78.24%)); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">대상</span></div>
  <div class="target-cards">
	<div class="card">
	<video class="bg-video" muted loop playsinline preload="auto">
	  <source src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/lsu_target_1.mp4" type="video/mp4" />
	</video>
	<div class="card-text">인터랙티브 3D 콘텐츠 제작에 관심 있는 분</div>
	</div>
	<div class="card">
	<video class="bg-video" muted loop playsinline preload="auto">
	  <source src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/lsu_target_2.mp4" type="video/mp4" />
	</video>
	<div class="card-text">트윈모션, 언리얼 엔진이 처음이신 분</div>
	</div>
	<div class="card">
	<video class="bg-video" muted loop playsinline preload="auto">
	  <source src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/lsu_target_3.mp4" type="video/mp4" />
	</video>
	<div class="card-text">리얼타임 콘텐츠 제작의 기초 개념부터<br>결과물까지 만들고 싶으신 분</div>
	</div>
  </div>
  </section>
  <!-- 특징 섹션 -->
  <section class="feature-section">
  <div class="feature-title"><span style="background: var(--left_pink, linear-gradient(279deg, #00AFFF 21.76%, #C41E71 78.24%)); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">특징</span></div>
  <div class="feature-cards">
	<div class="feature-card">
	<img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/feather1.png" alt="기초 개념" />
	<div class="feature-text">고퀄리티 인터랙션 콘텐츠 제작의 기초 개념과 워크플로를 배웁니다.</div>
	</div>
	<div class="feature-card">
	<img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/feather2.png" alt="리얼타임 툴" />
	<div class="feature-text">두 개의 리얼타임 3D 툴의 핵심 기능으로<br>단 6시간 만에 결과물을 제작합니다.</div>
	</div>
	<div class="feature-card">
	<img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/feather3.png" alt="도전과제" />
	<div class="feature-text">매주 도전과제를 통해 강좌 내용을 완전히 습득할 수 있습니다.</div>
	</div>
	<div class="feature-card">
	<img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/feather4.png" alt="라이브 QnA" />
	<div class="feature-text">라이브 Q&amp;A와 채팅을 통해 인터랙티브한 학습 환경을 제공합니다.</div>
	</div>
  </div>


  </section>
  <!--커리큘럼-->
  <!-- 커리큘럼 섹션 -->
  <section class="curriculum-section">
  <h2 class="curriculum-title"><span style="background: var(--left_pink, linear-gradient(279deg, #00AFFF 21.76%, #C41E71 78.24%)); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">커리큘럼</span></h2>
  <!-- 1주차 
  <div class="curriculum-block">
	<div class="curriculum-header week-after">
	<h3>
	  <span class="time-badge week-1">04.23 (수) | 14:00</span>
	  1주차 |  트윈모션 시작하기
	</h3>
	
	</div>
	<div class="curriculum-content">
	<div class="curriculum-video">
	  <img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/curi1.png" alt="Week 1 Thumbnail" class="video-bg">
	  <img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/replay_button.svg" alt="재생 버튼" class="video-overlay">
	</div>
	<div class="curriculum-text">
	  <ul>
	  <li>❶ 트윈모션 및 기본 UI 소개</li>
	  <li>❷ 전시공간 샘플 모델링 파일 임포트</li>
	  <li>❸ 전시공간 익스테리어 환경 구성하기</li>
	  <li class="sub-item"> Q&amp;A</li>
	  <li class="sub-item"> 도전과제 출제</li>
	  </ul>
	</div>
	</div>
  </div>
   1주차완-->

  <!-- 2주차 
  <div class="curriculum-block week-2">
	<div class="curriculum-header">
	<div class="header-left">
	  <h3>
	  <span class="time-badge week-2">04.30 (수) | 14:00</span> <span style="color:#00AFFF">2주차 | 트윈모션에서 전시공간 구성하기</span></h3>
	</div>
	</div>
	<div class="curriculum-content">
	<div class="curriculum-video">
	  <img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/curi2.png" alt="Week 2 Thumbnail" class="video-bg-live">
	  <img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/live_button.svg" alt="LIVE 버튼" class="video-overlay">
	</div>
	<div class="curriculum-text">
	  <ul>
	  <li>❶ 전시공간 인테리어 라이팅하고 매핑하기</li>
	  <li>❷ 루멘과 패스 트레이서를 활용하여 렌더링하기</li>
	  <li>❸ 제품 모델링 파일 임포트하고 장면 구성하기</li>
	  <li class="sub-item"> 과제물 선별 소개</li>
	  <li class="sub-item"> Q&amp;A</li>
	  <li class="sub-item"> 도전과제 출제</li>
	  </ul>
	</div>
	</div>
  </div>
  <!--2주차완-->
  <!-- 1주차 -->
  <div class="curriculum-block">
	<div class="curriculum-header week-after">
	<h3>
	  <span class="time-badge week-3">04.23 (수) | 14:00</span>
	  1주차 |  트윈모션 시작하기
	</h3>
	
	</div>
	<div class="curriculum-content">
	<div class="curriculum-video">
		<a href="https://youtu.be/ZJNT8cCfKrA" target="_blank">
	  <img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/replay_1w.jpg" alt="Week 3 Thumbnail" class="video-bg">
	 <img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/replay_button.svg" alt="재생 버튼" class="video-overlay"> </a>
	  <!-- <div class="video-button replay">REPLAY ▸</div> -->
	</div>
	<div class="curriculum-text">
	  <ul>
	  <li>❶ 트윈모션 및 기본 UI 소개</li>
	  <li>❷ 전시공간 샘플 모델링 파일 임포트</li>
	  <li>❸ 전시공간 익스테리어 환경 구성하기</li>
	  <!-- <li class="sub-item"> 과제물 선별 소개</li> -->
	  <li class="sub-item"> Q&amp;A</li>
	  <li class="sub-item"> 도전과제 출제</li>
	  </ul>
	</div>
	</div>
  </div>
  <!--1주차완-->
  
  <!-- 2주차 -->
  <div class="curriculum-block week-2">
	<div class="curriculum-header week-after">
	<div class="header-left">
	  <!-- <span class="live-indicator">
	  <img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/live.svg" alt="LIVE 아이콘" class="live-icon" />
	  </span> -->
	  <h3>
	  <span class="time-badge week-3">04.30 (수) | 14:00</span>2주차 | 트윈모션에서 전시공간 구성하기</h3>
	</div>
	<!-- <span class="week"><span class="time-badge live">2주차 | 04.30 (수) | 14:00</span> -->
	</div>
	<div class="curriculum-content">
	<div class="curriculum-video">
		<a href="https://youtu.be/ZJNT8cCfKrA" target="_blank">
	  <img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/21w-replay2.jpg" alt="Week 3 Thumbnail" class="video-bg">
  <img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/replay_button.svg" alt="재생 버튼" class="video-overlay">
</a>
	  <!-- <img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/live_button.svg" alt="LIVE 버튼" class="video-overlay"> -->
	</div>
	<div class="curriculum-text">
	  <ul>
	  <li>❶ 전시공간 인테리어 라이팅하고 매핑하기</li>
	  <li>❷ 루멘과 패스 트레이서를 활용하여 렌더링하기</li>
	  <li>❸ 제품 모델링 파일 임포트하고 장면 구성하기</li>
	  <li class="sub-item"> 과제물 선별 소개</li>
	  <li class="sub-item"> Q&amp;A</li>
	  <li class="sub-item"> 도전과제 출제</li>
	  </ul>
	</div>
	</div>
  </div>
  <!--2주차완-->
  <!-- 3주차 -->
  <div class="curriculum-block week-3">
	<div class="curriculum-header">
	<h3><span class="time-badge week-3">05.07 (수) 14:00</span> 3주차 | 트윈모션에서 제품 시각화 및 인터랙션 고도화하기</h3>
	  </div></h3>
	<!-- <span class="week">3주차 |05.07 (수) 14:00</span> -->
	</div>
	<div class="curriculum-content">
	<div class="curriculum-video">
		<a href="https://youtu.be/w6Z6YkUpp7o" target="_blank">
	  <img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/3w_thumnail_replay.jpg" alt="Week 3 Thumbnail" class="video-bg"><img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/replay_button.svg" alt="재생 버튼" class="video-overlay"></a>
	</div>
	<div class="curriculum-text">
	  <ul>
	  <li>❶ 컨피규레이션 기능으로 제품 상호작용 구현하기</li>
	  <li>❷ HDRI를 활용하여 신속하게 제품 시각화하기</li>
	  <li>❸ 결과물 출력하기(이미지, 영상, 로컬 프레젠테이션 실행파일)</li>
	  <li class="sub-item"> 과제물 선별 소개</li>
	  <li class="sub-item"> Q&amp;A</li>
	  <li class="sub-item"> 도전과제 출제</li>
	  </ul>
	</div>
	</div>
   
  <!--3주차완-->
  <!-- 4주차 -->
  <div class="curriculum-block week-3">
	<div class="curriculum-header">
	<h3><span class="time-badge week-3">05.14 (수) 14:00</span> 4주차 | 언리얼 엔진으로 트윈모션 프로젝트 가져오기</h3>
	
	</div>
	<div class="curriculum-content">
	<div class="curriculum-video">
		<a href="https://youtu.be/A8cI3uvPVlw" target="_blank">
	  <img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/4w_thumnail_replay.jpg" alt="Week 3 Thumbnail" class="video-bg">
	  <img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/replay_button.svg" alt="재생 버튼" class="video-overlay"></a>
	</div>
	<div class="curriculum-text">
	  <ul>
	  <li>❶ 언리얼 엔진 소개</li>
	  <li>❷ 데이터스미스로 임포트하기</li>
	  <li>❸ 데이터프랩으로 머티리얼 자동 변환하기</li>
	  <li class="sub-item"> 과제물 선별 소개</li>
	  <li class="sub-item"> Q&amp;A</li>
	  <li class="sub-item"> 도전과제 출제</li>
	  </ul>
	</div>
	</div>
  </div>
  <!--4주차완-->
  <!-- 5주차 -->
  <div class="curriculum-block week-3">
	<div class="curriculum-header">
	 <h3><span class="time-badge week-3">05.21 (수) 14:00</span> 5주차 |  언리얼 엔진에서 리얼타임으로 제품 전시하기</h3>
	
	</div>
	<div class="curriculum-content">
	<div class="curriculum-video">
	  	<a href="https://youtu.be/XzfZzrD4GPM" target="_blank">
	  <img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/5w_thumnail_replay.jpg" alt="Week 3 Thumbnail" class="video-bg">
	  <img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/replay_button.svg" alt="재생 버튼" class="video-overlay"></a>
	</div>
	<div class="curriculum-text">
	  <ul>
	  <li>❶ 메타휴먼 제작하기</li>
	  <li>❷ 메타휴먼으로 전시공간 둘러보기</li>
	  <li>❸ 리얼타임으로 제품 및 공간과 상호작용하기</li>
	  <li class="sub-item"> 과제물 선별 소개</li>
	  <li class="sub-item"> Q&amp;A</li>
	  <li class="sub-item"> 도전과제 출제</li>
	  </ul>
	</div>
	</div>
  </div>
  <!--5주차완-->
  <!-- 65주차 -->
  <div class="curriculum-block week-3">
	<div class="curriculum-header">
	<h3><span class="time-badge week-3">05.28 (수) 14:00</span>6주차 | 언리얼 엔진에서 인터랙티브 컨피규레이터 구성하기</h3>
	<span class="week"></span>
	</div>
	<div class="curriculum-content">
	<div class="curriculum-video">
			  	<a href="https://youtu.be/3CPNc5wDfHo"  target="_blank">

	  <img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/6w_thumnail_replay.jpg" alt="Week 3 Thumbnail" class="video-bg">
	  	  <img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/replay_button.svg" alt="재생 버튼" class="video-overlay"></a>

	</div>
	<div class="curriculum-text">
	  <ul>
	  <li>❶ UMG로 제품 정보 표시하기</li>
	  <li>❷ UMG로 제품의 머티리얼 교체하기</li>
	  <li>❸ 시퀀서로 제품에 애니메이션 연출 추가하기</li>
	  <li class="sub-item"> 과제물 선별 소개</li>
	  <li class="sub-item"> Q&amp;A</li>
	  <li class="sub-item"> 도전과제 출제</li>
	  </ul>
	</div>
	</div>
  </div>
  <!--6주차완-->
  <div class="buttons">
	<button class="btn btn-primary"><a href="javascript:alert('종료되었습니다.')" onfocus="this.blur()">종료</a></button>	
  </div>
  </section>
  <!--사전준비-->
  <!-- 사전 준비 섹션 -->
  <section class="prep-section">
  <h2 class="prep-title"><span style="background: var(--left_pink, linear-gradient(279deg, #00AFFF 21.76%, #C41E71 78.24%)); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">사전 준비사항</span></h2>
  <div class="prep-grid">
	<!-- 첫 번째 카드 -->
	<div class="prep-card">
	<div class="prep-step">01</div>
	<h3>트윈모션 다운로드</h3>
	<p>1~3주차 강좌에서 다룰 <span style="color:#Fff">트윈모션</span>을 미리 설치해 주세요.
	</p>
	<div class="prep-buttons">
	  <a href="https://www.twinmotion.com/ko/download" class="btn pink" target="_blank">트윈모션 2025.1.1 다운로드</a>
	</div>
	</div>
	<!-- 두 번째 카드 -->
	<div class="prep-card">
	  <div class="prep-step">02</div>
	  <h3>언리얼 엔진 다운로드</h3>
	  <p>4~6주차 강좌에서 다룰 <span style="color:#Fff">언리얼 엔진</span>을 미리 설치해 주세요.
	  </p>
	  <div class="prep-buttons">
	  <a href="https://www.unrealengine.com/ko/download" class="btn blue" target="_blank">언리얼 엔진 5.5 다운로드</a>
	  
	  </div>
	</div>
	<!-- 세 번째 카드 -->
	<div class="prep-card">
	<div class="prep-step">03</div>
	<h3>샘플 프로젝트 및 메타휴먼 플러그인 다운로드</h3>
	<p>1~6주차 강좌에서 사용할 <span style="color:#Fff">샘플 프로젝트</span>와 5주차 강좌에서 사용할 <span style="color:#Fff">메타휴먼 플러그인</span>을 미리 설치해 주세요.
	  <!-- 시작해요 트윈모션&언리얼 2025는 샘플 프로젝트를 기반으로 진행됩니다.  -->      
	</p>
	<div class="prep-buttons">
	  <a href="https://kr.object.ncloudstorage.com/epicdownload/START_TM_UE_2025_Sample.zip" class="btn gradient" target="_blank">샘플 프로젝트 다운로드</a> 
	 <a href="https://www.fab.com/ko/listings/055a6486-ad17-4590-aa1e-261d47f7f041" class="btn outline" target="_blank">메타휴먼 플러그인 다운로드</a> 
	  <!-- <a href="javascript:alert('4월 9일 23시부터 샘플 프로젝트 파일 다운로드가 가능합니다.');" onfocus="this.blur()" class="btn gradient">샘플 프로젝트 다운로드</a> -->
	</div>
	</div>
	<p class="event-note"><span class="asterisk">*</span>강좌를 들으며 따라해 보시려는 분들은 미리 준비해 주세요.</p>

  </div>
  </section>
<!--사전준비 끝-->
<!-- 이벤트 섹션 -->
<section class="event-section">
  <h2 class="event-title"><span style="background: var(--left_pink, linear-gradient(279deg, #00AFFF 21.76%, #C41E71 78.24%)); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">이벤트</span></h2>
  <div class="event-grid">
  <div class="event-card card-1">
	<div class="event-inner">
	<img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/start_event-1.svg" class="event-img default" alt="">
	<img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/start_event-1-h.svg" class="event-img hover" alt="">
	</div>
  </div>
  <div class="event-card card-2">
	<div class="event-inner">
	<img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/start_event-2.svg" class="event-img default" alt="">
	<img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/start_event-2-h.svg" class="event-img hover" alt="">
	</div>
  </div>
  <div class="event-card card-3">
	<div class="event-inner">
	<img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/start_event-4.svg" class="event-img default" alt="">
	 <img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/start_event-4-h.svg" class="event-img hover" alt="">
	
	</div>
  </div>
  <div class="event-card card-4">
  <div class="event-inner">
   <img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/start_event-3.svg" class="event-img default" alt="">
   <img src="https://unrealsummit16.cafe24.com/2025/start_twinunreal/start_event-3-h.svg" class="event-img hover" alt="">
  </div>
  </div>
  </div>
  <p class="event-note"><span class="asterisk">*</span>경품은 사정에 따라 변경되거나 이미지와 다를 수 있습니다.</p>
  <p class="event-note"><span class="asterisk">*</span>경품은 랜덤으로 발송됩니다. &#40;도전과제 완주 이벤트 제외&#41;</p>
</section>
<!--이벤트 섹션 끝--> 
<!-- 자주 묻는 질문 섹션 -->
<section class="faq">
  <h2 class="faq-title"><span style="background: var(--left_pink, linear-gradient(279deg, #00AFFF 21.76%, #C41E71 78.24%)); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">자주 묻는 질문</span></h2>
  <ul class="faq-list">
  <li class="faq-item">
	<div class="faq-question" tabindex="0">
	<span class="faq-q-icon">Q</span>
	<span class="faq-text">사전에 준비할 사항이 있나요?</span>
	</div>
	<div class="faq-answer">
	<div class="faq-answer-content">
	  <span class="faq-a-icon">A</span>
	  <div class="faq-answer-text">
	  <p><strong>강좌를 들으며 따라해 보시려는 분들은 미리 준비해 주세요.</strong></p>
	  <p>1. <a href="https://www.twinmotion.com/ko/download" target="_blank">트윈모션 2025.1</a>을 설치해 주세요.</p>
	  <p>2.  <a href="https://www.unrealengine.com/ko/download" target="_blank">언리얼 엔진 5.5</a>를 설치해 주세요.</p>
	  
	  <!-- <p>3. <a href="javascript:alert('4월 9일 23시부터 샘플 프로젝트 파일 다운로드가 가능합니다.');" onfocus="this.blur()">샘플 프로젝트 파일</a>과 <a href="https://www.fab.com/ko/listings/055a6486-ad17-4590-aa1e-261d47f7f041" target="_blank">메타휴먼 플러그인</a>을 설치해 주세요.</p> -->
	 <p>3. <a href="https://kr.object.ncloudstorage.com/epicdownload/START_TM_UE_2025_Sample.zip" target="_blank">샘플 프로젝트 파일</a>과 <a href="https://www.fab.com/ko/listings/055a6486-ad17-4590-aa1e-261d47f7f041" target="_blank">메타휴먼 플러그인</a>을 설치해 주세요.</p> 
	  </div>
	</div>
	<button class="faq-close">닫기</button>
	</div>
  </li>

  <!-- FAQ item template: duplicate and change question/answer -->
  <li class="faq-item">
	<div class="faq-question" tabindex="0">
	<span class="faq-q-icon">Q</span>
	<span class="faq-text">무료 등록을 반드시 해야 시청할 수 있나요?</span>
	</div>
	<div class="faq-answer">
	<div class="faq-answer-content">
	  <span class="faq-a-icon">A</span>
	  <div class="faq-answer-text">
	  <p><strong>네, <a href="https://epiclounge.co.kr/v3/application_terms.html" target="_blank">무료 등록</a>을 완료해야 시청</strong>할 수 있으며, 1인 1회 등록이 가능합니다.</p>
	  </div>
	</div>
	<button class="faq-close">닫기</button>
	</div>
  </li>
  <li class="faq-item">
	<div class="faq-question" tabindex="0">
	<span class="faq-q-icon">Q</span>
	<span class="faq-text">등록 정보는 어떻게 수정하나요?</span>
	</div>
	<div class="faq-answer">
	<div class="faq-answer-content">
	  <span class="faq-a-icon">A</span>
	  <div class="faq-answer-text">
	  <p><a href="https://epiclounge.co.kr/v3/application_confirm.html" target="_blank">등록 확인</a>을 통해 등록 정보를 수정할 수 있습니다.</p>
	  </div>
	</div>
	<button class="faq-close">닫기</button>
	</div>
  </li>
  <li class="faq-item">
	<div class="faq-question" tabindex="0">
	<span class="faq-q-icon">Q</span>
	<span class="faq-text">웨비나는 어떻게 시청하나요?</span>
	</div>
	<div class="faq-answer">
	<div class="faq-answer-content">
	  <span class="faq-a-icon">A</span>
	  <div class="faq-answer-text">
	  <p>웨비나는 PC, 모바일, 태블릿 등에서 시청하실 수 있으나, PC 환경을 권장드립니다.</p>
	  </div>
	</div>
	<button class="faq-close">닫기</button>
	</div>
  </li>
  <li class="faq-item">
	<div class="faq-question" tabindex="0">
	<span class="faq-q-icon">Q</span>
	<span class="faq-text">웨비나 도중에는 입장이 불가능한가요?</span>
	</div>
	<div class="faq-answer">
	<div class="faq-answer-content">
	  <span class="faq-a-icon">A</span>
	  <div class="faq-answer-text">
	  <p>방송 진행 중에도 입장하여 시청이 가능합니다.</p>
	  </div>
	</div>
	<button class="faq-close">닫기</button>
	</div>
  </li>
  <li class="faq-item">
	<div class="faq-question" tabindex="0">
	<span class="faq-q-icon">Q</span>
	<span class="faq-text">본인 인증 시 인증이 완료되지 않고, 계속 본인 인증창이 나타납니다.</span>
	</div>
	<div class="faq-answer">
	<div class="faq-answer-content">
	  <span class="faq-a-icon">A</span>
	  <div class="faq-answer-text">
	  <p>등록 시 본인 인증을 시도 했으나 완료되지 않고 인증창이 계속 나타나는 경우 아래의 방법을 시도해 주세요.</p>
		<p>1. 사용 중인 브라우저의 캐시 및 쿠키 삭제를 해주세요.</p>
		<p>2. 이후 브라우저를 완전히 종료 해주시고, 다시 브라우저를 열어 본인 인증을 시도해 주세요.</p>
		<p>3. 캐시 및 쿠키 삭제 후 브라우저를 재시작 했음에도 해결이 안된다면, 다른 브라우저로 본인 인증을 시도해 주세요.</p>
	  </div>
	</div>
	<button class="faq-close">닫기</button>
	</div>
  </li>
  <li class="faq-item">
	<div class="faq-question" tabindex="0">
	<span class="faq-q-icon">Q</span>
	<span class="faq-text">문의가 있습니다. 어떻게 문의하면 될까요?</span>
	</div>
	<div class="faq-answer">
	<div class="faq-answer-content">
	  <span class="faq-a-icon">A</span>
	  <div class="faq-answer-text">
	  <p>문의는 <a href="mailto:info@epiclounge.co.kr" target="_blank">이메일</a> 혹은 전화 <a href="tel:02-326-3701" target="_blank">02-326-3701</a>를 통해서 가능합니다.</p>
	  </div>
	</div>
	<button class="faq-close">닫기</button>
	</div>
  </li>
  </ul>
</section>
  
<script>
  // 현재 시간을 한국 시간 기준으로 변환
  const now = new Date();
  const koreaNow = new Date(now.getTime() + 9 * 60 * 60 * 1000);

  const startTime = new Date("2025-05-21T13:30:00+09:00");
  const endTime = new Date("2025-05-21T15:30:00+09:00");

  if (koreaNow >= startTime && koreaNow <= endTime) {
    document.getElementById("liveBtn").style.display = "inline-block";
  }
</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.faq-question').forEach(btn => {
	btn.addEventListener('click', () => {
	const item = btn.closest('.faq-item');
	item.classList.toggle('active');
	});
  });

  document.querySelectorAll('.faq-close, .faq-q-icon.answer-icon').forEach(el => {
	el.addEventListener('click', (e) => {
	const item = el.closest('.faq-item');
	item.classList.remove('active');
	e.stopPropagation();
	});
  });
  });
</script>
  <?php include 'inc/common_footer.php'; ?>

</body>

</html>