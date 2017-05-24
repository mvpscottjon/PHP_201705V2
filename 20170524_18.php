<?php
$account = $_REQUEST['account'];
$pwd = $_REQUEST['pwd'];
$birthday = $_REQUEST['birthday'];
$area = $_REQUEST['area'];
$gender = $_REQUEST['gender'];
$play= $_REQUEST['play'];
$memo= $_REQUEST['memo'];

//帳號
echo 'account:'.$account.'<br>';
//密碼
echo 'pwd:'.$pwd.'<br>';
//生日
echo 'bd:'.$birthday.'<br>';
//地區
echo 'area:'.$area.'<br>';
//單選性別
echo 'gen:'.$gender.'<br>';
//所有多選的play
foreach ($play as $v){
    echo     'play:'.$v.'<br>';
}
//記事
echo    'memo:'.$memo;

