<?php
// Mostrar por pantalla los múltiplos de 3 que hay del 1 al 300

for ($i = 1; $i <= 300; $i++) {

    if ($i % 3 == 0) {
        echo ($i . "<br>");
    }
}
