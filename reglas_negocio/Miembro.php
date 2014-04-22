<?php

require_once 'Persona.php';

class Miembro extends Persona{
	
	private $fechaConversion;
	private $fechaBautismo;
	private $dones;
	private $roles;
        
        public function __construct() {
            parent::__construct();
            $this->fechaConversion="";
            $this->fechaBautismo="";
            $this->dones="";
            $this->roles="";
        }
        
        public function getFechaConversion(){
            return $this->fechaConversion;
        }
        
        public function getFechaBautismo(){
            return $this->fechaBautismo;
        }
        
        public function getDones(){
            return $this->dones;
        }
	
        public function getRoles(){
            return $this->roles;
        }
        
        public function setFechaConversion($fecha){
            $this->fechaConversion = $fecha;
        }
        
        public function setFechaBautismo($fecha){
            $this->fechaBautismo = $fecha;
        }
        
        public function setDones($dones){
            $this->dones = $dones;
        }
	
        public function setRoles($roles){
            $this->roles = $roles;
        }
        
	public function agregarRol($rol){
		
	}
	
	public function quitarRol($rol){
		
	}
	
	public function guardar(){
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
	}
	
//	public function destruir(){
//		
//	}
	
}

?>