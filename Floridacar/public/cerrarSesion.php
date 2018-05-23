<?php
/**
 * Created by PhpStorm.
 * User: Pablo
 * Date: 23/05/2018
 * Time: 9:48
 */

require_once __DIR__.'/../vendor/autoload.php';
session_start();
$_SESSION=[];
session_destroy();

header('Location: index.php');