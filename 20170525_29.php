<?php
if(!isset($_GET['rate'])) exit(0);

$rate =$_GET['rate'];



$image = imagecreate("400","40");


$yellow=imagecolorallocate ( $image , 255, 255 , 0);

$red=imagecolorallocate ( $image , 255, 0, 0);

//int imageloadfont ( string $file )
imagefilledrectangle ( $image , 0 , 0 , 400 , 40 , $yellow );
imagefilledrectangle ( $image , 0 , 0 , (int)($rate*400/100) , 40 , $red );

//imagestring ( $image , int $font , int $x , int $y , string $string , int $color )

header('Content-Type:image/jpeg');

imagejpeg($image);


imagedestroy($image);