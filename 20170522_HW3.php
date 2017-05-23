<?php
//*****骰子 陣列 0-5  value 0-5;

$final = array();
for($i=0;$i<6;$i++){
    for ($j=5;$j>=0;$j--){
       $temp=rand(0,5);

       $change = $final[5];
        $final[$temp]=$change;
        $final[$j                  ] = $final[$temp];





}
echo $final[$j];}
//
//for($i=0;$i<51;$i++){
//
//    for ($j=5;$j>0;$j--){
//        $temp = rand(0,$j);
//
//        $repeat = false;
//        if($poker ==$temp){
//            $repeat = true;
//            break;
//        }else {$repeat = false;
//        continue;
//
//        }
//        echo $poker;
//        echo $temp;
//
//}
//    }