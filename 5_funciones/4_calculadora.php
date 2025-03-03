<?php
/* 
    Crear una función por cada operación básica: suma, resta, multiplicación y división
    Probar individualmente cada función para ver si funcionan correctamente (cuidado con dividir entre 0)

    Una vez hechas, hacer una función que reciba 3 parámetros (numero1, numero2 y operación a realizar):
    Si la función recibe la operación "+", ha de llamar a la función "suma" creada con anterioridad con los números recibidos.
    de igual manera ha ocurrir si recibe la operación "-", "*" y "/"
    Si la operación no es ninguna de las anteriores, se ha de mostrar un mensaje de error: "Operación desconocida"
*/

function suma($num1, $num2)
{
    return $num1 + $num2;
}

function resta($num1, $num2)
{
    return $num1 - $num2;
}

function multiplicacion($num1, $num2)
{
    return $num1 * $num2;
}

function division($num1, $num2)
{
    if ($num1 == 0 || $num2 == 0) {
        return "No se puede dividir entre 0";
    } else {
        return $num1 / $num2;
    }
}


function operacion($num1, $num2, $operador)
{

    if ($operador == "+") {
        return suma($num1, $num2);
    } elseif ($operador == "-") {
        return resta($num1, $num2);
    } elseif ($operador == "*") {
        return multiplicacion($num1, $num2);
    } elseif ($operador == "/") {
        return division($num1, $num2);
    } else {
        return "Operación desconocida";
    }
}


echo operacion(3, 2, "+");
echo "<br>";
echo operacion(3, 2, "-");
echo "<br>";
echo operacion(3, 2, "*");
echo "<br>";
echo operacion(3, 2, "/");
echo "<br>";
echo operacion(2, 3, "?");
echo "<br>";
