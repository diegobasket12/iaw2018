<?php
session_start();
if (!isset($_SESSION["login"],$_POST["texto"],$_COOKIE["id"])){
    header('location:index.php');
}
else{
    $login=$_SESSION["login"];
    $mensaje=$_POST["texto"];
    $id=$_COOKIE["id"];
}
$mysql=new mysqli('localhost','mensajeria','mensajeria','mensajeria');
$query="select * from mensajes where id_mensaje='$id'";
$cons=$mysql->query($query);
$fila=$cons->fetch_assoc();
$autor=$fila["login"];
echo $query;
if ($login==$autor){
    if ($mysql->query("update mensajes set mensaje='$mensaje' where id_mensaje=$id")){
        header('location:muro.php');
    }
}
else{
    header('location:index.php');
}
?>