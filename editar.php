<?php
include_once("clases/ropa.php");
include_once("clases/RepositorioRopa.php");

if(isset($_POST['id']) && isset($_POST['marca']) && isset($_POST['producto']) && isset($_POST['talle']) && isset($_POST['color']) ){
    
    $ropa = new ropa($_POST['id'],$_POST['marca'],$_POST['producto'],$_POST['talle'],$_POST['color']);
    $repositorioRopa = new RepositorioRopa();
    $repositorioRopa->actualizar($ropa,$_POST['id']);
}else if(isset($_POST['id'])){

}

Header("Location: verStock.php");
?>