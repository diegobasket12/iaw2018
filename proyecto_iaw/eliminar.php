<?php
    session_start();
    if (!isset($_SESSION["login"],$_GET["id"])){
        header('location:index.php');
    }
    else{
        $login=$_SESSION["login"];
        $mensaje=$_GET["id"];
    }
    $mysql=new mysqli('localhost','mensajeria','mensajeria','mensajeria');
    $query="select * from mensajes where id_mensaje='$mensaje'";
    $cons=$mysql->query($query);
    $fila=$cons->fetch_assoc();
    $autor=$fila["login"];
    echo $query;
    if ($login==$autor){
        if ($mysql->query("delete from mensajes where id_mensaje=$mensaje")){
            header('location:muro.php');
        }
        //header('location:muro.php');
    }
    else{
        header('location:index.php');
    }
?>