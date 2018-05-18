<?php
require_once __DIR__.'/../vendor/autoload.php';
use Car\models\Db;
$conector=new Db();

$consulta = "SELECT imagen FROM personas";
	$hacerConsulta = $conector->prepare($consulta); // Se crea un objeto PDOStatement.
	$hacerConsulta->execute(); // Se ejecuta la consulta.
	$datos = $hacerConsulta->fetch(PDO::FETCH_ASSOC)["imagen"]; // Se recuperan los resultados.
	$hacerConsulta->closeCursor(); // Se libera el recurso.

	$datos = base64_decode($datos);
	echo $datos;


 ?>
