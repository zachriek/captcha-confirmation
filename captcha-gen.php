<?php
session_start();
$random_alpha = md5(rand());
$captcha_code = substr($random_alpha, 0, 4);
$_SESSION['captcha_code'] = $captcha_code;

$target_layer = imagecreatetruecolor(170, 70);
$color = imagecolorallocate($target_layer, 0, 0, 0);
$background_color = imagecolorallocate($target_layer, 255, 255, 255);
imagefill($target_layer, 0, 0, $background_color);

for ($i = 0; $i < 3; $i++) {
  imageline($target_layer, 0, rand() % 50, 200, rand() % 50, $color);
}

for ($i = 0; $i < 1000; $i++) {
  imagesetpixel($target_layer, rand() % 200, rand() % 50, $color);
}

imagettftext($target_layer, 32, 0, 35, 35, $color, 'Poppins.ttf', $captcha_code);

header("Content-type: image/jpeg");
imagejpeg($target_layer);