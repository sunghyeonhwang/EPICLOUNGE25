<?php

include_once "../phpqrcode/qrlib.php";
$sOrignText = "d591cb66fbbf08668ad84579503381c2";
QRcode::png($sOrignText,"../qrdata/4159.png", 0, 7, 2);
$documentRoot = $_SERVER['DOCUMENT_ROOT'];
$imagePath =  $documentRoot.'/v3/unrealfest2023/qrdata/4159.png';
$imagePath2 =  $documentRoot.'/v3/unrealfest2023/qrdata/4159.jpg';
if (file_exists($imagePath)) {
    $pngImage = imagecreatefrompng($imagePath);
    if ($pngImage) {
        $pngWidth = imagesx($pngImage);
        $pngHeight = imagesy($pngImage);
        $jpgImage = imagecreatetruecolor($pngWidth, $pngHeight);
        imagecopy($jpgImage, $pngImage, 0, 0, 0, 0, $pngWidth, $pngHeight);
        imagejpeg($jpgImage, $imagePath2, 100); // 90 is the quality (0-100)
        imagedestroy($pngImage);
        imagedestroy($jpgImage);
    }
}
?>
