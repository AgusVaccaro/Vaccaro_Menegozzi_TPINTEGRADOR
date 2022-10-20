<?php

class Usuario
{
    protected $id_usuario;
    protected $nombreDeUsuario;
    protected $nombre;
    protected $apellido;

    public function __construct($nombreDeUsuario, $nombre, $apellido, $id_usuario = null)
    {
        $this->id_usuario = $id_usuario;
        $this->$nombreDeUsuario = $nombreDeUsuario;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function getId() {return $this->id_usuario;}
    public function setId($id_usuario) {$this->id_usuario = $id_usuario;}
    public function getUsuario() {return $this->nombreDeUsuario;}
    public function getNombre() {return $this->nombre;}
    public function getApellido() {return $this->apellido;}
    public function getNombreApellido() {return "$this->nombre $this->apellido";}
}
