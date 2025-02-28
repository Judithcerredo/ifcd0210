<?php

/* 
    Crear un objeto(array asociativo) que represente una película. 
    Para ello ha de tener lo siguientes campos:
        - titulo
        - año
        - director
        - genero


    Una vez creado un objeto, intentar crear un array con 3 películas, 
    iterarlas para mostrarlas en 3 divs html con sus correspondientes atributos
*/


$videoclub = [
    [
        "titulo" => "El laberinto del fauno",
        "año" => 2006,
        "director" => "Guillermo del Toro",
        "genero" => "Fantasía"
    ],
    [
        "titulo" => "Inception",
        "año" => 2010,
        "director" => "Christopher Nolan",
        "genero" => "Ciencia ficción"
    ],
    [
        "titulo" => "La La Land",
        "año" => 2016,
        "director" => "Damien Chazelle",
        "genero" => "Musical"
    ]
]

foreach ($videoclub as $pelicula) {
    echo $pelicula['titulo'];
}

