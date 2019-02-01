<?php
$i=0;
$a=array();
$siete=0;
while ($i<1000){
    $i++;
    $a[$i]=mt_rand(0,10);
}

foreach ($a as $numero){
    //echo $numero."<br>";
    if ($numero==7){
        $siete++;
    }
}
echo $siete;


?>