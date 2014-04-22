<?php
require_once 'Miembro.php';

class Usuario extends Miembro{
	
	private $login;
	private $password;
	private $habilitado;
        
        public function __construct() {
            parent::__construct();
            $this->login = "";
            $this->password = "";
            $this->habilitado = "";
        }
	
	public function comprobarPassword($password){
		if($this->password == $password){
			return TRUE;
		}else{
			throw new Exception("Usuario y Clave no coinciden");
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
	
	public function getLogin(){
		return $this->login;
	}
	
	public function getPassword(){
		return $this->password;
	}
	
	public function estaHabilitado(){
		return $this->habilitado;
	}
	
	public function setLogin($login){
		$this->login = $login;
	}
	
	public function setPassword($password){
		$this->password = $password;
	}
	
	public function setHabilitado($habilitado){
		$this->habilitado = $habilitado;
	}
        
        public function guardarUsuario(){
            $consulta = "UPDATE personas SET nombres='".$this->getNombres()."',"
                    . "apellidos='".$this->getApellidos()."',"                    
                    . "correo='".$this->getCorreo()."',"
                    . "telefono='".$this->getTelefono()."',"
                    . "direccion='".$this->getDireccion()."',"
                    . "fecha_nacimiento='".$this->getFechaNacimiento()."',"
                    . "fecha_conversion='".$this->getFechaConversion()."',"
                    . "fecha_bautismo='".$this->getFechaBautismo()."'"
                    . " WHERE id_persona='".$this->getId()."'";            
                conexion::consulta2($consulta);
            $consulta = "UPDATE usuarios SET login='".$this->getLogin()."',"
                . "password='".$this->getPassword()."'"                                   
                . " WHERE id_usuario='".$this->getId()."'";            
            conexion::consulta2($consulta);
	}
        
}

?>