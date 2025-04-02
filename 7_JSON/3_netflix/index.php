<?php

function mostrarPelis()
{
    $netflix = file_get_contents("pelis.json");
    $netflix_array = json_decode($netflix, true);

    echo "<div class='contenedor'>";
    foreach ($netflix_array as $key => $peli) {
        echo "<div class='peli'>";
        echo " Titulo: $peli[titulo] <br>";
        echo "Año : $peli[año]<br>";
        echo "Direcctor: $peli[director]<br>";
        echo "Generos: ";
        foreach ($peli["generos"] as $key => $tipo) {
            echo "<span class='genero'>";
            echo  " $tipo";
            echo "</span>";
        }
        echo "</div>";
    }
    echo "</div>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .contenedor {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-top: 200px;
        }

        .peli {
            width: 250px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .genero {
            padding: 5px 10px;
            background-color: lightgreen;
            border-radius: 10px;
            font-size: 0.9em;
            text-align: center;
            /* Esto centra el texto */
            display: inline-block;
            /* Asegura que el contenido de cada género sea un bloque en línea */
            min-width: 60px;
            /* Esto es opcional, puedes ajustar el ancho mínimo según el tamaño de tu texto */
        }
    </style>
</head>

<body>
    <?php
    echo mostrarPelis();
    ?>

</body>

</html>