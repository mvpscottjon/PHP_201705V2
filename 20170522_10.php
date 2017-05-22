<?php

//***陣列示範
$a[0]=12;

var_dump($a);

echo count($a);
echo '<hr>';

$b[] = 123;
$b[] = 12.3;
$b[] = true;

var_dump($b);
echo count($b);
echo '<hr>';

$Seven['age']=27;
$Seven['height']=175;
$Seven['weight']=68;

var_dump($Seven);
echo count($Seven);
echo '<hr>';

$c=array(1,2,3,4,'第四項'=>5,'gender'=>true);


var_dump($c);
echo count($c);