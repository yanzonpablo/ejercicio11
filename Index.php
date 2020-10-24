<?php

require_once "Modelo/LineaCompra.php";
require_once "Modelo/PedidoCompra.php";
require_once "Modelo/Producto.php";
require_once "Modelo/Proveedor.php";

$p = new Proveedor();
$p->setId('1');
$p->setDescripcion('Rosario Refrescos S.A.');

$lineaCompra1 = new Producto();
$lineaCompra1->SetCodigo(1);
$lineaCompra1->SetDescripcion('Fanta');
$lineaCompra1->SetCostoUnitario('$150');
$lineaCompra1->SetFueEntregado('NO');

$lineaCompra2 = new Producto();
$lineaCompra2->SetCodigo(2);
$lineaCompra2->SetDescripcion('Pepsi');
$lineaCompra2->SetCostoUnitario('$200');
$lineaCompra1->SetFueEntregado('NO');

$pc = new PedidoCompra();
$pc->SetFecha(20/10/2020);
$pc->SetProveedor($p);
$pc->setlineaCompra($lineaCompra1);
$pc->setlineaCompra($lineaCompra2);
$pc->SetFechaEntregaEstimada('21/10/2020');
$pc->SetCostoTotal('$350');
$pc->SetPedidoCerrado('SI');

$pc->MostrarDatos();