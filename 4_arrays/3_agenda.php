<?php

/* Realizar una agenda: Guardar en un array asociativo el nombre de la persona como clave y su numero como valor.
Una vez lo tengamos mostrar el textov "x" tiene el numero "x" */

$agenda = [
    "Pepe" => "183479823",
    "Jose" => "385789246",
    "Martin" => "20348458",
];

foreach ($agenda as $key => $value) {
    echo ("$key tiene el numero $value <br>");
}
