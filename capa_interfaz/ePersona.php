<?php

require_once '../reglas_negocio/ManejadorSesion.php';
ManejadorSesion::sec_session_start();

if($_GET){
    
    require_once '../reglas_negocio/ManejadorPersonal.php';
    require_once '../reglas_negocio/Persona.php';
    
    if(isset($_GET['id'])){
        $persona = ManejadorPersonal::getPersona($_GET['id']);
        try{
            ManejadorPersonal::borrarPersona($persona);
        }catch(Exception $e){
            
        }       
        
    }
    
}

