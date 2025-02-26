<?php

$string = "Hola mundo";
$numero1 = 10;
$numero2 = 340;
$bool = true;

echo "El contenido de la variable string es: " . $string . "<br><br>";

$suma = $numero1 + $numero2;
echo "La suma de los dos numero enteros es " . $suma . "<br><br>";

$dividir = $numero2 / $numero1;
echo "La división de los dos numero enteros es " . $dividir . "<br><br>";

$modulo = $numero2 % $numero1;
echo "El modulo de los dos numero enteros es " . $modulo . "<br><br>";

if ($numero1 >= $numero2) {
    echo $numero1 . " es mayor o igual que " . $numero2 . "<br><br>";
} else {
    echo $numero2 . " es mayor que " . $numero1 . "<br><br>";
}

if ($bool == true) {
    echo "Tu valor boleano es true <br><br>";
} else {
    echo "Tu valor boleano es false <br><br>";
}

$bool_negada = !$bool;
if ($bool_negada != true) {
    echo "Tu valor boleano negado es false <br><br>";
} else {
    echo "Tu valor boleano negado es true <br><br>";
}
