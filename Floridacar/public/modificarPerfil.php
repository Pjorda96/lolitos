<?php
require_once __DIR__.'/../vendor/autoload.php';
use Car\models\Usuario;

session_start();
if (!isset($_SESSION['usuario'])){
    header('Location: index.php');
}

$perfil= new Usuario();
//$baseDatos->getOne('dafeca');
$perfil->getOne($_SESSION['usuario']);
//$baseDatos->leerDatos('dafeca');
$perfil->leerDatos($_SESSION['usuario']);


include_once("views/modificarPerfilview.php");

//$perfil->fetch_assoc();