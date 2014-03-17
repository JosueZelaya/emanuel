<?php

require_once 'ManejadorPersonal.php';
require_once 'Usuario.php';

abstract class ManejadorSesion{
	
	public static function iniciarSesion($login,$password){
		$usuario = ManejadorPersonal::getUsuario($login);
		if($usuario->comprobarPassword($password)){
			return $usuario;
		}
		
		
	}
	
	public static function cerrarSesion(){
		
	}
	
}