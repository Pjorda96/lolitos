<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.html" method="post">
      <input type="text" placeholder="user" id="user" name="user" value=""><br>
      <input type="text" placeholder="nombre" id="nombre" name="nombre" value=""><br>
      <input type="text" placeholder="apellidos" id="apellidos" name="apellidos" value=""><br>
      <input type="date" placeholder="fecha_nac" id="fecha_nac" name="fecha_nac" value=""><br>
      <label for="foto">Imagen:</label><br>
      <input type="file" size="30" id="foto" name="foto" value=""><br>
      <input type="tel" placeholder="telefono" id="puntuacion" name="puntuacion" value=""><br>
      <input type="text" placeholder="direccion" id="direccion" name="direccion" value=""><br>
      <select name="genero" id="genero">
        <option>hombre</option>
        <option>mujer</option>
      </select>
      <input type="submit" name="Enviar" value="Enviar">
      <input type="hidden" name="id" value="">
      <input type="hidden" name="accion" value="actualizar">
    </form>
  </body>
</html>
