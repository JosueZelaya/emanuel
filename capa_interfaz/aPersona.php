<?php
require_once '../reglas_negocio/ManejadorSesion.php';
ManejadorSesion::sec_session_start();

if($_POST){
    require_once '../reglas_negocio/ManejadorPersonal.php';
    require_once '../reglas_negocio/Persona.php';

//    $persona = new Persona();
//    $persona->setNombres("David Ernesto");
//    $persona->setApellidos("Rosales Rivera");
//    $persona->setDUI("121201-1");
//    $persona->setCorreo("david.rosales@justin.com");
//    $persona->setTelefono("77120012");
//    $persona->setDireccion("Col el jugado calle soy bobo");
//    $persona->setFechaNacimiento("25/09/1993");
    
    $personaNueva = new Miembro();
    $personaNueva->setNombres($_POST['nombres']);
    $personaNueva->setApellidos($_POST['apellidos']);
    $personaNueva->setDUI($_POST['dui']);
    $personaNueva->setCorreo($_POST['correo']);
    $personaNueva->setTelefono($_POST['telefono']);
    $personaNueva->setDireccion($_POST['direccion']);
    $personaNueva->setFechaNacimiento($_POST['nacimiento_submit']);
    $personaNueva->setFechaConversion($_POST['conversion_submit']);
    $personaNueva->setFechaBautismo($_POST['bautismo_submit']);

    try{
        ManejadorPersonal::agregarPersona($personaNueva);
        echo json_encode("¡Persona Agregada!");
    }catch(Exception $e){
        echo json_encode($e->getMessage());
    }   
}
?>