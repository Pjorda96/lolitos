<?php
require_once  __DIR__.'/../../vendor/autoload.php';
use Car\models\Usuario;
use Car\models\Session;

$baseDatos=new Usuario();
$baseDatos->getOne('pajoga');
$baseDatos->leerDatos('pajoga');

$sesion = new Session();
/*if ($_SESSION['user'] != $baseDatos->getUsuario()){
    header('Location: index.php');
}*/
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen" type="text/css">
    * {
      box-sizing: border-box;
    }

    form {
      padding: 1em;
      background: #f9f9f9;
      border: 1px solid #c1c1c1;
      margin-top: 2rem;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
      padding: 1em;
    }
    form input {
      margin-bottom: 1rem;
      background: #fff;
      border: 1px solid #9c9c9c;
    }
    form button {
      background: lightgrey;
      padding: 0.7em;
      border: 0;
    }
    form button:hover {
      background: gold;
    }

    label {
      text-align: right;
      display: block;
      padding: 0.5em 1.5em 0.5em 0;
    }

    input {
      width: 100%;
      padding: 0.7em;
      margin-bottom: 0.5rem;
    }
    input:focus {
      outline: 3px solid gold;
    }

    @media (min-width: 400px) {
      form {
        overflow: hidden;
      }

      label {
        float: left;
        width: 200px;
      }

      input {
        float: left;
        width: calc(100% - 200px);
      }

      button {
        float: right;
        width: calc(100% - 200px);
      }
    }
    </style>
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
    <title></title>
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

    <form class="form1"action="index.html" method="post" onsubmit="">
      <input type="hidden" placeholder="user" id="usuario" name="usuario" value="<?=$baseDatos->getUsuario()?>"><br>
      <input type="text" placeholder="nombre" id="nombre" name="nombre" value="<?=$baseDatos->getNombre()?>"><br>
      <input type="text" placeholder="apellidos" id="apellidos" name="apellidos" value="<?=$baseDatos->getApellidos()?>"><br>
      <input type="tel" placeholder="telefono" id="telefono" name="telefono" value="<?=$baseDatos->getTelefono()?>?>"><br>
      <input type="text" placeholder="direccion" id="direccion" name="direccion" value="<?=$baseDatos->getLocalidad()?>"><br>
      <input type="submit" name="Enviar" value="Enviar">
      <input type="hidden" name="id" value="">
    </form>
  </body>
</html>
