<?php

//curl 통신
function curl($method, $url, $param=array(), $contentsType = ''){
    error_reporting(0);

    $ch = curl_init();
    isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : "";

    $header = [];

    if (strtolower($method) == 'get') {
        $url = $url . '?' . http_build_query($param);
    }

    curl_setopt($ch, CURLOPT_URL, $url);
    if (strtolower($method) == 'post') {
        if (!empty($contentsType)) {
            $header[] = 'Content-Type: '.$contentsType;
        }

        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
    } else if (strtolower($method) != 'get') {
        $header[] = 'Content-Type: application/json';
        $header[] = 'X-HTTP-Method-Override: '.strtoupper($method);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($method));
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($param));
    }

    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    if (count($header)) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    }

    $response = curl_exec($ch);

    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($httpcode == 404 || $httpcode >= 500) {

    }

    if (curl_error($ch)) {
        echo curl_error($ch);
        return FALSE;
    }
    curl_close($ch);

    return json_decode($response);
}
