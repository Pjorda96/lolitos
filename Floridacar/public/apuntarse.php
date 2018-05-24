<?php
require_once __DIR__.'/../vendor/autoload.php';
use Car\models\Tarjeta;
$apuntarse= new Tarjeta();
$apuntartarjeta=$apuntarse->apuntarse(, $_GET['id_tarjeta'])
