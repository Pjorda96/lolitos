<?php
require_once __DIR__.'/../vendor/autoload.php';
use Car\models\Tarjeta;
$tarjetanew= new Tarjeta();
if (isset($_POST["crear"])){
$tarjetanew->insertarTarjeta($_POST['destino'],$_POST['fecha'],$_POST['precio'],$_POST['salida'],$_POST['vehiculo'],$_POST['plazas'],$_POST['hora']);
}

include_once("views/crearTarjetaView.php");
