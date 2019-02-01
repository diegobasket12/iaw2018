<?php
    session_start();
    if (!isset($_SESSION["login"],$_POST["texto"])){
        header('location:index.php');
    }
    else{
        $login=$_SESSION["login"];
        $mensaje=$_POST["texto"];
    }
    $mysql=new mysqli('localhost','mensajeria','mensajeria','mensajeria');
    if ($mysql->query("insert into mensajes values ('$mensaje','','$login')")){
        header('location:muro.php');
    }

?>

