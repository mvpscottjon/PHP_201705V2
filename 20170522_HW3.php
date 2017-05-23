<?php
//*****骰子 陣列 0-5  value 0-5;

$final = array(0,1,2,3,4,5);


    for ($j=5;$j>=0;$j--){
       $temp =rand(0,$j);
        $x = $final[$j];
        $final[$j]=$final[$temp];
        $final[$temp]=$x;


           echo $final[$j];

}

