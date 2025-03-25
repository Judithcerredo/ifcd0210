<?php

//Dado el siguiente array, hacer una lista de la compra

$compra=[
    [ 
        'nombre' => 'arroz',
        'precio' => 2.99
    ],
    [ 
        'nombre' => 'lechuga',
        'precio' => 1.99
    ],
    [ 
        'nombre' => 'yogures',
        'precio' => 3.99
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de la compra</title>
</head>
<body>
    <h1>Lista de la compra</h1>
    <ul>
        <?php
        foreach ($compra as $producto) {
            echo "<li>$producto[nombre] - $producto[precio] € </li>";
        }
        ?>
    </ul>
    
</body>
</html>
