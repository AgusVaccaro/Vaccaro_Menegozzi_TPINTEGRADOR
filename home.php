<?php
require_once 'Usuario.php';
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
	
		<form action="ingresar.php" method="post">
			
			
			<input type="text" class="form-control mb-3" name="id" placeholder="Id del producto">
			<br>

			<input type="text" class="form-control mb-3" name="marca" placeholder="Marca">
			<br>
			
			<input type="text" class="form-control mb-3" name="producto" placeholder="Producto">
			<br>
			
			<input type="text" class="form-control mb-3" name="talle" placeholder="Talle">
			<br>

			<input type="text" class="form-control mb-3" name="color" placeholder="Color">
			<br>

			<button type="submit" class="btn btn-primary">ENVIAR</button>

			<br>
			<br>

			<a href="logout.php" class="btn btn-secondary">Cerrar sesión</a>

		</center>
  
		
		</form>
    </body>
</html>