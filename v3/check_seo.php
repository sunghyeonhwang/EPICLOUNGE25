<?php
include_once('./_common.php');
$result = sql_query(" SELECT * FROM v3_seo_config ");
while($row = sql_fetch_array($result)) {
    echo "ID: " . $row['seo_id'] . " | Page: " . $row['seo_page'] . " | Title: " . $row['seo_title'] . "\n";
}
?>
