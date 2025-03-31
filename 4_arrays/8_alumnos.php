<?php

/**
 * 
 * Dado el siguiente array de alumnos, realizar las siguientes funciones:
 * 
 * - Mostrar nombres: función que recibe el array y "pinta" un html con todos los nombres, notas y curso de los alumnos
 * - Filtrar alumnos: funcion que recibe el array y un curso, y devuelve otro array con todos los alumnos que cumplen el criterio
 * - Mostrar nota media: función que recibe un array de alumnos y devuelve la nota media
 */

$alumnos = [
    [
        "nombre" => "Juan Pérez",
        "nota" => 8.5,
        "curso" => "1º"
    ],
    [
        "nombre" => "María López",
        "nota" => 9.2,
        "curso" => "2º"
    ],
    [
        "nombre" => "Carlos Sánchez",
        "nota" => 7.8,
        "curso" => "1º"
    ],
    [
        "nombre" => "Ana Torres",
        "nota" => 8.9,
        "curso" => "2º"
    ],
    [
        "nombre" => "Luis Fernández",
        "nota" => 6.5,
        "curso" => "1º"
    ],
    [
        "nombre" => "Sofía Ramírez",
        "nota" => 9.0,
        "curso" => "2º"
    ],
    [
        "nombre" => "Pedro Gómez",
        "nota" => 7.3,
        "curso" => "1º"
    ],
    [
        "nombre" => "Elena Duarte",
        "nota" => 8.7,
        "curso" => "2º"
    ]
];

function mostrar_nombres($alumnos)
{
    echo "<ul>";
    foreach ($alumnos as $alumno) {
        echo "<li>El alumno $alumno[nombre] tine una nota de $alumno[nota] y pertenece a $alumno[curso]</li>";
    }
    echo "</ul>";
}

function filtrar_alumnos($alumnos, $curso)
{
    $coinciden = [];
    foreach ($alumnos as $alumno) {
        if ($curso == $alumno["curso"]) {
            array_push($coinciden, $alumno);
        }
    }
    return $coinciden;
}

function filtrar_alumnos_2($alumnos, $curso)
{
    $alumnos_fitrados = array_filter($alumnos, fn($al) => $al["curso"] === $curso);
    return $alumnos_fitrados;
}


function nota_media($alumnos)
{
    $media = 0;
    $notas = [];
    foreach ($alumnos as $alumno) {
        $media += $alumno["nota"];
        array_push($notas, $alumno["nota"]);
    }
    return "La nota media de los alumnos es de: " . $media / count($notas);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    mostrar_nombres($alumnos);
    echo "<br><br>";
    mostrar_nombres(filtrar_alumnos($alumnos, "1º"));
    echo "<br><br>";
    mostrar_nombres(filtrar_alumnos_2($alumnos, "1º"));
    echo "<br><br>";
    echo nota_media($alumnos);
    echo "<br><br>";
    ?>

</body>

</html>