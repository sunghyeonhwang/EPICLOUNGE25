<?php
include_once("index2_google_loader.php");
$pop_line = $_GET['pop_line'];
$period = xls_loader("A".$pop_line);
$title = xls_loader("B".$pop_line);
$cate_game = xls_loader("C".$pop_line);
$cate_game = str_ireplace("ALL", "공통", $cate_game);
$cate_grade = xls_loader("D".$pop_line);
$cate_type = xls_loader("E".$pop_line);
$speaker_name = xls_loader("F".$pop_line);
$speaker_job = xls_loader("G".$pop_line);
$speaker_contenst1 = xls_loader("H".$pop_line);
$speaker_img = xls_loader("I".$pop_line);
$session_info = xls_loader("R".$pop_line);
$session_listinfo = xls_loader("S".$pop_line);
$session_target = xls_loader("T".$pop_line);
$calendar_add = xls_loader("U".$pop_line);

?>
<div class="pop_scroll">
    <div class="pop_title">
        <span class="cate" id=""><?=$cate_game?></span>
        <h2><?=$title?></h2>
    </div>
    <div class="pop_cal_date_btn">
        <span class="date_box"><?=$period?></span>
        <a href="<?=$calendar_add?>" title="새창" target="_blank">캘린더 추가</a>
    </div>
    <div class="pop_con_wrap">
        <div class="pop_con">
            <div class="owner_wrap">
                <div class="img"  style="background-image:url('<?=$speaker_img?>')">Sebastien 이미지</div>
                <div class="owner">
                    <div class="owner_name"><?=$speaker_name?><span><?=$speaker_job?></span></div>
                    <div class="owner_company"><?=$speaker_contenst1?></div>
                </div>
            </div>

            <div class="text_box">
                <div class="title">소개</div>
                <div class="text">에픽게임즈 제품 개발 부문 부사장 Sebastien Miglio의 기조 세션에서 언리얼 엔진이 다양한 산업 분야에서 어떻게 미래를 만들어가고 있는지 알아보세요. 우리가 플레이하는 게임부터 자동차 운전까지 언리얼 엔진 에코시스템이 어떻게 개발자와 크리에이터들에게 새로운 가능성을 열어주고 있는지 설명하고, 렌더링, 모바일 개발, 애니메이션 등 언리얼 엔진 5.5의 새로운 기능에 대해서도 간략히 소개할 예정입니다.</div>
            </div>

            <div class="text_box">

                <div class="title">대상</div>
                <div class="text">
                    <ul class="bu type2">
                        <li>전체</li>
                    </ul>
                </div>

            </div>
            <div class="box_ul">
                <ul>
                    <li>
                        <span class="text_title">산업</span>
                        <span class="text_text">공통</span></li>
                    <li>
                        <span class="text_title">분야</span>
                        <span class="text_text">공통</span>
                    </li>
                    <li>
                        <span class="text_title">난이도</span>
                        <span class="text_text">초급</span>
                    </li>
                    <li>
                        <span class="text_title">플랫폼</span>
                        <span class="text_text">크로스 플랫폼</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<button class="inner_close">
    <span>CLOSE</span>
</button>