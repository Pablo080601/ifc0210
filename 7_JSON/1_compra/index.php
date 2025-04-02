<?php

$lista_compra = file_get_contents("compra.json");

function mostrarLista($lista)
{

    //1) Leer contenido de compra.json ->file_get_contents('ruta_al_fichero') 
    //tip: igualar una variable a la función para guardar el texto en dicha variable
    echo "<pre>";
    print_r($lista);
    echo "</pre>";
    //2) Convertir el contenido(string) a un array que pueda iterar -> json_decode($texto_del_json, true)
    $lista_array = json_decode($lista, true);
    //3) Iterar el array renderizando (pintando) el html pertinente 
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
    <title>Document</title>
</head>

<body>
    <?php
    mostrarLista($lista_compra);
    ?>

</body>

</html>