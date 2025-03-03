<?php
/* 
   Crear una función suma que reciba dos números como parámetros
   y muestra por pantalla su suma con un echo
   Hacer otra versión de la función, pero esta vez tiene que devolver el valor 
*/

/* Opcion 1
function suma($num1, $num2)
{
   echo $num1 + $num2;
}

suma(2, 3); */

// Opcion 2

function suma($num1, $num2)
{
   return $num1 + $num2;
}

echo suma(2, 3);
