<?php 

require_once 'modelo/constructor.php';

require_once 'modelo/PropiedadInmobiliaria.php';


$p = NEW PropiedadInmobiliaria();
$p->id=1;
$p->direccion='San Juan 325';
$p->metroscuadrados='100';
$p->ciudad='rosario';
$p->valor=1500000;

$c=new constructor();
$c->PropiedadInmobiliaria=$p;
$c->mostrardatos();

