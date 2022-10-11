<?php
require_once '.env.php';
require_once 'Usuario.php';

class RepositorioUsuario
{
    private static $conexion = null;

    public function __construct()
    {
        if (is_null(self::$conexion)) {
            $credenciales = credenciales();
            self::$conexion = new mysqli(
                $credenciales['servidor'],
                $credenciales['usuario'],
                $credenciales['clave'],
                $credenciales['base_de_datos'],
            );
            if (self::$conexion->connect_error) {
                $error = 'Error de conexión: ' . self::$conexion->connect_error;
                self::$conexion = null;
                die($error);
            }
            self::$conexion->set_charset('utf8');
        }
   }

   public function login($nombreDeUsuario, $contraseña)
   {
       $q = "SELECT id, clave, nombre, apellido FROM usuarios WHERE usuario = ?";
       $query = self::$conexion->prepare($q);
       $query->bind_param("s", $nombreDeUsuario);

       if ($query->execute()) {
           $query->bind_result($id, $contraseñaEncriptada, $nombre, $apellido);
           if( $query->fetch() ) {
               if ( password_verify($contraseña, $contraseñaEncriptada) ) {
                   return new Usuario($nombreDeUsuario, $nombre, $apellido, $id);
               }
           }
       }
       return false;
    }
}