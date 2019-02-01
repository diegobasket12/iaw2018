<?php
session_start();
$mysql=new mysqli('localhost','mensajeria','mensajeria','mensajeria');
$query="select * from usuarios;";
$resultado=$mysql->query($query);
if (!isset($_SESSION["login"])){
    if (isset($_POST["login"]) && isset($_POST["pass"]) && !empty($_POST["login"]) && !empty($_POST["pass"])) {
        $login = $_POST["login"];
        $password = $_POST["pass"];
        while ($fila = $resultado->fetch_assoc()) {
            if ($login == $fila["login"] && $password==$fila["password"]) {
                $_SESSION["login"] = $fila["login"];
                break;
            }
        }
        if ($_SESSION["login"]){
            header('location:muro.php');
        }
        else{
            header('location:acceso.php?er=1');
        }
    }
    else{
        header('location:index.php');
    }
}

?>