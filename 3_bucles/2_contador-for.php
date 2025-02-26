<?php
//  Crear un programa que muestre por pantalla los números del 1 al 10. 
// Opcional: mostrar los números dentro de una lista desordenada HTML.
echo ("<ul>");
for ($i = 1; $i <= 10; $i++) {
    echo ("<li>" . $i . "</li>");
}
echo ("</ul>");
