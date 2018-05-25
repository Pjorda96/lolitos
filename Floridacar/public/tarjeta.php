<?php
require_once __DIR__.'/../vendor/autoload.php';
use Car\models\Usuario;

session_start();

$tarjeta= new Usuario();

$pantallaTarjeta=$tarjeta->tarjetaCompleta($_GET["id_tarjeta"]);

$id=$_GET["id_tarjeta"];

include_once("views/tarjetaView.php");