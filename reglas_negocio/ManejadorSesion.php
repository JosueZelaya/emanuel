<?php

class ManejadorSesion{
	
	public static function iniciarSesion($login,$password) throw Error{
		$usuario = new Usuario();
		
		try{
			$usuario = ManejadorPersonal::getUsuario($login);	
		}catch(Error $e){
			throw new Error($e->getMessage());
		}
				
		
		if($usuario->comprobarPassword($usuario->getPassword())){
			throw new Error("ACCESO CONCEDIDO");
		}else{
			throw new Error("ACCESO DENEGADO");
		}
		
	}
	
	public static function cerrarSesion(){
		
	}
	
}

?>