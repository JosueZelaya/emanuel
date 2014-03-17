<?php

$login = $_GET['login'];
$password = $_GET['password'];

try{
	ManejadorSesion::iniciarSesion($login, $password);	
}catch(Error $e){
	$echo $e->getMessage();
}


?>