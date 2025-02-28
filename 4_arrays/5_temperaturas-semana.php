<?php
/* 
    Crear un array $dias con las siguientes claves: "lunes","martes", ..., "sábado", "domingo"

    Iterando ese array, crear otro array asociativo $temperaturas:
        - cuya clave es el día de la semana
        - el valor es un número aleatorio 

    Iterar $temperaturas, mostrando el texto "la temperatura del lunes es X ºC, ..."

    Pista: el método push() puede resultar útil para añadir elementos a un array nuevo
*/


$dias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
$temperaturas = [];
foreach ($dias as $dia) {
    $temperaturas[$dia] = rand(5, 15);
}
foreach ($temperaturas as $key => $value) {
    echo "La temperatura de $key es $value ºC <br>";
}

