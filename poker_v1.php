<?php

//撲克牌發牌 即為數字不能重複(i--版本)
$poker = array();

for($i=0;$i<10;$i++){

    $temp=rand(0,9);
    $isRepeat = false;
    for($j=0;$j<$i;$j++){

        if($poker[$j] == $temp){
            $isRepeat = true;
            break;
        }
    }
    if ($isRepeat){
        $i--;
        continue;  //沒有這個continue就會重複　　為什麼？？
    }else{
    $poker[$i] = $temp;
    }
    echo $poker[$i].'<br>';
}