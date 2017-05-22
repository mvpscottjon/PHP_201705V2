<?php
//foreach


$a = array(1,2,3,4,5);

foreach($a as $key =>$value){
    echo $key.':'.$value.'<br>';
}

echo '<br>';

for($i=0;$i<=count($a);$i++){
    echo $i.':'.'<br>'.$a[$i];
}
