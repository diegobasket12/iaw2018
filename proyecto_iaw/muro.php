<?php
session_start();
setcookie("id","false");
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
            background-color: lightblue;
        }
        header{
            text-align: center;
            background-color: #0b2e13;
            color: white;
            padding: 1.2em;
            margin-bottom: 0;
        }
        nav{
            margin-top: 0;
            font-size: 1.5em;
            background-color: white;
            margin-bottom: 30px;
            text-align: center;
        }
        nav a{
            margin-right: 3em;
        }
        a{
            text-decoration: none;
        }
        a:hover{
            text-decoration: none;
        }
        #mensajes{
            max-width: 60%;
            margin: auto;
            background-color: white;
            border-radius: 10px;
            padding-top: 10px;
            padding-bottom: 20px;
        }
        .mensaje{
            text-align: center;
            border: 1px darkblue solid;
            border-radius: 10px;
            max-width: 80%;
            margin: auto;
            margin-top: 20px;
        }
        .mensaje h2{
            color: white;
            background-color: darkblue;
            border-radius: 10px 10px 0 0;
        }
        .mensaje a{
            margin-right: 20px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <header><h1>Bienvenido al muro de <?=$_SESSION["login"]?></h1></header>
    <nav>
        <a href="muro.php" class="btn btn-primary">Mi muro</a>
        <a href="escribir.php" class="btn btn-primary">Publicar mensaje</a>
        <a href="search.php" class="btn btn-primary">Buscar personas</a>
        <a href="index.php" class="btn btn-danger">Cerrar sesión</a>

    </nav>
    <div id="mensajes">
        <?php
        $mysql=new mysqli('localhost','mensajeria','mensajeria','mensajeria');
        $login=$_SESSION["login"];
        $query="select * from mensajes where login='$login' order by id_mensaje desc ;";
        $cons=$mysql->query($query);
        while ($fila=$cons->fetch_assoc()){
            echo "<div class='mensaje'><h2>Mensaje</h2>";
            $mensaje=$fila["mensaje"];
            $id_mensaje=$fila["id_mensaje"];
            echo "<p>$mensaje</p>";
            if ($login==$fila["login"]){
                echo "<a class='btn btn-primary' href='detalles.php?id=$id_mensaje'>+ Detalles</a>";
                echo "<a class='btn btn-primary' href='modificacion.php?id=$id_mensaje'>Modificar</a>";
                echo "<a class='btn btn-primary' href='confir.php?id=$id_mensaje'>Eliminar</a>";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
