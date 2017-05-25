<?php
//後端畫布(rate時記得去URL後面輸入?RATE=50)

if(!isset($_GET['rate'])) exit(0);

$rate =$_GET['rate'];



$image = imagecreate("400","40");



$yellow =imagecolorallocate ( $image , 255, 255 , 0);

$red = imagecolorallocate ( $image , 255, 0, 0);


imagefilledrectangle ( $image , 0 , 0 , 400 , 40 , $yellow );
imagefilledrectangle ( $image , 0 , 0 , $rate*400/100 , 40 , $red );


header('Content-Type:image/jpeg');

imagejpeg($image);


imagedestroy($image);