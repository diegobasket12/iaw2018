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
            text-align: center;
            background-color: lightcoral;
        }
    </style>
</head>
<body>
<h1>Publicación de mensaje</h1>
<form action="publicar.php" method="post">
    <label for="texto">Introduzca su mensaje</label><br>
    <textarea name="texto" id="texto" cols="50" rows="10" required></textarea><br>
    <button class="btn btn-success">Enviar</button>
    <br><br>
</form>
<a href="muro.php" class="btn btn-dark">Volver al muro</a>
</body>
</html>
