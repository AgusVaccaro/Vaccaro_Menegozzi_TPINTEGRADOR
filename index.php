<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Sistema de control de stock</title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body class="container">
      <div class="jumbotron text-center">
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
    </body>
</html>
