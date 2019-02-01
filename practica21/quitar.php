<?php
$codigo=$_GET["q"];
$mysqli=new mysqli('localhost','cursos','cursos','cursos');
$mysqli->query("update cursos set plazas=plazas-1 where codigo=$codigo");
header('location:index.php')
?>