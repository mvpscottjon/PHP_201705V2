<!--////****從addMemberV2.php接過來-->

<?php
 if(!isset($_GET['a'])){
     echo 'no type account'; die();

 }
    include 'sqlPdo3.php';
    $pdo = new pdo($dsn, $username, $passwd, $options);
    $account =$_GET['a'];
    $sql= 'SELECT * from member where account=?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$account]);

    if ($stmt->rowCount()>0){
        echo '0';
    }else { echo '1';}

