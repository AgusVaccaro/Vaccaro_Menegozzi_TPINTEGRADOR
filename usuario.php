<?php

class Usuario
{
    protected $id;
    protected $nombreDeUsuario;
    protected $nombre;
    protected $apellido;

    public function __construct($nombreDeUsuario, $nombre, $apellido, $id = null)
    {
        $this->id = $id;
        $this->$nombreDeUsuario = $nombreDeUsuario;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function getId() {return $this->id;}
    public function setId($id) {$this->id = $id;}
    public function getUsuario() {return $this->nombreDeUsuario;}
    public function getNombre() {return $this->nombre;}
    public function getApellido() {return $this->apellido;}
    public function getNombreApellido() {return "$this->nombre $this->apellido";}
}
