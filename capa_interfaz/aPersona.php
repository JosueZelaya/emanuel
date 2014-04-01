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
    
    $persona = new Persona();
    $persona->setNombres($_POST['nombres']);
    $persona->setApellidos($_POST['apellidos']);
    $persona->setDUI($_POST['dui']);
    $persona->setCorreo($_POST['correo']);
    $persona->setTelefono($_POST['telefono']);
    $persona->setDireccion($_POST['direccion']);
    $persona->setFechaNacimiento($_POST['nacimiento_submit']);
    

    try{
        ManejadorPersonal::agregarPersona($persona);
        echo "¡Persona Agregada!";
    }catch(Exception $e){
        echo $e->getMessage();
    }   
}
?>