<?php

require_once '../reglas_negocio/ManejadorSesion.php';
ManejadorSesion::sec_session_start();

if($_POST){
    if($_POST['pk'] && $_POST['name'] && $_POST['value']){

        require_once '../reglas_negocio/ManejadorPersonal.php';
        require_once '../reglas_negocio/Persona.php';

        $id = $_POST['pk'];
        $campo = $_POST['name'];
        $valor = $_POST['value'];
        
        $personaActual = new Persona();
        $personaActual = ManejadorPersonal::getPersona($id);
        
        $personaNueva = new Persona();
        $personaNueva->setId($personaActual->getId());
        $personaNueva->setNombres($personaActual->getNombres());
        $personaNueva->setApellidos($personaActual->getApellidos());
        $personaNueva->setDUI($personaActual->getDUI());
        $personaNueva->setCorreo($personaActual->getCorreo());
        $personaNueva->setTelefono($personaActual->getTelefono());
        $personaNueva->setDireccion($personaActual->getDireccion());
        $personaNueva->setFechaNacimiento($personaActual->getFechaNacimiento());
        
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
            default:
                break;
        }
        
        try{
            ManejadorPersonal::modificarPersona($personaActual, $personaNueva);
            $respuesta = array('status'=>'ok','msg'=>'¡Persona Modificada!');
            print json_encode($respuesta);
        }catch(Exception $ex){
            $respuesta = array('status'=>'error','msg'=>$ex->getMessage());
            print json_encode($respuesta);            
        }
        
        
//    $respuesta = array('status'=>'error','msg'=>'NO PERMITIDO');
//    print json_encode($respuesta);

    }    
    
}


?>