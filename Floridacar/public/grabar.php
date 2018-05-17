<?php
require_once __DIR__.'/../vendor/autoload.php';
use Car\models\Db;
$conectar= new Db();

$datos= base64_encode(file_get_contents($_FILES['imagen']['tmp_name']));
var_dump($datos);

$consulta = "INSERT INTO personas (";
  $consulta .= "imagen";
  $consulta .= ") VALUES (";
  $consulta .= "'".$datos."');";
$conector=$conectar->conectar($consulta);    
var_dump($consulta);

echo "Imagen almacenada";
 ?>
