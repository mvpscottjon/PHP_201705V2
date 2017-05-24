<?php

////檔案上傳的後端
$upload = $_FILES['upload'];
//echo gettype($upload);
    if($upload["error"]==0){
      if(copy($upload['tmp_name'],
          "./fileupload/{$upload['name']}")){
          echo 'copy ok';
      }else 'copy file';
    }



