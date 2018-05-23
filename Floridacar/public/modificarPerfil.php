<?php
require_once __DIR__.'/../vendor/autoload.php';
use Car\models\Usuario;
$perfil= new Usuario();

session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] !== $_GET['usuario']){
    header('Location: index.php');
}

//coger el Usuario
$filaUser = $perfil->getOne($_GET['usuario']);

include_once("views/modificarPerfilview.php");

$filaUser->fetch_assoc();
