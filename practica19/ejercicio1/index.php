<?php
 session_start();
 include "paises.php";
    $pais = $listaPaises[array_rand($listaPaises)];
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        img{
            max-width: 500px;
            max-height: 500px;
        }
    </style>
</head>
<body>
<img src="imagenes/<?=$pais?>.png" alt="pais">
<?php
echo $pais;
?>
</body>
</html>