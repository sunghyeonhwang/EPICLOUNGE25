$(document).ready(function() {
      (function() {

        // 메인비주얼 슬라이드
        var mainVisual = $(".main-visual");

        var mainVisualSlide = new Swiper(mainVisual, {
          loop: true,
          speed: 1000,
          autoplay: {
            delay: 3000,
          },
          pagination: {
            el: ".main-visual .swiper-pagination",
            clickable: true
          },
        });

        mainVisual.find(".pause").click(function() {
          mainVisualSlide.autoplay.stop();
          $(this).removeClass("active");
          mainVisual.find(".play").addClass("active");
        });
        mainVisual.find(".play").click(function() {
          mainVisualSlide.autoplay.start();
          $(this).removeClass("active");
          mainVisual.find(".pause").addClass("active");
        });


        // 뉴스 리스트
        var mainNews = $('.main-news'),
            newsListSwiper = undefined;
        function newsListControl() {
          if ($(window).width() < 1160 && newsListSwiper == undefined) {
            newsListSwiper = new Swiper(".main-news .post-list", {
              slidesPerView: "auto",
            });
          } else if ($(window).width() > 1160 && newsListSwiper != undefined) {
            newsListSwiper.destroy();
            newsListSwiper = undefined;
            mainNews.find('.swiper-wrapper').removeAttr('style');
            mainNews.find('.swiper-slide').removeAttr('style');
          }
        }
        newsListControl();
        
        // 이벤트 슬라이드
        const eventSwiper = new Swiper(".main-event .swiper-container", {
          loop: true,
          speed: 500,
          slidesPerView: 3,
          simulateTouch: true,
          centeredSlides: true,
          navigation: {
            nextEl: ".main-event .swiper-button-next",
            prevEl: ".main-event .swiper-button-prev",
          },
          breakpoints: {
            768: {
              slidesPerView: 1,
              centeredSlides: false,
            },
          },
        });
        
        // 배경 이미지 변경
//        let bgUrl = null;
//        function eventBgControl() {
//          if ($(window).width() > 800) {
//            bgUrl = $(".main-event").find("slide").attr("src");
//            $(".main-event").css({"background-image": "url(" + bgUrl});
//          }
//        }
//        eventBgControl();
        
        
        // 윈도우 리사이즈
        $(window).on("resize", function() {
          
        });
        
        
        // 로딩 후 액션
        $(".header").addClass("active");
        mainVisual.addClass("active");
        mainNews.find(".section-title.fade-action").addClass("active");
        mainNews.find(".main-post.fade-action").addClass("active");
      })();
    });