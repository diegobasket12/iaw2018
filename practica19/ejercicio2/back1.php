<?php
if (isset($_GET["nif"])){
    $nif=$_GET["nif"];
    $verificacion = file_get_contents("http://jorgesanchez.net/servicios/validarNIF.php?nif=$nif");
    $respuesta=json_decode($verificacion);
    if ($respuesta->error->codigo==0){
        header('location:index1.php?correcto=1');
    }
    else{
        header('location:index1.php?correcto=0');
    }
}


?>