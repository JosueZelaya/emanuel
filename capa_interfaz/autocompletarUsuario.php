<?php

require_once '../reglas_negocio/ManejadorSesion.php';
require_once '../reglas_negocio/ManejadorPersonal.php';

ManejadorSesion::sec_session_start();
if (ManejadorSesion::comprobar_sesion() == true){
    if (isset($_GET)){
        if(isset($_GET['term'])){
            $buscarComo = $_GET['term'];        
            echo json_encode(ManejadorPersonal::buscarUsuario($buscarComo));                
        }       
    }
}else{
    echo "No está autorizado para ver esta página";
}

