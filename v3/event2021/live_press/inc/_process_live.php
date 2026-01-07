<?
// live 페이지 전처리

include(LIVE_INC_PATH.'/_data.php');

$nowTimestamp = time();
$nowHis = date('His', $nowTimestamp);

if (empty($SEL_DATA)) {
    echo "<script>alert('현재 시청시간이 아닙니다');location.href='".PAGE_MAIN."';</script>";
    exit;
}

if ($nowHis < $SEL_DATA['live_open_time']) {
    $viewStartTime = substr($SEL_DATA['live_open_time'], 0, 2).':'.substr($SEL_DATA['live_open_time'], 2, 2);
    echo "<script>alert('".$viewStartTime."부터 입장이 가능합니다.');location.href='".PAGE_MAIN."';</script>";
    exit;
}

if (empty($MEMBER)) {
    echo "<script>alert('등록 정보 확인이 필요합니다');location.href='".PAGE_LIVE_CHECKIN."';</script>";
    exit;
}

$chat_encode_nickname = empty($MEMBER->nickname) ? '' : urlencode($MEMBER->nickname);
$chat_link = 'https://youyou.kr/?sk=youyou&no='.$SEL_DATA['chatRoomName'].'&id=&nk='.$chat_encode_nickname.'&lv=2&tg=https://unrealsummit16.cafe24.com/og/chat_icon2.png&view={"bgColor":",cccccc,,4,ffffff","msgViewType":"0","chatOneLine":"0","isChatHistory":"1","sysMsgColor":"7e7e7e","chatTime":"1"}&my={"nkColor":"7e7e7e","msgColor":"000000"}&control={"banWord":"***나쁜말***","autoLink":"1","maxLength":"0","msgInterval":"0","mobileFocus":"0"}&ui={"btnPopupChat":"1"}';
$SEL_DATA['chat_link'] = $chat_link;


//$chat_encode_nickname.'&nocache=1&sk=1&id=&ls=3&lv=2&a=5&l=123&c1=0&m0=1,1&m1=1,1&ms=200&m6=0&m4=1&m2=0&m7=0&tm=-4&mk=1&m8=0,1&&sj=,,,0&c2=0&cr=fff&mr=00ffff1&bg=,,,,,,,ffffff,#msg';
//$chat_link ='https://onbinder.co.kr:63002/?no='.$SEL_DATA['chatRoomName'].'&nk='.$chat_encode_nickname.'&nocache=1&sk=1&id=&ls=3&lv=2&a=4&c1=1&dk=0,1&m0=1,1&m1=1,1&ms=200&m6=0&m4=1&m2=0&m7=0&tm=-4&mk=1&m8=0,1&&sj=,,,0&c2=0&cr=0000002&mr=0000002&bg=,,,,,,,fff,#msg';

// echo '<xmp>';
// print_r($SEL_DATA);
// echo '</xmp>';
?>




