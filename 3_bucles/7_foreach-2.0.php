<?php

$compra = [
    [
        "nombre" => "Arroz",
        "precio" => 2.99
    ],
    [
        "nombre" => "Lechuga",
        "precio" => 1.05
    ],
    [
        "nombre" => "Yogures",
        "precio" => 3.15
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Lista de la compra</h1>

    <ul>
        <?php
        foreach ($compra as $productos) {
            echo "<li>" . $productos["nombre"] . ": Precio " . $productos["precio"] . "€</li>";
        }
        ?>
    </ul>



</body>

</html>