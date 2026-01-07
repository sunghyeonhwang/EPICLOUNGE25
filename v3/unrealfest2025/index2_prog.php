<?php
include_once("index2_google_loader.php");
?>
<!DOCTYPE html>
<html lang="kr" dir="ltr">

<head>
    <meta charset="utf-8">

    <!-- Page Title-->
    <title>언리얼 페스트 2024 서울</title>

    <!-- Meta Tags-->
    <meta name="description" content="언리얼 페스트 2025 서울">
    <meta name="keywords" content="UNREA FEST, coming soon, UNREAL ENGINE, EPICLOUGE, epiclougne, UNREALSUMMIT, unrealsummit, 언리얼 페스트, 언리얼 서밋">
    <meta name="author" content="epiclounge">

    <!-- Viewport Meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Template Favicon & Icons Start -->
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" href="unrealfest2025/img/favicon/favicon-dark.svg" type="image/svg+xml" media="(prefers-color-scheme: dark)">
    <link rel="icon" href="unrealfest2025/img/favicon/favicon-light.svg" type="image/svg+xml" media="(prefers-color-scheme: light)">
    <link rel="shortcut icon" href="https://epiclounge.co.kr/unrealfest2025/img/favicon/favicon-light.svg">
    <link rel="mask-icon" href="unrealfest2025/img/favicon/mask-icon.svg" color="#424242">

    <link rel="manifest" href="unrealfest2025/img/favicon/site.webmanifest">
    <!-- Template Favicon & Icons End -->

    <!-- Facebook Metadata Start -->
    <meta property="og:image:height" content="1200">
    <meta property="og:image:width" content="1200">
    <meta property="og:site_name" content="에픽라운지, 언리얼 페스트 2025 서울">
    <meta property="og:type" content="website">
    <meta property="og:title" content="UNREAL FEST 2024 | SEOUL">
    <meta property="og:description" content="언리얼 페스트(UNREAL FEST)는 '언리얼 서밋'의 새로운 글로벌 브랜드입니다. ">
    <meta property="og:url" content="https://epiclounge.co.kr/unrealfest24.php">
    <meta property="og:image" content="https://unrealsummit16.cafe24.com/2024/uf24/key_img.jpg">
    <!-- Facebook Metadata End -->

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

    <link rel="stylesheet" href="/unrealfest2025/css/reset.css">
    <link rel="stylesheet" href="/v3/resource/css/common.css">
    <link rel="stylesheet" href="/unrealfest2025/css/main_update.css">

    <!-- JS -->
    <script src="/v3/resource/js/jquery-3.4.1.min.js"></script>
    <script src="/v3/resource/js/ScrollTrigger.min.js"></script>
    <script src="/v3/resource/js/slick.min.js"></script>
    <script src="/v3/resource/js/jquery.menu.min.js"></script>
    <script src="/v3/resource/js/common.js"></script>

</head>

<body>


<header id="header">
    <div class="wrap">
        <h1 class="logo"><a class="logo_img" href="/index_uf25.php"><img src="/resource/images/common/logo.svg"></a></h1>

        <div class="top_search_btn_box">
            <form action="/contents/total_search.php" name="frm_total_sc" id="frm_total_sc">
                <fieldset>
                    <div class="top_search_box">
                        <input type="text" name="keyword" id="keyword">
                        <button type="submit">
                            <img src="/resource/images/common/top_search_btn.svg">
                        </button>
                    </div>
                </fieldset>
            </form>
            <a href="https://epiclounge.co.kr/start_unrealengine.php" title="새창" target="_self" class="top_btn2"><strong>시작해요 UE5</strong></a>
        </div>
    </div>
    <nav>

        <h2 class="skip">주메뉴</h2>
        <div class="lnb_m_nav">
            <button type="button" class="open"><span class="line"></span><span class="line"></span><span class="line"></span></button>
        </div>

        <div id="lnb">

            <h1 class="m_logo"><a class="logo_img" href="/index_uf24.php"><img src="/resource/images/common/foot_logo.svg"></a></h1>

            <div class="m_top_search_btn_box">
                <form action="/contents/total_search.php" name="frm_total_sc" id="frm_total_sc">
                    <fieldset>
                        <div class="top_search_box">
                            <input type="text" name="keyword" id="keyword">
                            <button type="submit">
                                <img src="/resource/images/common/top_search_btn.svg">
                            </button>
                        </div>
                    </fieldset>
                </form>
                <a href="https://epiclounge.co.kr/start_unrealengine.php" title="새창" target="_self" class="top_btn2" style="color:#fff">시작해요 UE5</a>
            </div>



            <ul class="top1menu clearfix">
                <li class="depth1"><a href="https://epiclounge.co.kr/unrealfest24.php" target="_self" class="tit depth1_ti"><span style="color:#00C2E8; font-weight: 800;">언리얼 페스트 2024 서울</span></a></li>
                <li class="depth1"><a href="/contents/news_list.php" target="_self" class="tit depth1_ti"><span>새소식</span></a><div>
                        <div class="menu_bg clearfix">
                            <div class="lnb_title_box">
                                <span class="title">새소식</span>
                                <span class="text">언리얼 엔진 뉴스, 이벤트<br>그리고 영감을 주는 사례를 확인해 보세요.</span>
                            </div>
                            <div class="lnb_menu_box">
                                <strong><a href="/contents/news_list.php" target="_self" class="tit02">전체보기</a></strong>
                                <ul class="depth2">
                                    <li class="tit02_1_1"><a href="/contents/news_list.php?category=뉴스" target="_self" class="tit02">뉴스</a></li>
                                    <li class="tit02_1_2"><a href="/contents/news_list.php?category=업데이트/출시" target="_self" class="tit02">출시 &amp; 업데이트</a></li>
                                    <li class="tit02_1_3"><a href="/contents/news_list.php?category=블로그" target="_self" class="tit02">블로그</a></li>
                                </ul>
                            </div>

                            <div class="lnb_banner">
                                <a href="https://www.unrealengine.com/ko/download"><img src="https://epiclounge.co.kr/v3/data/banner/7" width="500" height="170"></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="depth1"> <a href="/contents/event_list.php?category=커뮤니티 이벤트" target="_self" class="tit depth1_ti"><span>이벤트</span></a><div>
                        <div class="menu_bg clearfix">
                            <div class="lnb_title_box">
                                <span class="title">이벤트</span>
                                <span class="text">웨비나, 테크토크, 챌린지와 같은<br>온*오프라인 이벤트를 모두 만나보세요.</span>
                            </div>

                            <div class="lnb_menu_box">
                                <strong><a href="https://epiclounge.co.kr/unrealfest24.php" target="_blank" class="tit02" style="color:#00C2E8; font-weight: 800;">언리얼 페스트 2024 서울</a></strong>
                                <ul class="depth2">

                                    <li class="tit02_2_1"><a href="/contents/event_list.php?category=커뮤니티 이벤트" target="_self" class="tit02">커뮤니티 이벤트</a></li>
                                    <li class="tit02_2_2"><a href="/contents/global_event_list.php" target="_blank" class="tit02">글로벌 이벤트</a></li>
                                </ul>
                            </div>
                            <div class="lnb_banner">
                                <a href="https://www.unrealengine.com/ko/download"><img src="https://epiclounge.co.kr/v3/data/banner/8" width="500" height="170"></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="depth1"> <a href="/contents/replay.php" target="_self" class="tit depth1_ti"><span>리소스</span></a><div>
                        <div class="menu_bg clearfix">
                            <div class="lnb_title_box">
                                <span class="title">리소스</span>
                                <span class="text">언리얼 서밋, 웨비나, 테크토크, 무료 콘텐츠, 백서 등의 다양한 리소스를 활용해 보세요.</span>
                            </div>

                            <div class="lnb_menu_box">
                                <strong>리소스</strong>
                                <ul class="depth2">
                                    <li class="tit02_3_1"><a href="/contents/replay.php" target="_self" class="tit02">다시보기</a></li>
                                    <li class="tit02_3_3"><a href="/contents/free.php" target="_self" class="tit02">무료 콘텐츠</a></li>
                                    <li class="tit02_3_2"><a href="/contents/book.php" target="_self" class="tit02">백서</a></li>
                                    <li class="tit02_3_3"><a href="https://www.unrealengine.com/ko/onlinelearning-courses" target="_blank" class="tit02">에픽 디벨로퍼 커뮤니티 ↗</a></li>
                                    <!--<li class="tit02_3_4"><a href="https://dev.epicgames.com/community/" target="_blank" class="tit02">DEV 커뮤니티</a><i class="fas fa-external-link-alt"></i></li>-->
                                </ul>
                            </div>
                            <div class="lnb_banner">
                                <a href="https://www.unrealengine.com/ko/download"><img src="https://epiclounge.co.kr/v3/data/banner/9" width="500" height="170"></a>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </nav>
    <div class="lnb_close">
        <button type="button" class="close">주메뉴 닫기</button>
    </div>
    <div class="mask">
    </div>
</header>
<div id="member_top" class="header_2">
    <div class="wrap">
        <p class="top_btn"><a href="#event_visual"><i class="top_icon"></i></a></p>
        <div class="member_header_seq_box">
            <ul>
                <li class="menu_1"><a href="#event_cont_1">Overview</a></li>
                <li class="menu_2"><a href="#event_cont_2">Agenda</a></li>
                <li class="menu_3"><a href="#event_cont_3">Register</a></li>
                <li class="menu_4"><a href="#event_cont_4">Sponsor</a></li>
                <li class="menu_5"><a href="#event_cont_5">Event</a></li>
                <li class="menu_6"><a href="#event_cont_6">Faqs</a></li>
            </ul>
        </div>
        <p class="confirm_btn"><a href="#event_cont_3" class="btn_1" target="_blank">등록 하기</a><a href="/unrealfest2025/application_confirm.html" class="btn_2" target="_blank">등록 확인</a></p>
    </div>
</div>
<div class="event_wrap">
    <div id="event_visual">
        <div class="visual_mp4">
            <video autoplay="" loop="" muted="" class="video w_video" playsinline="">
                <source src="https://unrealsummit16.cafe24.com/2024/uf24/main_bg.mp4" type="video/mp4">
            </video>
        </div>
        <div class="visual_text">
            <span class="text_1"><img src="images/main_vi_text1.svg" alt="로고 이미지" /></span>
            <span class="text_2"><img src="images/main_vi_text2.svg" alt="로고 이미지" /></span>
        </div>
    </div>

    <div id="event_cont_1">
        <div class="wrap">
            <div class="text">
                <p class="fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">언리얼 페스트는 언리얼 엔진과 에픽 에코시스템의 최신 기술, 그리고 다양한 산업에서의 혁신적인 리얼타임 3D 인터랙티브 제작 경험을 공유하는 에픽게임즈의 대표 연례 행사입니다. 오는 8월 25일(월)부터 26일(화)까지 양일간 열리는 이번 행사에서는 게임(프로그래밍/아트), 미디어 & 엔터테인먼트, 제조 및 시뮬레이션 등 다양한 산업별 트랙을 통해 총 37개의 세션이 진행됩니다.</p>
                <p class="fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">각 세션에는 3D 콘텐츠 제작을 위한 실전 노하우와 기술 인사이트가 가득 담겨 있어, 다양한 분야의 개발자와 크리에이터에게 유익한 경험을 제공할 것입니다. 또한, 세션 외에도, 최신 기술 체험 전시와 다양한 이벤트가 마련되어 있어 현장에서 더욱 풍부한 경험을 하실 수 있습니다. </p>

                <p class="fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">기술을 넘어, 새로운 아이디어와 영감을 얻고 싶다면, 지금 바로 언리얼 페스트 서울 2025에 등록하세요!</p>
            </div>
        </div>
    </div>

    <div id="event_cont_2">
        <div class="wrap">
            <div class="section_title fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once"><h3>Agenda</h3></div>

            <div class="date_header fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                <div class="btn_wrap">
                    <button type="button" class="date_nav active">
                        <span class="date">Day 1. 8월 28일(수)</span>
                    </button>
                    <button type="button" class="date_nav">
                        <span class="date">Day 2. 8월 29일(목)</span>
                    </button>
                </div>
                <a href="#n"><img src="images/update_time.svg" />전체 세션 확인하기</a>
            </div>
            <div class="program_wrap ">
                <div class="program_content active">
                    <!--  비율 2:1 -->
                    <table class="program_table">
                        <colgroup>
                            <col style="width:16%" />
                            <col style="width:28%" />
                            <col style="width:28%" />
                            <col style="width:28%" />
                        </colgroup>
                        <thead>
                        <tr>
                            <th scope="col" class="th_1"><span>시간</span></th>
                            <th scope="col" class="th_2"><span>게임: 프로그래밍</span></th>
                            <th scope="col" class="th_3"><span>미디어 & 엔터테인먼트</span></th>
                            <th scope="col" class="th_4"><span>게임: 아트</span></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="active">
                            <td class="time_td"><span>09:00</span></td>
                            <td colspan="3" class="text_center text_col_3"><span class="text_sm">등록 확인</span></td>
                        </tr>
                        <tr>
                            <td class="time_td"><span>11:00</span></td>
                            <td colspan="3" class="text_center text_col_3 cate_all">
                                <span class="text_hello">환영사</span>
                                <span class="text_info">에픽게임즈 코리아 박성철 대표	</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="time_td"><span>11:10</span></td>
                            <td colspan="3" class="cate_all text_col_3 text_left">
                                <button type="button" data-btn-pop="1" class="program_part">
                                    <span class="cate">Keynote</span>
                                    <span class="title">Epic Games Vision</span>
                                    <span class="text_info">Epic Games, Tim Sweeny</span>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td class="time_td"><span>11:25</span></td>
                            <td colspan="3" class="cate_all text_col_3 text_left">
                                <button type="button" data-btn-pop="2" class="program_part">
                                    <span class="cate">Keynote</span>
                                    <span class="title">UNREAL ENGINE and Ecosystem</span>
                                    <span class="text_info">Epic Games, Marcus Wassmer / President of Product Development</span>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="time_td"><span>11:25</span></td>
                            <td colspan="3" class="cate_all text_col_3 text_left">
                                <button type="button" data-btn-pop="3" class="program_part">
                                    <span class="cate">Keynote</span>
                                    <span class="title">UNREAL ENGINE and Ecosystem Dev Roadmap</span>
                                    <span class="text_info">Epic Games, Marcus Wassmer / President of Product Development</span>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="time_td"><span>13:20</span></td>
                            <td class="cate_all">
                                <button type="button" data-btn-pop="4" class="program_part">
                                    <span class="text_1">언리얼 페스트 세션의 안내 텍스트의 사이즈는 이정도도 괜찮을까 싶습니다. </span>
                                    <span class="text_name"><span>홍길동</span><span>홍길동</span></span>
                                    <span class="text_company">에픽게임즈 코리아</span>
                                    <span class="text_option_list">
											<span class="option_p">프로그래밍</span>
											<span class="option_d">디지털 트윈</span>
											<span class="level_1">초급</span>
											<span class="option_t">통역</span>
										</span>
                                </button>
                            </td>

                            <td class="cate_all">
                                <button type="button" data-btn-pop="5" class="program_part">
                                    <span class="text_1">언리얼 페스트 세션의 안내 텍스트의 사이즈는 이정도도 괜찮을까 싶습니다.</span>
                                    <span class="text_name"><span>홍길동</span><span>홍길동</span></span>
                                    <span class="text_company">에픽게임즈 코리아</span>
                                    <span class="text_option_list">
											<span class="option_v">VR / AR</span>
											<span class="level_2">중급</span>
											<span class="option_t">통역</span>
										</span>
                                </button>
                            </td>


                            <td class="cate_all">
                                <button type="button" data-btn-pop="6" class="program_part">
                                    <span class="text_1">언리얼 페스트 세션의 안내 텍스트의 사이즈는 이정도도 괜찮을까 싶습니다. </span>
                                    <span class="text_name"><span>홍길동</span><span>홍길동</span></span>
                                    <span class="text_company">에픽게임즈 코리아</span>
                                    <span class="text_option_list">
											<span class="option_v">비주얼 아트</span>
											<span class="option_d">디지털 트윈</span>
											<span class="level_3">고급</span>
											<span class="option_t">통역</span>
										</span>
                                </button>
                            </td>
                        </tr>

                        </tbody>
                    </table>



                </div>

                <div class="program_content">
                    <table class="program_table">
                        <colgroup>
                            <col style="width:12%" />
                            <col style="width:22%" />
                            <col style="width:22%" />
                            <col style="width:22%" />
                            <col style="width:22%" />
                        </colgroup>
                        <thead>
                        <tr>
                            <th scope="col" class="th_1"><span>시간</span></th>
                            <th scope="col" class="th_2"><span>게임:프로그래밍</span></th>
                            <th scope="col" class="th_3"><span>게임:아트 및 공통</span></th>
                            <th scope="col" class="th_4"><span>영화&TV, 애니메이션, 방송</span></th>
                            <th scope="col" class="th_5"><span>건축 및 기타</span></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="active">
                            <td class="time_td">09:00~10:30</td>
                            <td class="active" colspan="4"><span class="title ti_2">등록 확인</span></td>

                        </tr>
                        <tr>
                            <td class="time_td">10:30~11:20</td>
                            <td class="cate_td1 ">

                                <button type="button" data-btn-pop="pop_29_1" class="program_part part1" data-category="게임:프로그래밍">
                                    <span class="title ti_2">언리얼 엔진 5.4, 5.5 그리고 향후 언리얼 엔진 모바일</span>
                                    <span class="text">Epic Games Korea, Jack Porter</span>
                                </button>
                            </td>
                            <td class="cate_td2">
                                <button type="button" data-btn-pop="pop_29_2" class="program_part part2" data-category="게임:프로그래밍">
                                    <span class="title ti_2">UGC는 게임 산업의 미래가 될 것인가? UEFN 성공 사례를 중심으로</span>
                                    <span class="text">벌스워크, 이득우	</span>
                                </button>
                            </td>
                            <td class="cate_td3">
                                <button type="button" data-btn-pop="pop_29_3" class="program_part part1" data-category="영화&TV, 애니메이션, 방송">
                                    <span class="title ti_3">UE와 UEFN에서 퍼포먼스 캡처 최대한 활용하기</span>
                                    <span class="text">Epic Games Los Angeles,<br  />Kevin Cushing</span>
                                </button>
                            </td>
                            <td class="cate_td4">
                                <button type="button" data-btn-pop="pop_29_4" class="program_part part2" data-category="">
                                    <span class="title ti_2">건축 및 산업 분야의 디지털 혁신: 실제 사례와 비즈니스 기회</span>
                                    <span class="text">포럼디앤피, 이인기/양푸른누리</span>
                                </button>
                            </td>
                        </tr>

                        <!--<tr class="active">
                            <td class="time_td">11:20 ~ 11:30</td>
                            <td colspan="4">
                                <span class="title ti_2">휴식시간</span>
                            </td>
                        </tr>-->

                        <tr>
                            <td class="time_td">11:30~12:20</td>
                            <td class="cate_td1">
                                <button type="button" data-btn-pop="pop_29_5" class="program_part part2" data-category="">
                                    <span class="title ti_2">바로 적용해 보는 언리얼 엔진 디버깅, 프로파일링 툴 그리고 팁 &amp; 트릭</span>
                                    <span class="text">에픽게임즈 코리아, 윤준기</span>
                                </button>
                            </td>
                            <td class="cate_td2">
                                <button type="button" data-btn-pop="pop_29_6" class="program_part part2" data-category="">
                                    <span class="title ti_2">모션 매칭: 자연스러운 애니메이션 손쉽게 구현하기</span>
                                    <span class="text">에픽게임즈 코리아, 박성제</span>
                                </button>
                            </td>
                            <td class="cate_td3">
                                <button type="button" data-btn-pop="pop_29_7" class="program_part part2" data-category="">
                                    <span class="title ti_2">언리얼 엔진 5.4 모션 디자이너</span>
                                    <span class="text">Epic Games, Jack Condon</span>
                                </button>
                            </td>
                            <td class="cate_td4">
                                <button type="button" data-btn-pop="pop_29_8" class="program_part part2" data-category="">
                                    <span class="title ti_2">UEFN: UEFN 및 포트나이트 에코시스템 소개</span>
                                    <span class="text">Epic Games London,<br>Jamie Mossahebi</span>
                                </button>
                            </td>
                        </tr>

                        <!--<tr class="active">
                            <td class="time_td">12:20 ~ 13:30</td>
                            <td colspan="4">
                                <span class="title ti_2">점심시간</span>
                            </td>
                        </tr>-->

                        <tr>
                            <td class="time_td">13:30~14:20</td>
                            <td class="cate_td1">
                                <button type="button" data-btn-pop="pop_29_9" class="program_part part2" data-category="">
                                    <span class="title ti_2">모바일 서바이벌 게임 최적화</span>
                                    <span class="text">Epic Games Korea, Dmitriy Dyomin</span>
                                </button>
                            </td>
                            <td class="cate_td2">
                                <button type="button" data-btn-pop="pop_29_10" class="program_part part2" data-category="">
                                    <span class="title ti_2">잘 알려지지 않은 보석 같은 언리얼 엔진 기능 알아보기</span>
                                    <span class="text">Epic Games, Chris Murphy</span>
                                </button>
                            </td>
                            <td  class="cate_td3">
                                <button type="button" data-btn-pop="pop_29_33" class="program_part part2" data-category="">
                                    <span class="title ti_2">&lt;MBC 선택 2024&gt;를 통해 알아보는 nDisplay를 활용한 애너모픽 콘텐츠 제작</span>
                                    <span class="text">웨스트월드, 임주영</span>
                                </button>
                            </td>
                            <td  class="cate_td4">
                                <button type="button" data-btn-pop="pop_29_12" class="program_part part2" data-category="">
                                    <span class="title ti_2">언리얼 엔진을 활용한 광역 도심 디지털 트윈 구현과 활용</span>
                                    <span class="text">(주)테크트리이노베이션, 송민수</span>
                                </button>
                            </td>
                        </tr>


                        <!--<tr class="active">
                            <td class="time_td">14:20 ~ 14:30</td>
                            <td colspan="4">
                                <span class="title ti_2">휴식시간</span>
                            </td>
                        </tr>-->
                        <tr>
                            <td class="time_td">14:30~15:20</td>
                            <td class="cate_td1">
                                <button type="button" data-btn-pop="pop_29_13" class="program_part part2" data-category="">
                                    <span class="title ti_2">언리얼 엔진 5를 위한 고급 렌더링 및 디버깅 팁</span>
                                    <span class="text">Epic Games Japan,<br>Noriaki Shinoyama</span>
                                </button>
                            </td>
                            <td class="cate_td2 ">


                                <button type="button" data-btn-pop="pop_29_14" class="program_part part2" data-category="">
                                    <span class="title ti_2">&lt;inZOI&gt;의 도시 제작과 캐릭터 페이셜 릭 </span>
                                    <span class="text">크래프톤, 이정민/서유석</span>
                                </button>
                            </td>
                            <td  class="cate_td3">
                                <button type="button" data-btn-pop="pop_29_34" class="program_part part2" data-category="">
                                    <span class="title ti_2">&lt;미스터 로봇&gt; : 장편 애니메이션 제작 파이프라인과 제작 노하우</span>
                                    <span class="text">302플래닛, 이형신</span>
                                </button>
                            </td>
                            <td class="cate_td4">
                                <button type="button" data-btn-pop="pop_29_16" class="program_part part2" data-category="">
                                    <span class="title ti_2">크로스플랫폼 기반의 디지털 전시 사례 및 최적화</span>
                                    <span class="text">주식회사 비빔블, 이성민/최준석</span>
                                </button>
                            </td>
                        </tr>
                        <!--<tr class="active">
                            <td class="time_td">15:20 ~ 15:50</td>
                            <td colspan="4">
                                <span class="title ti_2">커피 브레이크</span>
                            </td>
                        </tr>-->
                        <tr>
                            <td class="time_td">15:40~16:30</td>
                            <td  class="cate_td1">
                                <button type="button" data-btn-pop="pop_29_17" class="program_part part2" data-category="">
                                    <span class="title ti_2">게임플레이 어빌리티 시스템을 사용한 프로토타입 제작 사례</span>
                                    <span class="text">(주)넥스트스테이지, 강현우/박준수</span>
                                </button>
                            </td>
                            <td class="cate_td2">
                                <button type="button" data-btn-pop="pop_29_18" class="program_part part2" data-category="">
                                    <span class="title ti_2">프로시저럴 콘텐츠 생성 프레임워크(PCG): 바이옴 코어 플러그인으로 손쉽게 활용하고 최신 기능 이해하기</span>
                                    <span class="text">에픽게임즈 코리아, 김태철</span>
                                </button>
                            </td>
                            <td  class="cate_td3 ">

                                <button type="button" data-btn-pop="pop_29_15" class="program_part part2" data-category="">
                                    <span class="title ti_2">&lt;플레이브&gt;의 WAY 4 LUV 뮤직비디오 제작기</span>
                                    <span class="text">블래스트, 이현우/이예송</span>
                                </button>
                            </td>
                            <td class="cate_td4">
                                <button type="button" data-btn-pop="pop_29_19" class="program_part part2" data-category="">
                                    <span class="title ti_2">문화유산기술연구소(TRIC)와 에픽 에코시스템으로 재탄생하는 문화유산</span>
                                    <span class="text">문화유산기술연구소(TRIC), 고명현</span>
                                </button>
                            </td>
                        </tr>
                        <!--<tr class="active">
                            <td class="time_td">16:40 ~ 16:50</td>
                            <td colspan="4">
                                <span class="title ti_2">휴식시간	</span>
                            </td>
                        </tr>-->
                        <tr>
                            <td class="time_td">16:50~17:40</td>
                            <td  class="cate_td1">
                                <button type="button" data-btn-pop="pop_29_20" class="program_part part2" data-category="">
                                    <span class="title ti_2">&lt;스텔라 블레이드&gt; 화려함과 성능의 조화: 스타일리시 액션 게임의 전투 시스템, 비주얼, 그리고 최적화</span>
                                    <span class="text">시프트업, 박용태/이동익</span>
                                </button>
                            </td>
                            <td colspan="2"  class="cate_td23">
                                <button type="button" data-btn-pop="pop_29_21" class="program_part part2" data-category="">
                                    <span class="title ti_2">컨트롤 릭과 시퀀서를 활용한 효율적인 애니메이션 워크플로</span>
                                    <span class="text">에픽게임즈 코리아, 권오찬</span>
                                </button>
                            </td>

                            <td  class="cate_td4 ">

                                <button type="button" data-btn-pop="pop_29_22" class="program_part part2" data-category="">
                                    <span class="title ti_2">AI와 디지털 트윈을 활용한 공장과 물류센터 통합관리 서비스</span>
                                    <span class="text">비전스페이스 , 최원석/이경태</span>
                                </button>
                            </td>

                        </tr>
                        <tr class="active">
                            <td class="time_td">17:50~18:00</td>
                            <td colspan="4"><span class="title ti_2">경품 추첨</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <p class="text_center fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once"><a href="https://unrealsummit16.cafe24.com/2024/uf24/Unreal_Fest_2024_Seoul_Agenda_Open.pdf" class="pdf_down" target="_blank">전체 세션 PDF 다운로드</a></p>
            <ul class="bu right_bu type2 fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                <li>각 세션을 클릭하면 상세정보를 확인하실 수 있습니다.</li>
                <li>스케줄은 사정에 따라 사전 고지 없이 변경될 수 있습니다.</li>
                <li>경품 추첨은 오프라인에 한해서 진행되는 이벤트입니다.</li>
                <li>발표자의 동의 및 송출 컨디션에 따라 전체 세션의 중계가 어려울 수도 있습니다.</li>

            </ul>

        </div>
    </div>

    <div id="event_cont_3">
        <div class="wrap">

            <div class="section_title fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once"><h3>Agenda</h3></div>
            <div class="member_title_box index_type fromTopIn" data-scroll="">
                <p class="title"><em class="em_online">온라인 무료 등록</em>하고 시청하세요!</p>
                <ol>
                    <li >
                        <span class="text_1" style="text-decoration:line-through; ">얼리버드 1차 50% 할인</span>
                        <span class="text_2" style="text-decoration:line-through; ">7/16(화) ~ 7/25(목)까지</span>
                    </li>
                    <li >
                        <span class="text_1"  style="text-decoration:line-through; ">얼리버드 2차 30% 할인</span>
                        <span class="text_2"  style="text-decoration:line-through; ">7/26(금) ~ 8/6(화)까지</em></span>
                    </li>
                    <li>
                        <span class="text_1" <em class="em_yellow" style="text-decoration:line-through; ">정상 가격</span>
                            <span class="text_2" <em class="em_yellow" style="text-decoration:line-through; ">8/7(수) ~ 8/27(화)까지</span>
                    </li>
                </ol>
            </div>

            <div class="ticket_buy_box  fromTopIn" data-scroll="">
                <div class="ticket_offline ticket_box">
                    <p class="img_box"></p>
                    <div class="text_box">
                        <h3 class="h3">오프라인</h3>
                        <p class="text_1">원하는 일자별로 현장감 있는 세션을 듣고, 한정판 굿즈 수령, Q&A 기회, 부스 체험 및 각종 이벤트 등에 참여할 수 있습니다.</p>
                        <a href="javascript:alert('판매 종료되었습니다.')" onfocus="this.blur()">판매 종료</a>
                        <ul class="bu type2">
                            <li>일자별 오프라인 티켓</li>
                            <li>참석자 전원 언리얼 한정판 굿즈</li>
                            <li>전시 부스 체험</li>
                            <li>Q&A 기회</li>
                            <li>경품 추첨 및 각종 이벤트</li>
                        </ul>
                    </div>
                </div>

                <div class="ticket_online ticket_box">
                    <p class="img_box"></p>
                    <div class="text_box">
                        <h3 class="h3">온라인</h3>
                        <p class="text_1">양일간 진행되는 세션을 장소에 관계 없이 온라인으로 무료로 시청할 수 있습니다.</p>
                        <a href="/unrealfest2025/application_step1_online.html" target="_blank" >무료 등록하기</a>
                        <ul class="bu type2" >
                            <li>온라인 중계 시청 <br /><span style="color: #FF6136">(단, 전체 세션이 아닌 일부 세션으로 중계가 제한됩니다)</span></li>
                            <!--<li>각종 온라인 이벤트</li>-->
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="bu right_bu type2 fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                <li>오프라인 티켓은 한정 수량으로 할인 이벤트 및 기간에 관계없이 판매가 조기 마감될 수 있습니다.</li>
                <li>오프라인 및 온라인 등록별로 제공되는 사항은 사정에 따라 변경될 수 있습니다.</li>
            </ul>



        </div>
    </div>

    <div id="event_cont_4">
        <div class="wrap">
            <div class="section_title fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once"><h3>Agenda</h3></div>
            <div class="tab_menu  fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                <a href="#n" class="event_tab_btn">오프라인 전용 이벤트</a>
                <a href="#n" class="event_tab_btn">온라인 전용 이벤트</a>
            </div>

            <div class="tab_cont">
                <div class="event_tab_cont tab_cont_1  fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                    <div class="off_event_1 event_box">
                        <h3 class="h3"><i class="num_i">1</i>참석자 전원 굿즈 이벤트</h3>
                        <p class="text">오프라인 등록을 하시고 참석한 전원에게 언리얼 한정판 굿즈를 드려요!</p>
                        <p class="img_box"><img src="https://unrealsummit16.cafe24.com/2024/uf24/1st_events.svg" /></p>
                        <!--<p class="ticket_text">
                            <span>양일권</span>
                            <span>28, 29일권</span>
                        </p>-->
                        <p class="time_box">
                            <span class="text_1">참여기간</span>
                            <span class="text_2">8월 28일 ~ 29일</span>
                        </p>
                    </div>
                    <div class="off_event_2  fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                        <div class="off_event_2_1 event_box">
                            <h3 class="h3"><i class="num_i">2</i>얼리버드 체크인 이벤트</h3>
                            <p class="text">현장에서 체크인한 선착순으로 양일간 총 300분께 한정판 굿즈를 추가 증정!</p>
                            <p class="img_box"><img src="https://unrealsummit16.cafe24.com/2024/uf24/pirze3.svg" /></p>
                            <p class="time_box">
                                <span class="text_1">참여기간</span>
                                <span class="text_2">8월 28일 ~ 29일</span>
                            </p>
                        </div>
                        <div class="off_event_2_2 event_box">
                            <h3 class="h3"><i class="num_i">3</i>부스 체험 이벤트</h3>
                            <p class="text">에픽과 파트너사의 툴과 콘텐츠를 직접 체험하고 이벤트에도 참여하세요.</p>
                            <p class="img_box"><img src="https://unrealsummit16.cafe24.com/2024/uf24/pirze2.svg" /></p>
                            <p class="time_box">
                                <span class="text_1">참여기간</span>
                                <span class="text_2">8월 28일 ~ 29일</span>
                            </p>
                        </div>
                        <div class="off_event_2_3 event_box">
                            <h3 class="h3"><i class="num_i">4</i>경품 추첨 이벤트</h3>
                            <p class="text">오프라인 참석자를 위한 풍성한 경품을 모든 세션 종료 후 추첨을 통해 증정!</p>
                            <p class="img_box"><img src="https://unrealsummit16.cafe24.com/2024/uf24/pirze2.svg" /></p>
                            <p class="time_box">
                                <span class="text_1">참여기간</span>
                                <span class="text_2">8월 28일 ~ 29일</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="event_tab_cont tab_cont_2">

                    <div class="on_event_1 event_box  fromTopIn" data-scroll="">

                        <h3 class="h3"><i class="num_i">1</i>출석 체크 이벤트</h3>

                        <p class="text">2일간  언리얼 페스트를 시청하시면 추첨을 통해 총 300분께 언리얼 굿즈를 드립니다.</p>
                        <p class="img_box"><img src="https://unrealsummit16.cafe24.com/2024/uf24/pirze2.svg" /></p>

                        <p class="time_box">
                            <span class="text_1">참여기간</span>
                            <span class="text_2">8월 28일 ~ 29일</span>
                            <span class="text_3">*등록하신 이메일로 체크인하시면 자동으로 응모됩니다.</span>
                        </p>
                    </div>
                    <div class="on_event_2 event_box  fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                        <h3 class="h3"><i class="num_i">2</i>랜덤 퀴즈 이벤트</h3>
                        <p class="text">트랙별 채팅창에서 진행되는 랜덤 퀴즈의 정답을 맞추면 추첨을 통해 굿즈를 증정합니다.</p>
                        <p class="img_box"><img src="https://unrealsummit16.cafe24.com/2024/uf24/pirze2.svg" /></p>

                        <p class="time_box">
                            <span class="text_1">참여기간</span>
                            <span class="text_2">8월 28일 ~ 29일</span>
                        </p>
                    </div>
                </div>
                <ul class="bu right_bu type2 " data-scroll="">
                    &nbsp;
                    <li>사정에 따라 상품이 변경될 수 있습니다.</li>
                </ul>
            </div>
            <script>
                $(document).ready(function() {
                    $('.event_tab_btn').click(function(e) {
                        e.preventDefault(); // Prevent the default link behavior

                        var index = $(this).index();

                        $('.event_tab_btn').removeClass('active');
                        $('.event_tab_cont').removeClass('active');

                        $(this).addClass('active');
                        $('.event_tab_cont').eq(index).addClass('active');
                    });

                    // Optionally, you can set the first tab as active by default
                    $('.event_tab_btn').first().addClass('active');
                    $('.event_tab_cont').first().addClass('active');
                });
            </script>
        </div>
    </div>

    <div id="event_cont_5">
        <div class="wrap">
            <div class="section_title fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once"><h3>Agenda</h3></div>
            <!--<p class="logo_title gold  fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">GOLD</p>
            <ul class="logo_list  fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                    <li><a href="https://www.snapdragonstudios.com/" target="_blank" title="새창"><img src="https://unrealsummit16.cafe24.com/2024/uf24/SDStudios_Logo.svg"></a></li>
            </ul>-->
            <p class="logo_title silver  fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">SILVER</p>
            <ul class="logo_list  fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                <li><a href="https://www.perforce.com/" target="_blank" title="새창"><img src="https://unrealsummit16.cafe24.com/2024/uf24/perforce_unreal-fest_2024_seoul_logos_pperforce-plateer.png"></a></li>

                <li><a href="https://www.motioncapture.co.kr/yanus-studio" target="_blank" title="새창"><img src="https://unrealsummit16.cafe24.com/2024/uf24/logo_list_ynsstudio.svg"></a></li>
                <li><a href="https://www.monsteratech.com/" target="_blank" title="새창"><img src="https://unrealsummit16.cafe24.com/2024/uf24/logo_list_monstera.png"></a></li>
                <li><a href="https://etevers.com/main/main.html" target="_blank" title="새창"><img src="https://unrealsummit16.cafe24.com/2024/uf24/logo_list_etevers.svg"></a></li>
            </ul>

        </div>
    </div>

    <div id="event_cont_6">
        <div class="wrap">
            <div class="section_title fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once"><h3>Agenda</h3></div>
            <div class="faq">
                <div class="tabs  fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                    <button type="button" class="faq_tab_btn active">등록 관련</button>
                    <button type="button" class="faq_tab_btn">참석 및 시청</button>
                    <button type="button" class="faq_tab_btn">기타 사항</button>
                </div>
                <div class="tab_contents">
                    <div class="faq_tab_cont active">
                        <div class="acc_list">
                            <div class="acc_item  fromTopIn " data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                                <button type="button" class="acc_btn">
                                    <span class="title">Q. 듣고싶은 트랙이 마감되었는데 다른걸 선택해도 참석이 가능한가요?</span>
                                </button>
                                <div class="acc_con">
                                    <p>다른 트랙을 선택해서 신청은 가능하지만, 행사장 만석 시, 선택하신 참여 트랙을 우선시하여 입장이 제한될 수 있습니다.</p>
                                    <button type="button" class="acc_btn ">
                                        <span style="color:#FF8080">닫기</span>
                                    </button>
                                </div>

                            </div>
                            <div class="acc_item  fromTopIn " data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                                <button type="button" class="acc_btn">
                                    <span class="title">Q. 오프라인과 온라인 등록은 어떤 차이점이 있나요?</span>
                                </button>
                                <div class="acc_con">
                                    <p>언리얼 페스트 2024 서울은 8월 28일~29일까지 양일간 오프라인과 온라인으로 함께 진행됩니다.<br /><em class="em_blue"><a href="javascript:alert('판매 종료되었습니다.')" onfocus="this.blur()" style="color: #00C2E8; font-weight: bold;">오프라인 등록</a></em>은 유료로 오프라인에서 원하는 일자별로 현장감 있는 세션을 듣고, 한정판 굿즈 수령, Q&A 기회, 부스 체험 및 각종 이벤트 등에 참여하고 싶은 경우 이용해 주세요. 단, 한정 수량으로 조기 마감될 수 있으니 빠른 등록을 권장합니다. <em class="em_blue"><a href="https://epiclounge.co.kr/v3/unrealfest2025/application_step1_online.html" target="_blank" style="color: #00C2E8; font-weight: bold;">온라인 등록</a></em>은 무료로 장소에 관계 없이 세션을 온라인으로 시청하시고 싶거나, 오프라인 유료 등록이 마감된 경우에 이용해 주세요. 단, 발표자의 동의 여부와 송출 컨디션에 따라 전체 세션의 온라인 중계는 어려울 수도 있다는 점 양해 부탁드립니다.</p>
                                    <button type="button" class="acc_btn ">
                                        <span style="color:#FF8080">닫기</span>
                                    </button>
                                </div>

                            </div>
                            <div class="acc_item fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                                <button type="button" class="acc_btn">
                                    <span class="title">Q. 언리얼 페스트는 사전에 등록해야만 참석할 수 있나요?</span>
                                </button>
                                <div class="acc_con">
                                    <p>네. <a href="javascript:alert('판매 종료되었습니다.')" onfocus="this.blur()" style="color: #00C2E8; font-weight: bold;"><em class="em_blue">오프라인 유료 등록</em></a>과 <a href="https://epiclounge.co.kr/v3/unrealfest2025/application_step1_online.html" target="_blank" style="color: #00C2E8; font-weight: bold;"><em class="em_blue">온라인 무료 등록</em></a> 모두 행사 시작 전까지 등록을 완료하셔야 참석 및 시청하실 수 있습니다.</p>
                                    <button type="button" class="acc_btn ">
                                        <span style="color:#FF8080">닫기</span>
                                    </button>
                                </div>

                            </div>

                            <div class="acc_item fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                                <button type="button" class="acc_btn">
                                    <span class="title">Q. 오프라인에 참석하고 싶은데, 이미 판매가 완료된 경우에는 어떻게 하면 될까요?</span>
                                </button>
                                <div class="acc_con">
                                    <p>제한된 좌석 수로 인해 트랙별로 참석 인원이 제한되어 있기 때문에, 오프라인 등록이 마감된 경우에는 온라인으로 무료 등록한 후 시청해 주세요. 단, 발표자의 동의 및 송출 컨디션에 따라 전체 세션의 중계가 어려울 수도 있다는 점 양해 부탁드립니다.</p>
                                    <button type="button" class="acc_btn ">
                                        <span style="color:#FF8080">닫기</span>
                                    </button>
                                </div>

                            </div>


                            <div class="acc_item fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                                <button type="button" class="acc_btn">
                                    <span class="title">Q. 1인 1회만 등록이 가능한가요?</span>
                                </button>
                                <div class="acc_con">
                                    <p>오프라인/온라인 등록 모두 본인 인증을 통해 진행되기 때문에 1인 1회만 등록하실 수 있습니다. 단, 오프라인 유료 등록을 하신 분들은 등록 시 사용한 이메일 주소로 온라인 중계도 시청하실 수 있습니다.</p>
                                    <button type="button" class="acc_btn ">
                                        <span style="color:#FF8080">닫기</span>
                                    </button>
                                </div>

                            </div>
                            <div class="acc_item fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                                <button type="button" class="acc_btn">
                                    <span class="title">Q. 단체 등록은 어떻게 하면 될까요?</span>
                                </button>
                                <div class="acc_con">
                                    <p>언리얼 페스트는 본인 인증을 통한 1인 1회 등록 시스템을 지원하기 때문에, 단체 결제만 지원해 드리고 있습니다.  5인 이상의 티켓을 일괄적으로 결제하고 싶으신 경우에는 <em class="em_blue"><a href="mailto:info@epiclounge.co.kr" target="_blank" style="color: #00C2E8; font-weight: bold;">문의</a></em>하시면 결제 및 등록 프로세스를 안내해 드리겠습니다.</p>
                                    <button type="button" class="acc_btn ">
                                        <span style="color:#FF8080">닫기</span>
                                    </button>
                                </div>

                            </div>

                            <div class="acc_item fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                                <button type="button" class="acc_btn">
                                    <span class="title">Q. 등록 정보는 어떻게 수정하나요?</span>
                                </button>
                                <div class="acc_con">
                                    <p>메뉴바 우측에 있는 <a href="https://epiclounge.co.kr/v3/unrealfest2025/application_confirm.html" target="_blank" style="color: #00C2E8; font-weight: bold;">등록 확인</a> 페이지에서 등록 정보를 직접 수정하실 수 있습니다.</p>
                                    <button type="button" class="acc_btn ">
                                        <span style="color:#FF8080">닫기</span>
                                    </button>
                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="faq_tab_cont">


                        <div class="acc_list">
                            <div class="acc_item fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                                <button type="button" class="acc_btn">
                                    <span class="title">Q. 행사 당일 언제부터 입장/시청할 수 있나요?</span>
                                </button>
                                <div class="acc_con">
                                    <p><em class="em_blue">오프라인</em>의 경우, 8월 28일 ~ 29일 양일간 오전 9시부터 등록 확인을 시작하고, 세션룸 입장 전까지 얼리버드 이벤트, 에픽과 파트너사의 전시 체험 등의 이벤트에 참여하실 수 있습니다. <em class="em_blue">온라인</em>의 경우, 8월 28일 ~ 29일 양일간 오전 10시부터 입장이 가능합니다.</p><button type="button" class="acc_btn ">
                                        <span style="color:#FF8080">닫기</span>
                                    </button>
                                </div>
                            </div>
                            <div class="acc_item fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                                <button type="button" class="acc_btn">
                                    <span class="title">Q. 오프라인에 등록해도 온라인으로 시청이 가능한가요?</span>
                                </button>
                                <div class="acc_con">
                                    <p>네. 오프라인 등록 시 사용한 이메일 주소로 온라인 중계도 시청하실 수 있습니다. 단, 발표자의 동의 여부와 송출 컨디션에 따라 전체 세션의 온라인 중계는 어려울 수도 있습니다.</p><button type="button" class="acc_btn ">
                                        <span style="color:#FF8080">닫기</span>
                                    </button>
                                </div>
                            </div>
                            <div class="acc_item fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                                <button type="button" class="acc_btn">
                                    <span class="title">Q. 온라인 등록자도 오프라인에 참석할 수 있나요?</span>
                                </button>
                                <div class="acc_con">
                                    <p>아니오. 오프라인 티켓을 구매하지 않은 경우 오프라인에 참석할 수 없습니다.</p>
                                    <button type="button" class="acc_btn ">
                                        <span style="color:#FF8080">닫기</span>
                                    </button>
                                </div>
                            </div>

                            <div class="acc_item fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                                <button type="button" class="acc_btn">
                                    <span class="title">Q. 온라인으로 등록한 경우, 어떻게 시청하면 되나요?</span>
                                </button>
                                <div class="acc_con">
                                    <p>시청 링크가 행사 당일 카카오톡(or 문자)/이메일로 첫 세션 시작 30분 전에 발송될 예정입니다. 시청 링크를 이메일로 받지 못한 경우, 행사 당일 본 페이지에 접속하여 등록 시 사용한 이메일 주소로 체크인하시면 시청하실 수 있습니다.</p><button type="button" class="acc_btn ">
                                        <span style="color:#FF8080">닫기</span>
                                    </button>
                                </div>
                            </div>

                            <div class="acc_item fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                                <button type="button" class="acc_btn">
                                    <span class="title">Q. 모바일/태블릿으로 시청이 가능한가요?</span>
                                </button>
                                <div class="acc_con">
                                    <p>모바일과 태블릿으로 시청하실 수 있습니다. 다만, 방송 시청 외에 실시간 채팅 및 Q&A에 참여하고자 하시는 분들이라면 PC 시청을 권장드립니다.</p><button type="button" class="acc_btn ">
                                        <span style="color:#FF8080">닫기</span>
                                    </button>
                                </div>
                            </div>

                            <div class="acc_item fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                                <button type="button" class="acc_btn">
                                    <span class="title">Q. 최적의 시청 환경은 무엇인가요?</span>
                                </button>
                                <div class="acc_con">
                                    <p>크롬 버전 123.0 이상의 Windows/Linux, macOS 브라우저 환경에서 최적의 시청이 가능합니다. </p><button type="button" class="acc_btn ">
                                        <span style="color:#FF8080">닫기</span>
                                    </button>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="faq_tab_cont">
                        <div class="acc_list">

                            <div class="acc_item fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                                <button type="button" class="acc_btn">
                                    <span class="title">Q. 세션 영상을 다시 볼 수 있나요?</span>
                                </button>
                                <div class="acc_con">
                                    <p>행사 종료 이후에도 세션 영상을 확인하실 수 있습니다. 단, 발표자의 동의를 받은 세션에 한해서 에픽 라운지에 10월 내 공개될 예정입니다.</p><button type="button" class="acc_btn ">
                                        <span style="color:#FF8080">닫기</span>
                                    </button>
                                </div>
                            </div>
                            <div class="acc_item fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                                <button type="button" class="acc_btn">
                                    <span class="title">Q. 오프라인 행사에 참석한 후 참석 확인증을 받고 싶습니다.</span>
                                </button>
                                <div class="acc_con">
                                    <p>언리얼 페스트 사무국으로 연락을 주시면 처리해 드리겠습니다. <a href="mailto:info@epiclounge.co.kr" target="_blank" style="color: #00C2E8; font-weight: bold;">메일</a> 및  <a href="tel:023263701" target="_blank" style="color: #00C2E8; font-weight: bold;">전화(02-326-3701)</a>로 문의가 가능하며, 오전 10시~오후 5시 (점심시간 12~13시)까지 운영됩니다.</p>
                                    <button type="button" class="acc_btn ">
                                        <span style="color:#FF8080">닫기</span>
                                    </button>
                                </div>
                            </div>
                            <div class="acc_item fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                                <button type="button" class="acc_btn">
                                    <span class="title">Q. 결제 오류 발생 시 어떻게 해야하나요?</span>
                                </button>
                                <div class="acc_con">
                                    <p>결제 대행사 <a href="https://www.inicis.com/blog/archives/category/cs" target="_blank" style="color: #00C2E8; font-weight: bold;">이니시스 고객센터</a>에 문의를 부탁드립니다. 그외 결제 관련 문의는 언리얼 페스트 사무국 <a href="mailto:info@epiclounge.co.kr" target="_blank" style="color: #00C2E8; font-weight: bold;">메일</a> 및  <a href="tel:023263701" target="_blank" style="color: #00C2E8; font-weight: bold;">전화(02-326-3701)</a>로 문의가 가능하며, 오전 10시~오후 5시 (점심시간 12~13시)까지 운영됩니다.</p>
                                    <button type="button" class="acc_btn ">
                                        <span style="color:#FF8080">닫기</span>
                                    </button>
                                </div>
                            </div>
                            <div class="acc_item fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                                <button type="button" class="acc_btn">
                                    <span class="title">Q. 부득이하게 오프라인 참석이 어렵게 되었습니다. 환불할 수 있을까요?</span>
                                </button>
                                <div class="acc_con">
                                    <p>메뉴바 우측에 있는 <a href="https://epiclounge.co.kr/v3/unrealfest2025/application_confirm.html" target="_blank" style="color: #00C2E8; font-weight: bold;">등록 확인</a>을 클릭하여 직접 결제 취소를 진행하시면 됩니다. 단, 환불은 행사 1일 전인 2024년 8월 27일(화) 09시 00분까지 취소하신 경우에만 가능하며, 결제 취소 후 최대 5일 이내 전액 환불됩니다.</p>
                                    <button type="button" class="acc_btn ">
                                        <span style="color:#FF8080">닫기</span>
                                    </button>
                                </div>
                            </div>
                            <div class="acc_item fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                                <button type="button" class="acc_btn">
                                    <span class="title">Q. 오프라인 참석 시 차량 주차가 가능할까요?</span>
                                </button>
                                <div class="acc_con">
                                    <p>주차구역이 혼잡하오니, 대중교통 이용을 권장드립니다.</p>
                                    <button type="button" class="acc_btn ">
                                        <span style="color:#FF8080">닫기</span>
                                    </button>
                                </div>
                            </div>
                            <div class="acc_item fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                                <button type="button" class="acc_btn">
                                    <span class="title">Q. 행사에 관한 문의를 하고 싶습니다.</span>
                                </button>
                                <div class="acc_con">
                                    <p>언리얼 페스트 2024 서울에 관한 궁금하신 사항은 사무국으로 문의해 주세요. <a href="mailto:info@epiclounge.co.kr" target="_blank" style="color: #00C2E8; font-weight: bold;">메일</a> 및  <a href="tel:023263701" target="_blank" style="color: #00C2E8; font-weight: bold;">전화(02-326-3701)</a>로 문의가 가능하며, 오전 10시~오후 5시 (점심시간 12~13시)까지 운영됩니다.</p>
                                    <button type="button" class="acc_btn ">
                                        <span style="color:#FF8080">닫기</span>
                                    </button>
                                </div>
                            </div>




                        </div>

                    </div>



                </div>
                <script>
                    $(document).ready(function() {
                        $('.faq_tab_btn').click(function() {
                            var index = $(this).index();

                            $('.faq_tab_btn').removeClass('active');
                            $('.faq_tab_cont').removeClass('active');

                            $(this).addClass('active');
                            $('.faq_tab_cont').eq(index).addClass('active');
                        });

                        $('.acc_btn').click(function() {
                            var $accCon = $(this).next('.acc_con');
                            $accCon.toggleClass('active');
                        });

                        $('.close').click(function() {
                            $(this).prev('.acc_con').removeClass('active');
                        });
                    });
                </script>
            </div>
        </div>
        <div id="event_cont_7">
            <div class="wrap">

                <div id="map" class="fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once"></div>
                <ul class="map_ul fromTopIn" data-scroll="toggle(.fromTopIn, .fromTopOut) once">
                    <li>일시: 2024.08.28-08.29, 오전 9시</li>
                    <li>주소: 서울 송파구 송파대로 521</li>
                    <li>롯데호텔 월드 3층</li>
                    <li>주차구역이 혼잡할 수 있으니, 되도록 대중교통을 이용해 주시길 바랍니다.</li>
                </ul>

            </div>
        </div>



        <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=32951131c4e71c3b11debcd10328c30e"></script>
        <script>
            var mapContainer = document.getElementById('map'), // 지도를 표시할 div
                mapOption = {
                    center: new kakao.maps.LatLng(37.51147561898231, 127.10034280238223), // 지도의 중심좌표
                    level: 3 // 지도의 확대 레벨
                };

            var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

            // 커스텀 오버레이에 표시할 내용입니다
            // HTML 문자열 또는 Dom Element 입니다
            var content = '<div class ="map_label"><img src="https://unrealsummit16.cafe24.com/2024/uf24/map_logo.png" /></div>';

            // 커스텀 오버레이가 표시될 위치입니다
            var position = new kakao.maps.LatLng(37.51147561898231, 127.10034280238223);

            // 커스텀 오버레이를 생성합니다
            var customOverlay = new kakao.maps.CustomOverlay({
                position: position,
                content: content
            });

            // 커스텀 오버레이를 지도에 표시합니다
            customOverlay.setMap(map);
        </script>

    </div>

    <div id="footer">
        <div class="wrap">
            <div class="footer_top">
                <div class="footer_logo">
                    <img src="/v3/resource/images/common/foot_logo.svg">
                </div>
                <div class="footer_link">
                    <div class="footer_link_list">
                        <h3>새소식</h3>
                        <ul>
                            <li><a href="/contents/news_list.php?category=">전체보기</a></li>
                            <li><a href="/contents/news_list.php?category=뉴스">뉴스</a></li>
                            <li><a href="/contents/news_list.php?category=업데이트/출시">출시 &amp; 업데이트</a></li>
                            <li><a href="/contents/news_list.php?category=블로그">블로그</a></li>
                        </ul>
                    </div>
                    <div class="footer_link_list">
                        <h3>이벤트</h3>
                        <ul>
                            <li><a href="https://epiclounge.co.kr/unrealfest24.php" target="_blank" style="color:#00C2E8">언리얼 페스트 2024서울</a></li>
                            <li><a href="/contents/event_list.php?category=커뮤니티 이벤트">커뮤니티 이벤트</a></li>

                            <li><a href="https://www.unrealengine.com/ko/blog/are-you-a-lighting-master-enter-our-new-unreal-challenge-today" target="_blank">글로벌 이벤트</a></li>

                        </ul>
                    </div>
                    <div class="footer_link_list">
                        <h3>리소스</h3>
                        <ul>
                            <li><a href="/contents/replay.php">다시보기</a></li>
                            <li><a href="/contents/free.php">무료 콘텐츠</a></li>
                            <li><a href="/contents/book.php">백서</a></li>

                        </ul>
                    </div>
                    <div class="footer_link_list">
                        <!--	<h3>링크</h3>
                            <ul>
                                <li><a href="https://www.unrealengine.com" title="새창" target="_blank">언리얼 엔진</a></li>
                                <li><a href="https://www.unrealengine.com/ko/download" title="새창" target="_blank">시작해요 언리얼</a></li>
                                <li><a href="https://cafe.naver.com/unrealenginekr" title="새창" target="_blank">네이버 카페</a></li>
                                <li><a href="https://www.facebook.com/unrealenginekr/" title="새창" target="_blank">페이스북</a></li>
                                <li><a href="https://www.youtube.com/channel/UCTQY8S4wYR93jkYC649_p0g" title="새창" target="_blank">유튜브 채널</a></li>
                            </ul>-->
                    </div>
                </div>
            </div>
            <div class="footer_bot2">
                <ul class="text_link">
                    <li>법인명(상호): 주식회사 그리프</li>
                    <li>사업자등록번호: 859-88-00263 <a href="https://www.ftc.go.kr/bizCommPop.do?wrkr_no=8598800263&amp;apv_perm_no=" target="_blank" style="color: rgb(243, 140, 140)"> 확인</a></li>
                    <li><a href="" target="_blank">통신판매업: 2018-서울송파-0571</a></li><br>
                    <li>개인정보보호책임자: 오승훈</li>
                    <li><a href="" target="_blank">주소: 경기도 하남시 미사대로 540, 에이동 7층 11호</a></li>
                    <li><a href="" target="_blank">대표이사: 황성현</a></li>
                    <li><a href="tel:0232637091" target="_blank">고객센터: 02-326-3701</a></li>
                    <li><a href="mailto:info@epiclounge.co.kr" target="_blank">대표 이메일 : info@epiclounge.co.kr</a></li>
                </ul>


            </div>
            <div class="footer_bot">
                <ul class="text_link">
                    <li><a href="/contents/personal.php">개인정보보호정책</a></li>
                    <li><a href="/contents/ode.php">이용약관</a></li>
                </ul>

                <!--<ul class="img_link">
                    <li><a href="https://www.facebook.com/unrealenginekr/" title="새창" target="_blank"><img src="/v3/resource/images/common/FB.svg" /></a></li>
                    <li><a href="https://cafe.naver.com/unrealenginekr" title="새창" target="_blank"><img src="/v3/resource/images/common/Cafe.svg" /></a></li>
                    <li><a href="https://pf.kakao.com/_xfdmNb" title="새창" target="_blank"><img src="https://epiclounge.co.kr/v3/resource/images/event/sns_link_1.png" /></a></li>
                    <li><a href="https://www.youtube.com/channel/UCTQY8S4wYR93jkYC649_p0g" title="새창" target="_blank"><img src="/v3/resource/images/common/Youtube.svg" /></a></li>

                </ul>-->
                <p class="copy">Copyright ©EPIC LOUNGE. All rights reserved</p>
            </div>

        </div>
        <!-- f_info -->
    </div>
    <!--팝업1-->

    <!--팝업 1일차-->


    <?php
    $last_index = 40;
    $cate_str = "프로그래밍,비주얼아트,미디어&엔터테인먼트,제조/ 시뮬레이션,VR/AR / XR,ALL,기타,디지털 휴먼,디지털 트윈,프로덕션,메타버스,버추얼프로덕션,기획";
    $cate_list = explode(",", $cate_str);

    $level_str = "초급,중급,고급";
    $level_list = explode(",", $level_str);

    $trans_str = "통역,없음";
    $trans_list = explode(",", $trans_str);

    for($i=1; $i<=$last_index; $i++) {
        $pop_line = $i;
        $period = xls_loader("A".$pop_line);
        $title = xls_loader("B".$pop_line);
        $cate_game = xls_loader("C".$pop_line);
        $cate_grade = xls_loader("D".$pop_line);
        $cate_type = xls_loader("E".$pop_line);
        $speaker_name = xls_loader("F".$pop_line);
        $speaker_job = xls_loader("G".$pop_line);
        $calendar_add = xls_loader("U".$pop_line);

        $speaker_contenst1 = xls_loader("H".$pop_line);
        // Convert Google Drive URL to direct photo link
        $speaker_img = xls_loader("I".$pop_line);

        $speaker_img = substr($speaker_img, 0, strrpos($speaker_img, "/view"));
        $speaker_img = str_replace(
            "https://drive.google.com/file/d/",
            "https://lh3.google.com/u/0/d/",
            $speaker_img
        );

        //https://drive.google.com/file/d/1KOyLmwPbxtKKmgOH_K5cGoz6xHUsI5Ks/view?usp=drive_link
        //https://lh3.google.com/u/0/d/1KOyLmwPbxtKKmgOH_K5cGoz6xHUsI5Ks=k

        
        
        $speaker2_name = xls_loader("J".$pop_line);
        $speaker2_job = xls_loader("K".$pop_line);
        $speaker2_contenst1 = xls_loader("L".$pop_line);
        // Convert Google Drive URL to direct photo link
        $speaker2_img = xls_loader("M".$pop_line);
        $speaker2_img = substr($speaker2_img, 0, strrpos($speaker2_img, "/view"));
        $speaker2_img = str_replace(
            "https://drive.google.com/file/d/",
            "https://lh3.google.com/u/0/d/",
            $speaker2_img
        );

        $speaker3_name = xls_loader("M".$pop_line);
        $speaker3_job = xls_loader("N".$pop_line);
        $speaker3_contenst1 = xls_loader("O".$pop_line);
        // Convert Google Drive URL to direct photo link
        $speaker3_img = xls_loader("P".$pop_line);
        $speaker3_img = substr($speaker3_img, 0, strrpos($speaker3_img, "/view"));
        $speaker3_img = str_replace(
            "https://drive.google.com/file/d/",
            "https://lh3.google.com/u/0/d/",
            $speaker3_img
        );

        $session_info = xls_loader("R".$pop_line);
        $session_listinfo = xls_loader("S".$pop_line);
        $session_target = xls_loader("T".$pop_line);
        //$cate_list
        $cate_game_list = explode(",", $cate_game);
        $cate_grade_list = explode(",", $cate_grade);
        $cate_type_list = explode(",", $cate_type);

        ?>
        <div class="pop pop_cate_1 pop_target_<?=$i?>" data-panel-pop="pop_target_<?=$i?>">
            <button type="button" class="close">닫기</button>
            <div class="pop_inner">
                <div class="pop_scroll">
                    <div class="pop_title">
                        <!-- 날짜는 하드코딩 -->
                        <span class="date"><?=$period?></span>
                        <!-- 날짜는 하드코딩 -->

                        <!-- 제목은 땡겨옴 -->
                        <h2><?=$title?></h2>
                        <!-- 제목은 땡겨옴 -->
                        <div class="pop_info_box">
                            <?php
                            for($j=0; $j<count($cate_game_list); $j++) {
                                $cate_game_name = trim($cate_game_list[$j]);
                                $cate_game_idx= 0;
                                for ($k = 0; $k < count($cate_list); $k++) {
                                    if ($cate_game_name == trim($cate_list[$k])) {
                                        $cate_game_idx = $k;
                                        break;
                                    }
                                }
                                ?>
                                <span class="pop_cate cate_<?=$cate_game_idx+1?>"><?=$cate_game_name?></span>
                                <?
                            }
                            ?>

                            <?php
                            for($j=0; $j<count($cate_grade_list); $j++) {
                                $cate_grade_name = trim($cate_grade_list[$j]);
                                $cate_grade_idx= 0;
                                for ($k = 0; $k < count($level_list); $k++) {
                                    if ($cate_grade_name == trim($level_list[$k])) {
                                        $cate_grade_idx = $k;
                                        break;
                                    }
                                }
                                ?>
                                <span class="pop_level level_<?=$cate_grade_idx+1?>"><?=$cate_grade_name?></span>
                                <?
                            }
                            ?>
                            <!-- 프로그래밍은 cate_1, 비주얼아트는 2 미디어&엔터테인먼트는3 구글시트 c에 순서대로 숫자바뀌면됨-->

                            <!-- 초급은1 중급2 고급은3-->

                            <?php
                            for($j=0; $j<count($cate_type_list); $j++) {
                                $cate_type_name = trim($cate_type_list[$j]);
                                $cate_type_idx= 0;
                                for ($k = 0; $k < count($trans_list); $k++) {
                                    if ($cate_type_name == trim($trans_list[$k])) {
                                        $cate_type_idx = $k;
                                        break;
                                    }
                                }
                                ?>
                                <span class="pop_division division_<?=$cate_type_idx+1?>"><?=$cate_type_name?></span>
                                <?
                            }
                            ?>
                            <!-- 통역 or 구분뿐이긴한데 추가될수있음 -->
                        </div>
                    </div>

                    <div class="pop_con_wrap">
                        <div class="pop_con">
                            <!-- 발표자 박스1 -->
                            <div class="owner_wrap">
                                <!-- 출연자 사진위치 -->
                                <div class="img"  style="background-image:url('<?=$speaker_img?>')"><?=$speaker_name?> 이미지</div>
                                <!-- 출연자 사진위치 -->

                                <div class="owner">
                                    <div class="owner_name">
                                        <!-- 발표자 이름 -->
                                        <strong><?=$speaker_name?></strong>
                                        <!-- 발표자 이름 -->

                                        <!-- 발표자 직업 -->
                                        <span><?=$speaker_job?></span>
                                        <!-- 발표자 직업 -->
                                    </div>

                                    <!-- 발표자 내용-->
                                    <div class="owner_company"><?=$speaker_contenst1?></div>
                                    <!-- 발표자 내용-->
                                </div>
                            </div>

                            <!-- 발표자 박스1 -->




                            <?php
                            if($speaker2_name){
                                ?>



                                <!-- 발표자 박스2 -->
                                <div class="owner_wrap">
                                    <!-- 출연자 사진위치 -->
                                    <div class="img"  style="background-image:url('<?=$speaker2_img?>')"><?=$speaker2_name?> 이미지</div>
                                    <!-- 출연자 사진위치 -->

                                    <div class="owner">
                                        <div class="owner_name">
                                            <!-- 발표자 이름 -->
                                            <strong><?=$speaker2_name?></strong>
                                            <!-- 발표자 이름 -->

                                            <!-- 발표자 직업 -->
                                            <span><?=$speaker2_job?></span>
                                            <!-- 발표자 직업 -->
                                        </div>

                                        <!-- 발표자 내용-->
                                        <div class="owner_company"><?=$speaker2_contenst1?></div>
                                        <!-- 발표자 내용-->
                                    </div>
                                </div>

                                <!-- 발표자 박스2 -->
                                <?
                            }
                            ?>



                            <?php
                            if($speaker3_name){
                                ?>

                                <!-- 발표자 박스3 -->
                                <div class="owner_wrap">
                                    <!-- 출연자 사진위치 -->
                                    <div class="img"  style="background-image:url('<?=$speaker3_img?>')"><?=$speaker3_name?> 이미지</div>
                                    <!-- 출연자 사진위치 -->

                                    <div class="owner">
                                        <div class="owner_name">
                                            <!-- 발표자 이름 -->
                                            <strong><?=$speaker3_name?></strong>
                                            <!-- 발표자 이름 -->

                                            <!-- 발표자 직업 -->
                                            <span><?=$speaker3_job?></span>
                                            <!-- 발표자 직업 -->
                                        </div>

                                        <!-- 발표자 내용-->
                                        <div class="owner_company"><?=$speaker3_contenst1?></div>
                                        <!-- 발표자 내용-->
                                    </div>
                                </div>

                                <!-- 발표자 박스3 -->
                                <?
                            }
                            ?>


                            <!-- 세션소개 -->
                            <div class="text_box">
                                <div class="title">세션소개</div>
                                <div class="text"><?=$session_info?></div>
                            </div>

                            <!-- 세션소개 -->

                            <?php
                            if($session_listinfo){
                                ?>

                                <!-- 세션목차  목차가 없으면 해당 박스가 안보임 -->
                                <div class="text_box">
                                    <div class="title">세션목차</div>
                                    <div class="text"><?=$session_listinfo?></div>
                                </div>
                                <!-- 세션목차 -->
                                <?
                            }
                            ?>

                            <?php
                            if($session_target){
                                ?>

                                <!-- 권장대상  목차가 없으면 해당 박스가 안보임 -->
                                <div class="text_box">
                                    <div class="title">권장대상</div>
                                    <div class="text"><?=$session_target?></div>
                                </div>
                                <!-- 권장대상 -->
                                <?
                            }
                            ?>

                        </div>

                        <div class="pop_cal_add">
                            <a href="<?=$calendar_add?$calendar_add:"#"?>">일정에 추가</a>
                        </div>
                    </div>
                    <button class="inner_close">
                        <span>CLOSE</span>
                    </button>
                </div>
            </div>
            <!--팝업끝-->
        </div>

        <?php
    }
    ?>


    <script>
        $(document).ready(function() {
            $('body').addClass('header_2_off');
        });

        // JavaScript 코드
        document.addEventListener('scroll', function() {
            const targetDiv = document.getElementById('event_visual');
            const body = document.body;

            const rect = targetDiv.getBoundingClientRect();
            const viewportHeight = window.innerHeight;

            // targetDiv의 하단이 viewport의 상단을 통과하면 header_2_on 클래스를 추가
            if (rect.bottom <= 0) {
                body.classList.add('header_2_on');
                body.classList.remove('header_2_off');
            }
            // targetDiv의 상단이 viewport의 상단을 통과하여 화면 위로 완전히 사라지면 header_2_on 클래스를 제거
            else if (rect.top >= viewportHeight || rect.bottom > 0) {
                body.classList.remove('header_2_on');
                body.classList.add('header_2_off');
            }
        });
        // JavaScript 코드


        // 부드러운 스크롤을 위한 코드
        document.querySelectorAll('.member_header_seq_box ul li a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                document.getElementById(targetId).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var trigger = new ScrollTrigger({

                offset: {
                    x: 0,
                    y: 50
                },
                addHeight: true
            }, document.body, window);
        });



        $(function(){
            $("a").on("click", function(){
                var divName = $(this).attr("id"),
                    topPosition = $("."+ divName).offset().top;
                $('html, body').animate({
                    scrollTop: topPosition - 0
                }, 1000);
                return false; //리턴펄스로 스크롤이 최상위로 갔다가 돌아오는 현상 없어짐
            });
        });
        $(document).ready(function() {
            $(window).on('scroll', function() {
                var header = $('.header_2');
                var sections = [
                    { el: $('#event_cont_1'), className: 'menu_1_on' },
                    { el: $('#event_cont_2'), className: 'menu_2_on' },
                    { el: $('#event_cont_3'), className: 'menu_3_on' },
                    { el: $('#event_cont_4'), className: 'menu_4_on' },
                    { el: $('#event_cont_5'), className: 'menu_5_on' },
                    { el: $('#event_cont_6'), className: 'menu_6_on' },
                ];

                var addedClass = false;

                $.each(sections, function(index, section) {
                    var rect = section.el[0].getBoundingClientRect();
                    if (rect.top <= 100 && rect.bottom >= 100) {
                        header.attr('class', 'header_2 ' + section.className);
                        addedClass = true;
                        return false; // Break the loop
                    }
                });

                if (!addedClass) {
                    header.attr('class', 'header_2');
                }
            });
        });

    </script>



    <script>
        $(function() {


            var $schedule = $('.wrap'),
                $filterBtn = $schedule.find('.filter_btn.filter');
            $filterBtn.on('click', function(){
                var $this = $(this),
                    $thisParent = $this.closest('.filter_wrap');
                $thisParent.toggleClass('active');
            });

            var $dateNav = $('.date_nav'),
                $programWrap = $schedule.find('.program_wrap');
            $dateNav.on('click', function(){
                var $this = $(this),
                    thisIndex = $this.index();
                $this.addClass('active');
                $this.siblings().removeClass('active');
                $programWrap.find('.program_content').eq(thisIndex).addClass('active').siblings().removeClass('active');
            }).triggerHandler('click');


            var $faq = $('.faq'),
                $faqAccBtn = $faq.find('.acc_btn');
            $faqAccBtn.on('click', function(){
                var $this = $(this),
                    $thisParent = $this.closest('.acc_item');
                $thisParent.toggleClass('active');
            });


            var $pop = $('.pop'),
                $popClose = $pop.find('.close'),
                $popInnerClose = $pop.find('.inner_close');
            $popClose.on('click', function () {
                $pop.removeClass('active');
            });
            $popInnerClose.on('click', function () {
                $pop.removeClass('active');
            });

            //NAV


            var $popupBtn = $('[data-btn-pop]');
            $popupBtn.on('click', function(){
                var $this = $(this);
                var target = $this.data('btn-pop');
                $('.pop_target_'+target).addClass('active');
                $thisPanel.find('.pop_inner').focus();
            });
            $('.pop .close, .pop .inner_close').on('click', function(){
                $(".pop_cate_1").removeClass('active');
            })
        });
    </script>





</body>

</html>