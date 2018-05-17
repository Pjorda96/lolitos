<?php
require_once __DIR__.'/../vendor/autoload.php';
use Car\models\Usuario;
$tarjeta= new Usuario();
$pantallaTarjeta=$tarjeta->tarjetaCompleta();
include_once("views/tarjetaView.php");
 ?>
