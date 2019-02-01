<?php
session_start();
if (!isset($_SESSION["login"])){
    header('location:index.php');
}
if (isset($_GET["nombre"])){
    $nombre=$_GET["nombre"];

}
if (isset($_GET["login"])){
    $login=$_GET["login"];
}
if (isset($_GET["apellido1"])){
    $apellido1=$_GET["apellido1"];
}
if (isset($_GET["apellido2"])){
    $apellido2=$_GET["apellido2"];
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{
            background-color: lightcyan;
        }
    </style>
</head>
<body style="text-align: center">
<h1>Personas</h1>
<?php
$mysql=new mysqli('localhost','mensajeria','mensajeria','mensajeria');
if ($nombre or $apellido1 or $apellido2 or $login){
    //$query="select * from usuarios where ";
    $query="select * from usuarios where ";
    if ($nombre){
        $query=$query." nombre='$nombre'";
    }
    if ($login){
        if ($nombre){
            $query=$query." and login='$login'";
        }
        else{
            $query=$query." login='$login'";
        }
    }
    if ($apellido1){
        if ($nombre || $login){
            $query=$query." and apellido1='$apellido1'";
        }
        else{
            $query=$query." apellido1='$apellido1'";
        }
    }
    if ($apellido2){
        if ($nombre || $login || $apellido1){
            $query=$query." and apellido2='$apellido2'";
        }
        else{
            $query=$query." apellido2='$apellido2'";
        }

    }
}
else{
    $query="select * from usuarios ";
}
$cons=$mysql->query($query);
$fila=$cons->fetch_assoc();
if (!isset($fila)){
    header('location:search.php?er=5');
}
while ($fila){
    $login=$fila["login"];
    echo "<a class='btn btn-primary' href='busqueda.php?login=$login'>$login</a><br><br>";
    $fila=$cons->fetch_assoc();
}


?>
<br><br>
<a href="muro.php" class="btn btn-dark">Volver a mi muro</a>
</body>
</html>
