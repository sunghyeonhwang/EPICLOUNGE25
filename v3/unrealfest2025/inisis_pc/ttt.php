<?php

//9715
//9714


//650ee741162e212ecc3b74eec1299941
//5d6b059d97fffd17c30add57c016b494

$num = "19402";
$sOrignText = md5(str_replace("'","\'","render1221@naver.com"));
//$sOrignText = "18428";
include_once "../phpqrcode/qrlib.php";
QRcode::png($sOrignText,"../qrdata/".$num.".png", 0, 7, 2);
$documentRoot = $_SERVER['DOCUMENT_ROOT'];
$imagePath =  $documentRoot.'/v3/unrealfest2025/qrdata/'.$num.'.png';
$imagePath2 =  $documentRoot.'/v3/unrealfest2025/qrdata/'.$num.'.jpg';
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
