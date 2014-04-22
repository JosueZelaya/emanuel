<?php

require_once '../reglas_negocio/ManejadorSesion.php';
require_once '../reglas_negocio/ManejadorPersonal.php';

ManejadorSesion::sec_session_start();
if (ManejadorSesion::comprobar_sesion() == true){
    if (isset($_GET)){
        if(isset($_GET['term'])){
            $buscarComo = $_GET['term'];        
            echo json_encode(ManejadorPersonal::buscarUsuario($buscarComo,"nombre_completo"));                
        }
        if(isset($_GET['mes'])){
            $buscarComo = $_GET['mes'];
            $personas = ManejadorPersonal::buscarUsuario($buscarComo,"fecha_nacimiento");
            for ($index = 0; $index < count($personas); $index++) {
            echo "<tr>".
                 "<td class='footable-first-column text-left'><span class='footable-toogle'></span>".$personas[$index]->getNombres()."</td>".   
                 "<td class='text-left'>".$personas[$index]->getApellidos()."</td>".
                 "<td class='text-left'>".$personas[$index]->getFechaNacimiento()."</td>".
                 "<td class='text-left'>".$personas[$index]->getFechaConversion()."</td>".
                 "<td class='text-left'>".$personas[$index]->getFechaBautismo()."</td>".   
                 "<td class='text-left'>".$personas[$index]->getTelefono()."</td>".   
                 "<td class='text-left'>".$personas[$index]->getCorreo()."</td>".         
                 "<td class='footable-last-column text-left'>".$personas[$index]->getDireccion()."</td>".                 
                 "</tr>";
            }
        }
    }
}else{
    echo "No está autorizado para ver esta página";
}

