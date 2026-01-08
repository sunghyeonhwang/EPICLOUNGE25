<?

// 현재 호스트명이 www.epiclounge.co.kr 인지 확인
if ($_SERVER['HTTP_HOST'] === 'www.epiclounge.co.kr') {
  // 강제로 epiclounge.co.kr로 301 리디렉션
  $redirect = 'https://epiclounge.co.kr' . $_SERVER['REQUEST_URI'];
  header('Location: ' . $redirect, true, 301);
  exit();
}

$g5_path = 'board';
include_once ('board/common.php');
include_once ('board/lib/latest.lib.php');

?>

<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta property="og:type" content="website" />
  <meta property="fb:589663484560989" />
<meta property="og:url" content="https://epiclounge.co.kr/event_challenge25.php" />
<meta property="og:title" content="언리얼 엔진 챌린지 2025" />
	<meta property="og:description" content="언리얼 챌린지 2025가 시작되었습니다! 올해의 주제인 ‘빛과 그림자’를 활용해 여러분만의 창의력을 마음껏 발휘해 멋진 작품을 만들어 보세요.">
<meta property="og:image" content="https://unrealsummit16.cafe24.com/2025/challange25/ch25_thumanil.png" />
  <meta property="og:image:height" content="630px" />
  <meta property="og:image:width" content="1200px" />
  <meta property="og:description" content="에픽 라운지" />
  <meta name="naver-site-verification" content="374c7b8b38a950b57cfd67d5e14696efd33bc057" />
  <link rel="mask-icon" href="https://unrealsummit16.cafe24.com/2025/ufest25/images/mask-icon.svg" color="#424242">
  <link rel="apple-touch-icon" sizes="57x57" href="/v3/favicon/v3/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/v3/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/v3/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/v3/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/v3/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/v3/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/v3/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/v3/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/v3/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/v3/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/v3/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/v3/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/v3/favicon/favicon-16x16.png">
  <link rel="manifest" href="/v3/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/v3/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!-- <meta property="og:title" content="스테이트 오브 언리얼 | 하이라이트" />
  <meta property="og:type" content="website" />
  <meta property="fb:589663484560989"/>
  <meta name="keywords" content="스테이트 오브 언리얼 | 하이라이트 "/>
  <meta name="description" content="스테이트 오브 언리얼 | 하이라이트">
  <meta property="og:url" content="https://www.epiclounge.co.kr" />
  <meta property="og:image" content="https://unrealsummit16.cafe24.com/stu/gdc_ogg.jpg" />
  <meta property="og:image:height" content="630px" />
  <meta property="og:image:width" content="1200px" />
  <meta property="og:description" content="스테이트 오브 언리얼 하이라이트를 마련해 SOU에서 발표된 내용과 그 의미를 함께 짚어 보고자 합니다. SOU를 놓치신 분들이라면, 알람을 설정하여 시청해 보세요!" />
  <meta name="naver-site-verification" content="374c7b8b38a950b57cfd67d5e14696efd33bc057" />
  <link rel="shortcut icon" href="https://epiclounge.co.kr/favicon_16.ico" sizes="16x16"> 
  <link rel="shortcut icon" href="https://epiclounge.co.kr/favicon_32.ico" sizes="32x32">  -->
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-174668456-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-174668456-1');
  </script>
  <!-- Global site tag (gtag.js) - Google Ads: 760706945 -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-760706945"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'AW-760706945');
  </script>
  <!-- Facebook Pixel Code -->
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '413080733349618');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=413080733349618&ev=PageView&noscript=1" /></noscript>
  <!-- End Facebook Pixel Code -->
  <title>에픽 라운지</title>
</head>

<body>
  <style>
    #quick_banner {
      display: none
    }
  </style>
  <link rel="stylesheet" href="/v3/resource/css/main26.css">
  <style>
    /* Prevent SplitText flicker */
    .bg_slide_box .bg_slide_title, 
    .bg_slide_box .bg_slide_text {
      visibility: hidden;
      opacity: 0;
    }
  </style>

  <script src="/v3/resource/js/jquery-3.4.1.min.js"></script>
  <script src="/v3/resource/js/slick.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="/v3/resource/js/ScrollTrigger.min.js"></script>
  <script src="/v3/resource/js/jquery.menu.min.js"></script>
  <script src="/v3/resource/js/jquery.responsive.min.js"></script>
  <script src="/v3/resource/js/common.js"></script>
  <script src="/v3/resource/js/main26.js"></script>

  <style>
    /* Cinematic Hero Styles */
    .cinematic-hero {
      position: relative;
      width: 100%;
      height: 765px; /* 815px - 50px */
      margin-top: 80px;
      overflow: hidden;
      background: #000;
      z-index: 1;
    }

    .swiper-slide {
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .hero-bg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }

    .hero-bg video, .hero-bg img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transform: scale(1);
    }



    .hero-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.4);
      z-index: 1;
    }

    .hero-content {
      position: relative;
      z-index: 10;
      text-align: center;
      color: #fff;
      max-width: 900px;
      padding: 0 20px;
    }

    .hero-title {
      font-size: 80px;
      font-weight: 900;
      margin-bottom: 20px;
      letter-spacing: -2px;
      line-height: 1.1;
      opacity: 0;
      height: 420px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .hero-title img {
        height: auto;
    }



    .hero-cta {
      opacity: 0;
    }

    .hero-cta a {
      display: inline-block;
      padding: 14px 60px;
      border-radius: 10px;
      background: transparent;
      border: 1px solid #A7A7A7;
      color: #fff;
      font-weight: 700;
      text-decoration: none;
      transition: all 0.3s ease;
    }
    
    .hero-cta a:hover {
      background: #fff;
      color: #000;
      transform: translateY(-3px);
    }

    /* Navigation Custom */
    .swiper-button-next, .swiper-button-prev {
      color: #fff;
      opacity: 0.5;
      transition: 0.3s;
    }
    .swiper-button-next:hover, .swiper-button-prev:hover { opacity: 1; }
    
    /* Custom Pagination (Simple Dots) */
    .swiper-custom-pagination {
      position: absolute;
      bottom: 50px !important;
      left: 0;
      width: 100%;
      display: flex;
      justify-content: center;
      z-index: 1000;
      pointer-events: none;
    }
    .swiper-custom-pagination .swiper-pagination-bullet {
      width: 12px;
      height: 12px;
      background: #888; /* 회색 */
      border-radius: 50%;
      opacity: 1;
      margin: 0 8px !important;
      cursor: pointer;
      pointer-events: auto;
      transition: background-color 0.3s ease;
    }
    .swiper-custom-pagination .swiper-pagination-bullet:hover,
    .swiper-custom-pagination .swiper-pagination-bullet-active {
      background: #fff; /* 호버 및 활성 시 흰색 */
    }

    @media (max-width: 768px) {
      .cinematic-hero { height: 600px; }
      .hero-title { font-size: 40px; }
      .hero-title img { max-width: 300px; }
    }
  </style>


  <?php
  include_once ('./_common.php');

  define('_INDEX_', true);
  if (!defined('_GNUBOARD_'))
    exit;  // 개별 페이지 접근 불가
  ?>


  <!-- <div id="quick_banner">
    <ul>
      <li><a href="https://twitter.com/intent/tweet?text=언리얼 페스트 2023 서울, 등록이 시작되었습니다.!&url=https://epiclounge.co.kr" title="새창" target="_blank"><img src="/v3/resource/images/event/quick_sns_1.png" /></a></li>
      <li><a href="https://www.facebook.com/sharer/sharer.php?u=https://epiclounge.co.kr" title="새창" target="_blank"><img src="/v3/resource/images/event/quick_sns_2.png" /></a></li>
      <li><a href="#n" onclick="clip(); return false;" title="새창" target="_blank"><img src="/v3/resource/images/event/quick_sns_3.png" /></a></li>
    </ul>
    <a href="#event_main_sec_1" class="top_btn"><img src="/v3/resource/images/event/arrow_top_btn.png" /></a>
  </div> -->



  <?php
  if (defined('_INDEX_')) {  // index에서만 실행
    include G5_BBS_PATH . '/newwin.inc.php';  // 팝업레이어
  }
  ?>
  <?php include 'inc/common_header26.php'; ?>
  <!-- container -->
  <div class="container">
    <section class="swiper cinematic-hero">
      <div class="swiper-wrapper">
        <?php
        // DB에서 메인 비주얼 데이터 조회
        $sql_visual = ' SELECT * FROM v3_visual_main WHERE vm_display = 1 ORDER BY vm_order ASC, vm_id DESC ';
        $result_visual = sql_query($sql_visual);

        while ($row = sql_fetch_array($result_visual)) {
          $duration = $row['vm_duration'] ? $row['vm_duration'] : 7000;
          ?>
        <div class="swiper-slide" data-swiper-autoplay="<?php echo $duration; ?>">
          <div class="hero-bg">
            <?php if ($row['vm_bg_type'] == 'video') { ?>
            <!-- Video Background -->
            <video autoplay loop muted playsinline style="<?php echo ($row['vm_order'] == 2) ? 'filter: brightness(0.6) contrast(1.2);' : ''; ?>">
              <source src="<?php echo $row['vm_bg_url']; ?>" type="video/mp4">
            </video>
            <?php } else { ?>
            <!-- Image Background -->
            <img src="<?php echo $row['vm_bg_url']; ?>" alt="Visual Background" style="width:100%; height:100%; object-fit:cover;">
            <?php } ?>
            <div class="hero-overlay"></div>
          </div>
          <div class="hero-content">
            <div class="hero-title">
              <img src="<?php echo $row['vm_title_img']; ?>" alt="Visual Title" style="width: 800px;">
            </div>
            <div class="hero-cta" style="margin-top: 0;">
              <a href="<?php echo $row['vm_link_url']; ?>" target="_blank"><?php echo $row['vm_btn_text']; ?></a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
      <!-- Controls -->
      <div class="swiper-custom-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </section>





    <section class="news_sec">
      <div class="wrap">
        <div class="sec_title">
          <h2>새소식</h2>
          <a href="https://epiclounge.co.kr/contents/news_list.php">+ 전체보기</a>
        </div>
        <div class="con">
          <div class="scroll_box">


            <?

            $main_news_result = sql_query("select * from v3_main_banner_news where bn_use_at = 'Y' order by bn_id desc limit 3");
            foreach ($main_news_result as $news) {
              ?>
            <div class="list_box">
              <a href="<?= $news['bn_url'] ?>" target="_blank">
                <div class="img_box">
                  <img src='/data/main_news/<?php echo $news['bn_id']; ?>' />
                </div>
                <div class="news_text">
                  <span class="news_text_title"><?= $news['bn_title'] ?></span>
                  <span class="news_text_info"><?= $news['bn_info'] ?></span>
                </div>
              </a>
            </div>
            <?
            }
            ?>
          </div>
        </div>
      </div>
    </section>

    <section class="bg_slide_box">
      <div class="bg_slide_list_box">

        <!-- Slide 1 -->
        <div class="bg_slide_list bg_slide_list1">
          <video autoplay muted loop playsinline class="bg_video">
            <source src="https://cms-assets.unrealengine.com/AiKUh5PQCTaOFnmJDZJBfz/AFmdAcaBROOy9YytjJ3a" type="video/mp4">
          </video>
          <div class="txt_wrap">
            <p class="bg_slide_title">에픽 메가그랜트</p>
            <p class="bg_slide_text">에픽 메가그랜트는 리얼타임 3D 개발을 새로운 차원으로 혁신하는<br>커뮤니티의 유망한 신규 프로젝트에 투자하는 프로그램입니다.</p>
            <p class="bg_slide_btn"><a href="#" target="_blank">바로가기</a></p>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="bg_slide_list bg_slide_list2">
          <video autoplay muted loop playsinline class="bg_video">
            <source src="https://cms-assets.unrealengine.com/AiKUh5PQCTaOFnmJDZJBfz/d66nnRxEQpatoaaSG3ww" type="video/mp4">
          </video>
          <div class="txt_wrap">
            <p class="bg_slide_title">언리얼 엔진 5</p>
            <p class="bg_slide_text">언리얼 엔진은 개발자에 의한, 개발자를 위한, 모두에게 공평한 조건으로 제작되었습니다.<br>누구나 세계에서 가장 개방적이고 진보된 리얼타임 제작 툴을 사용하여 아이디어를 실현할 수 있습니다.</p>
            <p class="bg_slide_btn"><a href="#" target="_blank">다운로드</a></p>
          </div>
        </div>

      </div>
      <div class="slider-dots-box"></div>


    </section>


    <section class="resource_list">
      <div class="wrap">
        <div class="resource_title">
          <h2>리소스</h2>
          <a href="https://epiclounge.co.kr/contents/replay.php">+ 전체보기</a>
        </div>
        <div class="con">
          <?

          $main_rsc_result = sql_query("select * from v3_main_banner_rsc where bn_use_at = 'Y' order by bn_id desc limit 6");
          foreach ($main_rsc_result as $rsc) {
            ?>
          <div class="list_box">
            <a href="<?= $rsc['bn_url'] ?>" target="_blank">
              <div class="img_box">
                <img src='/v3/data/main_res/<?php echo $rsc['bn_id']; ?>' />
              </div>
              <div class="text_box">
                <span class="cate"><?= $rsc['bn_tag'] ?></span>
                <span class="title"><?= $rsc['bn_title'] ?></span>
                <span class="text"><?= $rsc['bn_info'] ?></span>
              </div>
            </a>
          </div>
          <?
          }
          ?>
        </div>
      </div>
    </section>


    <!-- GSAP 3 & SplitText Animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <!-- Note: SplitText is a paid plugin. Use your licensed version here. -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/SplitText.min.js"></script>

    <script>
      let splitTitle, splitText;

      function animateBgSlideText(activeSlide) {
        const title = activeSlide.find('.bg_slide_title');
        const text = activeSlide.find('.bg_slide_text');

        // Kill any ongoing tweens
        gsap.killTweensOf([title, text]);
        if (splitTitle) { splitTitle.revert(); splitTitle = null; }
        if (splitText) { splitText.revert(); splitText = null; }

        // Initial setup for the SplitText or animation
        gsap.set([title, text], { autoAlpha: 0, visibility: "visible" });

        // Force a small delay to ensure DOM is ready and styles are applied
        requestAnimationFrame(() => {
          if (window.SplitText) {
            splitTitle = new SplitText(title, { type: "chars, words" });
            splitText = new SplitText(text, { type: "words" });

            gsap.set([title, text], { autoAlpha: 1 });

            gsap.from(splitTitle.chars, {
              duration: 0.8,
              y: 50,
              autoAlpha: 0,
              stagger: 0.04,
              ease: "power4.out",
              overwrite: "auto"
            });

            gsap.from(splitText.words, {
              duration: 0.8,
              autoAlpha: 0,
              y: 30,
              stagger: 0.08,
              ease: "power2.out",
              delay: 0.4,
              overwrite: "auto"
            });
          } else {
            // Fallback if SplitText is missing
            gsap.to([title, text], { 
              duration: 0.8, 
              y: 0, 
              autoAlpha: 1, 
              stagger: 0.2,
              ease: "power2.out",
              startAt: { y: 20, autoAlpha: 0 }
            });
          }
        });
      }

      const $bgSlider = $('.bg_slide_list_box');

      $bgSlider.on('init', function(event, slick) {
        const firstSlide = $(slick.$slides[0]);
        // Slight delay to wait for initial page load/CSS
        setTimeout(() => animateBgSlideText(firstSlide), 600);
      });

      $bgSlider.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        appendDots: $('.slider-dots-box'),
        dotsClass: 'slider-dots',
        autoplay: true,
        autoplaySpeed: 6000,
        fade: true,
        cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
        speed: 800
      });

      $bgSlider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
        // Hide currently active slide's text immediately when transition starts
        const currentSlideElem = $(slick.$slides[currentSlide]);
        const nextSlideElem = $(slick.$slides[nextSlide]);
        gsap.set(currentSlideElem.find('.bg_slide_title, .bg_slide_text'), { autoAlpha: 0 });
        gsap.set(nextSlideElem.find('.bg_slide_title, .bg_slide_text'), { autoAlpha: 0 });
      });

      $bgSlider.on('afterChange', function(event, slick, currentSlide) {
        const activeSlide = $(slick.$slides[currentSlide]);
        animateBgSlideText(activeSlide);
      });

      // Cinematic Swiper Initialization
      // Cinematic Swiper Initialization
      const animateSlide = (swiper) => {
        const activeSlide = swiper.slides[swiper.activeIndex];
        if (!activeSlide) return;

        const title = activeSlide.querySelector('.hero-title');
        const cta = activeSlide.querySelector('.hero-cta');
        const bgMedia = activeSlide.querySelector('.hero-bg video, .hero-bg img');

        // GSAP Reset & Animation
        if (title && cta) {
          gsap.killTweensOf([title, cta]);
          gsap.set([title, cta], { autoAlpha: 0, y: 0 });
        }
        
        if (bgMedia) {
          gsap.killTweensOf(bgMedia);
          gsap.set(bgMedia, { scale: 1 });
        }

        const tl = gsap.timeline({ defaults: { ease: 'power3.out', duration: 1 } });
        
        // Text Fade In
        if (title && cta) {
          tl.to(title, { autoAlpha: 1, y: 0 })
            .to(cta, { autoAlpha: 1, y: 0 }, '-=0.7');
        }

        // Ken Burns Effect via GSAP
        if (bgMedia) {
          gsap.fromTo(bgMedia, 
            { scale: 1 },
            { scale: 1.15, duration: 10, ease: 'none', overwrite: 'auto' }
          );
        }
      };

      const heroSwiper = new Swiper('.cinematic-hero', {
        effect: 'fade',
        fadeEffect: { crossFade: true },
        loop: true,
        loopAdditionalSlides: 2,
        speed: 1500,
        watchSlidesProgress: true,
        autoplay: {
          delay: 6000,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-custom-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        on: {
          init: function () {
            animateSlide(this);
          },
          transitionStart: function () {
            animateSlide(this);
          }
        }
      });;
    </script>
  </div>

  <?php include 'inc/common_footer.php'; ?>

  <!-- //wrap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
  <script type="text/javascript">
    var g5_cookie_domain = "";
    document.addEventListener('DOMContentLoaded', function() {
      var trigger = new ScrollTrigger({

        offset: {
          x: 0,
          y: -100
        },
        addHeight: true
      }, document.body, window);
    });



    $(function() {
      $("a").on("click", function() {
        var divName = $(this).attr("id"),
          topPosition = $("." + divName).offset().top;
        $('html, body').animate({
          scrollTop: topPosition - 0
        }, 500);
        return false; //리턴펄스로 스크롤이 최상위로 갔다가 돌아오는 현상 없어짐
      });
    });
  </script>

</body>

</html>