<?php
//****多檔上傳

$upload = $_FILES['upload'];

var_dump($upload);


foreach ($upload["error"] as $key =>$errorType){

    //如果上傳成功
    if($errorType ==0){
        if (
        copy($upload['tmp_name'][$key],"../fileupload/{$upload['name'][$key]}")){
            echo "第$key"."copy succed<br>";
        }else{echo "第$key".'copy fail<br>';}

    }else {
        echo "第$key".'upload fail<br>';
    }
}






//var_dump($upload);

