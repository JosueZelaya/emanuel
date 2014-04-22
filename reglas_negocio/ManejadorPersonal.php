<?php

require_once '../acceso_datos/conexion.php';
require_once 'Usuario.php';

abstract class ManejadorPersonal{
	
	public static function getUsuario($login){
		if (ereg("[^A-Za-z0-9]+",$login)) {	//EVITAR QUE EN EL LOGIN APAREZCAN CARACTERES ESPECIALES
			throw new Exception("¡Login Inválido!");	
		} 
		else{
                        $sql_consulta = "SELECT * FROM usuarios INNER JOIN personas ON id_usuario=id_persona WHERE login='".$login."'";
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
                        $usuario->setFechaConversion($respuesta['fecha_conversion']);
                        $usuario->setFechaBautismo($respuesta['fecha_bautismo']);			
			return $usuario;
		}		
	}
        
        public static function getTodasPersonas(){
                        $miembros = array();
                        $sql_consulta = "SELECT * FROM personas ORDER BY nombres";
			$respuesta = conexion::consulta2($sql_consulta);
                        
                        while ($row = pg_fetch_array($respuesta)){
                            $miembro = new Miembro();
                            $miembro->setId($row['id_persona']);
                            $miembro->setNombres($row['nombres']);
                            $miembro->setApellidos($row['apellidos']);                            
                            $miembro->setTelefono($row['telefono']);
                            $miembro->setCorreo($row['correo']);                            
                            $miembro->setDireccion($row['direccion']);
                            $miembro->setFechaNacimiento($row['fecha_nacimiento']);
                            $miembro->setFechaConversion($row['fecha_conversion']);
                            $miembro->setFechaBautismo($row['fecha_bautismo']);                            
                            $miembros[] = $miembro;
                        }                   			
			return $miembros;
        }
        
        public static function getTodasPersonasConPaginacion($pagina,$numeroResultados){
                        $miembros = array();
                        $pagina = ($pagina-1)*$numeroResultados;
                        $sql_consulta = "SELECT * FROM personas ORDER BY nombres LIMIT ".$numeroResultados." OFFSET ".$pagina;
			$respuesta = conexion::consulta2($sql_consulta);
                        
                        while ($row = pg_fetch_array($respuesta)){
                            $miembro = new Miembro();
                            $miembro->setId($row['id_persona']);
                            $miembro->setNombres($row['nombres']);
                            $miembro->setApellidos($row['apellidos']);
                            $miembro->setTelefono($row['telefono']);
                            $miembro->setCorreo($row['correo']);                            
                            $miembro->setDireccion($row['direccion']);
                            //$miembro->setFechaNacimiento($row['fecha_nacimiento']);
                            $miembro->setFechaNacimiento(date("d-m-Y", strtotime($row['fecha_nacimiento'])));
                            $miembro->setFechaConversion(date("d-m-Y", strtotime($row['fecha_conversion'])));
                            $miembro->setFechaBautismo(date("d-m-Y", strtotime($row['fecha_bautismo'])));
                            $miembros[] = $miembro;
                        }                   			
			return $miembros;
        }
        
        public static function getCuantasPersonasExisten(){            
            $sql_consulta = "SELECT COUNT(*) FROM personas";
            $respuesta = conexion::consulta($sql_consulta);
            $cantidad = $respuesta['count'];
            return $cantidad;            
        }
        
        public static function buscarUsuario($buscarComo,$campo){            
            $datos = array();
            $miembros = array();
            if (ereg("[^A-Za-z0-9]+",$buscarComo)) {	//EVITAR QUE EN EL LOGIN APAREZCAN CARACTERES ESPECIALES
			throw new Exception("¡Nombre invalido!");	
            } else{
                if($campo=="nombre_completo"){
                    $sql_consulta = "SELECT * FROM personas WHERE nombres ILIKE '%".$buscarComo."%' OR apellidos ILIKE '%".$buscarComo."%'";                    
                    $respuesta = conexion::consulta2($sql_consulta);   
                    while ($row = pg_fetch_array($respuesta)){
                        $datos[] = array("value"=> $row['nombres']." ".$row['apellidos'],"id"=>$row['id_persona'],"nombres" => $row['nombres'],"apellidos" => $row['apellidos'],"correo" => $row['correo'],"telefono"=>$row['telefono'],"direccion" => $row['direccion'],"fecha_nacimiento"=>date("d-m-Y", strtotime($row['fecha_nacimiento'])),"fecha_conversion"=>date("d-m-Y", strtotime($row['fecha_conversion'])),"fecha_bautismo"=>date("d-m-Y", strtotime($row['fecha_bautismo'])));                    
                    }
                    return $datos;
                }else if($campo=="fecha_nacimiento"){
                    //$sql_consulta = "SELECT * FROM personas WHERE fecha_nacimiento ILIKE '%/".$buscarComo."/%'";
                    $sql_consulta = "SELECT * FROM personas WHERE EXTRACT(MONTH FROM fecha_nacimiento) = ".$buscarComo;
                    $respuesta = conexion::consulta2($sql_consulta);   
                    while ($row = pg_fetch_array($respuesta)){
                        $miembro = new Miembro();
                        $miembro->setId($row['id_persona']);
                        $miembro->setNombres($row['nombres']);
                        $miembro->setApellidos($row['apellidos']);                        
                        $miembro->setCorreo($row['correo']);
                        $miembro->setTelefono($row['telefono']);
                        $miembro->setDireccion($row['direccion']);
                        $miembro->setFechaNacimiento(date("d-m-Y", strtotime($row['fecha_nacimiento'])));
                        $miembro->setFechaConversion(date("d-m-Y", strtotime($row['fecha_conversion'])));
                        $miembro->setFechaBautismo(date("d-m-Y", strtotime($row['fecha_bautismo'])));
                        $miembros[] = $miembro;
                    }
                    return $miembros;                    
                }
                    
                
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
                        $consulta = "INSERT INTO personas (nombres,apellidos, correo,telefono,direccion,fecha_nacimiento,fecha_conversion,fecha_bautismo) VALUES ('".
                                $persona->getNombres()."','".
                                $persona->getApellidos()."','".                                
                                $persona->getCorreo()."','".
                                $persona->getTelefono()."','".
                                $persona->getDireccion()."','".
                                $persona->getFechaNacimiento()."','".
                                $persona->getFechaConversion()."','".
                                $persona->getFechaBautismo()."')";
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
        
        public static function borrarPersona($persona){
            if(ManejadorPersonal::existe($persona)){
                $persona->destruir();
            }else{
                throw new Exception("Esa persona no existe en la BD");
            }
        }
        
        public static function getPersona($id){
            if (ereg("[^A-Za-z0-9]+",$id)) {	//EVITAR QUE EN EL LOGIN APAREZCAN CARACTERES ESPECIALES
			throw new Exception("¡Login Inválido!");	
		} 
		else{
                        $sql_consulta = "SELECT * FROM personas WHERE id_persona='".$id."'";
			$respuesta = conexion::consulta($sql_consulta);
			$miembro = new Miembro();
                        $miembro->setId($respuesta['id_persona']);
                        $miembro->setNombres($respuesta['nombres']);
                        $miembro->setApellidos($respuesta['apellidos']);                        
                        $miembro->setCorreo($respuesta['correo']);
                        $miembro->setTelefono($respuesta['telefono']);
                        $miembro->setDireccion($respuesta['direccion']);
                        $miembro->setFechaNacimiento(date("d-m-Y", strtotime($respuesta['fecha_nacimiento'])));			
                        $miembro->setFechaConversion(date("d-m-Y", strtotime($respuesta['fecha_conversion'])));
                        $miembro->setFechaBautismo(date("d-m-Y", strtotime($respuesta['fecha_bautismo'])));
			return $miembro;
		}            
        }
        
	
}

?>