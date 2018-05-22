<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>REGISTRO</title>
    <style media="screen" type="text/css">
    .texto{
      font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif;

      color: #ffffff;

      font-size: 18px;

      font-weight: 400;

      text-align: center;

      background: #889ccf;

      margin: 0 0 25px;

      overflow: hidden;

      padding: 70px;

      border-radius: 35px 0px 35px 0px;

      -moz-border-radius: 35px 0px 35px 0px;

      -webkit-border-radius: 35px 0px 35px 0px;

      border: 2px solid #5878ca;
    }
      </style>
  </head>
  <body>
    <?php

     ?>
     <div class="texto">

     <h1><center>REGISTRO</center></h1>
     <form class="" action="index.php" method="post"><center>
       <div>
        <label for="name">Usuario:</label>
        <input type="text" placeholder="usuario" id="name" />
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
        <input type="email" placeholder="Correo florida" id="correoflorda" />
      </div><br>
      <div>
        <select name="genero" id="genero">
          <option>masculino</option>
          <option>femenino</option>
        </select>
      </div><br>
      <div>
        <label for="dni">DNI:</label>
        <input type="text" id="dni" />
      </div>
      <br>
<input type="submit">
    </center></form>
  </div>
  </body>
</html>
