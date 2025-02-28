<?php
/* 
    Crear un array $dias con las siguientes claves: "lunes","martes", ..., "sábado", "domingo"

    Iterando ese array, crear otro array asociativo $temperaturas:
        - cuya clave es el día de la semana
        - el valor es un número aleatorio 

    Iterar $temperaturas, mostrando el texto "la temperatura del lunes es X ºC, ..."

 */

$dias = [
    "Lunes" => "10",
    "Martes" => "14",
    "Miercoles" => "12",
    "Jueves" => "11",
    "Viernes" => "16",
    "Sabado" => "15",
    "Domingo" => "13"
];
$temp = [];
foreach ($dias as $key => $value) {
    $temp[$key] = rand(5, 15);
}
foreach ($temp as $key => $value) {
    echo ("La temperatura del $key es $value ºC<br>");
}
