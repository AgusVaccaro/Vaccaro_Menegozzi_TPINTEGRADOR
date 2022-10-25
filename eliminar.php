<?php

include_once("conexion.php");
include_once ("clases/RepositorioRopa.php");

session_start();

if (isset($_SESSION['usuario']) && isset($_GET['id'])) {
    $usuario = unserialize($_SESSION['usuario']);
    $repositorioRopa = new RepositorioRopa();
    $ropa = $repositorioRopa->getOne($_GET['id']);
    if ($repositorioRopa->eliminar($ropa)) {
        $mensaje = "Producto eliminado con éxito";
    } else {
        $mensaje = "Error al eliminar el producto";
    }
    header('Location: home.php?mensaje=$mensaje');
} else {
    header('Location: index.php');
}




/*$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM ropa  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: verStock.php");
    }*/
?>