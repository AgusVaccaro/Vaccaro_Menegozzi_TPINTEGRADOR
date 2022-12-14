<?php
require_once 'clases/usuario.php';
require_once 'clases/ropa.php';
require_once 'clases/RepositorioRopa.php';
require_once 'conexion.php';


session_start();

if (isset($_SESSION['usuario'])) {
    $usuario = unserialize($_SESSION['usuario']);
 
    $ropa = new ropa($_GET['id'], $_GET['marca'], $_GET['producto'], $_GET['talle'], $_GET['color']);
    $repositorioRopa = new RepositorioRopa();
    $id = $repositorioRopa->crear($ropa);
    if ($id === false) {
        header('Location: verStock.php?mensaje=Error al ingresar producto');
    } else {
        $ropa->setId($id);
        header('Location: verStock.php?mensaje=Producto ingresado');
    }
} else {
    header('Location: verStock.php');
}
?>