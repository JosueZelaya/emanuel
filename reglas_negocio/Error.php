<?php

public class Error extends Exception {

	private $mensaje;
	
	public __construct($mensaje){
		$this->mensaje = $mensaje;
	}
	
	public function getMensaje(){
		return $this->mensaje;
	}
	
	public function setMensaje($mensaje){
		$this->mensaje = $mensaje;
	}	
	
}

?>