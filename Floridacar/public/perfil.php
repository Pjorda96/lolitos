<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 17/05/2018
 * Time: 12:31
 */

require_once  __DIR__.'/../vendor/autoload.php';
use Car\models\Usuario;

session_start();
if (!isset($_SESSION['usuario'])){
    header('Location: index.php');
}

$baseDatos=new Usuario();
//$baseDatos->getOne('dafeca');
$baseDatos->getOne($_SESSION['usuario']);
//$baseDatos->leerDatos('dafeca');
$baseDatos->leerDatos($_SESSION['usuario']);

require_once 'views/verPerfil.php';