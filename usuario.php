<?php

class Usuario
{
    protected $id;
    protected $nombredeusuario;
    protected $nombre;
    protected $apellido;

    public function __construct($nombredeusuario, $nombre, $apellido, $id = null)
    {
        $this->id = $id;
        $this->nombredeusuario = $nombredeusuario;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function getId() {return $this->id;}
    public function setId($id) {$this->id = $id;}
    public function getUsuario() {return $this->nombredeusuario;}
    public function getNombre() {return $this->nombre;}
    public function getApellido() {return $this->apellido;}
    public function getNombreApellido() {return "$this->nombre $this->apellido";}
}
