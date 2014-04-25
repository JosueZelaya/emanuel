<?php

require_once '../reglas_negocio/ManejadorSesion.php';
require_once '../reglas_negocio/ManejadorPersonal.php';

ManejadorSesion::sec_session_start();
if (ManejadorSesion::comprobar_sesion() == true){
    if (isset($_GET)){
        if(isset($_GET['term'])){
            $buscarComo = $_GET['term'];        
//            echo json_encode(ManejadorPersonal::buscarUsuario($buscarComo,"nombre_completo"));
             $miembros = ManejadorPersonal::buscarUsuario($buscarComo,"nombre_completo");
             $datos;
             for ($index = 0; $index < count($miembros); $index++) {
                 $datos[] = array("value"=> $miembros[$index]->getNombres()." ".$miembros[$index]->getApellidos(),
                 "id"=>$miembros[$index]->getId(),
                 "nombres" => $miembros[$index]->getNombres(),
                 "apellidos" => $miembros[$index]->getApellidos(),
                 "correo" => $miembros[$index]->getCorreo(),
                 "telefono"=>$miembros[$index]->getTelefono(),
                 "direccion" => $miembros[$index]->getDireccion(),
                 "fecha_nacimiento"=>$miembros[$index]->getFechaNacimiento(),
                 "fecha_conversion"=>$miembros[$index]->getFechaConversion(),
                 "fecha_bautismo"=>$miembros[$index]->getFechaBautismo());
             }
             
             echo json_encode($datos);
        }
        if(isset($_GET['mes'])){
            $buscarComo = $_GET['mes'];
            $usuario = ManejadorPersonal::buscarUsuario($buscarComo,"fecha_nacimiento");
            for ($index = 0; $index < count($usuario); $index++) {
            echo "<tr>".
                 "<td class='footable-first-column text-left'><span class='footable-toogle'></span>".$usuario[$index]->getNombres()."</td>".   
                 "<td class='text-left'>".$usuario[$index]->getApellidos()."</td>".
                 "<td class='text-left'>".$usuario[$index]->getFechaNacimiento()."</td>".
                 "<td class='text-left'>".$usuario[$index]->getFechaConversion()."</td>".
                 "<td class='text-left'>".$usuario[$index]->getFechaBautismo()."</td>".   
                 "<td class='text-left'>".$usuario[$index]->getTelefono()."</td>".   
                 "<td class='text-left'>".$usuario[$index]->getCorreo()."</td>".         
                 "<td class='footable-last-column text-left'>".$usuario[$index]->getDireccion()."</td>".                 
                 "</tr>";
            }
        }
    }
}else{
    echo "No está autorizado para ver esta página";
}

