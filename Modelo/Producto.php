<?php

class Producto
{
    private $codigo;
    private $descripcion;
    private $precioVenta;

    public function getCodigo()
    {
        return $this->cod;
    }
    public function setCodigo($cod)
    {
        $this->cod=$cod;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function setDescripcion($desc)
    {
        $this->descripcion=$desc;
    }

    public function getPrecioVenta()
    {
        return $this->precioVenta;
    }
    public function setPrecioVenta($pv)
    {
        $this->precioVenta=$pv;
    }

}