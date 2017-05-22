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


//用陣列

$p = array(1=>0,0,0,0,0,0);

for ($i=0;$i<100000;$i++){
  $temp=rand(1,9);
    $p[($temp>=7)?$temp-3:$temp]++;
}
for ($i=1;$i<=count($p);$i++){
    echo "point {$i} = {$p[$i]}<br>";
}








