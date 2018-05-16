<?php
require_once __DIR__.'/../vendor/autoload.php';
use Car\models\Usuario;
$tarjeta= new Usuario();
$filasTarjetas=$tarjeta->listatarjetas();
include_once("views/listadotarjetaView.php");
 ?>
