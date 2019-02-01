<?php
session_start();
if (!isset($_SESSION["login"],$_GET["id"])){
    header('location:index.php');
}
else{
    $id=$_GET["id"];
    setcookie('id',$id);
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
        }
    </style>
</head>
<body>
<h1>Puntuación de mensajes</h1>
<form action="puntuacion.php" method="post">
    <p>Puntúe el mensaje seleccionado</p>
    <label for="1">1</label>
    <input type="radio" name="puntuacion" id="1" value="1">
    <label for="2">2</label>
    <input type="radio" name="puntuacion" id="2" value="2">
    <label for="3">3</label>
    <input type="radio" name="puntuacion" id="3" value="3">
    <label for="4">4</label>
    <input type="radio" name="puntuacion" id="4" value="4">
    <label for="5">5</label>
    <input type="radio" name="puntuacion" id="5" value="5">
    <br><br><button class="btn btn-primary">Puntuar</button>
</form>
</body>
</html>