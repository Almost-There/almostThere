<?php header('Content-Type: image/png');

// Create the image
$im = imagecreatetruecolor(400, 60);

// Create some colors
$white = imagecolorallocate($im, 0, 204, 255);
$black = imagecolorallocate($im, 0, 0, 0);
imagefilledrectangle($im, 0, 0, 399, 29, $black);

// The text to draw
$text = 'LuckyMonkey loves Coolvetica';
// Replace path by your own font path
$font = '/var/www/almost-there.org/public_html/sty/fonts/coolvetica.ttf';

// Add the text
imagettftext($im, 20, 0, 15, 20, $white, $font, $text);

// Using imagepng() results in clearer text compared with imagejpeg()
imagepng($im);
imagedestroy($im);

?>