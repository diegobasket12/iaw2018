<?php
$comunidad=$_GET["comunidad"];
$mysql=new mysqli('localhost','geografia','geografia','geografia');
$query=$mysql->query("select * from provincias where id_comunidad=$comunidad order by 2");
$fila=$query->fetch_assoc();
header('Content-Type: application/json; charset=utf-8');
echo "{";
echo '"provincias": [';
while ($fila){
    echo '{';
    echo '"n_provincia":"'.$fila["n_provincia"].'",';
    echo '"nombre":"'.$fila["nombre"].'"';
    echo '}';
    $fila=$query->fetch_assoc();
    if ($fila){
        echo ",";
    }
}
echo "]}"
?>