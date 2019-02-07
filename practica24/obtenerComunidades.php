<?php
$mysql=new mysqli('localhost','geografia','geografia','geografia');
$query=$mysql->query("select * from comunidades order by 2");
$fila=$query->fetch_assoc();
header('Content-Type: application/json; charset=utf-8');
echo "{";
echo '"comunidades": [';
while ($fila){
    echo '{';
    echo '"n_comunidad":"'.$fila["id_comunidad"].'",';
    echo '"nombre":"'.$fila["nombre"].'"';
    echo '}';
    $fila=$query->fetch_assoc();
    if ($fila){
        echo ",";
    }
}
echo "]}"
?>