<?php
$account = $_REQUEST['account'];
$pwd = $_REQUEST['pwd'];
$birthday = $_REQUEST['birthday'];
$area = $_REQUEST['area'];
$gender = $_REQUEST['gender'];
$play= $_REQUEST['play'];
$memo= $_REQUEST['memo'];

echo 'account:'.$account.'<br>';
echo $pwd.'<br>';
echo $birthday.'<br>';
echo $area.'<br>';
echo $gender.'<br>';
foreach ($play as $v){
    echo $v.'<br>';
}
echo $memo;

