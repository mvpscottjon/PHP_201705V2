<?php
//****多檔上傳

$upload = $_FILES['upload'];

foreach ($upload["error"] as $key =>$errorType){
    if($errorType ==0){
        echo '1<br>';
    }else {
        echo '0<br>';
    }
}






//var_dump($upload);

