<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
  <title>에픽 라운지</title>

  <!-- CSS -->
  
  <link rel="stylesheet" href="./assets/css/nice-select.css">
  <link rel="stylesheet" href="./assets/css/event_0626.css">
  <link rel="stylesheet" href="./assets/css/font_0626.css">
  

  <!-- JS -->
  <script src="assets/js/jquery-1.7.2.min.js"></script>
  <script src="assets/js/jquery.nice-select.min.js"></script>
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
  <script src="assets/js/html5shiv.js"></script>
  <![endif]-->

  <!--[if IE 9]>
  <link rel="stylesheet" href="assets/js/ie9.css">
  <![endif]-->

</head>

<body>
  <header class="header">
    <div class="inner-wrap">
      <div class="logo">
<a href="https://epiclounge.co.kr/"><span class="blind">로고</span></a>
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
<h1 class="event-title"><img src="https://unrealsummit16.cafe24.com/2023/fest_src/logo_main_uef23_t.svg" alt="시작해요 언리얼 UEFN" /></h1> 
        <div class="contents-wrap">
        <div class="content-box">
            <p class="result_text_1">언리얼 페스트 2023 서울</p>
            <p class="result_text_2">단체 등록이 완료되었습니다.</p>
			<div class="result_text_box">
                <p>일시: 8월 29일(화), 10:30~</p>
                <p>장소: 인터컨티넨탈 서울 코엑스, B1 하모니 볼룸</p>
            </div>
            <p class="result_text_3" style="color: rgb(55, 0, 255); word-break: keep-all; font-weight: 700;">단체 등록 신청서 내에 기재된 정보와 등록하신 정보가 일치하는지 확인 후, 오프라인 입장 시 필요한 QR코드가 문자로 발송될 예정입니다.(8월28일 오후)</p>
      
            <div class="result_text_box2 free_box">
                <div class="result_text_box2_wrap">
                    <h3>안내</h3>
                    <ul>


						<li style="color: red">단체 등록 신청서 내에 기재된 정보와 입력 정보가 상이한 경우, 등록이 완료되었을지라도 오프라인 행사에 참여하실 수 없습니다. 이런 경우에는 별도로 통보 드릴 예정입니다.</li>
						<li>문의: 02-327-3701 / 메일: info@epiclounge.co.kr</li>

					</ul>

				</div>
			</div>

        </div>
      
        <div class="btn-group one_btn">
          <a href="/v3/unrealfest.php"  class="lg half sky">확인</a>
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
 