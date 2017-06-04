<?php
include 'sqlPdo3.php';
session_start();
$PDO= new PDO($dsn,$username,$passwd,$options);

if(!isset($_GET['position'])) header('Location:HW9_20170602_game.php');

$tempPos=$_GET['position'];




$sql = 'SELECT position FROM hw9_game WHERE position = ?';

$stmt = $PDO->prepare($sql);
$Obj= $stmt->execute([$tempPos]);

if($stmt->rowCount()>0){
    echo 'wrong';
    session_destroy();
}else {
    echo 'ok';
    $_SESSION['fPos']= $Obj;
}


header('Location:HW9_choose.php');