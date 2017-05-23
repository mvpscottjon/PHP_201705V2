<?php

$poker = range(0,51);
shuffle($poker);

foreach ($poker as  $card){
//    echo $card.'<br>';   ////驗算
}


echo "<hr>";

foreach ($poker as $i =>$value){
    $player[$i%4][(int)($i/4)] = $value;
    }
   foreach ($player[0] as $card){
//    echo "{$card}<br>";  //印出第0位玩家的牌
   }

   ?>

<table border="1" width="100%">

        <?php
        foreach ($player as $sb){

            sort($sb);  //理牌


            echo "<tr>";
        foreach($sb as $card){
            $suit=array("<font color='black' size='5'>&spades;</font>",
                "<font color='red' size='5'>&hearts;</font>",
                "<font color='red' size='5'>&diamondsuit;</font>",
                "<font color='black' size='5'>&clubs;</font>");
            $new=array('A',2,3,4,5,6,7,8,9,10,'J','Q','K');

            echo "<td>{$suit[$card/13]}{$new[$card%13]}</td>";

        }
            echo "</tr>";
        }
        ?>




</table>
