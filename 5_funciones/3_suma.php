<?php
 /* 
    Crear una función suma que reciba dos números como parámetros
    y muestra por pantalla su suma con un echo

    Hacer otra versión de la función, pero esta vez tiene que devolver el valor
     
 */


function suma($num1, $num2){
    echo "La suma es: " . ($num1 + $num2) . "<br>";
 }
suma(5,15);

function sumaRetorno($num1, $num2) {
    return $num1 + $num2;
}
echo "La suma es: " . sumaRetorno(5, 3) . "<br>";