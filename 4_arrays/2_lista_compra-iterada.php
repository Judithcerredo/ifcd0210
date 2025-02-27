<?php
$lista = array('Arroz', 'Macarrones', 'Pan', 'Leche', 'Huevos');
for ($i=0; $i <count($lista) ; $i++) { 
    echo $lista[$i] . '<br>';
}
echo '<br>';

foreach ($lista as $item) {
     echo "<input type='checkbox'>" . $item . "<br>";
 }