<?php
require_once  __DIR__.'/../../vendor/autoload.php';
use Car\models\Usuario;
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Inicio de Sesión</title>
     <link rel="stylesheet" href="https://www.floridaoberta.com/theme/adaptable/style/font-awesome.min.css">
     <link rel="stylesheet" href="../css/login.css">
   </head>
   <body>

      <form class="" action="index.html" method="post">


                 <div class="cuadrado"  style="background-color: white;">
                  <h3 class="color">Introduce tu cuenta</h3>
                   <form accept-charset="UTF-8" role="form">

                      <input class="texto" placeholder="usuario" name="usuario" type="text">
                      <br>
                      <br>

                       <input class="texto" placeholder="password" name="password" type="password" value="">
                       <br>
                       <br>
                       <br>

                     <input class="" type="submit" value="Login">

                     <input type="button"class="button_active" onclick="location.href='registro.php';"  name="Registrarse" value="Registrarse">

                     </form>
                 </div>

     </form>
   </body>
 </html>
