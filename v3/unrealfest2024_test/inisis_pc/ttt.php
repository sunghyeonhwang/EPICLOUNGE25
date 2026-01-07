<?php

//9056
//9414


//dd49e4569ad3d22168b09314c24a4cc7
//e87efa25ca1cc0a772dbd18c6f1afa85

include_once "../phpqrcode/qrlib.php";
$sOrignText = "253ed2e2c6518ba78af19286ba4bdf7b";
QRcode::png($sOrignText,"../qrdata/9473.png", 0, 7, 2);
$documentRoot = $_SERVER['DOCUMENT_ROOT'];
$imagePath =  $documentRoot.'/v3/unrealfest2024_test/qrdata/9473.png';
$imagePath2 =  $documentRoot.'/v3/unrealfest2024_test/qrdata/9473.jpg';
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
