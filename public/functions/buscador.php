<?php
    sleep(3);

header('Conten-Type:text/html; charset=utf-8');
include('conexion.php');



$datos= $conexion->prepare("SELECT * FROM municipis");
$datos->execute();
//----------



$result = $datos->setFetchMode(PDO::FETCH_ASSOC);
echo "<ul>";
while ($row = $datos->fetch()) {
    echo "<li>".$row['municipi']. "</li>";
}
echo "</ul>";

//---------?>