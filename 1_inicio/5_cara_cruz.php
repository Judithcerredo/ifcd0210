<?php
$numero=rand(1,100);

echo 'El número que ha salido es: ' . $numero . '<br>';

if ($numero >50) {
echo '<span style= "color: blue;"> Cara </span>';
    }    else {
        echo ' <span style= "color: red;"> Cruz </span>';
    }
?>