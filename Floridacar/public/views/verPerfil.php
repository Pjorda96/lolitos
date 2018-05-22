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
$baseDatos->getOne('dafeca');
$baseDatos->leerDatos('dafeca');

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
      <img src="
      <?php
      if ($baseDatos->getGenero() == "Hombre"){
          echo "http://34.243.177.174/Floridacar/public/images/hombre_generico.jpg";
      } else {
          echo "http://34.243.177.174/Floridacar/public/images/mujer_generico.jpg";
      }
      ?>" alt="Hombre" height="200" width="200">
      <input type="hidden" placeholder="user" id="usuario" name="usuario" value="<?=$baseDatos->getUsuario()?>" readonly><br>
        <div>
            <label for="nombre">Nombre:</label><br>
            <input type="text" placeholder="nombre" id="nombre" name="nombre" value="<?=$baseDatos->getNombre()?>" readonly>
        </div><br>
        <div>
            <label for="nombre">Apellidos:</label><br>
            <input type="text" placeholder="apellidos" id="apellidos" name="apellidos" value="<?=$baseDatos->getApellidos()?>" readonly>
        </div><br>
        <div>
            <label for="nombre">Telefono:</label><br>
            <input type="text" placeholder="telefono" id="telefono" name="telefono" value="<?=$baseDatos->getTelefono()?>" readonly>
        </div><br>
        <div>
            <label for="nombre">Ciudad:</label><br>
            <input type="text" placeholder="ciudad" id="ciudad" name="ciudad" value="<?=$baseDatos->getLocalidad()?>" readonly>
        </div><br>
        <div>
            <label for="nombre">Género:</label><br>
            <input type="text" placeholder="genero" id="genero" name="genero" value="<?=$baseDatos->getGenero()?>" readonly>
        </div><br>
        <input type="button" onclick="location.href='../modificarPerfil.php';" value="Actualizar" />
    <button onclick="">Volver</button>
    </form>

  </body>
</html>
