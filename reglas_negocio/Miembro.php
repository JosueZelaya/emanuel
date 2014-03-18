<?php

require_once 'Persona.php';

class Miembro extends Persona{
	
	private $fechaNuevoNacimiento;
	private $fechaBautismo;
	private $dones;
	private $roles;
        
        public function __construct() {
            parent::__construct();
            $this->fechaNuevoNacimiento="";
            $this->fechaBautismo="";
            $this->dones="";
            $this->roles="";
        }
        
        public function getFechaNuevoNacimiento(){
            return $this->fechaNuevoNacimiento;
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
        
        public function setFechaNuevoNacimiento($fecha){
            $this->fechaNuevoNacimiento = $fecha;
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
		
	}
	
	public function destruir(){
		
	}
	
}

?>