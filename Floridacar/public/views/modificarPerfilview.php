<?php
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
    <form class="" action="verPerfil.php" method="post" onsubmit="">
      <input type="hidden" placeholder="user" id="usuario" name="usuario" value="<?=$baseDatos->getUsuario()?>"><br>
      <input type="text" placeholder="nombre" id="nombre" name="nombre" value="<?=$baseDatos->getNombre()?>"><br>
      <input type="text" placeholder="apellidos" id="apellidos" name="apellidos" value="<?=$baseDatos->getApellidos()?>"><br>
      <input type="tel" placeholder="telefono" id="telefono" name="telefono" value="<?=$baseDatos->getTelefono()?>?>"><br>
      <input type="text" placeholder="direccion" id="direccion" name="direccion" value="<?=$baseDatos->getLocalidad()?>"><br>
      <select name="genero" id="genero">
        <option>hombre</option>
        <option>mujer</option>
      </select>
      <input type="submit" name="Enviar" value="Enviar">
      <input type="hidden" name="id" value="">
    </form>
  </body>
</html>
