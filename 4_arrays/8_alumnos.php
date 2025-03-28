<?php

/**
 * 
 * Dado el siguiente array de alumnos, realizar las siguientes funciones:
 * 
 * - Mostrar nombres: función que recibe el array y "pinta" un html con todos los nombres, notas y curso de los alumnos
 * - Filtrar alumnos: funcion que recibe el array y un curso, y devuelve otro array con todos los alumnos que cumplen el criterio
 * - Mostrar nota media: función que recibe un array de alumnos y devuelve la nota media
 */

$alumnos = [
    ["nombre" => "Juan Pérez", "nota" => 8.5, "curso" => "1º"],
    ["nombre" => "María López", "nota" => 9.2, "curso" => "2º"],
    ["nombre" => "Carlos Sánchez", "nota" => 7.8, "curso" => "1º"],
    ["nombre" => "Ana Torres", "nota" => 8.9, "curso" => "2º"],
    ["nombre" => "Luis Fernández", "nota" => 6.5, "curso" => "1º"],
    ["nombre" => "Sofía Ramírez", "nota" => 9.0, "curso" => "2º"],
    ["nombre" => "Pedro Gómez", "nota" => 7.3, "curso" => "1º"],
    ["nombre" => "Elena Duarte", "nota" => 8.7, "curso" => "2º"]
];


function mostrarNombres($alumnos)
{
    echo "<ul>";
    foreach ($alumnos as $alumno) {

        echo "<li>" . $alumno["nombre"]. "</li>";
        echo "<li>" .$alumno["nota"]. "</li>";
        echo "<li>" .$alumno["curso"]. "</li>";
    }
    echo "</ul>";
}

function filtrarAlumnos($alumnos, $curso)
{
$resultado=[];
foreach ($alumnos as $alumno) {
if ($alumno) {
}

array_push($resultado,$alumno['nombre']);
}
  

}

function mostrarNotaMedia($alumnos)
{
    $suma = 0;
    $total = count($alumnos);
    foreach ($alumnos as $alumno) {
        $suma += $alumno["nota"];
    }
    return $suma / $total;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $curso='1º';
    $nota='8.5';
    mostrarNombres($alumnos);
    echo "<br>";
    filtrarAlumnos($alumnos,$curso);
    echo "<br>";
    mostrarNotaMedia($alumnos,$nota);

    ?>
</body>
</html>








