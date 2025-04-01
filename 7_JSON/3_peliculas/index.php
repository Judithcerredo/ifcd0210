<?php

function ver_pelis()
{

    $netflix=file_get_contents('pelis.json');
    
    $arraypelis=json_decode($netflix,true);

    foreach ($arraypelis as $pelicula) {
        echo "<div class='card'>";
        echo "Título: " . $pelicula['titulo'] . '<br>';
        echo "Año: " . $pelicula['año'] . '<br>';
        echo "Director: " . $pelicula['director'] . '<br>';
        echo "Géneros: " . implode(", ", $pelicula['genero']) . '<br>';
        echo "</div>";
    }
    

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pelis</title>
    <style>
        * {
            box-sizing: border-box;
        }

        main {
            max-width: 900px;
            margin: auto;
        }

        #peliculas {
            display: flex;
            justify-content: space-between;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .card {
            padding: 1rem;
            box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.3);
            flex: 1;
            min-width: 270px;
        }
    </style>
</head>
<body>

<main>
        <h1>Netflix</h1>

        <section id="peliculas">
                <?php
                    ver_pelis()
                ?>
        </section>

    </main>
    
</body>
</html>