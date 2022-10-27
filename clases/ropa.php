<?php

class Ropa{
    protected $id;
    protected $marca;
    protected $producto;
    protected $talle;
    protected $color;
    protected $movimiento = [];

    public function __construct($id, $marca, $producto, $talle, $color)
    {
        $this->id = $id;
        $this->marca = $marca;
        $this->producto = $producto;
        $this->talle = $talle;
        $this->color = $color;
        $this->movimiento = [$this->ropa];
    }

    public function setId($id){
        $this->id = $id;
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
