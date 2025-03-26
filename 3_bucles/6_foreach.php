<?php

$compra = ["lechuga", "yogures", "arroz"];

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
        foreach ($compra as $producto) {
            echo "<li>";
            echo "<input type='checkbox' id='item-$producto'/>";
            echo "<label for='item-$producto'>$producto</label>";
            echo "</li>";
        }
        ?>
    </ul>



</body>

</html>