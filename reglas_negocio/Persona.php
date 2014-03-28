<?php

class Persona{
	
        private $id;
	private $nombres;
	private $apellidos;
        private $dui;
	private $correo;
	private $telefono;
	private $direccion;
	private $fechaNacimiento;
        
        public function __construct() {
            $this->id="";
            $this->nombres="";
            $this->apellidos="";
            $this->correo="";
            $this->telefono="";
            $this->direccion="";
            $this->fechaNacimiento="";
        }
	
	public function getId(){
            return $this->id;
        }
                
        public function getNombres(){
            return $this->nombres;
        }
        
        public function getApellidos(){
            return $this->apellidos;
        }
        
        public function getDUI(){
            return $this->dui;
        }
        
        public function getCorreo(){
            return $this->correo;
        }
        
        public function getTelefono(){
            return $this->telefono;
        }
        
        public function getDireccion(){
            return $this->direccion;
        }
        
        public function getFechaNacimiento(){
            return $this->fechaNacimiento;
        }
        
        public function setId($id){
            $this->id=$id;
        }
                
        public function setNombres($nombres){
            $this->nombres = $nombres;
        }
        
        public function setApellidos($apellidos){
            $this->apellidos = $apellidos;
        }
        
        public function setDUI($dui){
            $this->dui = $dui;
        }
        
        public function setCorreo($correo){
            $this->correo = $correo;
        }
        
        public function setTelefono($telefono){
            $this->telefono = $telefono;
        }
        
        public function setDireccion($direccion){
            $this->direccion = $direccion;
        }
        
        public function setFechaNacimiento($fecha){
            $this->fechaNacimiento = $fecha;
        }
        
	public function destruir(){
		
	}
	
	public function guardar(){
		
	}
	
}

?>