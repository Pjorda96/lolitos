<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 17/05/2018
 * Time: 12:31
 */


require_once  __DIR__.'/../../vendor/autoload.php';
use Car\models\Usuario;

$baseDatos=new Usuario();
$baseDatos->getOne('pajoga');
$baseDatos->leerDatos();

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
      <label for="foto">Imagen:</label><br>
      <input type="file" size="30" id="foto" name="foto" value="" readonly><br>
      <input type="tel" placeholder="telefono" id="telefono" name="telefono" value="<?=$baseDatos->getTelefono()?>" readonly><br>
      <input type="text" placeholder="direccion" id="direccion" name="direccion" value="<?=$baseDatos->get()?>" readonly><br>
      <select name="genero" id="genero">
        <option>hombre</option>
        <option>mujer</option>
      </select>
      <input type="submit" name="Enviar" value="Enviar">
      <input type="hidden" name="id" value="">
    </form>
  </body>
</html>
