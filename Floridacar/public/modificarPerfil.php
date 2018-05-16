<?php
require_once __DIR__.'/../vendor/autoload.php';
use Car\models\Usuario;
$perfil= new Usuario();


//coger el id

$filaUser = $perfil->getOne($_GET['usuario']);
include_once("views/modificarPerfilview.php");
 ?>
