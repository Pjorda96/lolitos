<!DOCTYPE html>

<html lang="en">
  <head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <title>FloridaCar</title>
    <style>
      .contenedor{
        width: auto;
        text-align: center;
        padding-left: 375px;
      }
      body { background-image: url("images/fondo.png") }
    </style>

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/botones.css" rel="stylesheet">
    <link href="css/album.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  </head>

  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">¿Quienes somos?</h4>
              <p class="text-muted">Somos un grupo de estudiantes de primer año del modulo superior de Desarollo de Aplicaciones Web que hemos decidido crear FloridaCar una empresa enfocada al transporte de alumnos al centro de la Florida o de esta al destino que les interese.
              Nuestro fin con este programa es ayudar a los alumnos a moverse de un modo economico y de una manera eficiente,en la que principalmente los alumnos sin vehículo no dependan del transporte publico.
            </p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
                <h4 class="text-white"><?php
                    if (!isset($_SESSION['usuario'])){
                        echo 'Login';
                    }else {
                        echo $_SESSION['usuario'];
                    }
                    ?></h4>
              <ul class="list-unstyled">
                <?php if (!isset($_SESSION['usuario'])){
                    echo '<li><a href="login.php" class="text-white">Iniciar Sesión</a></li>';
                }else {
                    echo '<li><a href="perfil.php" class="text-white">Ver perfil</a></li>';
                    echo '<li><a href="cerrarSesion.php" class="text-white">Cerrar Sesión</a></li>';
                }
                /*if (!isset($_SESSION['usuario'])){
                    echo '<li><a href="perfil.php" class="text-white">Ver perfil</a></li>';
                    echo '<li><a href="cerrarSesion.php" class="text-white">Cerrar Sesión</a></li>';
                }else {
                    echo '<li><a href="login.php" class="text-white">Iniciar Sesión</a></li>';
                }*/?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="index.php" class="navbar-brand d-flex align-items-center">
            <i class="fas fa-car"></i>

            <strong>FloridaCar</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">


      
        <button type="button" class="btn" onclick="location.href='crearTarjeta.php';"> Nueva Tarjeta </button>
        <div class="contenedor">
          <br>
          <br>
          <br>
          <table>
            <tr>
          <?php
          $contador=1;
          foreach ($filasTarjetas as $fila){
              echo "<td>";
              echo "<table style='width:300px height:300px' border='4px solid' background-image: url(../images/fondo.png) no-repeat'>";
              echo "<tr>";
              echo "<td>";
              echo "Salida: ".$fila['salida'];
              echo "</td>";
              echo "<td align='right'>";
              echo "Destino: ".$fila['destino'];
              echo "</td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td>";
              echo "Fecha: ".$fila['fecha'];
              echo"</td>";
              echo "<td align='right'>";
              echo "Hora: ".$fila['hora'];
              echo "</td>";
              echo "</tr>";
              echo  "</table>";
              echo "<a href='tarjeta.php?id_tarjeta=".$fila['id_tarjeta']."'>";
              echo "<button class='btn' type='button' name='button id='button'>";
              echo "Ver más";
              echo "</button>";
              echo "</a>";
              echo "</td>";
              if ($contador%2==0) {
                echo "</tr>";
                echo "<tr>";
              }
              $contador++;
            }
                ?>
              </tr>
          </table>
    </main>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>
