<?php

//讀檔案
 $fp = fopen('./test.txt','r');
         if($fp){
       while($line=fgets($fp)) {
           $len = strlen($line);
           echo "{$len}:{$line}<br>";
       }
         }

