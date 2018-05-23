<?php
require_once __DIR__.'/../vendor/autoload.php';
use Car\models\Usuario;
use Car\models\Session;

$tarjeta= new Usuario();
$filasTarjetas=$tarjeta->listatarjetas();

session_start();
if (!isset($_SESSION['usuario'])){
    $_SESSION['usuario']='';
}

include_once("views/indexview.php");