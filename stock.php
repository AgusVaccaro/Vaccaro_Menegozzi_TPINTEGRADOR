<?php
    require_once "conexion.php";

    $query = $myqsli->query("SELECT * FROM ropa");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Stock de productos</title>
</head>
<body>

        <center>
        <div class="col-md-8">
            <table class="table" >
                <thead class="table-success table-striped" >
                 <tr>
                <th>Id del producto</th>
                <th>Marca</th>
                <th>Producto</th>
                <th>Talle</th>
                <th>Color</th>
                <th></th>
                <th></th>
                </tr>
                </thead>

        <tbody>
            <?php
            echo "<tr>";
            while ($resul = $query->fetch_assoc()){
            ?>
            <tr>
                <th><?php  echo $resul['id']?></th>
                <th><?php  echo $resul['marca']?></th>
                <th><?php  echo $resul['producto']?></th>
                <th><?php  echo $resul['talle']?></th>    
                <th><?php  echo $resul['color']?></th>    
                <th><a href="actualizar.php?id=<?php echo $resul['id'] ?>" class="btn btn-info">Editar</a></th>
                <th><a href="eliminar.php?id=<?php echo $resul['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
            </tr>
        <?php 
            }
           
        ?>
        </tbody>
    </table>
    <a href="home.php" class="btn btn-outline-success"> Ingresar otro producto</a>

    <br>
    <br>

    <a href="logout.php" class="btn btn-outline-danger">Cerrar sesión</a>
    </center>
</body>
</html>