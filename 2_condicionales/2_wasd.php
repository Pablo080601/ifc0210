<?php

$tecla = "s";

switch ($tecla) {
    case 'w':
        echo ("Adelante");
        break;
    case 'a':
        echo ("Izquierda");
        break;
    case 's':
        echo ("Abajo");
        break;
    case 'd':
        echo ("Derecha");
        break;
    default:
        echo ("Tecla no valida");
        break;
}
