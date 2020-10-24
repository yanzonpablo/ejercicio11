<?php

class LineaCompra
{
    private $producto;
    private $cantidad;
    private $costoUnitario;
    private $fueEntregado;
        
    public function getProducto()
    {
        return $this->pr;
    }
    public function setProducto($pr)
    {
        $this->producto=$pr;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }
    public function setCantidad($cant)
    {
        $this->cantidad=$cant;

    }
    public function getCostoUnitario()
    {
        return $this->costoUnitario;
    }
    public function setCostoUnitario($cu)
    {
        $this->costoUnitario=$cu;
    }

    public function getFueEntregado()
    {
        return $this->fueEntregado;
    }
    public function setFueEntregado($fe)
    {
        $this->fueEntregado=$fe;
    }
}