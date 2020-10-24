<?php

require_once "Modelo/LineaCompra.php";
require_once "Modelo/Proveedor.php";

class PedidoCompra
{
    private $fecha;
    private $proveedor;
    private $fechaEntregaEstimada;
    private $costoTotal;
    private $pedidoCerrado;
        
    public function getFecha()
    {
        return $this->f;
    }
    public function setFecha($f)
    {
        $this->fecha=$f;
    }

    public function getProveedor()
    {
        return $this->proveedor;
    }
    public function setProveedor($p)
    {
        $this->proveedor=$p;
    }

    public function getFechaEntregaEstimada()
    {
        return $this->fechaEntregaEstimada;
    }
    public function setFechaEntregaEstimada($fe)
    {
        $this->fechaEntregaEstimada=$fe;
    }
    
    public function getCostoTotal()
    {
        return $this->costoTotal;
    }
    public function setCostoTotal($ct)
    {
        $this->costoTotal=$ct;
    }
    
    public function getPedidoCerrado()
    {
        return $this->pedidoCerrado;
    }
    public function setPedidoCerrado($pc)
    {
        $this->pedidoCerrado=$pc;
    }

    public function MostrarDatos()
    {
        Echo '--PEDIDO DE COMPRAS--' . '<br>' . '<br>';
        Echo 'Fecha: ' . $this->getFecha(). '<br>';
        Echo 'Proveedor: ' . $this->getProveedor(). '<br>';
        Echo 'Fecha Estimada de entrega: ' . $this->getFechaEntregaEstimada(). '<br>';
        Echo 'Costo Total: ' . $this->getCostoTotal(). '<br>';
        Echo 'El Pedido esta cerrado: ' . $this->getPedidoCerrado(). '<br>';
        Echo 'Producto: ' . $this->getlistLineaCompra(). '<br>';
        //--
        Echo '--PROVEEDOR--' . '<br>' . '<br>';
        Echo 'Descipcion del proveedor: ' . $this->getProveedor()->getDescripcion() . '<br>';
        //--
        Echo '--LINEA DE COMPRA--' . '<br>' . '<br>';
        Echo 'Producto: ' . $this->getlineaCompra()->getProducto() . '<br>';
        Echo 'Cantidad: ' . $this->getlineaCompra()->getCantidad() . '<br>';
        Echo 'Costo unitario: ' . $this->getlineaCompra()->getCostoUnitario() . '<br>';
        Echo 'Fue entregado: ' . $this->getlineaCompra()->getFueEntregado() . '<br>';
        //--
        Echo '--PRECIO DEL PRODUCTO--' . '<br>' . '<br>';
        Echo 'Precio de venta: ' . $this->getlineaCompra()->getPrecioVenta() . '<br>';
    }
}
