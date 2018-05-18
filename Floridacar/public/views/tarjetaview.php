<?php
require_once  __DIR__.'/../../vendor/autoload.php';
use Car\models\Usuario;
use Car\models\Session;

$baseDatos=new Usuario();
$baseDatos->getOne('pajoga');

$sesion = new Session();
/*if ($_SESSION['user'] != $baseDatos->getUsuario()){
    header('Location: index.php');
}*/
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/tarjeta.css">
  </head>
  <body>

    <div class="tarjeta">
      <table style="width:100%" border="1px ">
        <tr>
          <td><?php foreach ($pantallaTarjeta as $fila) {echo $fila['salida'];} ?></td>
          <td align="right"><?php foreach ($pantallaTarjeta as $fila) {echo $fila['destino'];} ?></td>
        </tr>
        <tr>
          <td><?php foreach ($pantallaTarjeta as $fila) {echo $fila['fecha'];} ?></td>
          <td colspan="4" align="right">Foto</td>
        </tr>
        <tr>
          <td><?php foreach ($pantallaTarjeta as $fila) {echo $fila['hora'];} ?></td>
        </tr>
        <tr>
          <td><?php foreach ($pantallaTarjeta as $fila) {echo $fila['precio'];} ?></td>
        </tr>
        <tr>
          <td><?php foreach ($pantallaTarjeta as $fila) {echo $fila['plazas'];} ?></td>
        </tr>
        <tr>
          <td><?php foreach ($pantallaTarjeta as $fila) {echo $fila['vehiculo'];} ?></td>
          <td align="right"><?php foreach ($pantallaTarjeta as $fila) {echo $fila['nombre'].$fila['apellidos'];} ?></td>
        </tr>
      </table>
      <input type="submit" name="Apuntarse" value="Apuntarse" id="apuntarse">
  </body>
</html>
