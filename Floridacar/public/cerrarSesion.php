<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 23/05/2018
 * Time: 9:48
 */

require_once __DIR__.'/../vendor/autoload.php';
use Car\models\Session;

$logout= new Session();
$logout->cerrarSesion();

header('Location: index.php');