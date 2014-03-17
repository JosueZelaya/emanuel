<?php

abstract class ManejadorPersonal{
	
	public static function getUsuario($login){
		if (ereg("[^A-Za-z0-9]+",$login) {	//EVITAR QUE EN EL LOGIN APAREZCAN CARACTERES ESPECIALES
			throw new Error("¡Login Inválido!");	
		} 
		else{
		 	$sql_consulta = "SELECT * FROM usuarios WHERE LOGIN="$login;
			$respueta = conexion::consulta($sql_consulta);
			$usuario = new Usuario($respueta['login'],$respuesta['password'],$respuesta['habilitado']);
			return $usuario;
		}		
	}
	
	public static function recuperarPassword($login){
		
	}
	
	public static function agregarUsuario($usuario){
		
	}
	
	public static function esMiembro($miembro){
		
	}
	
	public static function agregarMiembro($miembro){
		
	}
	
	public static function agregarPersona($persona){
		
	}
	
	public static function existe($persona){
		
	}
	
	public static function poseeRol($roles,$rol){
		
	}
	
	public static function agregarRol($miembro,$rol){
		
	}
	
	public static function quitarRol($miembro,$rol){
		
	}
	
	public static function modificarPersona($actual,$nueva){
		
	}
	
}

?>