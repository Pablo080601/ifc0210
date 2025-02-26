<?php

$numero_aleatorio = rand(1, 100);

echo "El numero que a salido es: " . $numero_aleatorio . "<br><br>";

if ($numero_aleatorio > 50) {
    echo " Ha salido <span style='color: blue'> cara </span>";
} else {
    echo "A salido <span style='color: red'> cruz </span>";
}
