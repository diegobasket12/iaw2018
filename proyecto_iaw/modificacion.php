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
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Modificación de mensaje</h1>
<?php
session_start();
if (!isset($_SESSION["login"],$_GET["id"])){
    header('location:index.php');
}
else{
    $login=$_SESSION["login"];
    $mensaje=$_GET["id"];
    setcookie("id",$mensaje);
}
$mysql=new mysqli('localhost','mensajeria','mensajeria','mensajeria');
$query="select * from mensajes where id_mensaje='$mensaje'";
$cons=$mysql->query($query);
$fila=$cons->fetch_assoc();
$autor=$fila["login"];
$mensaje=$fila["mensaje"];
if ($login==$autor){
    ?>
    <form action="modificar.php" method="post">
        <label for="texto">Modifique su mensaje</label><br>
        <textarea name="texto" id="texto" cols="30" rows="10" required><?=$mensaje?></textarea><br>
        <button class="btn btn-success">Modificar</button>
        <br>
        <br>
    </form>
    <a href="muro.php" class="btn btn-danger">Cancelar</a>
    <?php
}
else{
    header('location:index.php');
}

?>

</body>
</html>