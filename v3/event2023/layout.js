$(document).ready(function () {
	leftmenuslide(); /* 모바일 메뉴 */
	scrollanimate(); /* 스크롤 부드럽게 움직이게 */
	channelbtn(); /* 계산기 팝업 */

})



/* 모바일 메뉴 */
function leftmenuslide(){
	var $mbNav = $(".head .mb-nav-btn");
	var $mbNavbox = $(".head .mb-nav-box");
	var $mbClose = $(".head .mb-nav-box .close-btn");
	var $mNav = $(".head .m-nav");
	var $mbNavbtn = $(".head .m-nav .mb-nav-btn")
	$mbNav.click(function(){
		if(!($mbNavbox.hasClass("on"))){
			$mbNavbox.addClass("on");
			$mNav.addClass("on").css("position","fixed")
			$mbNavbtn.addClass("on");
		}else{
			$mbNavbox.removeClass("on");
			$mNav.removeClass("on")
			$mNav.removeClass("on").css("position","relative")
			$mbNavbtn.removeClass("on");
		}
	});
	$mbClose.click(function(){
		$mbNavbox.removeClass("on");
	});
}

/* 스크롤 부드럽게 움직이게 */
function scrollanimate(){
	$('.detail-warp .main_header .l-nav a').click(function () {
		$('html, body').animate({
		  scrollTop: $($.attr(this, 'href')).offset().top
		}, 400);
		return false;
	});
}


/* 채널보기 */
function channelbtn(){
	var $channelviewBtn = $(".head .pc-nav .main-nav .r-btn .channel-btn");
	var $channelviewCon = $(".head .pc-nav .main-nav .r-btn .b-channel");

	$channelviewBtn.click(function(){
		if(!($channelviewCon.hasClass("on"))){
			$channelviewCon.addClass("on");
		}else{
			$channelviewCon.removeClass("on");
		}
	});
}




