<?php

function mostrarLista()
{
    //1) Leer contenido de compra.json ->file_get_contents('ruta_al_fichero') 
    $lista_compra='compra.json';
    $contenido=file_get_contents($lista_compra);
    //tip: igualar una variable a la función para guardar el texto en dicha variable

    //2) Convertir el contenido(string) a un array que pueda iterar -> json_decode($texto_del_json, true)
    
    $productos=json_decode($contenido,true);


    //3) Iterar el array renderizando (pintando) el html pertinente
    echo "<ul>";
    foreach ($productos as $producto){
       echo '<li>'. $producto['producto'] .': '. $producto['precio'].'</li>';
    }
    echo "</ul>";
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
<h1>Lista de Compras</h1>
<?php
   mostrarLista()
?>
</body>

</html>