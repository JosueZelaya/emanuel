<?php

require_once 'ManejadorPersonal.php';
require_once 'Usuario.php';

abstract class ManejadorSesion{
	
	public static function iniciarSesion($login,$password){
                try{
                    $usuario = ManejadorPersonal::getUsuario($login);
                    $usuario->comprobarPassword($password);
                    //Obtenemos el navegador y sistema operativo del usuario
                    $user_navegador = $_SERVER['HTTP_USER_AGENT'];
                    // XSS protection as we might print this value
                    $user_id = preg_replace("/[^0-9]+/", "", $usuario->getId());
                    $usuario->setId($user_id);
                    // XSS protection as we might print this value
                    $user_nombre = preg_replace("/[^a-zA-Z0-9_\-]+/","",$usuario->getNombres());
                    $usuario->setNombres($user_nombre);
                    
                    $_SESSION['id_usuario']=$user_id;
                    $_SESSION['usuario'] = $usuario;
                    $_SESSION['navegador_usuario'] = $user_navegador;
                    
                    
                    return $usuario;
                    
                } catch (Exception $e) {
                    throw new Exception($e->getMessage());	
                }		
	}
        
        public static function sec_session_start() {
            $session_name = 'sistema_emanuel';   // Set a custom session name
            $secure = true;
            // This stops JavaScript being able to access the session id.
            $httponly = true;
            // Forces sessions to only use cookies.
            if (ini_set('session.use_only_cookies', 1) === FALSE) {
                header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
                exit();
            }
            // Gets current cookies params.
            $cookieParams = session_get_cookie_params();
            session_set_cookie_params($cookieParams["lifetime"],
                $cookieParams["path"], 
                $cookieParams["domain"], 
                $secure,
                $httponly);
            // Sets the session name to the one set above.
            session_name($session_name);
            session_start();            // Start the PHP session 
            session_regenerate_id();    // regenerated the session, delete the old one. 
        }
	
	public static function cerrarSesion(){
		
	}
	
}