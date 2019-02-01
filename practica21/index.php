<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <header><h1>Lista de cursos</h1></header>
    <table class="table">
        <tr>
            <th>Código</th>
            <th>Título</th>
            <th>Plazas</th>
        </tr>
        <?php
            $mysqli=new mysqli('localhost','cursos','cursos','cursos');
            //$query=$mysqli->query('select * from cursos');
            if (isset($_GET["o"]) && $_GET["o"]==1){
                $query=$mysqli->query('select * from cursos order by rand()');
                $cons='select * from cursos order by rand()';
            }
            else if (isset($_GET["o"]) && $_GET["o"]==2){
                $query=$mysqli->query('select * from cursos order by codigo');
                $cons='select * from cursos order by codigo';
            }
            else{
                $query=$mysqli->query('select * from cursos');
                $cons='select * from cursos';
            }
            $fila=$query->fetch_assoc();
            while ($fila){
                $codigo=$fila["codigo"];
                echo "<tr><td>".$fila["codigo"]."</td><td>".$fila["titulo"]."</td><td>".$fila["plazas"]." ";
                    if ($fila["plazas"]==0){
                        echo "<a href='añadir.php?a=$codigo' class='btn btn-primary'>Añadir</a> <a href='quitar.php?q=$codigo' class='btn btn-primary disabled'>Quitar</a>";
                    }
                    elseif ($fila["plazas"]==16){
                        echo "<a href='añadir.php?a=$codigo' class='btn btn-primary disabled'>Añadir</a> <a href='quitar.php?q=$codigo' class='btn btn-primary'>Quitar</a>";
                    }
                    else{
                        echo "<a href='añadir.php?a=$codigo' class='btn btn-primary'>Añadir</a> <a href='quitar.php?q=$codigo' class='btn btn-primary'>Quitar</a>";
                    }

                    echo "</td></tr>";
                $fila=$query->fetch_assoc();
            }
        ?>
    </table>
    <a href="index.php?o=1" class="btn btn-primary">Orden aleatorio</a>
    <a href="index.php?o=2" class="btn btn-primary">Orden por código</a>
</body>
</html>