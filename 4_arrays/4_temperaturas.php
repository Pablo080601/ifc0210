<?php

/* Dado un array con la temperatura media de  cada día de la semana, sacar:
- la temperatura máxima, 
- la mínima 
- y la temperatura media*/


$temperaturas = [12, 15, 13, 12, 16, 11, 13];
$maxima = $temperaturas[0];
foreach ($temperaturas as $value) {
    if ($value >= $maxima) {
        $maxima = $value;
    }
}
echo "$maxima";
echo "<br>";
$minima = $temperaturas[0];
foreach ($temperaturas as $value) {
    if ($value <= $minima) {
        $minima = $value;
    }
}
echo "$minima";
echo "<br>";
$media = 0;
foreach ($temperaturas as $value) {
    $media += $value;
}
$resultado = $media / count($temperaturas);
echo ("$resultado");
