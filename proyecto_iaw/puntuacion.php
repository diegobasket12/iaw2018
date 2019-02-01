<?php
session_start();
if (!isset($_SESSION["login"],$_POST["puntuacion"],$_COOKIE["id"])){
    header('location:index.php');
}
else{
    $puntuacion=$_POST["puntuacion"];
    $id=$_COOKIE["id"];
    $login=$_SESSION["login"];
}
$mysql=new mysqli('localhost','mensajeria','mensajeria','mensajeria');
$query="insert into puntuaciones values ('$puntuacion','$login','$id')";
if ($mysql->query($query)){
    header('location:muro.php');
}
else{
    header('location:muro.php');
}
?>