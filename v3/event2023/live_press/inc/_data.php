<?
//메타휴먼 웨비나 유투브 주소 리허설	https://www.youtube.com/embed/xHpsTtLgX4o
//메타휴먼 웨비나 유투브 주소 본방	https://www.youtube.com/embed/1luejp2uN5o
//채팅 주소 : https://onbinder.co.kr:63002/?nocache=1&no=20210217x01&sk=1&id=&nk=UnrealEngine1&an=1&lv=3&a=5&c1=0&m7=0&sj=,,,0&cr=0000001--ffffff,------1--------,#msg

// 테스트용 시간
// $testStart = time();

/********************************************
본방은 하루라서 XXX_DAY1이 본방 날이다.
XXX_TEST는 테스트용 설정값이다.
*********************************************/

// 리허설로 설정으로 접근 가능한 날짜를 배열로 설정한다.
// 해당 날짜로 접근시 $_DATA['re']에 설정된 정보로 처리된다.
$RE_DAYS = ['20210602'];

// 설문조사 팝업 오픈 시간(시분초)
$SURVEY_OPEN_TIME_TEST = '154000';  // TEST
//$SURVEY_OPEN_TIME_DAY1 = '113000';  // 본방전 리허설
$SURVEY_OPEN_TIME_DAY1 = '153000';  // 본방

// 설문조사 링크(아래 설정값에 사용되며 수정을 쉽게 하기 위해 한곳에 모아둠)
$SURVEY_LINKS = [
    'TEST-1' => 'https://forms.gle/3DrCUQVNNMpv1rWG9', // TEST 트랙1
    'DAY-1' => 'https://forms.gle/3DrCUQVNNMpv1rWG9', // 본방
];

// LIVE 입장 가능 시간(시분초)
$LIVE_OPEN_TIME_TEST = '000100';    // TEST
//$LIVE_OPEN_TIME_DAY1 = '103000';    // 본방전 리허설
$LIVE_OPEN_TIME_DAY1 = '133000';    // 본방
$_DATA = [
    // 리허설 'chatRoomName' => 'rex01',
    're' => [
        1 => [
            'name' => '언리얼 엔진 5 얼리 액세스 프리미어-리허설',
            'youtube_link' => 'https://www.youtube.com/embed/_fXK1kyYPJc?autoplay=1',
            'btnClass' => 'c-btn',
            'track_link' => PAGE_LIVE.'?day=re&track=1',
            'other_track_link' => '',
            'chatRoomName' => '20210602x01',
            'survey_open_time' => $SURVEY_OPEN_TIME_TEST,
            'survey_link' => $SURVEY_LINKS['TEST-1'],
            'live_open_time' => $LIVE_OPEN_TIME_TEST,
            'edu_schedule' => '
<h2><strong>언리얼 엔진 5 얼리 액세스 프리미어-리허설</h2>
<ul>
    <li>
        <div class="con-box">
            <p class="p-time blue-bg">14:00 - 14:15</p>
            <div class="b-con">
                <p class="p-title">언리얼 엔진 5 소개</p>
                <p class="b-txt">엔진 비즈니스 리드 신광섭</p>

            </div>
        </div>
        <div class="box-deco" data-start="000000" data-end="141500" data-qnalink="https://epiclounge.co.kr/qna/list.html?area=1501&time=2"></div>
    </li>

     <li>
        <div class="con-box">
            <p class="p-time blue-bg">14:15 - 14:45</p>
            <div class="b-con">
                <p class="p-title">언리얼 엔진 5 나나이트 & 루멘</p>
                <p class="b-txt">엔진 서포트 엔지니어 강정훈 <br>교육 에반젤리스트 권오찬</p>

            </div>
        </div>
        <div class="box-deco" data-start="140000" data-end="141500" data-qnalink="https://epiclounge.co.kr/qna/list.html?area=1501&time=2"></div>
    </li>
    <li>
        <div class="con-box">
            <p class="p-time blue-bg">14:45 - 15:15</p>
            <div class="b-con">
                <p class="p-title">언리얼 엔진 5 오픈 월드</p>
                <p class="b-txt">디벨로퍼 릴레이션 리드 박창현</p>

            </div>
        </div>
        <div class="box-deco" data-start="144500" data-end="151500" data-qnalink="https://epiclounge.co.kr/qna/list.html?area=1501&time=2"></div>
    </li>
    <li>
        <div class="con-box">
            <p class="p-time blue-bg">15:15-15:45</p>
            <div class="b-con">
                <p class="p-title">언리얼 엔진 5 애니메이션 & 오디오 시스템</p>
                <p class="b-txt">교육 에반젤리스트 권오찬</p>

            </div>
        </div>
        <div class="box-deco" data-start="151500" data-end="154500" data-qnalink="https://epiclounge.co.kr/qna/list.html?area=1501&time=2"></div>
    </li>
        <li>
        <div class="con-box">
            <p class="p-time blue-bg">15:45 - </p>
            <div class="b-con">
                <p class="p-title">언리얼 엔진 5 Q&A</p>
                <p class="b-txt"> </p>

            </div>
        </div>
        <div class="box-deco" data-start="154500" data-end="162000" data-qnalink="https://epiclounge.co.kr/qna/list.html?area=1501&time=2"></div>
    </li>
</ul>
            ',
        ],
    ],

    
    // ######### 이날이 본방이다!!!! ############
    '20210603' => [
        1 => [
            'name' => '언리얼 엔진 5 얼리 액세스 프리미어',
            'youtube_link' => 'https://www.youtube.com/embed/67MVQv3pQBo?autoplay=1',
            'btnClass' => 'e-btn',
            'track_link' => PAGE_LIVE.'?day=20210603&track=1',
            'other_track_link' => '',
            'chatRoomName' => '20210603x01',
            'survey_open_time' => $SURVEY_OPEN_TIME_DAY1,
            'survey_link' => $SURVEY_LINKS['DAY-1'],
            'live_open_time' => $LIVE_OPEN_TIME_DAY1,
            'edu_schedule' => '
<h2><strong>언리얼 엔진 5 얼리 액세스 프리미어</h2>
<ul>
    <li>
        <div class="con-box">
            <p class="p-time blue-bg">14:00 - 14:15</p>
            <div class="b-con">
                <p class="p-title">언리얼 엔진 5 소개</p>
                <p class="b-txt">엔진 비즈니스 리드 신광섭</p>

            </div>
        </div>
        <div class="box-deco" data-start="000000" data-end="141500" data-qnalink="https://epiclounge.co.kr/qna/list.html?area=1501&time=1"></div>
    </li>

     <li>
        <div class="con-box">
            <p class="p-time blue-bg">14:15 - 14:45</p>
            <div class="b-con">
                <p class="p-title">언리얼 엔진 5 나나이트 & 루멘</p>
                <p class="b-txt">엔진 서포트 엔지니어 강정훈 <br> 교육 에반젤리스트 권오찬</p>

            </div>
        </div>
        <div class="box-deco" data-start="141500" data-end="144500" data-qnalink="https://epiclounge.co.kr/qna/list.html?area=1501&time=1"></div>
    </li>
    <li>
        <div class="con-box">
            <p class="p-time blue-bg">14:45 - 15:15</p>
            <div class="b-con">
                <p class="p-title">언리얼 엔진 5 오픈 월드</p>
                <p class="b-txt">디벨로퍼 릴레이션 리드 박창현</p>

            </div>
        </div>
        <div class="box-deco" data-start="144500" data-end="151500" data-qnalink="https://epiclounge.co.kr/qna/list.html?area=1501&time=1"></div>
    </li>
    <li>
        <div class="con-box">
            <p class="p-time blue-bg">15:15-15:45</p>
            <div class="b-con">
                <p class="p-title">언리얼 엔진 5 애니메이션 & 오디오 시스템</p>
                <p class="b-txt">교육 에반젤리스트 권오찬</p>

            </div>
        </div>
        <div class="box-deco" data-start="151500" data-end="154500" data-qnalink="https://epiclounge.co.kr/qna/list.html?area=1501&time=1"></div>
    </li>
        <li>
        <div class="con-box">
            <p class="p-time blue-bg">15:45 - </p>
            <div class="b-con">
                <p class="p-title">언리얼 엔진 5 Q&A</p>
                <p class="b-txt"> </p>

            </div>
        </div>
        <div class="box-deco" data-start="154500" data-end="162000" data-qnalink="https://epiclounge.co.kr/qna/list.html?area=1501&time=1"></div>
    </li>
</ul>
            ',
        ],
    ],
];

if (empty($_GET['day'])) {
    $sel_day = YMD;
    // ##### 테스트 설정 => 테스트할 날짜를 추가 #######
    // $testDays = ['20210214', '20210214'];
    // if (in_array(YMD, $testDays)) {
    //     // ######### test가 기본/ 실제 행사날짜(20210216) 중 하나를 설정하면 해당 날짜 고육으로 접근한다. ##############
    //     $sel_day = 'test';
    // }
    // ##### 리허설 설정 => 테스트할 날짜를 추가 #######
    $reDays = $RE_DAYS;
    if (in_array(YMD, $reDays)) {
        // ######### test가 기본/ 실제 행사날짜(20210216) 중 하나를 설정하면 해당 날짜 고육으로 접근한다. ##############
        $sel_day = 're';
    }
} else {
    $sel_day = $_GET['day'];
}
if (empty($_GET['track'])) {
    $sel_track = 1;
} else {
    $sel_track = $_GET['track'];
}

$SEL_DATA = empty($_DATA[$sel_day][$sel_track]) ? null : $_DATA[$sel_day][$sel_track];
$SEL_TRACK_COUNT = empty($_DATA[$sel_day]) ? 0 : count($_DATA[$sel_day]);

// echo '<xmp>';
// print_r($SEL_DATA);
// echo '</xmp>';
?>