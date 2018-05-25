<?php
require_once __DIR__.'/../vendor/autoload.php';
use Car\models\Tarjeta;
use Car\models\Usuario;

$apuntarse= new Tarjeta();
$user=new Usuario();

$user->leerDatos($_SESSION['usuario']);
$dni=$user->getDni();
var_dump($dni);
$apuntartarjeta=$apuntarse->apuntarse($dni,$_GET['id_tarjeta']);
