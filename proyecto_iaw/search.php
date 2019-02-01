<?php
session_start();
if (!isset($_SESSION["login"])){
    header('location:index.php');
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
            background-color: lightgray;
        }
    </style>
</head>
<body style="text-align: center">
<h1>Buscar de personas</h1>
<?php
if (isset($_GET["er"])){
    $er=$_GET["er"];
    if ($er==5){
        echo "<div class='alert alert-danger'><p>No hay usuarios que coincidan con su búsqueda</p></div>";
    }
}
?>
<p>Debes escribir todo en minúsculas y sin acentos</p>
<form action="buscar.php" method="get">
    <label for="login">Login</label><br>
    <input type="text" id="login" name="login"><br>
    <label for="nombre">Nombre</label><br>
    <input type="text" id="nombre" name="nombre"><br>
    <label for="apellido1">Primer apellido</label><br>
    <input type="text" id="apellido1" name="apellido1"><br>
    <label for="apellido2">Segundo apellido</label><br>
    <input type="text" id="apellido2" name="apellido2"><br><br>
    <button class="btn btn-primary">Buscar</button>
    <br><br>
</form>
<a href="muro.php" class="btn-dark btn">Volver al muro</a>
</body>
</html>