<?php

define("MINIMO", 1);
define("MAXIMO", 100);
$num = rand(MINIMO, MAXIMO);

if ($num % 2 == 0) {
    echo ("El numero $num es un numero par");
} else {
    echo ("El numero $num es un numero impar");
}

// Con ternaria
echo ("<br>");

$ternaria = $num % 2 == 0 ? "El numero $num es un numero par" : "El numero $num es un numero impar";
echo ($ternaria);
