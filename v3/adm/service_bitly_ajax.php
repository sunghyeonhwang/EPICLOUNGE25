<?php
include_once('./_common.php');

if ($is_admin != 'super' && !auth_check($auth[$sub_menu], 'r', true)) {
    die(json_encode(array('success' => false, 'error' => '권한이 없습니다.')));
}

$long_url = trim($_POST['long_url']);
$domain   = trim($_POST['domain']);

if (!$domain) $domain = 'bit.ly';

if (!$long_url) {
    die(json_encode(array('success' => false, 'error' => 'URL을 입력해주세요.')));
}

// Bitly Access Token
$access_token = '625f1a9db7f70628960d953cebf68d24c754e5b6'; 

if (!$access_token) {
    die(json_encode(array('success' => false, 'error' => 'Bitly Access Token이 설정되지 않았습니다. 관리자에게 문의하세요.')));
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
    echo json_encode(array(
        'success' => true,
        'short_url' => $res_data['link']
    ));
} else {
    $error_msg = isset($res_data['message']) ? $res_data['message'] : '알 수 없는 에러가 발생했습니다. (HTTP Code: ' . $http_code . ')';
    echo json_encode(array(
        'success' => false,
        'error' => $error_msg
    ));
}
?>
