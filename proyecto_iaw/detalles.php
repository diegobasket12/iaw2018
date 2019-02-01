<?php
session_start();
if (!isset($_SESSION["login"],$_GET["id"])){
    header('location:index.php');
}
else{
    $id=$_GET["id"];
    $user=$_SESSION["login"];
}
$puntuar=1;
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
        #mensaje{
            max-width: 70%;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            background-color: #b3b3b3;
        }
    </style>
</head>
<body>
    <h1>Mensaje detallado</h1>
    <div id="mensaje">
        <?php
            $mysql=new mysqli('localhost','mensajeria','mensajeria','mensajeria');
            //$query="select *,(select avg(puntuacion) from puntuaciones where id_mensaje='$id') as media from mensajes join puntuaciones p using (id_mensaje) where id_mensaje='$id'";
            $query="select p.id_mensaje as id,m.mensaje as mensaje,p.puntuacion as puntuacion,p.login as login,(select avg(puntuacion) from puntuaciones where id_mensaje='$id') as media from mensajes m join puntuaciones p using (id_mensaje) where id_mensaje='$id'";
            $cons=$mysql->query($query);
            //$fila=$cons->fetch_assoc();
            $fila=$cons->fetch_assoc();
                echo "<p>".$fila["mensaje"]."</p>";
                echo "<p>Puntuación:".$fila["media"]."</p>";
                while ($fila){
                    if ($user==$fila["login"]){
                        $puntuar=0;
                    }
                    $fila=$cons->fetch_assoc();

                }
                if ($puntuar==0){
                    echo "<a class='btn-primary btn disabled' href='puntuar.php?id=$id'>Puntuar</a><br><br>" ;
                    echo "<div class='alert alert-danger'><p>Usted ya ha puntuado este mensaje</p></div>";
                }
                elseif($puntuar==1){
                    echo "<a class='btn-primary btn' href='puntuar.php?id=$id'>Puntuar</a><br><br>" ;
                    echo "<div class='alert alert-info'><p>Usted no ha puntuado este mensaje</p></div>";
                }
        echo "<a class='btn-primary btn' href='muro.php'>Volver a mi muro</a>" ;
        ?>
    </div>

</body>
</html>