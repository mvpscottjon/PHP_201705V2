<?php
//*****骰子 陣列 0-5  value 0-5(

$final = array(0,8,7,6,2,3,4,5,1,9);


    for ($j=9;$j>=0;$j--){
       $temp =rand(0,$j);  //$j表示有機會抽到自己；$j-1不會抽到自己
        $x = $final[$j];
        $final[$j]=$final[$temp];
        $final[$temp]=$x;


           echo $final[$j].'<br>';

}

