<?php
    include ("conexion.php");
    include ("stock.php");

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
   <br>
     <div class="container">
  <form>
    <br>
      <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
      placeholder="Buscar producto">
      <hr>
      </form>
  </div>


      <table class="table_id table table-striped table-dark table_id ">
  </div>
  <?php
  if(isset($_GET['enviar'])) {
    $busqueda = $_GET['busqueda'];

    $consulta = $myqsli->query("SELECT * FROM ropa WHERE marca
    LIKE '%$busqueda%' OR producto LIKE '%$busqueda%' OR talle LIKE '%$busqueda%' OR color LIKE '%$busqueda%'");


     while ($row = $consulta->fetch_array()) {
     
	if (isset($_GET['busqueda']))
	{
		$where="WHERE ropa.marca LIKE'%".$busqueda."%' OR producto  LIKE'%".$busqueda."%'
    OR talle  LIKE'%".$busqueda."%'";
	}
  
}
  }
?>


</body>
  <div class="col-md-8">
    <br>

            <table class="table_id table table-striped table-dark" id="table_id" data-table="table_id" >
                <thead class="table-success table-striped" >
                 <tr>
                <th>Id del producto</th>
                <th>Marca</th>
                <th>Producto</th>
                <th>Talle</th>
                <th>Color</th>
                <th class="table-danger">Editar</th>
               <th class="table-danger">Eliminar</th>
                </tr>
                </thead>

        <tbody>
        </center>
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
                <th><a href="actualizar.php?id=<?php echo $resul['id'] ?>" class="btn btn-outline-info">Editar</a></th>
                <th><a href="eliminar.php?id=<?php echo $resul['id'] ?>" class="btn btn-outline-danger">Eliminar</a></th>                                        
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
    <script src="buscador.js"></script>
</body>
</html>