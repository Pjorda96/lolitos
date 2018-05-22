<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 17/05/2018
 * Time: 12:31
 */


require_once  __DIR__.'/../../vendor/autoload.php';
use Car\models\Usuario;
use Car\models\Session;

$baseDatos=new Usuario();
$baseDatos->getOne('pajoga');
$baseDatos->leerDatos('pajoga');

$sesion = new Session();
/*if ($_SESSION['user'] != $baseDatos->getUsuario()){
    header('Location: index.php');
}*/

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.html" method="post" onsubmit="">
      <input type="hidden" placeholder="user" id="usuario" name="usuario" value="<?=$baseDatos->getUsuario()?>" readonly><br>
      <input type="text" placeholder="nombre" id="nombre" name="nombre" value="<?=$baseDatos->getNombre()?>" readonly><br>
      <input type="text" placeholder="apellidos" id="apellidos" name="apellidos" value="<?=$baseDatos->getApellidos()?>" readonly><br>
      <input type="date" placeholder="fecha nacimiento" id="fechanac" name="fechanac" value="<?=$baseDatos->getFechanac()?>" readonly><br>
      <input type="tel" placeholder="telefono" id="telefono" name="telefono" value="<?=$baseDatos->getTelefono()?>" readonly><br>
      <input type="text" placeholder="Ciudad" id="ciudad" name="ciudad" value="<?=$baseDatos->getLocalidad()?>" readonly><br>
      <input type="text" placeholder="Genero" id="genero" name="genero" value="<?=$baseDatos->getGenero()?>" readonly><br>
      <input type="button" onclick="location.href='../modificarPerfil.php';" value="actualizar" />
      <input type="hidden" name="id" value="">
    </form>

  <button onclick="">Volver</button>
  </body>
</html>
