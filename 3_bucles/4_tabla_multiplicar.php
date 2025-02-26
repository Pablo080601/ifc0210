<?php
// Mostrar la tabla de multiplicar del 7 por pantalla. 
// Opcional: realizarlo dentro de una tabla HTML
$multiplicador = 7;
echo ("<table border='1'>");
for ($i = 0; $i < 11; $i++) {
    $resultado = $i * $multiplicador;
    echo ("<tr><td>$i x $multiplicador =</td><td>$resultado</td>");
}
echo ("</table>");
