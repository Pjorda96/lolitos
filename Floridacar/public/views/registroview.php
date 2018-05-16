<?php
require_once  __DIR__.'/../../vendor/autoload.php';
use Car\models\Usuario;
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
        <label for="name">Usuario:</label>
        <input type="text" placeholder="usuario" id="user" readonly/>
      </div><br>
      <div>
        <label for="contraseña">Contraseña:</label>
        <input type="password" placeholder="contraseña" id="contraseña" />
      </div><br>
      <div>
        <label for="nombre">Nombre:</label>
        <input type="text" placeholder="nombre" id="nombre" />
      </div><br>
      <div>
        <label for="apellidos">Apellidos:</label>
        <input type="text" placeholder="apellidos" id="apellidos" />
    </div><br>
      <div>
        <label for="telefono">Teléfono:</label>
        <input type="tel" placeholder="telefono" id="telefono" />
      </div><br>
      <div>
        <label for="ciudad">Ciudad:</label>
        <input type="text" placeholder="Ciudad" id="ciudad" />
      </div><br>
      <div>
        <label for="correoflordia">Correo Florida:</label>
        <input type="text" placeholder="Correo florida" id="correoflorda" /><label for="correoflordia">@floridauniversitaria.es</label>
      </div><br>
      <div>
        <label for="genero">Género:</label>
        <select name="genero" id="genero">
          <option>--Seleccione--</option>
          <option value="H">Masculino</option>
          <option value="M">Femenino</option>
        </select>
      </div><br>
      <div>
        <label for="dni">DNI:</label>
        <input type="text" id="dni" />
      </div>
      <div>
        <input type="submit" name="crear" value="Crear cuenta">
      </div>
      </div><br>
    </center></form>
  </body>
</html>
