<?php
require_once 'clases/ControlSesion.php';


if (empty($_POST['usuario']) || empty($_POST['contraseña'])) {
    $redirigir = 'index.php?mensaje=Error: Falta nombre de usuario y/o contraseña';
} else {
    $cs = new ControlSesion();
    $login = $cs->login($_POST['usuario'], $_POST['contraseña']);
    if ($login[0] === true) {
        $redirigir = 'home.php';
    } else {
        $redirigir = 'index.php?mensaje=' . $login[1];
    }
}
header('Location: '.$redirigir);
