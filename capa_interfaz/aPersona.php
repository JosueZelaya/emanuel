<?php
require_once '../reglas_negocio/ManejadorSesion.php';
ManejadorSesion::sec_session_start();

if($_POST){
    require_once '../reglas_negocio/ManejadorPersonal.php';
    require_once '../reglas_negocio/Persona.php';
    require_once '../reglas_negocio/Miembro.php';
    
    $personaNueva = new Miembro();
    $personaNueva->setNombres($_POST['nombres']);
    $personaNueva->setApellidos($_POST['apellidos']);    
    $personaNueva->setCorreo($_POST['correo']);
    $personaNueva->setTelefono($_POST['telefono']);
    $personaNueva->setDireccion($_POST['direccion']);
    if($_POST['nacimiento_submit']!=""){
        $personaNueva->setFechaNacimiento(date("d-m-Y", strtotime($_POST['nacimiento_submit'])));
    }        
    if($_POST['conversion_submit']!=""){
        $personaNueva->setFechaConversion(date("d-m-Y", strtotime($_POST['conversion_submit'])));
    }        
    if($_POST['bautismo_submit']!=""){
        $personaNueva->setFechaBautismo(date("d-m-Y", strtotime($_POST['bautismo_submit'])));
    }
       

    try{
        ManejadorPersonal::agregarPersona($personaNueva);
        $respuesta = "¡Persona Agregada!";
        echo json_encode($respuesta);
    }catch(Exception $e){
        echo json_encode($e->getMessage());
    }
       
}
?>