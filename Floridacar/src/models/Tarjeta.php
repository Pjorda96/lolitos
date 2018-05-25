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
        $registro = parent::consultar($insertar);
    }
    /*public function traerDNI(){
      $traerDNI=;
    }*/
    public function apuntarse($dni, $id_tarjeta){
        $apuntar="INSERT into perxtar (dni, id_tarjeta) values ('$dni', $id_tarjeta)";
        parent::consultar($apuntar);
        header("Location: tarjeta.php");
    }
    public function restaApuntar($id_tarjeta)
    {
      $actualizar="UPDATE tarjetas set plazas=old.plazas-1
      where usuario='".$_SESSION['usuario']."';";
      var_dump($actualizar);
      parent::consultar($actualizar);
      header('Location: perfil.php');
    }
  }
