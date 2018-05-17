<?php
require_once __DIR__.'/../../vendor/autoload.php';
use Car\models\Usuario;

$perfil= new Usuario();

if (isset($_POST["crear"])){
    $usuario=$_POST['correoflorida'];
    $perfil->insertarUsuario($_POST['nombre'],$_POST['apellidos'],$_POST['telefono'],$_POST['ciudad'],$_POST['correoflorida'],$_POST['genero'],
        $_POST['dni'],$usuario,$_POST['password']);
    //header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>REGISTRO</title>
  </head>
  <body>
     <h1><center>REGISTRO</center></h1>
     <form class="" action="" onsubmit="validarInsertar()" method="post"><center>
      <div>
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" placeholder="nombre" id="nombre" />
      </div><br>
      <div>
        <label for="apellidos">Apellidos:</label><br>
        <input type="text" name="apellidos" placeholder="apellidos" id="apellidos" />
    </div><br>
      <div>
        <label for="telefono">Teléfono:</label><br>
        <input type="tel" name="telefono" placeholder="telefono" id="telefono" />
      </div><br>
      <div>
        <label for="ciudad">Ciudad:</label><br>
        <input type="text" name="ciudad" placeholder="Ciudad" id="ciudad" />
      </div><br>
      <div>
        <label for="correoflorida">Correo Florida:</label><br>
        <input type="text" name="correoflorida" placeholder="correo florida" id="correoflorida" /><label for="correoflorida">@floridauniversitaria.es</label>
      </div><br>
      <div>
        <label for="genero">Género:</label><br>
        <select name="genero" name="genero" id="genero">
          <option>--Seleccione--</option>
          <option value="H">Masculino</option>
          <option value="M">Femenino</option>
        </select>
      </div><br>
      <div>
        <label for="dni">DNI:</label><br>
        <input type="text" name="dni" id="dni" />
      </div><br>
      <div>
           <label for="user">Usuario:</label><br>
           <input type="text" name="user" placeholder="usuario" id="user" readonly/>
      </div><br>
      <div>
          <label for="password">Contraseña:</label><br>
          <input type="password" name="password" placeholder="password" id="password" />
      </div><br>
      <div>
        <input type="submit" name="crear" value="Crear cuenta">
      </div>
    </center></form>
  <script src="../js/validarInsertar.js"></script>
  </body>
</html>
