<?php
require_once __DIR__.'/../vendor/autoload.php';
use Car\models\Usuario;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="grabar.php" method="post" enctype="multipart/form-data">
      Imagen: <input type='file' name="imagen"><br>
      <input type='submit' value="Subir">

    </form>
  </body>
</html>
