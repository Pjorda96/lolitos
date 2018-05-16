<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.html" method="post" onsubmit="">
      <input type="hidden" placeholder="user" id="usuario" name="usuario" value="<?php echo $filaUser['usuario']?>"><br>
      <input type="text" placeholder="nombre" id="nombre" name="nombre" value="<?php echo $filaUser['nombre']?>"><br>
      <input type="text" placeholder="apellidos" id="apellidos" name="apellidos" value="<?php echo $filaUser['apellidos']?>"><br>
      <input type="date" placeholder="fecha nacimiento" id="fechanac" name="fechanac" value="<?php echo $filaUser['fechanac']?>"><br>
      <label for="foto">Imagen:</label><br>
      <input type="file" size="30" id="foto" name="foto" value="<?php echo $filaUser['foto']?>"><br>
      <input type="tel" placeholder="telefono" id="telefono" name="telefono" value="<?php echo $filaUser['telefono']?>"><br>
      <input type="text" placeholder="direccion" id="direccion" name="direccion" value="<?php echo $filaUser['direccion']?>"><br>
      <select name="genero" id="genero">
        <option>hombre</option>
        <option>mujer</option>
      </select>
      <input type="submit" name="Enviar" value="Enviar">
      <input type="hidden" name="id" value="">
    </form>
  </body>
</html>
