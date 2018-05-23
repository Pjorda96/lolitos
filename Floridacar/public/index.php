<?php
require_once __DIR__.'/../vendor/autoload.php';
use Car\models\Usuario;

$tarjeta= new Usuario();
$filasTarjetas=$tarjeta->listatarjetas();

session_start();

include_once("views/indexview.php");