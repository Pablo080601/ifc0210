<?php
/* 
    Crear un objeto(array asociativo) que represente una película. 
    Para ello ha de tener lo siguientes campos:
        - titulo
        - año
        - director
        - genero


    Una vez creado un objeto, intentar crear un array con 3 películas, 
    iterarlas para mostrarlas en 3 divs html con sus correspondientes atributos
*/
/* 
$unapeli = [
    "titulo" => "El señor de los anillos",
    "año" => "2001",
    "director" => "Peter Jackson",
    "genero" => "fantasia",
];


echo "<pre>";
print_r($peli);
echo "</pre>"; */


$peliculas = [
    [
        "titulo" => "El señor de los anillos",
        "año" => "2001",
        "director" => "Peter Jackson",
        "genero" => "fantasia",
    ],
    [
        "titulo" => "El gigante de hierro",
        "año" => "1999",
        "director" => "x",
        "genero" => "animacion",
    ],
    [
        "titulo" => "Alien",
        "año" => "1979",
        "director" => "Ridley scott",
        "genero" => "ciencia ficcion",
    ]
];
/* 
echo "<pre>";
print_r($peliculas);
echo "</pre>"; */

foreach ($peliculas as $key => $value) {
    echo "<div>";
    echo $value["titulo"];
    echo "</div>";
}
