<?php


// comprobar si los valores recibidos del formulario coinciden con los siguientes:
$user = 'admin';
$password = '$uper$ecr3t';

if ($_POST["usuario"] === $user && $_POST["password"] === $password) {
    header("Location: bienvenida.php?usuario=$_POST[usuario]");
} else {
    header("Location: error.html");
}



// si coinciden, redirigir a la página de bienvenida
// sino, redirigir a la página de error
// pista: la función header('Location: nombre_del_fichero.extension') sirve para redirigir