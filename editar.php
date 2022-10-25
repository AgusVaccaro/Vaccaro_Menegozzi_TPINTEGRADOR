<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$marca=$_POST['marca'];
$producto=$_POST['producto'];
$talle=$_POST['talle'];
$color=$_POST['color'];

$sql="UPDATE ropa SET  marca='$marca',producto='$producto',talle='$talle',color='$color' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cargarstock.php");
    }
?>