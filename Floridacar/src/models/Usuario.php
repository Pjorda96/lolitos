<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 19/04/2018
 * Time: 10:37
 */

namespace Car\models;

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

    public function insertarUsuario($usuario,$nombre,$apellidos,$edad,$curso,$contrasenya){
        $pass=hash("haval160,4", $contrasenya);
        $insertar="insert into usuarios (nombre,apellidos,edad,curso,usuario,contrasenya) values
    ('".$nombre."','".$apellidos."','".$edad."','".$curso."','".$usuario."','".$pass."')";
        //echo $insertar;
        $registro = parent::consultar($insertar);
    }

    public function actualizarUsuario($usuario,$nombre,$apellidos,$fechanac,$foto,$telefono,$direccion){
        $actualizar="update persona set usuario='".$_POST['usuario']."',nombre='".$_POST['nombre']."',apellidos='".
            $_POST['apellidos']."',fechanac='".$_POST['fechanac']."',foto='".$_POST['foto']."',telefono='".$_POST['telefono']."',direccion='".$_POST['direccion']."'
        where usuario='".$_POST['usuario']."';";
        $resActualizar = parent::consultar($actualizar);
     return $resActualizar;
    }
    public function getOne($usuario)
    {
        $query = "SELECT * FROM persona WHERE usuario=$usuario";
        $resOne = parent::consultar($query);
        return $resOne->fetch_assoc();
    }
    public function listatarjetas(){
        $tarjetas="SELECT destino,fecha,precio,salida,plazas,hora FROM tarjetas";
        $resultado = parent::consultar($tarjetas);

              return $resultado;


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


    public function borrarUsuario($borrado){
        $borrar="delete from usuarios where usuario='".$borrado."'";
        $registro = parent::consultar($borrar);
    }*/



    /**
     * Get the value of Usuario
     *
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of Usuario
     *
     * @param mixed usuario
     *
     * @return self
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get the value of Password
     *
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of Password
     *
     * @param mixed password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of Nombre
     *
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of Nombre
     *
     * @param mixed nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of Apellidos
     *
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of Apellidos
     *
     * @param mixed apellidos
     *
     * @return self
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of Telefono
     *
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of Telefono
     *
     * @param mixed telefono
     *
     * @return self
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get the value of Vehiculo
     *
     * @return mixed
     */
    public function getVehiculo()
    {
        return $this->vehiculo;
    }

    /**
     * Set the value of Vehiculo
     *
     * @param mixed vehiculo
     *
     * @return self
     */
    public function setVehiculo($vehiculo)
    {
        $this->vehiculo = $vehiculo;

        return $this;
    }

    /**
     * Get the value of Localidad
     *
     * @return mixed
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set the value of Localidad
     *
     * @param mixed localidad
     *
     * @return self
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get the value of Florida
     *
     * @return mixed
     */
    public function getFlorida()
    {
        return $this->florida;
    }

    /**
     * Set the value of Florida
     *
     * @param mixed florida
     *
     * @return self
     */
    public function setFlorida($florida)
    {
        $this->florida = $florida;

        return $this;
    }

    /**
     * Get the value of Genero
     *
     * @return mixed
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of Genero
     *
     * @param mixed genero
     *
     * @return self
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of Dni
     *
     * @return mixed
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set the value of Dni
     *
     * @param mixed dni
     *
     * @return self
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

}
