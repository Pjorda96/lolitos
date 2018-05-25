<?php
require_once __DIR__.'/../vendor/autoload.php';
use Car\models\Tarjeta;

session_start();
if (!isset($_SESSION['usuario'])){
    header('Location: index.php');
}

$tarjetanew= new Tarjeta();
if (isset($_POST["crear"])){
$tarjetanew->insertarTarjeta($_POST['destino'],$_POST['fecha'],$_POST['precio'],$_POST['salida'],$_POST['vehiculo'],
    $_POST['plazas'],$_POST['hora']);
header('Location: index.php');
}

include_once("views/crearTarjetaView.php");
