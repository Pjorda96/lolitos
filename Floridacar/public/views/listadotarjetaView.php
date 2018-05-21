<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen" type="text/css">
    .contenedor{
      position: absolute;
      vertical-align: bottom;
      width: 100%;
      height: 70%;
      text-align: center;
      position: absolute;
    }
    .first{
      position: relative;
      width: 20%;
      padding: 25px 0;
      float: left;
      left:4%;
      top: 5%;
    }
    .second{
      position: relative;
      width: 50%;
      padding: 25px 0;
      float: left;
      left:5%;
      top: 5%;
      height: 80%;
    }
    .third{
      position: relative;
      width: 20%;
      padding: 25px 0;
      float:left;
      left:6%;
      top: 5%;
    }
    .header{
      width: 100%;
      height: 20%;
      position: relative;
      vertical-align: top;
    }
    .menu{
      width: 100%;
      height: 10%;
      position: relative;
      vertical-align: middle;

    }
    .total{
      width: 100%;
      height: 100%;
      position: absolute;
    }
    </style>
  </head>
  <body>
    <div class="total" style="background-color: grey;">
    <div class="header" style="background-color: pink;">
      a
    </div>
    <div class="menu" style="background-color: purple;">
      a
    </div>
    <div class="contenedor" style="background-color: blue;">
      <div class="first"style="background-color: red;">
        a
      </div>
      <div class="second"style="background-color: green;">
        <?php foreach ($filasTarjetas as $fila){
            echo "<button type='button' name='button' a href='tarjeta.php?id_tarjeta='.$fila[id_tarjeta].'''>";
            echo "<table style='width:200px' border='1px'>";
            echo "<tr>";
            echo "<td>";
            echo $fila['salida'];
            echo "</td>";
            echo "<td align='right'>";
            echo $fila['destino'];
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo $fila['fecha'];
            echo"</td>";
            echo "<td colspan='4' align='right'>";
            echo $fila['hora'];
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo $fila['plazas'];
            echo"</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
            echo $fila['precio'];
            echo"</td>";
            echo  "</table>";
            echo "</button>";
          }
              ?>
    </div>
    <div class="third"style="background-color: yellow;">
      a
    </div>
  </div>
</div>
  </body>
</html>
<button type="button" a href="tarjeta.php?id_tarjeta=".$fila[id_tarjeta] name="button"></button>
