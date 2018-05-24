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
        $insertar="INSERT into tarjeta (destino,fecha,precio,salida,vehiculo,plazas,hora) values
    ('$destino','$fecha','$precio','$salida','$vehiculo','$plazas','$hora')";
        $registro = parent::consultar($insertar);
    }
    public function apuntarse(&)
  }
