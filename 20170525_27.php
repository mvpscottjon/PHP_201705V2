<?php

//設一個可以直接從網頁輸入標題、內容，創一個檔案並讀寫(後端)



if(!isset($_GET['filename']))
    header("Location:20170525_26.php");
$filename = $_GET['filename'];
$content = $_GET['content'];

$fp=fopen("$filename","w+");


    fwrite($fp,$content);


fclose($fp);
header("Location:{$filename}");

