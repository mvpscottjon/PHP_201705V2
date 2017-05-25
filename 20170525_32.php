<?php
$img = imagecreatefromjpeg ( "./fileupload/pika.jpg");

$img2 = imagecreatefrompng ( "./fileupload/pika2.png");


//$red=imagecolorallocate ( $img , 255, 0, 0);

$imgD =imagecreate(400,200);

//
//
//bool imagecopyresized ( resource $dst_image , resource $src_image ,
//int $dst_x , int $dst_y , int $src_x , int $src_y ,
//int $dst_w , int $dst_h , int $src_w , int $src_h )




header('Content-Type:image/jpeg');

imagejpeg($imgD);


imagedestroy($img);
imagedestroy($img2);