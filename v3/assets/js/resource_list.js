var tabActiveIndex = $(".tab-box .swiper-slide.active").index();
var tabSlide = new Swiper(".tab-box .swiper-container", {
  slidesPerView: 'auto',
  navigation: {
    nextEl: ".tab-box .swiper-button-next",
    prevEl: ".tab-box .swiper-button-prev",
  },
});
tabSlide.slideTo(tabActiveIndex, 0);

// Sort by
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

$('select').niceSelect();

// 윈도우 리사이즈
$(window).on("resize", function() {

});