<?php

//do while
$poker = array();

for($i=0;$i<51;$i++){


   do{
       $temp[]=rand(0,51);

       $isrepeat = false;
       for($j=0;$j<$i;$j++){
           if($poker == $temp){
               $isrepeat = true;
               break;
           }
       }
   }

   while($isrepeat);

   $poker[] = $temp;

    echo $poker[$i].'<br>';








}