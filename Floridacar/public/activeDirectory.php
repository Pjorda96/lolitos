<?php
require_once  __DIR__.'/../vendor/autoload.php';

use Car\models\Login;

$login=new Login();

session_start();

if ($_SESSION['usuario'] !== 'admin'){
    $login->validate($_POST['username'],$_POST['pass']);
}

    $adServer = "ldap://10.2.72.98";

    $ldap = ldap_connect($adServer);
    //$username = 'admin';
    //$password = 'Pene1234';
    $username = $_POST['username'];
    $password = $_POST['pass'];

    $ldaprdn = 'PABLO0' . "\\" . $username;
    ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);
    $bind = @ldap_bind($ldap, $ldaprdn, $password);
    var_dump($bind);
    /*if ($bind) {
    	$msg = "Estás logueado como correctamente como $username";
    } else {
        $msg = "Usuario o contraseña incorrectos";
    }
    echo $msg;*/
    if ($bind) {
        $_SESSION['usuario'] = $_POST['username'];
        header('Location: index.php');
    } else {
        header('Location: login.php');
    }

    if (isset($_SESSION['usuario'])) {
        header('Location: index.php');
    } else {
        header('Location: login.php');
    }