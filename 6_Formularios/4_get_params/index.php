<?php
/* 

Crear un programa en php que reciba dos parametros por la URL num1 y num2
en caso de que no se especifiquen, el programa mostrará el texto: "por favor, indique los parámetros correspondientes"
y en caso de que se especifiquen mostrar la suma de ambos números utilizando una función que devuelva: "la suma es: X"


Pista: la función isset($variable), nos permite comprobar si una variable está definida
*/

// Comprobar si existen num1 y num2, dentro de $_GET, si existen, llamar a la función suma, previamente definida. Si no existen-> echo 'Por favor especifica num1 y num2.



function suma($num1, $num2){
    $suma = $num1 + $num2;
    return "La suma es: $suma";
}

if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    echo suma($num1, $num2);
} else {
    echo 'Por favor, indique los parámetros correspondientes';
}