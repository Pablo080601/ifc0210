<?php

/* Usando el mismo araray del ejercicio anterior, iterarlo y hacer un echo del contenido del array.
 Opcional: Hacer lo mismo con un foreach */

$lista_compra = ["Leche", "Huevos", "Galletas", "Yogures"];

for ($i = 0; $i < count($lista_compra); $i++) {
    echo ("$lista_compra[$i] <br>");
}
echo ("<br>");
foreach ($lista_compra as $value) {
    echo ("<input type='checkbox'>$value <br>");
}
