<?php
require_once '.env.php';
require_once 'Usuario.php';

class RepositorioUsuario
{
    private static $conexion = null;

    public function __construct()
    {
        if (is_null(self::$conexion)) {
        try{
            $credenciales = credenciales();
            self::$conexion = new mysqli(
                $credenciales['servidor'],
                $credenciales['usuario'],
                $credenciales['contraseña'],
                $credenciales['base_de_datos']);
            } 
            catch(Exception $e){
            if (self::$conexion->connect_error) {
                $e = 'Error de conexion: ' .self::$conexion->connect_error;
                self::$conexion = null;
                die($e);
            }
            self::$conexion->set_charset('utf8');
        }
   }
}
   public function login($nombreDeUsuario, $contraseña)
   {
       $q = "SELECT id, contraseña, nombre, apellido FROM usuarios WHERE usuario = ?";
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