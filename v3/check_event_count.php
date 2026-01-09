<?php
include_once('./_common.php');
$row = sql_fetch("SELECT count(*) as cnt FROM v3_rsc_event_bbs WHERE category = '커뮤니티 이벤트' AND display_yn = 'Y'");
echo "Count: " . $row['cnt'];
?>
