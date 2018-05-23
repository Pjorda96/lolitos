<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 17/05/2018
 * Time: 12:31
 */

require_once  __DIR__.'/../vendor/autoload.php';
use Car\models\Usuario;

$baseDatos=new Usuario();
//$baseDatos->getOne('dafeca');
$baseDatos->getOne($_GET['usuario']);
//$baseDatos->leerDatos('dafeca');
$baseDatos->leerDatos($_GET['usuario']);

session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] !== $_GET['usuario']){
    header('Location: index.php');
}

require_once 'views/verPerfil.php';