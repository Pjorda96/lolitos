<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 19/04/2018
 * Time: 10:37
 */

namespace Daw\models;

/**
 *
 */
class Usuario extends Db
{

    private $usuario="";
    private $password="";
    private $nombre="";
    private $apellidos="";
    private $telefono=0;
    private $vehiculo=0;
    private $localidad="";
    private $florida="";
    private $genero="";
    private $dni="";



    function __construct()
    {
        parent::__construct();
        parent::conectar();
    }


    /*public function lista(){
        $usuarios="select usuario from usuarios";
        $resultado = parent::consultar($usuarios);
        foreach ($resultado as $fila) {
            echo "<option value='";
            echo $fila['usuario'];
            echo "'>";
            echo $fila['usuario'];
            echo "</option>";
        }
    }

    public function leerDatos(){
        $consulta="select nombre,apellidos,usuario,edad,curso from usuarios where usuario='".$_POST['usuario']."'";
        //echo $consulta;
        $consultaUsuario = parent::consultar($consulta);
        $this->usuario=$_POST['usuario'];

        foreach ($consultaUsuario as $fila) {
            $this->nombre=$fila['nombre'];
            $this->apellidos=$fila['apellidos'];
            $this->edad=$fila['edad'];
            $this->curso=$fila['curso'];
        }
    }

    public function insertarUsuario($nombre,$apellidos,$edad,$curso,$usuario,$contrasenya){
        $pass=hash("haval160,4", $contrasenya);
        $insertar="insert into usuarios (nombre,apellidos,edad,curso,usuario,contrasenya) values
    ('".$nombre."','".$apellidos."','".$edad."','".$curso."','".$usuario."','".$pass."')";
        //echo $insertar;
        $registro = parent::consultar($insertar);
    }

    public function actualizarUsuario($usuario,$nombre,$apellidos,$edad,$curso){
        $actualizar="update usuarios set nombre='".$nombre."',apellidos='".
            $apellidos."',edad='".$edad."',curso='".$curso."'
        where usuario='".$usuario."';";
        $registro = parent::consultar($actualizar);
    }

    public function borrarUsuario($borrado){
        $borrar="delete from usuarios where usuario='".$borrado."'";
        $registro = parent::consultar($borrar);
    }*/

    
}
