/************** 단말기 체크 ****************/
var fzoom09 = ["LM-V", "LM-G"];
var fzoom10 = ["SM-G930"];
var fzoom11 = ["SM-G988", "SM-G970N"];
var userAgent = navigator.userAgent.toUpperCase();

for (var i = 0; i < fzoom09.length; i++) {
  if (userAgent.indexOf(fzoom09[i]) > -1) {
    $("html").addClass("fzoom09");
    break;
  }
}
for (var i = 0; i < fzoom10.length; i++) {
  if (userAgent.indexOf(fzoom10[i]) > -1) {
    $("html").addClass("fzoom10");
    break;
  }
}
for (var i = 0; i < fzoom11.length; i++) {
  if (userAgent.indexOf(fzoom11[i]) > -1) {
    $("html").addClass("fzoom11");
    break;
  }
}

/************** 글자 자르기 ****************/
function TextCut() {
  var textCut = $(".text-cut");
  textCut.each(function () {
    if ($(this).text().length > $(this).data("cut")) {
      $(this).text($(this).text().substring(0, $(this).data("cut")) + "...");
    }
  });
}

/************** 토글 레이어 ****************/
function ToggleLayer() {
  var toggleLayer = $(".ui-toggle");
  toggleLayer.on("click", function () {
    $(this).toggleClass("body-hidden");
    if ($(this).hasClass("body-hidden")) {
      $("html,body").css("overflowY", "auto");
    } else {
      $("html,body").css("overflowY", "hidden");
    }
    if ($(this).hasClass("all-menu-toggle")) {
      $(".header").toggleClass("all-menu-active");
    }
    $(this).toggleClass("active");
    $("#" + $(this).data("toggle")).toggleClass("active");
    return false;
  });
}

$(document).ready(function () {

  TextCut();
  ToggleLayer();

  (function () {

    var gObj = {
      openLayer: $(".ui-open"),
      closeLayer: $(".ui-close"),
      accordion: $(".ui-accordion"),
      tabMenu: $(".ui-tab"),
      fadeAction: $(".fade-action"),
      winHeight: $(window).height(),
      url: window.document.location.href,
    }

    // 레이어 열기
    gObj.openLayer.on("click", function () {
      $("#" + $(this).data("open")).addClass("active");
      if ($(this).hasClass("fade-out")) {
        $(this).parent().fadeOut();
      }
      if ($(this).hasClass("body-hidden")) {
        $("html,body").css("overflowY", "hidden");
      }
      if ($(this).data("open") == "popup_share") {
        $("#popup_share input").val(gObj.url);
      }
        
      return false;
    });

    // 레이어 닫기
    gObj.closeLayer.on("click", function () {
      if ($(this).hasClass("body-auto")) {
        $("html,body").css("overflowY", "auto");
      }
      $("#" + $(this).data("close")).removeClass("active");
      return false;
    });

    // 아코디언 메뉴
    gObj.accordion.on("click", ".title", function () {
//      if ($(this).siblings(".content").text().length > 0)
      if ($(this).parents(".ui-accordion").hasClass("event")) {
      } else {
        $(this).parent().siblings("li").find(".title").removeClass("active");
        $(this).parent().siblings("li").find(".content").slideUp(150);        
      }
      $(this).toggleClass("active");
      $(this).siblings(".content").slideToggle(150);
    });

    // 탭 메뉴
    gObj.tabMenu.on("click", ".tab-btn", function () {
      $(".tab-content").hide();
      $(this).parent().siblings("li").find(".tab-btn").removeClass("active");
      $(this).addClass("active");
      $("#tab" + $(this).data("tab")).show();
    });
    
    // 링크 복사
    $(".url-copy").on("click", function() {
      $(this).siblings("input").select();
      document.execCommand("copy");
    });

    // 맨 위로
    $(".go-top").on('click', function () {
      $('html, body').animate({
        scrollTop: 0
      }, 500);
      return false;
    });

    // 스크롤 이벤트
    $(window).on("scroll", function() {
      var winScrollTop = $(window).scrollTop();

      /* Fade Action */
      if (gObj.fadeAction.length > 0) {
        gObj.fadeAction.each(function() {
          if ($(window).width() > 800) {
            if ((winScrollTop + (gObj.winHeight/1.3)) > $(this).offset().top) {
              $(this).addClass("active");
            }
          } else {
            if ((winScrollTop + (gObj.winHeight/1.1)) > $(this).offset().top) {
              $(this).addClass("active");
            }
          }
        });
      }

      /* Go Top */
      if ($(window).scrollTop() > 100) {
        $(".go-top").fadeIn(150);
      } else {
        $(".go-top").fadeOut(150);
      }
    });


    // 쿠기 가져오기
    function getCookie(cookie_name) {
      var x, y;
      var val = document.cookie.split(';');
      for (var i = 0; i < val.length; i++) {
        x = val[i].substr(0, val[i].indexOf('='));
        y = val[i].substr(val[i].indexOf('=') + 1);
        x = x.replace(/^\s+|\s+$/g, '');
        if (x == cookie_name) {
          return unescape(y);
        }
      }
    }

    //쿠키 저장하기
    function setCookie(cookie_name, value, days) {
      var exdate = new Date();
      exdate.setDate(exdate.getDate() + days);
      var cookie_value = escape(value) + ((days == null) ? '' : '; expires=' + exdate.toUTCString());
      document.cookie = cookie_name + '=' + cookie_value;
    }

    // 테마 설정
    var theme = null;

    if (getCookie('theme')) {
      $("body").removeClass('theme-dark');
      $("body").removeClass('theme-light');
      $("body").addClass(getCookie('theme'));
      $(".theme-btn").removeClass("theme-dark");
      $(".theme-btn").removeClass("theme-light");
      $(".theme-btn").addClass(getCookie('theme'));
    } else {
      $("body").addClass("theme-dark");
      $(".theme-btn").removeClass("theme-dark");
      $(".theme-btn").removeClass("theme-light");
      $(".theme-btn").addClass("theme-dark");
    }

    // 테마 변경
    $(".theme-btn").on("click", function () {
      if ($(this).hasClass("theme-light")) {
        $(this).removeClass("theme-light").addClass("theme-dark");
        $("body").removeClass("theme-light").addClass("theme-dark");
        setCookie('theme', "theme-dark", 1000);
      } else {
        $(this).removeClass("theme-dark").addClass("theme-light");
        $("body").removeClass("theme-dark").addClass("theme-light");
        setCookie('theme', "theme-light", 1000);
      }
    });

    // 전체 메뉴
    var allMenu = $(".all-menu ul");

    allMenu.find("li:has(ul)").addClass("has-child");

    allMenu.on("click", ".has-child", function() {
      $(this).siblings("li").find("ul").slideUp(200);
      $(this).siblings("li").children("a").removeClass("active");
      $(this).children("a").toggleClass("active");
      $(this).find("ul").slideToggle(200);
    });
    
    // 셀렉트 박스
    $('select').niceSelect();
    
    // 모바일 - 이벤트 페이지 하단 패딩
    if ($(window).width() < 800 && $(".event-view").length > 0) {
      $("body").css("padding-bottom", 70);
    }
    
    // 이벤트 서밋 TOP
    if ($(".summit-part").length > 0) {
      $(".go-top a").addClass("light");
    }
    
    // 리소스 탭 박스 슬라이드
    if ($(".resource-part .tab-box").length > 0) {
      var tabSlide = new Swiper(".tab-box .swiper-container", {
        slidesPerView: 'auto',
      });
      var tabActiveIndex = $(".tab-box .swiper-slide .active").parent().index();
      console.log(tabActiveIndex);
      tabSlide.slideTo(tabActiveIndex, 0);
    }
    
    // 정렬 셀렉트 박스 슬라이드
    var sortSwiper = undefined;
    function sortControl() {
      if ($(window).width() < 1160 && sortSwiper == undefined) {
        sortSwiper = new Swiper(".sort-box .select-list", {
          slidesPerView: "auto",
        });
      } else if ($(window).width() > 1160 && sortSwiper != undefined) {
        sortSwiper.destroy();
        sortSwiper = undefined;
        $('.sort-box .swiper-wrapper').removeAttr('style');
        $('.sort-box .swiper-slide').removeAttr('style');
      }
    }
    sortControl();

    // 윈도우 리사이즈
    $(window).on("resize", function() {
      sortControl();
    });

  })();

});
