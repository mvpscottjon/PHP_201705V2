<?php
include '20170526_api_V3.php';

//$mybike = new scooter();

//teacher teach
//
//if (checkIDRight('A123456789')==1){
////    if (TWID::checkId('A123456781')==1){
//    $myId = new TWID('A123456789');
//    echo $myId->getGender()?'Male':'Femal';
//    $Id2 = new TWID('A123456789');
//    $Id3 = new TWID('A123456789');
//    $Id4 = new TWID('A123456789');
//    $Id5 = new TWID('A123456789');
//    echo TWID::$counter;   ///為什麼會相加?   因為一開始的建構函式即
//}else{
//    echo 'XX';
//}




//my way

    $myId= new TWId('A123456789');

    $myId->getId();
    $myId->getGender();

echo  $myId->getId();
echo  $myId->gender;

echo "myscooterspeed:{$myId->getId()}";









