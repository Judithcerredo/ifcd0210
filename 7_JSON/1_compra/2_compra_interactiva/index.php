<?php

function mostrarLista()
{

    $lista_compra='compra.json';
    $contenido=file_get_contents($lista_compra);
    
    $productos=json_decode($contenido,true);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Compra</title>
</head>

<body>
    <h1>Mi lista de la compra</h1>

    <form action="añadir.php" method="post">
        <label for="producto">Nombre Producto:</label>
        <input type="text" id="producto" name="producto" required>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" step="0.01" required>

    </form>

    <?php mostrarLista() ?>

</body>

</html>