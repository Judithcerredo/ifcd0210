<?php
/* 
    Crear una función por cada operación básica: suma, resta, multiplicación y división
    Probar individualmente cada función para ver si funcionan correctamente (cuidado con dividir entre 0)

    Una vez hechas, hacer una función que reciba 3 parámetros (numero1, numero2 y operación a realizar):
    Si la función recibe la operación "+", ha de llamar a la función "suma" creada con anterioridad con los números recibidos.
    de igual manera ha ocurrir si recibe la operación "-", "*" y "/"
    Si la operación no es ninguna de las anteriores, se ha de mostrar un mensaje de error: "Operación desconocida"

*/

function suma($num1, $num2) {
    return $num1 + $num2;
}
function resta ($num1, $num2) {
    return $num1 - $num2;
}
function multiplicacion($num1, $num2) {
    return $num1 * $num2;
}
function division($num1, $num2) {
    return $num1 / $num2;
}

function calcular($num1, $num2, $operacion) {
    switch ($operacion) {
        case "+":
            return suma($num1, $num2);
        case "-":
            return resta($num1, $num2);
        case "*":
            return multiplicacion($num1, $num2);
        case "/":
            return division($num1, $num2);
        default:
            return "Operación desconocida";
    }
}

echo "Resultado de 10 + 5: " . calcular(10, 5, "+") . "<br>";