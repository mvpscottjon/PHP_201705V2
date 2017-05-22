<?php

//i--
$poker = array();

for($i=0;$i<51;$i++){
    $temp[]=rand(0,51);

    $isrepeat = false;
    for($j=0;$j<$i;$j++){
        if($poker == $temp){
            $isrepeat = true;
            break;
        }
    } if ()






    echo $poker[$i].'<br>';
}