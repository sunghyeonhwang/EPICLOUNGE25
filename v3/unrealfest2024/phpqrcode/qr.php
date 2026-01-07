<?php
include_once "./qrlib.php";
header('Content-Type: image/png');
ob_start("colback");
$sOrignText = $_GET["a"];
$debugLog = ob_get_contents();
ob_end_clean();
QRcode::png($sOrignText);
?>
