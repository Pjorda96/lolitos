<?php
require_once __DIR__.'/../vendor/autoload.php';
use Car\models\Usuario;
$tarjeta= new Usuario();
$pantallaTarjeta=$tarjeta->tarjetaCompleta($_GET['id_tarjeta']);
include_once("views/tarjetaView.php");
 ?>
