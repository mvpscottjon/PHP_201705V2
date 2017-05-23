<?php
////骰子骰一百次  次數  不用陣列
//$p1=$p2=$p3=$p4=$p5=$p6=0;
//
//for($i=0;$i<100;$i++){
//    rand(1,6);
//
//    echo
//
//}


//骰子骰0-6之次數，456要為123之兩倍   (用陣列)

$p = array(1=>0,0,0,0,0,0);

for ($i=0;$i<10000;$i++){

    //456為123之兩倍版
    //  $temp=rand(1,9);
    //  $p[($temp>=7)?$temp-3:$temp]++;

    $temp=rand(1,6);
   $p[$temp]++;

   //$p[$temp]=$p[$temp]+1  $p[1]=$p[1]+1  ==>表示將$p的第一個陣列+1，若有兩個則為+1再+1



}
//            echo "point {$1} = {$p[$1]}<br>";
//            echo "point {$2} = {$p[$2]}<br>";
//            echo "point {$3} = {$p[$3]}<br>";
//            echo "point {$4} = {$p[$4]}<br>";
//            echo "point {$5} = {$p[$5]}<br>";
//            echo "point {$6} = {$p[$6]}<br>";
//簡化為 FOR 迴圈
for ($j=1;$j<=count($p);$j++){
    echo "point {$j} = {$p[$j]}<br>";
}








