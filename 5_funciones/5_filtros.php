<?php
/* 
Función "filtrar" que recibe un array de películas
y devuelve otro array con aquellas películas que pertenecen a un género especificado por parámetro


Función "mostrar" que recibe un array de películas 
y las muestra en sus correspondientes divs html como en  el ejercicio 7 del apartado 4_arrays

*/

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

function filtrar($peliculas, $genero)
{
    $filtro = [];
    foreach ($peliculas as $pelicula) {

        if ($genero === $pelicula["genero"]) {
            array_push($filtro, $pelicula);
        }
    }
    return $filtro;
}


var_dump(filtrar($peliculas, "animacion"));


function mostrar($peliculas)
{
    foreach ($peliculas as $key => $value) {
        echo "<div>";
        echo $value["titulo"] . ", ";
        echo $value["año"] . ", ";
        echo $value["director"] . ", ";
        echo $value["genero"] . ", ";
        echo "</div>";
    }
}

echo mostrar($peliculas);
