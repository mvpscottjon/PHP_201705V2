<?php
//*****骰子 陣列 0-5  value 0-5;
$poker = array();
$final = array();
for ($i=0;$i<6;$i++) {
    $temp = rand(0,5);
    $isRepeat = false;
//    $poker[$i] = $temp;
    for ($j=5;$j>=0;$j--){
        if($final[$j] == $temp ){
            $isRepeat = true;
            break;
        }
        if($isRepeat){
            $i--;
            continue;
        }else{
            $final[$j] = $temp;
        }
    }
    echo $final[$i];
}
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