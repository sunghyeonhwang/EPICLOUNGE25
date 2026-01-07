<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="naver-site-verification" content="10446384c30a047cc643a6123a048b10eab8a8bc" />
    <meta property="og:type" content="website" />
    <meta property="fb:589663484560989"/>
    <meta property="og:url" content="https://epiclounge.co.kr/unrealfest25_speaker.php" />
    <meta property="og:title" content="언리얼 페스트 서울 2025 발표자 모집" />
    <meta property="og:image" content="https://unrealsummit16.cafe24.com/2025/unrealfest2025/ufest25_key_image.jpg" />
    <meta property="og:image:height" content="630px" />
    <meta property="og:image:width" content="1200px" />
    <meta property="og:description" content="오는 8월 25일과 26일 양일간, 코엑스에서 진행되는 <언리얼 페스트 서울 2025>의 발표자를 모집합니다!">
    <meta name="naver-site-verification" content="374c7b8b38a950b57cfd67d5e14696efd33bc057" />
    <link rel="shortcut icon" href="https://epiclounge.co.kr/favicon_16.ico" sizes="16x16">
    <link rel="shortcut icon" href="https://epiclounge.co.kr/favicon_32.ico" sizes="32x32">
    <!-- Global site tag (gtag.js) - Google Analytics -->

<title>언리얼 페스트 서울 2025</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
</head>
<body>
<link rel="stylesheet" href="/v3/resource/css/common.css">
<link rel="stylesheet" href="/v3/resource/css/fest_2025_0825.css">
<script src="/v3/resource/js/jquery-3.4.1.min.js"></script>
<script src="/v3/resource/js/ScrollTrigger.min.js"></script>
<script src="/v3/resource/js/common.js"></script>
<script src="/v3/resource/js/main.js"></script>
<!-- container -->

<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>
<?php include 'inc/common_header.php'; ?>
<?
$RData = "";
if(isset($_GET['speaker_ph']) && $_GET['speaker_ph'] != ""){
    $RData = sql_fetch("select * from cb_unreal_2025_speaker_apply where speaker_ph = '{$_GET['speaker_ph']}'");
}
?>

<div id="event_write" class="full_page">
	
    <div class="visual_mp4_bg">
        <video autoplay loop muted class="video w_video">
            <!-- 영상 로드시 튀는 현상으로 poster bg로 적용 -->
            <source src="https://unrealsummit16.cafe24.com/2025/ufest25_12113.mp4" type="video/mp4">
        </video>
    </div>
    <div class="wrap">
        <p class="write_text_title"><img src="/v3/resource/images/fest_2025_0825/write_title_text.svg"></p>
        <div class="write_box">
            <form action="unrealfest_2025_write_limit.php" id="frm" name="frm" method="post" enctype="multipart/form-data">
                <fieldset>
					 <div class="write_title top_title">
                        <h3 class="h3">등록 정보 확인 /Review Registration Details</h3>
                        <p class="info_text">등록 시 작성한 정보를 입력해 주세요./ Please enter the information you provided during registration.</p>
                    </div>

                    <div class="in_text line">
                        <label for="speaker_email">이메일/Email</label>
                        <input type="text" class="text" id="speaker_email" name="speaker_email" placeholder="sample@epiclounge.co.kr" value="" />
                    </div>

                    <div class="in_text mt_20">
                        <label for="speaker_ph">연락처/Phone number with country code</label>
                        <input type="text" class="text" id="speaker_ph" name="speaker_ph" placeholder="821012345678" value="" />
                    </div>

                    <div class="btn_box_fot">
                        <button type="button" onclick="location.href = '/unrealfest25_speaker.php';" class="btn_type1">취소하기 / Cancel</button>
                        <button type="submit" class="btn_type2">수정하기 / Modify</button>
                    </div>

				</fieldset>
			</form>
		</div>
	</div>
</div>
<?php include 'inc/common_footer.php'; ?>

</body>
</html>