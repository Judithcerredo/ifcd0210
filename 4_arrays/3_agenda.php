<?php
/* 
Realizar una agenda:
Guardar en un array asociativo el nombre de la persona como clave y su número como valor.

["clave"=>"valor", ....]
*/

$agenda = array( "Pepe" => 666666666, "Juan" => 777777777, "María" => 888888888);

foreach ($agenda as $nombre => $telefono) {
    echo "$nombre - $telefono <br>";
}
