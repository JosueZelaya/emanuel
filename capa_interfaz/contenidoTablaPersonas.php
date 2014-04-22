<?php

require_once '../reglas_negocio/ManejadorPersonal.php';
                    
//$pagina=1;                    
//$numeroResultados = 2;
include './paginacionConfig.php';

$usuario;

if($_GET){
    if(isset($_GET['tipoResultado'])){
        $tipoResultado = $_GET['tipoResultado'];
    }
    if(isset($_GET['pagina'])){
        $pagina = $_GET['pagina'];
    }    
    $usuario = ManejadorPersonal::getTodasPersonasConPaginacion($pagina,$numeroResultados);
}else{
    $usuario = ManejadorPersonal::getTodasPersonasConPaginacion($pagina, $numeroResultados);
}
        
if($tipoResultado=='modificarPersonas'){
    for ($index = 0; $index < count($usuario); $index++) {                          
        echo "<tr>".
                "<td class='footable-first-column'><span class='footable-toogle'></span><div style='cursor: pointer;' id='nombres' class='campoModificable' data-type='text' data-placement='bottom' data-pk=".$usuario[$index]->getId()." data-url='mPersonas.php' data-title='Ingrese Nombre'>".$usuario[$index]->getNombres()."</div></td>".   
                "<td><div style='cursor: pointer;' href='#' id='apellidos' class='campoModificable' data-type='text' data-placement='bottom' data-pk=".$usuario[$index]->getId()." data-url='mPersonas.php' data-title='Ingrese Apellido'>".$usuario[$index]->getApellidos()."</div></td>".
                "<td><div style='cursor: pointer;' href='#' id='nacimiento' class='fechaEditable' data-type='date' data-placement='bottom' data-pk=".$usuario[$index]->getId()." data-url='mPersonas.php' data-title='Fecha Nacimiento'>".$usuario[$index]->getFechaNacimiento()."</div></td>".                
                "<td><div style='cursor: pointer;' href='#' id='conversion' class='fechaEditable' data-type='date' data-placement='bottom' data-pk=".$usuario[$index]->getId()." data-url='mPersonas.php' data-title='Fecha Conversion'>".$usuario[$index]->getFechaConversion()."</div></td>".
                "<td><div style='cursor: pointer;' href='#' id='bautismo' class='fechaEditable' data-type='date' data-placement='bottom' data-pk=".$usuario[$index]->getId()." data-url='mPersonas.php' data-title='Fecha Bautismo'>".$usuario[$index]->getFechaBautismo()."</div></td>".
                "<td><div style='cursor: pointer;' href='#' id='telefono' class='campoModificable' data-type='text' data-placement='bottom' data-pk=".$usuario[$index]->getId()." data-url='mPersonas.php' data-title='Ingrese Telefono'>".$usuario[$index]->getTelefono()."</div></td>".
                "<td><div style='cursor: pointer;' href='#' id='correo' class='campoModificable' data-type='text' data-placement='bottom' data-pk=".$usuario[$index]->getId()." data-url='mPersonas.php' data-title='Ingrese Correo'>".$usuario[$index]->getCorreo()."</div></td>".                
                "<td class='footable-last-column'><div style='cursor: pointer;' href='#' id='direccion' class='campoModificable' data-type='text' data-placement='bottom' data-pk=".$usuario[$index]->getId()." data-url='mPersonas.php' data-title='Ingrese Direccion'>".$usuario[$index]->getDireccion()."</div></td>".                
             "</tr>";
    }
}else if($tipoResultado=='eliminarPersonas'){
    for($index = 0;$index < count($usuario); $index++){
        echo "<tr>".
             "<td class='footable-first-column text-left'><span class='footable-toogle'></span>".$usuario[$index]->getNombres()."</td>".   
             "<td class='text-left'>".$usuario[$index]->getApellidos()."</td>".
             "<td class='text-left'>".$usuario[$index]->getFechaNacimiento()."</td>".                   
             "<td class='text-left'>".$usuario[$index]->getFechaConversion()."</td>".
             "<td class='text-left'>".$usuario[$index]->getFechaBautismo()."</td>".   
             "<td class='text-left'>".$usuario[$index]->getTelefono()."</td>".   
             "<td class='text-left'>".$usuario[$index]->getCorreo()."</td>".         
             "<td class='text-left'>".$usuario[$index]->getDireccion()."</td>".             
             "<td class='footable-last-column text-center'><a id='".$usuario[$index]->getId()."' class='row-delete'><span class='glyphicon glyphicon-remove'></span></a></td>".
             "</tr>";
    }
}else{
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




?>