<?php

$variable_string = 'Hola Mundo';
$variable_int1 = 55;
$variable_int2 = 17;
$variable_bool = true;

echo 'Concatenación del String: ' . $variable_string . ', cómo estas?' . '<br>';
$suma = $variable_int1 + $variable_int2;
echo 'Suma de los dos números: ' . $suma . '<br>';
$división= $variable_int1 / $variable_int2;
echo 'División de los números: ' . $división . '<br>';
$modulo= $variable_int1 % $variable_int2;
echo 'Módulo de los números: ' . $modulo . '<br>';
$comparación= $variable_int1 >= $variable_int2;
echo 'Comparación de los dos números: ' . $comparación .'<br>';
echo "Valor de la variable booleana: " . ($variable_bool ? "true" : "false") . "<br>";
$negación_bool= !$variable_bool;
echo "Negación de la variable booleana: " . ($negación_bool ? "true" : "false") . "<br>";

?>