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
                        $sql_consulta = "SELECT * FROM personas ORDER BY nombres";
			$respuesta = conexion::consulta2($sql_consulta);
                        
                        while ($row = pg_fetch_array($respuesta)){
                            $usuario = new Usuario();
                            $usuario->setId($row['id_persona']);
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
        
        public static function getTodasPersonasConPaginacion($pagina,$numeroResultados){
                        $usuarios = array();
                        $pagina = ($pagina-1)*$numeroResultados;
                        $sql_consulta = "SELECT * FROM personas ORDER BY nombres LIMIT ".$numeroResultados." OFFSET ".$pagina;
			$respuesta = conexion::consulta2($sql_consulta);
                        
                        while ($row = pg_fetch_array($respuesta)){
                            $usuario = new Usuario();
                            $usuario->setId($row['id_persona']);
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
        
        public static function getCuantasPersonasExisten(){            
            $sql_consulta = "SELECT COUNT(*) FROM personas";
            $respuesta = conexion::consulta($sql_consulta);
            $cantidad = $respuesta['count'];
            return $cantidad;            
        }
        
        public static function buscarUsuario($buscarComo){            
            $datos = array();
            if (ereg("[^A-Za-z0-9]+",$buscarComo)) {	//EVITAR QUE EN EL LOGIN APAREZCAN CARACTERES ESPECIALES
			throw new Exception("¡Nombre invalido!");	
            } else{
                //$sql_consulta = "SELECT * FROM personas INNER JOIN miembros ON personas.id_persona=miembros.id_miembro INNER JOIN usuarios ON usuarios.id_usuario=miembros.id_miembro WHERE personas.nombres LIKE '%".$buscarComo."%' OR personas.apellidos LIKE '%".$buscarComo."%'";
                $sql_consulta = "SELECT * FROM personas WHERE nombres ILIKE '%".$buscarComo."%' OR apellidos LIKE '%".$buscarComo."%'";
                $respuesta = conexion::consulta2($sql_consulta);        
                                
                while ($row = pg_fetch_array($respuesta)){
                    $datos[] = array("value"=> $row['nombres']." ".$row['apellidos'],"id"=>$row['id_persona'],"nombres" => $row['nombres'],"apellidos" => $row['apellidos'],"dui" => $row['dui'],"correo" => $row['correo'],"telefono"=>$row['telefono'],"direccion" => $row['direccion'],"fecha"=>$row['fecha_nacimiento']);                    
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
		if(ManejadorPersonal::existe($persona)){
                    throw new Exception("La persona ya ha sido agregada anteriormente");
                }else{
                    if($persona->getNombres()!=="" && $persona->getApellidos()!==""){
                        $consulta = "INSERT INTO personas (nombres,apellidos,dui,correo,telefono,direccion,fecha_nacimiento) VALUES ('".
                                $persona->getNombres()."','".
                                $persona->getApellidos()."','".
                                $persona->getDUI()."','".
                                $persona->getCorreo()."','".
                                $persona->getTelefono()."','".
                                $persona->getDireccion()."','".
                                $persona->getFechaNacimiento()."')";
                        conexion::consulta2($consulta);
                    }else{
                        throw new Exception("No se puede agregar a la persona si le falta el nombre o apellido");
                    }
                }
	}
        
        
	
	public static function existe($persona){
		$consulta = "SELECT * FROM personas WHERE nombres='".$persona->getNombres()."' AND apellidos='".$persona->getApellidos()."'";
                $respuesta = conexion::consulta2($consulta);
                if(pg_fetch_array($respuesta)){
                    return true;
                }else{
                    return false;
                }
	}
        
        public static function existePersona($id){
            $consulta = "SELECT * FROM personas WHERE id_persona='".$id."'";
            $respuesta = conexion::consulta2($consulta);
            if(pg_fetch_array($respuesta)){
                return true;
            }else{
                return false;
            }
        }
	
	public static function poseeRol($roles,$rol){
		
	}
	
	public static function agregarRol($miembro,$rol){
		
	}
	
	public static function quitarRol($miembro,$rol){
		
	}
	
	public static function modificarPersona($actual,$nueva){            
            if(ManejadorPersonal::existe($actual)){
                if(ManejadorPersonal::existePersona($nueva->getId())){
                    $nueva->guardar();  //Se guarda la persona
                }else{
                    throw new Exception("No existe la persona que se quiere modificar");
                }                
            }else{
                throw new Exception("No existe la persona que se quiere modificar");
            }            		
	}
        
        public static function getPersona($id){
            if (ereg("[^A-Za-z0-9]+",$id)) {	//EVITAR QUE EN EL LOGIN APAREZCAN CARACTERES ESPECIALES
			throw new Exception("¡Login Inválido!");	
		} 
		else{
                        $sql_consulta = "SELECT * FROM personas WHERE id_persona='".$id."'";
			$respuesta = conexion::consulta($sql_consulta);
			$persona = new Persona();
                        $persona->setId($respuesta['id_persona']);
                        $persona->setNombres($respuesta['nombres']);
                        $persona->setApellidos($respuesta['apellidos']);
                        $persona->setDUI($respuesta['dui']);
                        $persona->setCorreo($respuesta['correo']);
                        $persona->setTelefono($respuesta['telefono']);
                        $persona->setDireccion($respuesta['direccion']);
                        $persona->setFechaNacimiento($respuesta['fecha_nacimiento']);			
			return $persona;
		}            
        }
        
	
}

?>