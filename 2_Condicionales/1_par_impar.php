<?php

define("MIN", 1);
define("MAX", 100);

$numero=rand(MIN, MAX);

if ($numero %2 ==0 ) {
    echo $numero . " par" ;
} else {
    echo $numero . " impar" ;
}