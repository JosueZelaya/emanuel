<?php

require_once '../reglas_negocio/ManejadorPersonal.php';
                    
//$pagina=1;                    
//$numeroResultados = 2;
include './paginacionConfig.php';

$personas;

if($_GET){
    if(isset($_GET['tipoResultado'])){
        $tipoResultado = $_GET['tipoResultado'];
    }
    if(isset($_GET['pagina'])){
        $pagina = $_GET['pagina'];
    }    
    $personas = ManejadorPersonal::getTodasPersonasConPaginacion($pagina,$numeroResultados);
}else{
    $personas = ManejadorPersonal::getTodasPersonasConPaginacion($pagina, $numeroResultados);
}
        
if($tipoResultado=='modificarPersonas'){
    for ($index = 0; $index < count($personas); $index++) {                          
        echo "<tr>".
                "<td class='footable-first-column'><span class='footable-toogle'></span><div style='cursor: pointer;' id='nombres' class='campoModificable' data-type='text' data-placement='bottom' data-pk=".$personas[$index]->getId()." data-url='mPersonas.php' data-title='Ingrese Nombre'>".$personas[$index]->getNombres()."</div></td>".   
                "<td><div style='cursor: pointer;' href='#' id='apellidos' class='campoModificable' data-type='text' data-placement='bottom' data-pk=".$personas[$index]->getId()." data-url='mPersonas.php' data-title='Ingrese Apellido'>".$personas[$index]->getApellidos()."</div></td>".
                "<td><div style='cursor: pointer;' href='#' id='nacimiento' class='fechaEditable' data-type='date' data-placement='bottom' data-pk=".$personas[$index]->getId()." data-url='mPersonas.php' data-title='Fecha Nacimiento'>".$personas[$index]->getFechaNacimiento()."</div></td>".                
                "<td><div style='cursor: pointer;' href='#' id='conversion' class='fechaEditable' data-type='date' data-placement='bottom' data-pk=".$personas[$index]->getId()." data-url='mPersonas.php' data-title='Fecha Conversion'>".$personas[$index]->getFechaConversion()."</div></td>".
                "<td><div style='cursor: pointer;' href='#' id='bautismo' class='fechaEditable' data-type='date' data-placement='bottom' data-pk=".$personas[$index]->getId()." data-url='mPersonas.php' data-title='Fecha Bautismo'>".$personas[$index]->getFechaBautismo()."</div></td>".
                "<td><div style='cursor: pointer;' href='#' id='telefono' class='campoModificable' data-type='text' data-placement='bottom' data-pk=".$personas[$index]->getId()." data-url='mPersonas.php' data-title='Ingrese Telefono'>".$personas[$index]->getTelefono()."</div></td>".
                "<td><div style='cursor: pointer;' href='#' id='correo' class='campoModificable' data-type='text' data-placement='bottom' data-pk=".$personas[$index]->getId()." data-url='mPersonas.php' data-title='Ingrese Correo'>".$personas[$index]->getCorreo()."</div></td>".                
                "<td class='footable-last-column'><div style='cursor: pointer;' href='#' id='direccion' class='campoModificable' data-type='text' data-placement='bottom' data-pk=".$personas[$index]->getId()." data-url='mPersonas.php' data-title='Ingrese Direccion'>".$personas[$index]->getDireccion()."</div></td>".                
             "</tr>";
    }
}else if($tipoResultado=='eliminarPersonas'){
    for($index = 0;$index < count($personas); $index++){
        echo "<tr>".
             "<td class='footable-first-column text-left'><span class='footable-toogle'></span>".$personas[$index]->getNombres()."</td>".   
             "<td class='text-left'>".$personas[$index]->getApellidos()."</td>".
             "<td class='text-left'>".$personas[$index]->getFechaNacimiento()."</td>".                   
             "<td class='text-left'>".$personas[$index]->getFechaConversion()."</td>".
             "<td class='text-left'>".$personas[$index]->getFechaBautismo()."</td>".   
             "<td class='text-left'>".$personas[$index]->getTelefono()."</td>".   
             "<td class='text-left'>".$personas[$index]->getCorreo()."</td>".         
             "<td class='text-left'>".$personas[$index]->getDireccion()."</td>".             
             "<td class='footable-last-column text-center'><a id='".$personas[$index]->getId()."' class='row-delete'><span class='glyphicon glyphicon-remove'></span></a></td>".
             "</tr>";
    }
}else{
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




?>