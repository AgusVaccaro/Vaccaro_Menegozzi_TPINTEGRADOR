<?php
require_once 'clases/usuario.php';
require_once 'clases/RepositorioRopa.php';
require_once 'clases/ropa.php';

session_start();
if (isset($_SESSION['usuario'])) {
    $usuario = unserialize($_SESSION['usuario']);
    $nombreApellido = $usuario->getNombreApellido();
} else {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <title>Control de stock</title>
    </head>
    <body>

      <div class="container mt-5">
		<div class="row">
			<center>
		<h3>Bienvenido <?php echo $nombreApellido;?></h3>

		<div class="col-md-3">
		<h4>Ingresar producto</h4>
		<form action="ingresar.php" method="get">
			
			
			<input type="text" class="form-control mb-3" name="id" placeholder="Id del producto">
	

			<input type="text" class="form-control mb-3" name="marca" placeholder="Marca">
		
			
			<input type="text" class="form-control mb-3" name="producto" placeholder="Producto">
			
			
			<input type="text" class="form-control mb-3" name="talle" placeholder="Talle">
			

			<input type="text" class="form-control mb-3" name="color" placeholder="Color">
			

			<button type="submit" class="btn btn-success">ENVIAR</button>
			

			<br>
			<br>
			<a href="verStock.php" class= "btn btn-outline-primary">Ver stock actual</a>
			<br>
			<br>
			<a href="logout.php" class="btn btn-outline-danger">Cerrar sesión</a>

		</center>
  
		
		</form>
    </body>
</html>