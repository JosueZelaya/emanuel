<?php

public class Usuario{
	
	private $login;
	private $password;
	private $habilitado;
	
	public __construct($login,$password,$habilitado){
		$this->login = $login;
		$this->password = $password;
		$this->habilitado = $habilitado;
	}
	
	public function comprobarPassword($password){
		if($this->password == $password){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	public function generarPassword(){
		
	}
	
	public function cambiarPassword($password){
		
	}
	
	public function deshabilitar(){
		
	}
	
	public function guardar(){
		
	}
	
	public function destruir(){
		
	}
	
}

?>