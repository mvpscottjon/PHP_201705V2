<?php

$a=array(1,2,3);
$b[]=$a;
$b[]=123;
$b[]=array(4,5,67);

echo $b[1];