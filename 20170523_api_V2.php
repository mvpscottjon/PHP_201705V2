<?php

////*********

createLottery();


// YA的方炫
function ya($who, $pre='alooha'){
    Echo "{$pre},{$who} <br>";

}


//取得陣列
function sayHello(){
    $names =func_get_args();
    foreach ($names as $name){
        echo "Hello.$name.<br>";
    }


}


function createLottery(){
    $p=array();

   //第一個FOR 為需要幾個數字
    for($i=0;$i<6;$i++){
        $temp= rand(1,49).'<br>'; //rand表隨機號碼幾號到幾號
        $p[$i]= $temp;
        //第二個FOR 為了檢察數字是否重複
        for ($j=0;$j<$i;$j++){
            $repeat = false;
            if($p[$j]==$temp){
                $repeat=true;
                break;
            }else {$repeat=false;}
        }
         if ($repeat){
            $i--;
            continue;
         }else {$p[$i]=$temp;}




            $r= $p[$i];

    }

    echo $r[0];
    echo $r[1];
    echo $r[2];
    echo $r[3];
    echo $r[4];
    echo $r[5];
    echo '<hr>';
//    echo '幾個號碼'.':'.count($p);
//

}

////sort測試
//$r=array(1,3,5,4,2);
//sort($r);
//foreach ($r as $value){
//echo $value;}