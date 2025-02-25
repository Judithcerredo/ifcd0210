<?php

$tecla = 'o';


switch ($tecla) {
    case 'w':
        echo 'Adelante';
        break;
    case 'a':
        echo 'izquierda';
        break;
    case 's':
        echo 'abajo';
        break;
    case 'd':
        echo 'derecha';
        break;
    default :
        echo 'tecla no válida';
        break;
}