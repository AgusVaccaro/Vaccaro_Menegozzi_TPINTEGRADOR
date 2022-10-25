<?php
include("conexion.php");

class Stock{
    protected $id;
    protected $marca;
    protected $producto;
    protected $talle;
    protected $color;

    public function __construct($id, $marca, $producto, $talle, $color)
    {
        $this->id = $id;
        $this->marca = $marca;
        $this->producto = $producto;
        $this->talle = $talle;
        $this->color = $color;
    }

    public function getId(){
        return $this->id;
    }
    
    public function getMarca(){
        return $this->marca;
    }

    public function getProducto(){
        return $this->producto;
    }

    public function getTalle(){
        return $this->talle;
    }

    public function getColor(){
        return $this->color;
    }
}
