<?php

// Sacar el producto y el precio de $_POST
$producto = $_POST["producto"];
$precio = $_POST["precio"];
$añadido = [
    "producto" => $producto,
    "precio" => $precio,
];
// Sacar el contenido de compra.json (es un string)
$compra = file_get_contents("compra.json");
// Convertir el contenido de compra.json de string a un array  (json_decode(...))
$lista_array = json_decode($compra, true);
// Hacer push a dicho array del objeto que contiene el producto y el precio (ojo: respetar la misma estructura que cada objeto del json)

array_push($lista_array, $añadido);

// Reconvertir el fichero a string (json_enconde(...))

$compra_obejeto = json_encode($lista_array, JSON_UNESCAPED_UNICODE);

// Introducir el texto en el fichero compra.json -> esto no va a funcionar si todos los ficheros de la carpeta tienen permisos de lectura y escritura (buscar en google)

file_put_contents("compra.json", $compra_obejeto);

header("Location: index.php");
