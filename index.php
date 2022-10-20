<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Sistema de control de stock</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body class="container">
        <center>
            <br>
      <h1>Sistema de control de stock</h1>
      </div>    
      <div class="text-center">
        <h3>Inicio de sesion</h3>
        <?php
            if (isset($_GET['mensaje'])) {
                echo '<div id="mensaje" class="alert alert-primary text-center">
                    <p>'.$_GET['mensaje'].'</p></div>';
            }
        ?>

        <form action="login.php" method="post">
            <input name="usuario" class="form-control form-control-lg" placeholder="Usuario"><br>
            <input name="contraseña" type="text" class="form-control form-control-lg" placeholder="Contraseña"><br>
            <input type="submit" value="Ingresar" class="btn btn-primary">
        </form><br>
      </div> 
      </center>
    </body>
</html>
