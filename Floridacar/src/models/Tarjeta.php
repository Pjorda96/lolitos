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
class Tarjeta extends Db
{

    private $id_tarjeta="";
    private $destino="";
    private $fecha="";
    private $precio="";
    private $salida="";
    private $vehiculo="";
    private $plazas="";
    private $hora="";
    private $dni="";



      function __construct()
    {
        parent::__construct();
        parent::conectar();
    }

    public function insertarTarjeta($destino,$fecha,$precio,$salida,$vehiculo,$plazas,$hora){
        $insertar="INSERT into tarjetas (destino,fecha,precio,salida,vehiculo,plazas,hora) values
    ('$destino','$fecha',$precio,'$salida','$vehiculo',$plazas,'$hora')";
        var_dump($insertar);
        parent::consultar($insertar);
        header('Location: index.php');
    }

    public function apuntarse($dni, $id_tarjeta){
        $apuntar="INSERT into perxtar (dni, id_tarjeta) values ('$dni', $id_tarjeta)";
        parent::consultar($apuntar);
    }

    public function restPlazas($plazas)
    {
      $actualizar="UPDATE tarjetas set plazas=$plazas
      where id_tarjeta=".$_GET["id_tarjeta"];
      parent::consultar($actualizar);
      //header('Location: perfil.php');
    }

    public function plazas()
    {
        $plazas="select plazas from tarjetas where id_tarjeta=".$_GET["id_tarjeta"];
        $retPlazas=parent::consultar($plazas);
        return $retPlazas;
    }

    /**
     * Set the value of plazas
     *
     * @param mixed plazas
     *
     * @return self
     */
    public function setPlazas($plazas)
    {
        $this->plazas = $plazas;
    }
  }
