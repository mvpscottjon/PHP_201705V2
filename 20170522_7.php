<?php

//$a true or false
//$a = "0";
//
//    if($a){
//    echo 'Yes';
//    }else {
//        echo 'no';
//    }



//and or 練習

//$a = 10;
//$b = 2;
//
//
//if (a>10 && b>5){
//
//}


//switch

$month = rand(1,12);
echo "$month<br>";
switch ($month){
    case 1: case 3: case 5:  case 7: case 8: case 10:  case 12:
    echo '31';
    break;

    case 2:
    echo '28';
    break;


    case 4:  case 6: case 9: case 11:
        echo '30';
        break;


    default:
    echo 'NO';
    break;

}

