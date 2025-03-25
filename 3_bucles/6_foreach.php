<?php

//Dado el siguiente array, hacer una lista de la compra

$compra=['Leche', 'Huevos', 'Yogures', 'Arroz'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Lista de la compra</h1>
<ul>
        <?php
        foreach ($compra as $producto) {
            echo "
            <li>
                <input type='checkbox' id='checkbox-$producto'/>
                <label for='checkbox.$producto'>$producto</label>
                </li>";
        }
        ?>
</ul>
</body>
</html>