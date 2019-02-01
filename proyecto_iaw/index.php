<?php
session_start();
session_destroy();
setcookie("id","false");
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
            text-align: center;
            margin-top: 17%;
            background-color: black;
        }
    </style>
</head>
<body>
<h1 style="color: white;">Bienvenido a nuestra red social</h1>
<a href="registro.php" class="btn btn-primary" style="font-size: 3em">REGISTRO</a>
<a href="acceso.php" class="btn btn-primary" style="font-size: 3em">INICIAR SESIÓN</a>
</body>
</html>