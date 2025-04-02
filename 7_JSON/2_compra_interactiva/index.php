<?php

$compra = file_get_contents("compra.json");


function mostrarLista($lista)
{
    //... aquí va el código que lee el fichero json, lo convierte a array y lo "pinta" 
    $lista_array = json_decode($lista, true);
    echo "<ul>";
    foreach ($lista_array as $key => $producto) {
        echo "<li>$producto[producto]: $producto[precio] $</li>";
    }
    echo "</ul>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Compra</title>
</head>

<body>
    <h1>Mi lista de la compra</h1>

    <form action="añadir.php" method="post">
        <label for="product">Producto</label>
        <input type="text" id="product" name="producto">
        <br><br>
        <label for="">Precio</label>
        <input type="text" id="price" name="precio">
        <br><br>
        <input type="submit" value="Añadir">
        <br><br>
    </form>

    <?php mostrarLista($compra) ?>

</body>

</html>