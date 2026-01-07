<?php
include_once('./_common.php');

if ($is_admin != 'super' && !auth_check($auth[$sub_menu], 'r', true)) {
    die(json_encode(array('success' => false, 'error' => '권한이 없습니다.')));
}

$mode = $_POST['mode'];

// 삭제 모드
if ($mode == 'delete') {
    $bl_id = (int)$_POST['bl_id'];
    if (!$bl_id) {
        die(json_encode(array('success' => false, 'error' => '삭제할 대상이 없습니다.')));
    }

    $table_name = G5_TABLE_PREFIX . 'bitly_logs';
    $sql = " delete from $table_name where bl_id = '$bl_id' ";
    if (sql_query($sql)) {
        echo json_encode(array('success' => true));
    } else {
        echo json_encode(array('success' => false, 'error' => 'DB 삭제 중 오류가 발생했습니다.'));
    }
    exit;
}

// 변환 모드 (기존 로직)
$long_url = trim($_POST['long_url']);
$domain   = trim($_POST['domain']);
$memo     = trim($_POST['memo']);

if (!$domain) $domain = 'bit.ly';

if (!$long_url) {
    die(json_encode(array('success' => false, 'error' => 'URL을 입력해주세요.')));
}

// Bitly Access Token
$access_token = '625f1a9db7f70628960d953cebf68d24c754e5b6'; 

if (!$access_token) {
    die(json_encode(array('success' => false, 'error' => 'Bitly Access Token이 설정되지 않았습니다. 관리자에게 문의하세요.')));
}

// DB 테이블 생성 (없을 경우)
$table_name = G5_TABLE_PREFIX . 'bitly_logs';
$table_exists = sql_query(" select 1 from $table_name limit 1 ", false);
if(!$table_exists) {
    sql_query(" CREATE TABLE IF NOT EXISTS `$table_name` (
        `bl_id` int(11) NOT NULL AUTO_INCREMENT,
        `bl_long_url` text NOT NULL,
        `bl_short_url` varchar(255) NOT NULL,
        `bl_memo` text NOT NULL,
        `bl_datetime` datetime NOT NULL,
        PRIMARY KEY (`bl_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ", true);
}

$api_url = 'https://api-ssl.bitly.com/v4/shorten';

$data = array(
    'long_url' => $long_url,
    'domain'   => $domain
);

$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Bearer ' . $access_token,
    'Content-Type: application/json'
));

$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$res_data = json_decode($response, true);

if ($http_code == 200 || $http_code == 201) {
    $short_url = $res_data['link'];

    // DB에 로그 저장
    $sql = " insert into $table_name
                set bl_long_url = '".sql_real_escape_string($long_url)."',
                    bl_short_url = '".sql_real_escape_string($short_url)."',
                    bl_memo = '".sql_real_escape_string($memo)."',
                    bl_datetime = '".G5_TIME_YMDHIS."' ";
    sql_query($sql);
    $new_id = sql_insert_id();

    echo json_encode(array(
        'success' => true,
        'short_url' => $short_url,
        'bl_id' => $new_id
    ));
} else {
    $error_msg = isset($res_data['message']) ? $res_data['message'] : '알 수 없는 에러가 발생했습니다. (HTTP Code: ' . $http_code . ')';
    echo json_encode(array(
        'success' => false,
        'error' => $error_msg
    ));
}
?>
