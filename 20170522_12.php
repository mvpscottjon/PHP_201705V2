<?php
//***foreach


$a = array(1,2,3,4,5);

foreach($a as $key =>$value){
    echo $key.':'.$value.'<br>';
}

echo '<hr>';


//***for的版本
for($i=0;$i<count($a);$i++){
    echo $i.':'.$a[$i].'<br>';
}
