<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
    <?php
    foreach ($filasTarjetas as $fila) {
        echo "<option value='";
        echo $fila['destino'];
        echo "'>";
        echo $fila['fecha'];
        echo "'>";
        echo $fila['precio'];
        echo "'>";
        echo $fila['salida'];
        echo "'>";
        echo $fila['plazas'];
        echo "'>";
        echo $fila['hora'];
        echo "</option>";
    }
     ?>
  </body>
</html>
