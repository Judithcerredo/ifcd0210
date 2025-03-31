<?php

// Sacar el producto y el precio de $_POST

$producto=$_POST['producto'];
$precio=$_POST['precio'];

$objeto=[
    "producto"=>$producto,
    "precio"=>$precio
];


// Sacar el contenido de compra.json (es un string)
$lista_compra='compra.json';
$contenido=file_get_contents($lista_compra);


// Convertir el contenido de compra.json de string a un array  (json_decode(...))

$productos=json_decode($contenido,true);

// Hacer push a dicho array del objeto que contiene el producto y el precio (ojo: respetar la misma estructura que cada objeto del json)

array_push($productos,$objeto);

// Reconvertir el fichero a string (json_enconde())

// Introducir el texto en el fichero compra.json -> esto no va a funcionar si todos los ficheros de la carpeta tienen permisos de lectura y escritura (buscar en google)

