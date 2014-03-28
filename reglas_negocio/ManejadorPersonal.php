<?php

require_once '../acceso_datos/conexion.php';
require_once 'Usuario.php';

abstract class ManejadorPersonal{
	
	public static function getUsuario($login){
		if (ereg("[^A-Za-z0-9]+",$login)) {	//EVITAR QUE EN EL LOGIN APAREZCAN CARACTERES ESPECIALES
			throw new Exception("¡Login Inválido!");	
		} 
		else{
                        $sql_consulta = "SELECT * FROM usuarios INNER JOIN miembros ON id_usuario=id_miembro INNER JOIN personas ON id_miembro=id_persona WHERE login='".$login."'";
			$respuesta = conexion::consulta($sql_consulta);
			$usuario = new Usuario();
                        $usuario->setId($respuesta['id_usuario']);
                        $usuario->setlogin($respuesta['login']);
                        //Si el password no está encriptado en la base de datos se encripta acá
                        //Borrar la siguiente línea si el password ya está encriptado en la BD
                        $password = hash('sha512',$respuesta['password']);                        
			$usuario->setPassword($password);
			$usuario->setHabilitado($respuesta['habilitado']);
                        $usuario->setNombres($respuesta['nombres']);
                        $usuario->setApellidos($respuesta['apellidos']);
                        $usuario->setCorreo($respuesta['correo']);
                        $usuario->setTelefono($respuesta['telefono']);
                        $usuario->setDireccion($respuesta['direccion']);
                        $usuario->setFechaNacimiento($respuesta['fecha_nacimiento']);
                        $usuario->setFechaNuevoNacimiento($respuesta['fecha_nuevo_nacimiento']);
                        $usuario->setFechaBautismo($respuesta['fecha_bautismo']);			
			return $usuario;
		}		
	}
        
        public static function getTodasPersonas(){
                        $usuarios = array();
                        $sql_consulta = "SELECT * FROM personas";
			$respuesta = conexion::consulta2($sql_consulta);
                        
                        while ($row = pg_fetch_array($respuesta)){
                            $usuario = new Usuario();
                            $usuario->setNombres($row['nombres']);
                            $usuario->setApellidos($row['apellidos']);
                            $usuario->setDUI($row['dui']);
                            $usuario->setCorreo($row['correo']);
                            $usuario->setTelefono($row['telefono']);
                            $usuario->setDireccion($row['direccion']);
                            $usuario->setFechaNacimiento($row['fecha_nacimiento']);
                            $usuarios[] = $usuario;
                        }                   			
			return $usuarios;
        }
        
        public static function buscarUsuario($buscarComo){            
            $datos = array();
            if (ereg("[^A-Za-z0-9]+",$buscarComo)) {	//EVITAR QUE EN EL LOGIN APAREZCAN CARACTERES ESPECIALES
			throw new Exception("¡Nombre invalido!");	
            } else{
                //$sql_consulta = "SELECT * FROM personas INNER JOIN miembros ON personas.id_persona=miembros.id_miembro INNER JOIN usuarios ON usuarios.id_usuario=miembros.id_miembro WHERE personas.nombres LIKE '%".$buscarComo."%' OR personas.apellidos LIKE '%".$buscarComo."%'";
                $sql_consulta = "SELECT * FROM personas WHERE nombres LIKE '%".$buscarComo."%' OR apellidos LIKE '%".$buscarComo."%'";
                $respuesta = conexion::consulta2($sql_consulta);        
                                
                while ($row = pg_fetch_array($respuesta)){
                    $datos[] = array("value"=> $row['nombres']." ".$row['apellidos'],"nombres" => $row['nombres'],"apellidos" => $row['apellidos'],"dui" => $row['dui'],"correo" => $row['correo'],"telefono"=>$row['telefono'],"direccion" => $row['direccion'],"fecha"=>$row['fecha_nacimiento']);                    
                }
                return $datos;
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