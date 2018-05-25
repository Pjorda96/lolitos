<?php
require_once __DIR__.'/../vendor/autoload.php';
use Car\models\Tarjeta;
use Car\models\Usuario;

session_start();

$apuntarse= new Tarjeta();
$user=new Usuario();

$user->leerDatos($_SESSION['usuario']);
$dni=$user->getDni();

$plazas=$apuntarse->plazas();
foreach ($plazas as $fila) {
    if ($fila['plazas'] != 0){
        $apuntarse->apuntarse($dni,$_GET["id_tarjeta"]);
        $restantes=$fila['plazas']-1;
        $apuntarse->restPlazas($restantes);
    }
}

header("Location: tarjeta.php?id_tarjeta=".$_GET['id_tarjeta']);