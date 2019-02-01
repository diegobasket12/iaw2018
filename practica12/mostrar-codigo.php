<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$codigo = hexdec($_GET["codigo"]);
if ($codigo>=hexdec("0600") || $codigo >= hexdec("06FF")) {
    ?>
    <table>
        <tr>
            <td>Anterior</td>
            <td>Actual</td>
            <td>Siguiente</td>
        </tr>
        <tr>
            <td>
                <?php
                $codigo1 = $codigo - 1;
                echo "&#$codigo1";
                ?>
            </td>
            <td>&#<?= $codigo ?></td>
            <td>
                <?php
                $codigo2 = $codigo + 1;
                echo "&#$codigo2";
                ?>
            </td>
        </tr>
    </table>
    <?php
}
?>

</body>
</html>