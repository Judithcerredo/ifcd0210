<?php

/* 
    Similar al ejercicio anterior, pero en vez de crear una temperatura por día, en dos: 
    añadir una temperatura aleatoria entre 15-25 grados para la mañana (con la clave "mañana")
    y otra para la tarde entre 5-15 (con la clave "tarde")
    
    De esta manera tendremos un array en el que podríamos acceder a la clave "lunes" 
    y dentro del lunes podría acceder a "mañana" o "tarde" con y así para el resto de días de la semana

    [
        "lunes"=>[
            "mañana"=> 17,
            "tarde" => 8
        ],    
        "martes"=>[ ...],
        ...
    ]

    Una  vez creado: 
    - Probar a mostrar la temperatura del viernes por la tarde.
    - Iterarlo y mostrar el texto "el lunes por la mañana hay 17ºC, y por la tarde 8ºC, el martes por la mañana..."

*/

$semana = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
$temperaturas = [];
foreach ($semana as $dias) {
    $temperaturas[$dias]=
    ["Mañana"=>rand(15,25),
    "Tarde"=>rand(5,15)];
}

foreach ($temperaturas as $dias => $temps) {
    echo "La temperatura de $dias por la mañana es $temps["mañana"] ºC y por la tarde $temps["tarde"] <br>";
}