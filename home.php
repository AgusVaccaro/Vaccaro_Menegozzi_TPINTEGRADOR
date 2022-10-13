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
        <title>Control de stock</title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body class="container">
      <div class="jumbotron text-center">
      <h1>Ingreso de mercaderia</h1>
      </div>    
      <div class="text-center">
        <h3>Bienvenido <?php echo $nombreApellido;?></h3>
		<form action="ingresar.php" method="post">
			<label>Id del producto</label>
			<input type="text" name="id">
			<br>
			<label>Marca</label>
			<input type="text" name="marca">
			<br>
			<label>Producto</label>
			<input type="text" name="producto">
			<br>
			<label>Talle</label>
			<input type="text" name="talle">
			<br>
			<label>Color</label>
			<input type="text" name="color">
			<br>
			<button type="submit" class="btn btn-primary">ENVIAR</button>
		</form>

	</center>
        <p><a href="logout.php">Cerrar sesión</a></p>
      </div> 
    </body>
</html>