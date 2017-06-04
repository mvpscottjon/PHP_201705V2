<?php

include 'sqlPdo3.php';

session_start();

$PDO= new PDO($dsn,$username,$passwd,$options);

if(@$_SESSION['fPos']){

    $posObj =$_SESSION['fPos'];



//   echo $posObj;
//    $pos=$_GET['position'];
//    $user=$_GET['user'];


//
    $sql = 'INSERT INTO hw9_game(position) VALUES (?)';

    $stmt = $PDO->prepare($sql);
    $stmt->execute([$posObj]);

    header('Location:HW9_20170602_game.php');

//    echo 'good';

}else { echo ' not good';}
//
//if(isset($_GET['position'])){

//}


