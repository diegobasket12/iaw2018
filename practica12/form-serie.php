<?php
$inicio="";
$fin="";
$intervalo="";
$color="#000000";
if (isset($_GET["inicio"],$_GET["fin"],$_GET["intervalo"],$_GET["color"])){
    $inicio=$_GET["inicio"];
    $fin=$_GET["fin"];
    $intervalo=$_GET["intervalo"];
    $color=$_GET["color"];
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
    <style>

        #fondo{
            position: center;
            top: 0;
            left: 0;
            width: 0;
            height: 0;
            background:linear-gradient(to top,#c0c0c0,#616161);
            background-repeat: no-repeat ;
            background-size: 100%;
            background-position: center ;
        }
        #numeros{
            max-width: 500px;
            margin: auto;
            font-size: 1.2em;
            border-radius: 20px;
            background-color: white;

        }
        #numeros h1{
            font-size: 1.5em;
            text-align: center;
        }
        input[type:"number"]{
            background-color: #e3e3e3;
        }
        input[type:"number"]:focus{
            background-color: #e3d606;
        }
    </style>
</head>
<body>
<div id="fondo">
<div id="form">
    <form action="form-serie.php" method="get">
        <label for="inicio">Inserte número inicial</label>
        <input type="number" id="inicio" name="inicio" value="<?=$inicio?>"><br>
        <label for="fin">Inserte número final</label>
        <input type="number" id="fin" name="fin" value="<?=$fin?>"><br>
        <label for="intervalo">Inserte intervalo</label>
        <input type="number" id="intervalo" name="intervalo" value="<?=$intervalo?>"><br>
        <label for="color">Selecciona un color</label>
        <input type="color" name="color" id="color" value="<?=$color?>"><br>
        <button>Enviar</button><br><br>

    </form>
</div>
<div id="numeros">
    <h1>Tus números</h1>
    <?php
    $numero=$inicio;
    while ($numero<=$fin){
        echo "<p style='color: $color'>$numero</p>";
        $numero+=$intervalo;
    }
    ?>
</div>
</div>
</body>
</html>