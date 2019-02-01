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
        label{
            font-weight: bold;
        }
    </style>
</head>
<body style="text-align: center">
<h1>Formulario de registro</h1>
<form action="registrar.php" method="get">
    <label for="nombre">Nombre</label><br><br>
    <input type="text" id="nombre" name="nombre" required><br><br>
    <label for="apellido1">Primer apellido</label><br><br>
    <input type="text" name="apellido1" id="apellido1" required><br><br>
    <label for="apellido2">Segundo apellido</label><br><br>
    <input type="text" name="apellido2" id="apellido2"><br><br>
    <label for="login">Usuario</label><br><br>
    <input type="text" id="login" name="login" required><br><br>
    <label for="pass">Contraseña</label><br><br>
    <input type="password" name="pass" id="pass" required minlength="8"><br><br>
    <label for="pass1">Confirme su contraseña</label><br><br>
    <input type="password" name="pass1" id="pass1" required minlength="8"><br><br>
    <button class="btn-success btn">Enviar</button>
    <?php
    if (isset($_GET["er"])){
        $er=$_GET["er"];
        if ($er==2){
            echo "<div class='alert alert-danger'><p>Las contraseñas no coinciden</p></div>";
        }
        if ($er==1062){
            echo "<div class='alert alert-danger'><p>El nombre de usuario ya está utilizado</p></div>";
        }
    }
    ?>
</form>
</body>
</html>