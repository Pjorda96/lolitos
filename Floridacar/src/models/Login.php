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

        $passw = "SELECT contrasenya from usuarios where usuario='" . $usuario . "'";
        $resultado = parent::consultar($passw);
        foreach ($resultado as $fila) {
            $contrasenyaDb = $fila['contrasenya'];
        }

        if ($pass === $contrasenyaDb) {
            if ($usuario==="admin") {
                $_SESSION['usuario'] = "admin";
                header('Location: .php');
            }else {
                $_SESSION['usuario'] = $usuario;
                var_dump($_SESSION['usuario']);
                header('Location: .php');
            }
        }else {
            header('Location: index.php');
        }
    }
}
