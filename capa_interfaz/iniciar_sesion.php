<?php

require_once '../reglas_negocio/ManejadorSesion.php';

$login = $_GET['login'];
$password = $_GET['password'];

echo $login;
echo "<br/>";
echo $password."<br/>";

try{
        $usuario = ManejadorSesion::iniciarSesion($login, $password);
        echo $usuario->getLogin()." ".$usuario->getPassword();
}catch(Exception $e){
	echo $e->getMessage();
}

