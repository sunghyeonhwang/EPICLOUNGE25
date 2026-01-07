<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
  <title>에픽 라운지</title>

  <!-- CSS -->
  
  <link rel="stylesheet" href="../assets/css/nice-select.css">
  <link rel="stylesheet" href="../assets/css/event_start24.css">
  <link rel="stylesheet" href="../assets/css/font_0626.css">
  

  <!-- JS -->
  <script src="../assets/js/jquery-1.7.2.min.js"></script>
  <script src="../assets/js/jquery.nice-select.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-174668456-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-174668456-1');
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
  <!--[if lt IE 9]>
  <script src="../assets/js/html5shiv.js"></script>
  <![endif]-->

  <!--[if IE 9]>
  <link rel="stylesheet" href="../assets/js/ie9.css">
  <![endif]-->

</head>

<body>
  <header class="header">
    <div class="inner-wrap">
      <div class="logo">
<a href="https://epiclounge.co.kr/start_lsu2024.php"><span class="blind">로고</span></a>
      </div>
      <div class="confirm">
        <p>이미 등록을 하셨나요?</p>
        <div class="btn-group">
          <a href="application_confirm.html" class="md sky"">등록 확인</a>
        </div>
      </div>
    </div>
  </header>
  
  
  <div class="container">
      <h1 class="event-title"><img src="/assets/img/event_0626/top_logo.svg" alt="시작해요 언리얼 UEFN" /></h1>
        <div class="contents-wrap">
        <div class="content-box">
            <p class="result_text_1">시작해요 언리얼 2024</p>
            <p class="result_text_2">온라인 등록이 완료되었습니다.</p>
			<div class="result_text_box">
                <p>일시: 5월 2일 ~ 5월 30일, 매주 목요일 오후 2시</p>
                <p>채널: 에픽 라운지</p>
            </div>
            <p class="result_text_3">*행사 종료 시간은 날짜 별로 상이 할 수 있습니다.</p>
      
            <div class="result_text_box2 free_box">
                <div class="result_text_box2_wrap">
                    <h3>안내</h3>
                    <ul>
						<li>행사 당일 오전에 카카오톡(or 문자)/이메일로 접속 링크가 발송됩니다. </li>
						<li>접속 링크를 받지 못하더라도 에픽 라운지에서 등록확인 후 시청하실 수 있습니다.</li>
						<li>등록 정보 변경 및 취소 정보는 FAQ를 참고해 주세요.</li>
						<li>문의: 02-327-3701 / 메일: info@epiclounge.co.kr</li>
					</ul>

				</div>
			</div>

        </div>
      
        <div class="btn-group one_btn">
          <a href="https://epiclounge.co.kr/start_lsu2024.php"  class="lg half sky">확인</a>
        </div>
    </div>
  </div>
  
  <script>
    // 약관 체크
    $("#allAgree").on("change", function(){
      if ($("#allAgree").prop("checked")) {
        $(".agree input[type=checkbox]").prop("checked", true);
      } else {
        $(".agree input[type=checkbox]").prop("checked", false);
      }
    });
    
    // 취소 버튼 클릭시
    $(".cancel").on("click", function() {
      location.href = "https://www.epiclounge.co.kr";
    });
  </script>

</body>

</html>
 