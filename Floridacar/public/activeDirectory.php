<?php
session_start();
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
    echo $msg;