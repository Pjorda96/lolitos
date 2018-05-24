<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 03/05/2018
 * Time: 8:51
 */

namespace Car\models;

session_start();

class Login extends Db
{

    function __construct()
    {
        parent::__construct();
        parent::conectar();
    }

    public function validate($usuario,$contrasenya)
    {
        $pass = hash("haval160,4", $contrasenya);

        $passw = "SELECT contrasenya from persona where usuario='" . $usuario . "'";
        $resultado = parent::consultar($passw);
        foreach ($resultado as $fila) {
            $contrasenyaDb = $fila['contrasenya'];
        }

        if ($pass === $contrasenyaDb) {
            $_SESSION['usuario'] = $usuario;
            //var_dump($_SESSION['usuario']);
            header('Location: index.php');
        }else {
            header('Location: login.php');
        }
    }
}
