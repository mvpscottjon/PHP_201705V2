<?php
include '20170526_api_V3.php';
session_start();   //session必備


$memberObj = new Member('A123456789');
$cartObj = new Cart($memberObj);

$_SESSION['cart'] = $cartObj;   //規定用法  紀錄SESSION之用


$cartObj->addlist('P001',rand(1,10));
$cartObj->addlist('P002',rand(1,10));




$list =$cartObj->getlist();  //參數加$memberObj會怎樣?

 foreach ($list as $pid=>$qty) {
     echo $pid.":".$qty."<br>";
 }

?>

 ///換到下一頁
<a href="20170526_36.php">Next</a><br>





