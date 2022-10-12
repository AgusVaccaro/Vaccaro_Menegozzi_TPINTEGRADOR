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
      <h1>Control de stock</h1>
      </div>    
      <div class="text-center">
        <h3>Hola <?php echo $nombreApellido;?></h3>
        <p><a href="logout.php">Cerrar sesión</a></p>
      </div> 
    </body>
</html>