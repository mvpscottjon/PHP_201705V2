<?php

////檔案上傳的後端
$upload = $_FILES['upload'];

//var_dump($upload);
//echo '<hr>';
//echo gettype($upload);
    if($upload["error"]==0){
      if(copy($upload['tmp_name'],
          "../fileupload/{$upload['name']}")){
          echo 'copy ok';
      }else 'copy fail';
    }else if ($upload['error'] ==4){
        echo 'please upload files';

    }




