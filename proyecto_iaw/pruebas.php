<?php
$mysql=new mysqli('localhost','mensajeria','mensajeria','mensajeria');
echo $mysql->connect_errno.":".$mysql->connect_error;
?>