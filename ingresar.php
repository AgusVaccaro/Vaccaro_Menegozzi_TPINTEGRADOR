<?php
require_once "conexion.php";

if(
    isset($_POST["id"]) &&
    isset($_POST["marca"]) &&
    isset($_POST["producto"]) &&
    isset($_POST["talle"]) &&
    isset($_POST["color"]) 

){
$myqsli->query("INSERT INTO
    ropa(
        id, marca, producto, talle, color
    )
    VALUES(
        " .$_POST["id"]. ",
        '" .$_POST["marca"]. "',
        '" .$_POST["producto"]."',
        '" .$_POST["talle"]."',
        '" .$_POST["color"]."'
        )
    ");

    header("location: home.php");

}