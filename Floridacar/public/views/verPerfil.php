<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <style>
      body { background-image: url("images/fondo.png") }
    </style>
    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
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
    </div>
      <div class="container" align="center" style="width:15%">
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
          <div style="text-align:left">
            <label for="nombre">Nombre:</label><br>
          </div>
            <input type="text" placeholder="nombre" id="nombre" name="nombre" value="<?=$baseDatos->getNombre()?>" readonly>
        </div><br>
        <div>
          <div style="text-align:left">
            <label for="nombre">Apellidos:</label><br>
          </div>
            <input type="text" placeholder="apellidos" id="apellidos" name="apellidos" value="<?=$baseDatos->getApellidos()?>" readonly>
        </div><br>
        <div>
          <div style="text-align:left">
            <label for="nombre">Telefono:</label><br>
          </div>
            <input type="text" placeholder="telefono" id="telefono" name="telefono" value="<?=$baseDatos->getTelefono()?>" readonly>
        </div><br>
        <div>
          <div style="text-align:left" >
            <label for="nombre">Ciudad:</label><br>
          </div>

            <input type="text" placeholder="ciudad" id="ciudad" name="ciudad" value="<?=$baseDatos->getLocalidad()?>" readonly>
        </div><br>
        <div>
            <div style="text-align:left">
              <label for="nombre">Género:</label><br>
            </div>
            <input type="text" placeholder="genero" id="genero" name="genero" value="<?=$baseDatos->getGenero()?>" readonly>
        </div><br>
        <input type="button" onclick="location.href='modificarPerfil.php';" value="Actualizar" />
    <button type="button" class="btn-price" onclick="location.href='index.php';"> Volver </button>

  </div>

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
