<?php
require_once __DIR__.'/../vendor/autoload.php';
use Car\models\Usuario;

$perfil= new Usuario();

if (isset($_POST["crear"])){
    $usuario=$_POST['correoflorida'];
    $perfil->insertarUsuario($_POST['nombre'],$_POST['apellidos'],$_POST['telefono'],$_POST['ciudad'],$_POST['correoflorida'],$_POST['genero'],
        $_POST['dni'],$usuario,$_POST['password']);
    //header('Location: index.php');
}
include_once("views/registroview.php");
?>
