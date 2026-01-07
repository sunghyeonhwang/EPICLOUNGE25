<?php

// UWT_NAME
// MEMBER_API
// COOKIE_DOMAIN
// COOKIE_EXPIRES
// COOKIE_EXPIRES_LONG
// COOKIE_EXPIRES_SHORT

include(LIB_PATH.'/JWT.php');
$jwt = new JWT();

function is_login($token='') {
    global $jwt;
    $token = get_token();

    if (empty($token) || $token == '') {
        return false;
    }

    return true;
}

function get_member($token='') {
    global $jwt;
    $token = get_token();

    if (empty($token) || $token == '') {
        return false;
    }
    set_token($token);

    return $jwt->decode($token, JWT_KEY);
}

function get_token(){
    $token = get_cookie(UWT_NAME);

    return $token;
}

function set_token($token='') {
    if (!isset($token) || empty($token)) {
        $expire = -1;
    } else {
        $expire = time() + 86400;   // 1일
    }
    set_cookie(UWT_NAME, $token, $expire);
}

function get_cookie($n, $v = "")
{
    if (isset($_COOKIE[$n]) && !empty($_COOKIE[$n])) {
        $v = $_COOKIE[$n];
    }
    return $v;
}

function set_cookie($n, $v = null, $p = 86400) {
    if (empty($v)) {
        // setcookie($n, null, -1, "/", $d);
        setcookie($n, null, -1, "/");
    } else {
        // setcookie($n, $v, $p, "/", $d);
        setcookie($n, $v, $p, "/");
    }
}

function expire_token() {
    set_cookie(UWT_NAME, '', -1);
}