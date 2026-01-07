<?php
$sub_menu = '900100';
include_once('./_common.php');

auth_check_menu($auth, $sub_menu, 'r');

$g5['title'] = 'SERVICE 메인';
include_once('./admin.head.php');
?>

<div class="local_desc01 local_desc">
    <p>
        SERVICE 메뉴의 메인 페이지입니다. 이곳에 새로운 기능을 추가할 수 있습니다.
    </p>
</div>

<div class="box_container">
    <p>여기에 내용을 작성해 주세요.</p>
</div>

<?php
include_once('./admin.tail.php');
?>
