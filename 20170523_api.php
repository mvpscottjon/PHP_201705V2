<?php

////*********



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
