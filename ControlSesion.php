<?php
require_once 'RepositorioUsuario.php';
require_once 'Usuario.php';

class ControlSesion
{
    protected $usuario = null;

    public function login($nombreDeUsuario, $contraseña)
    {
        $repositorio = new RepositorioUsuario();
        $usuario = $repositorio->login($nombreDeUsuario, $contraseña);

        if ($usuario === false) {
            return [ false, "Error al ingresar las credenciales" ];
        } else {
            session_start();
            $_SESSION['usuario'] = serialize($usuario);
            return [ true, "Usuario correcto"];
        }
    }
}