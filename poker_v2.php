<?php

//撲克牌發牌 即為數字不能重複(do while版本)
$poker = array();

for($i=0;$i<10;$i++){


   do{
       $isrepeat = false;
       $temp=rand(0,9);
       for($j=0;$j<$i;$j++){

           if($poker[$j] == $temp){
               $isrepeat = true;
               break;
           }
       }
   }

   while($isrepeat);

   $poker[] = $temp;

    echo $poker[$i].'<br>';








}