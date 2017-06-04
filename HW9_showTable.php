<?php
include 'sqlPdo3.php';

$PDO= new PDO($dsn,$username,$passwd,$options);

$sql = 'SELECT *  FROM hw9_game';

$stmt = $PDO->prepare($sql);
$rs = $stmt->execute();


echo '<table border="1" width="50%">';
echo "<th>id</th>";
echo "<th>pos</th>";
echo "<th>user</th>";

 while($value = $stmt->fetchObject()){

         echo '<tr>';

         echo "<td>{$value->id}</td>";
         echo "<td>{$value->position}</td>";
         echo "<td>{$value->user}</td>";


         echo '</tr>';

}
echo '<table>'; ?>
