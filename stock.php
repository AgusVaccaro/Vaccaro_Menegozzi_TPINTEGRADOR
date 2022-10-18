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
    <title>Stock de productos</title>
</head>
<body> 
    <table border="1" align="center">
        <caption><h2>Stock de productos</h2></caption>
        <thead>
            <tr>
                <th>Id del producto</th>
                <th>Marca</th>
                <th>Producto</th>
                <th>Talle</th>
                <th>Color</th>
            </tr>
        </thead>
        <tbody>
            <?php
            echo "<tr>";
            while ($resul = $query->fetch_assoc()){
                echo "<td>".$resul["id"]."</td>";
                echo "<td>".$resul["marca"]."</td>";
                echo "<td>".$resul["producto"]."</td>";
                echo "<td>".$resul["talle"]."</td>";
                echo "<td>".$resul["color"]."</td>"; 
            echo "</tr>";
            }
           
        ?>
        </tbody>
    </table>
    <p><a href="home.php">Ingresar otro producto</p>

    <br>

    <p><a href="logout.php">Cerrar sesión</a></p>
</body>
</html>