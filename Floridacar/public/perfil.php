<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 17/05/2018
 * Time: 12:31
 */


require_once  __DIR__.'../vendor/autoload.php';
use Car\models\Usuario;
use Car\models\Session;

$baseDatos=new Usuario();
$baseDatos->getOne('dafeca');
$baseDatos->leerDatos('dafeca');

$sesion = new Session();
/*if ($_SESSION['user'] != $baseDatos->getUsuario()){
    header('Location: index.php');
}*/

 ?>
