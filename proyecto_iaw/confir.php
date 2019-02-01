<?php
session_start();
if (!isset($_SESSION["login"],$_GET["id"])){
    header('location:index.php');
}
else{
    $login=$_SESSION["login"];
    $mensaje=$_GET["id"];
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
</head>
<body style="text-align: center">
<h1>¿Estás seguro de que quieres eleminar el mensaje?</h1>
<a href="muro.php" class="btn btn-danger">No</a>
<a href="eliminar.php?id=<?=$mensaje?>" class="btn btn-success">Si</a>
</body>
</html>