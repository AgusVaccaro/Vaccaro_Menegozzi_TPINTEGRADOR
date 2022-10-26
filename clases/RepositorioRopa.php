<?php
include '.env.php';
require_once 'Usuario.php';
require_once 'RepositorioUsuario.php';
require_once 'ropa.php';
include_once 'conexion.php';

class RepositorioRopa 
{
    protected static $conexion = null;

    public function __construct()
    {
        if (is_null(self::$conexion)) {
            $credenciales = credenciales();
            self::$conexion = new mysqli(
                $credenciales['servidor'],
                $credenciales['usuario'],
                $credenciales['clave'],
                $credenciales['base_de_datos']
            );
            if (self::$conexion->connect_error) {
                $error = 'Error de conexión: ' . self::$conexion->connect_error;
                self::$conexion = null;
                die($error);
            }
            self::$conexion->set_charset('utf8');
        }
    }
    public function getRopa(Usuario $usuario)
    {
        $id_usuario = $usuario->getId();
        $q = "SELECT id, marca, producto, talle, color FROM ropa WHERE id = ?";
        $query = self::$conexion->prepare($q);
        $query->bind_param("i", $id);
        $query->bind_result($id, $marca, $producto, $talle, $color);

        if ($query->execute()) {
            $ropa = array();
            while ($query->fetch()) {
                $ropa[] = new ropa($id, $marca, $producto, $talle, $color);
            }
            return $ropa;
        }
        return false;
    }

    public function getOne($id)
    {
    $q = "SELECT marca, producto, talle, color FROM ropa WHERE id = ?";
    $query = self::$conexion->prepare($q);
    $query->bind_param("i", $id);
  
    $query->bind_result($marca, $producto, $talle, $color);

    if ($query->execute()) {
        if ($query->fetch()) {
            $repositorioUsuario = new repositorioUsuario();
            return new ropa($id, $marca, $producto, $talle, $color);
        }
    }
    return false;
    }

    public function crear(ropa $ropa)
    {
        $q = "INSERT INTO ropa (id, marca, producto, talle, color) VALUES (?, ?, ?, ?, ?)";
        $query = self::$conexion->prepare($q);
        $query->bind_param(
            "sssss",
            $ropa->getID(),
            $ropa->getMarca(),
            $ropa->getProducto(),
            $ropa->getTalle(),
            $ropa->getColor(),
        );

        if ($query->execute()) {
            return new ropa($id, $marca, $producto, $talle, $color);
        } else {
            return false;
        }
    }
    public function eliminar(ropa $ropa)
    {
        $id = $ropa->getId();
        $q = "DELETE FROM ropa WHERE id = ?";
        $query = self::$conexion->prepare($q);
        $query->bind_param("i", $id);

        return ($query->execute());
    }

    public function actualizar(Ropa $ropa, $id)
    {
       

        $id = $ropa->getId();
        $marca = $ropa->getMarca();
        $producto = $ropa->getProducto();
        $talle = $ropa->getTalle();
        $color = $ropa->getColor();

        $q = "UPDATE ropa SET  marca='$marca',producto='$producto',talle='$talle',color='$color' WHERE id='$id'";
        $query = self::$conexion->prepare($q);
        if ($query->execute()) {
            // Se guardó bien, retornamos el id del usuario
            return self::$conexion->insert_id;
        } else {
            // No se guardó bien, retornamos false
            return false;
        }
        
    }
}                                       