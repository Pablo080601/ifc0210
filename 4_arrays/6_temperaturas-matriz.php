<?php

/* 
    Similar al ejercicio anterior, pero en vez de crear una temperatura por día, en dos: 
    añadir una temperatura aleatoria entre 15-25 grados para la mañana (con la clave "mañana")
    y otra para la tarde entre 5-15 (con la clave "tarde")
    
    De esta manera tendremos un array en el que podríamos acceder a la clave "lunes" 
    y dentro del lunes podría acceder a "mañana" o "tarde" con y así para el resto de días de la semana

    [
        "lunes"=>[
            "mañana"=> 17,
            "tarde" => 8
        ],    
        "martes"=>[ ...],
        ...
    ]

    Una  vez creado: 
    - Probar a mostrar la temperatura del viernes por la tarde.
    - Iterarlo y mostrar el texto "el lunes por la mañana hay 17ºC, y por la tarde 8ºC, el martes por la mañana..."

*/


$semana = [
    "Lunes",
    "Martes",
    "Miercoles",
    "Jueves",
    "Viernes",
    "Sabado",
    "Domingo"
];

$temperatura_semana = [];

foreach ($semana as $key => $value) {
    $temperatura_semana[$value] = [
        "mañana" => rand(15, 25),
        "tarde" => rand(5, 15),
    ];
}
/* echo "<pre>";
print_r($temperatura_semana);
echo "</pre>"; */

foreach ($temperatura_semana as $dia => $hora) {
    echo "El $dia por la mañana hay " . $hora["mañana"] . " ºC, y por la tarde " . $hora["tarde"] . " ºC";
    echo "<br>";
}
