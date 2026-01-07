<?
// 페이지 별로 상단에 호출해줘야할 공통 파일

// local-tour, tour-dev
if (preg_match("/dev\./", $_SERVER['HTTP_HOST'])) {
    define('IS_DEV', 1);
    define('IS_TEST', 0);
} else if (preg_match("/local\./", $_SERVER['HTTP_HOST'])) {
    define('IS_DEV', 4);
    define('IS_TEST', 1);
} else {
    define('IS_DEV', 0);
    define('IS_TEST', 0);
}

if (IS_TEST) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

if (empty($common_title)) {
    $common_title = '언리얼 엔진 5 얼리 액세스 프리미어';
}
if (IS_DEV > 0) {
    $common_title = '[DEV_'.IS_DEV.']'.$common_title;
}

if (IS_DEV >= 4) {
    define('SERVER_API', 'http://local.test.com/cib');
    define('API_PATH', '//local.test.com/cib');
    // define('API_PATH', '//www.unrealsummit.co.kr/cib');
} else {
    define('SERVER_API', 'http://www.epiclounge.co.kr/cib');
    define('API_PATH', '//www.epiclounge.co.kr/cib');
}

// ******* 이벤트에 따라 변경될 값들 **************
define('API_SUB_PATH', 'USummit2020');    // api sub path
define('EVENT_TITLE', '언리얼 엔진 5 얼리 액세스 프리미어');    // 여러 문구에 들어가는 title
define('MEVENT_TITLE', '언리얼 엔진 5 얼리 액세스 프리미어');    // 문자용에 들어가는 title
// ******************************************

define('ALERT_READY', 'javascript:alert(\'준비중입니다.\');');    // link에 준비중 alert


define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
define('DEFAULT_PATH', '/event2021');
define('JS_PATH', ROOT_PATH.DEFAULT_PATH.'/js');
define('CSS_PATH', ROOT_PATH.DEFAULT_PATH.'/css');
define('IMG_PATH', ROOT_PATH.DEFAULT_PATH.'/image');

define('LIB_PATH', ROOT_PATH.DEFAULT_PATH.'/lib');
define('INC_PATH', ROOT_PATH.DEFAULT_PATH.'/inc');
define('INC_MEMBER_PATH', ROOT_PATH.DEFAULT_PATH.'/member/inc');

define('JS_VIEW_PATH', DEFAULT_PATH.'/js');
define('CSS_VIEW_PATH', DEFAULT_PATH.'/css');
define('IMG_VIEW_PATH', DEFAULT_PATH.'/images');

// live 폴더 연관
define('LIVE_INC_PATH', ROOT_PATH.DEFAULT_PATH.'/live/inc');
define('LIVE_JS_VIEW_PATH', DEFAULT_PATH.'/live/js');
define('LIVE_CSS_VIEW_PATH', DEFAULT_PATH.'/live/css');
define('LIVE_IMG_VIEW_PATH', DEFAULT_PATH.'/live/images');

if (IS_DEV > 0) {
    define('PREFIX', 'http://'.$_SERVER['HTTP_HOST'].DEFAULT_PATH.'/');
    define('PREFIX_DOMAIN', 'http://'.$_SERVER['HTTP_HOST'].DEFAULT_PATH.'/');
    define('PAGE_MAIN', '/');
} else {
    define('PREFIX', DEFAULT_PATH.'/');
    define('PREFIX_DOMAIN', 'https://'.$_SERVER['HTTP_HOST'].DEFAULT_PATH.'/');
    define('PAGE_MAIN', 'https://'.$_SERVER['HTTP_HOST']);
}

define('PAGE_REG_TERMS_AGREE', PREFIX_DOMAIN.'reg_terms_agree.html');  // 등록 신청 사전 동의 페이지
define('PAGE_REG_FORM', PREFIX_DOMAIN.'reg_form.html');  // 등록 신청 입력 페이지
define('PAGE_REG_SUCCESS', PREFIX_DOMAIN.'reg_success.html');  // 등록 신청 완료 페이지
define('PAGE_REG_FIND', PREFIX_DOMAIN.'reg_find.html');  // 등록 신청 확인 인증 페이지
define('PAGE_REG_MOD', PREFIX_DOMAIN.'reg_mod.html');  // 등록 신청 수정 페이지
define('PAGE_CONTACT', PREFIX_DOMAIN.'contact.html');  // 문의 사항 등록 페이지
define('PAGE_TERMS', PREFIX_DOMAIN.'terms.html');  // 개인정보 처리 방침
define('PAGE_POLICY', PREFIX_DOMAIN.'policy.html');  // 개인정보 처리 방침
define('PAGE_REPLAY', PREFIX_DOMAIN.'../replay.html'); // 리플레이
define('PAGE_LIVE_CHECKIN', PREFIX_DOMAIN.'live/checkin.html'); // live 체크인
define('PAGE_LIVE', PREFIX_DOMAIN.'live/'); // live 시청

define('YMD', date('Ymd'));

// 회원 관련
define('UWT_NAME', 'UJWT');
define('JWT_KEY', 'HLovQXkpu');

// lib
include(LIB_PATH.'/curl_helper.php');
include(LIB_PATH.'/member_helper.php');

// 주문번호(ono)
$APPLY_ORDER_NO = null;

// 체크인 정보
$MEMBER = get_member();

// echo '<xmp>';
// print_r($MEMBER);
// echo '</xmp>';
?>