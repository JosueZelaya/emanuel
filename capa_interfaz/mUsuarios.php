<?php

require_once '../reglas_negocio/ManejadorSesion.php';
ManejadorSesion::sec_session_start();

if($_POST){
    if($_POST['pk'] && $_POST['name'] && $_POST['value']){

        require_once '../reglas_negocio/ManejadorPersonal.php';
        require_once '../reglas_negocio/Persona.php';
        require_once '../reglas_negocio/Miembro.php';

        $id = $_POST['pk'];
        $campo = $_POST['name'];
        $valor = $_POST['value'];
        
        $personaActual = new Usuario();
        $personaActual = ManejadorPersonal::getUsuarioPorId($id);
        
        $personaNueva = new Usuario();
        $personaNueva->setId($personaActual->getId());
        $personaNueva->setNombres($personaActual->getNombres());
        $personaNueva->setApellidos($personaActual->getApellidos());        
        $personaNueva->setCorreo($personaActual->getCorreo());
        $personaNueva->setTelefono($personaActual->getTelefono());
        $personaNueva->setDireccion($personaActual->getDireccion());
        $personaNueva->setFechaNacimiento($personaActual->getFechaNacimiento());
        $personaNueva->setFechaConversion($personaActual->getFechaConversion());
        $personaNueva->setFechaBautismo($personaActual->getFechaBautismo());
        $personaNueva->setLogin($personaActual->getLogin());
        $personaNueva->setPassword($personaActual->getPassword());
        
        switch ($campo) {
            case "nombres":
                $personaNueva->setNombres($valor);
                break;
            case "apellidos":
                $personaNueva->setApellidos($valor);
                break;
            case "dui":
                $personaNueva->setDUI($valor);
                break;
            case "correo":
                $personaNueva->setCorreo($valor);
                break;
            case "direccion":
                $personaNueva->setDireccion($valor);
                break;
            case "telefono":
                $personaNueva->setTelefono($valor);
                break;
            case "nacimiento":
                $personaNueva->setFechaNacimiento($valor);
                break;
            case "conversion":
                $personaNueva->setFechaConversion($valor);
                break;
            case "bautismo":
                $personaNueva->setFechaBautismo($valor);
                break;
            case "login":
                $personaNueva->setLogin($valor);
                break;
            case "password":
                $personaNueva->setPassword($valor);
                break;
            default:
                break;
        }
        
        try{
            ManejadorPersonal::modificarUsuario($personaActual, $personaNueva);
            $respuesta = array('status'=>'ok','msg'=>'¡Persona Modificada!');
            print json_encode($respuesta);
        }catch(Exception $ex){
            $respuesta = array('status'=>'error','msg'=>$ex->getMessage());
            print json_encode($respuesta);            
        }       

    }    
    
}


?>