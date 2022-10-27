<?php 
require_once 'clases/usuario.php';
require_once 'clases/ropa.php';
require_once 'clases/RepositorioRopa.php';
require_once 'conexion.php';

$id=$_GET['id'];
$con = conectar();


    session_start();

    if (isset($_SESSION['usuario'])) {
        $usuario = unserialize($_SESSION['usuario']); 
        $nombreApellido = $usuario->getNombreApellido();
} else {
    header('Location: index.php');
}

$sql="SELECT * FROM ropa WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <h3>Actualizar datos</h3>
                    <form action="editar.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="marca" placeholder="Marca" value="<?php echo $row['marca']  ?>" required >
                                <input type="text" class="form-control mb-3" name="producto" placeholder="Producto" value="<?php echo $row['producto']  ?>" required>
                                <input type="text" class="form-control mb-3" name="talle" placeholder="Talle" value="<?php echo $row['talle']  ?>" required>
                                <input type="text" class="form-control mb-3" name="color" placeholder="Color" value="<?php echo $row['color']  ?>" required >
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>