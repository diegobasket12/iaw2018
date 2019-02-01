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
            background-color: lightgoldenrodyellow;
        }
    </style>
</head>
<body>
<h1>Formulario de inicio de sesión</h1>
<form action="iniciar.php" method="post">
    <label for="login">Introduzca su nombre de usuario</label><br><br>
    <input type="text" id="login" name="login" required><br><br>
    <label for="pass">Introduzca su contraseña</label><br><br>
    <input type="password" id="pass" name="pass" required placeholder="mínimo 8 caracteres"><br><br>
    <button class="btn btn-success">Enviar</button>
</form>
<?php
if (isset($_GET["er"])){
    $er=$_GET["er"];
    if ($er==1){
        echo "<div class='alert alert-danger'><p>Los datos introducidos son incorrectos</p></div>";
    }
}
?>
</body>
</html>