<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/modificarPerfilView.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
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
     <link href="css/botones.css" rel="stylesheet">
    <link href="css/album.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <meta charset="utf-8">
    <title>FloridaCar</title>
  </head>

  <body>
    <form class="" action="perfil.php" method="post" onsubmit="">


      <input type="hidden" placeholder="user" id="usuario" name="usuario" value="<?=$perfil->getUsuario()?>"><br>
      <input type="text" placeholder="nombre" id="nombre" name="nombre" value="<?=$perfil->getNombre()?>"><br>
      <input type="text" placeholder="apellidos" id="apellidos" name="apellidos" value="<?=$perfil->getApellidos()?>"><br>
      <input type="tel" placeholder="telefono" id="telefono" name="telefono" value="<?=$perfil->getTelefono()?>"><br>
      <input type="text" placeholder="direccion" id="direccion" name="direccion" value="<?=$perfil->getLocalidad()?>"><br>




      <input type="submit" class="btn" name="Enviar" value="Enviar">
<input type="button" name="Volver" value="Volver" class="btn" onclick="location.href='index.php';"> </input>

      <input type="hidden" name="id" value="">

    </form>

  </body>

</html>
