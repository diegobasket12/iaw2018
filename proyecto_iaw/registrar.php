<?php
session_start();
$mysqli=new mysqli('localhost','mensajeria','mensajeria','mensajeria');
if (isset($_GET["nombre"],$_GET["apellido1"],$_GET["login"],$_GET["pass"],$_GET["pass1"]) && !empty($_GET["nombre"]) && !empty($_GET["apellido1"]) && !empty($_GET["login"]) && !empty($_GET["pass"]) && !empty($_GET["pass1"])){
    //si llegan todos los paquetes
    if ($_GET["pass"]==$_GET["pass1"]){
        //si la contraseña y la confirmación de contraseña coinciden
        $nombre=$_GET["nombre"];
        $apellido1=$_GET["apellido1"];
        $apellido2=$_GET["apellido2"];
        $login=$_GET["login"];
        $pass=$_GET["pass"];
        if ($mysqli->query("insert into usuarios values ('$nombre','$apellido1','$apellido2','$login','$pass')")){
            $_SESSION["login"]=$login;
            header('location:muro.php');
        }
        else{
            $error=$mysqli->errno;
            header("location:registro.php?er=$error");
        }
    }
    else{
        header('location:registro.php?er=2');
    }
}
else{
    header('location:index.php');
}

?>