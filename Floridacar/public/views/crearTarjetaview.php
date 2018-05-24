<!DOCTYPE html>
<html lang="en" dir="ltr">
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

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/album.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>TARJETA</title>
  </head>
  <body>
  <header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">Quienes somos?</h4>
            <p class="text-muted">Somos un grupo de estudiantes de primer año del modulo superior de Desarollo de Aplicaciones Web que hemos decidido crear FloridaCar una empresa enfocada al transporte de alumnos al centro de la Florida o de esta al destino que les interese.
            Nuestro fin con este programa es ayudar a los alumnos a moverse de un modo economico y de una manera eficiente,en la que principalmente los alumnos sin vehículo no dependan del transporte publico.
          </p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="perfil.php" class="text-white">Ver perfil</a></li>
              <li><a href="login.php" class="text-white">Iniciar Sesion</a></li>
              <li><a href="registro.php" class="text-white">Registrarse</a></li>
              <li><a href="#" class="text-white">Cerrar sesion</a></li>
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
     <h1><center>Tarjeta</center></h1>
     <form class="" action="crearTarjeta.php" onsubmit="validarTarjeta()" method="post">
      <div>
        <label for="destino">Destino:</label><br>
        <input type="text" name="destino" placeholder="destino" id="destino" />
      </div><br>
      <div>
        <label for="salida">Salida:</label><br>
        <input type="text" name="salida" placeholder="salida" id="salida" />
    </div><br>
      <div>
        <label for="fecha">Fecha:</label><br>
        <input type="date" name="fecha" placeholder="fecha" id="fecha" />
      </div><br>
      <div>
        <label for="precio">Precio:</label><br>
        <input type="text" name="precio" placeholder="precio" id="precio" />
      </div><br>
      <div>
        <label for="vehiculo">Vehiculo:</label><br>
        <input type="text" name="vehiculo" placeholder="vehiculo" id="vehiculo" />
      </div><br>
      <div>
        <label for="plazas">Plazas:</label><br>
        <input type="text" name="plazas" id="plazas" />
      </div><br>
      <div>
          <label for="hora">Hora:</label><br>
          <input type="time" name="hora" placeholder="hora" id="hora" />
      </div><br>
      <div>
        <input type="submit" name="crear" value="Crear tarjeta">
      </div>
    </form>
  </body>
</html>
