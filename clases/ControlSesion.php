<?php
require_once 'clases/RepositorioUsuario.php';
require_once 'clases/usuario.php';


class ControlSesion
{
    protected $usuario = null;

    public function login($nombreDeUsuario, $contraseña)
    {
        $repo = new RepositorioUsuario();
        $usuario = $repo->login($nombreDeUsuario, $contraseña);

        if ($usuario === false) {
            return [ false, "Error: Nombre de usuario y/o contraseña incorrecto/s"];
        } else {
            session_start();
            $_SESSION['usuario'] = serialize($usuario);
            return [ true, "Usuario correcto"];
        }
    }
}