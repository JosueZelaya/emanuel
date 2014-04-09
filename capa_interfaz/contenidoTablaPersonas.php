<?php

require_once '../reglas_negocio/ManejadorPersonal.php';
                    
//$pagina=1;                    
//$numeroResultados = 2;
include './paginacionConfig.php';

$personas;

if($_GET){
    if($_GET['pagina']){
        $pagina = $_GET['pagina'];
    }
    
    $personas = ManejadorPersonal::getTodasPersonasConPaginacion($pagina,$numeroResultados);
}else{
    $personas = ManejadorPersonal::getTodasPersonasConPaginacion($pagina, $numeroResultados);
}


for ($index = 0; $index < count($personas); $index++) {
    echo "<tr>".
         "<td class='footable-first-column text-left'><span class='footable-toogle'></span>".$personas[$index]->getNombres()."</td>".   
         "<td class='text-left'>".$personas[$index]->getApellidos()."</td>".
         "<td class='text-left'>".$personas[$index]->getDUI()."</td>".
         "<td class='text-left'>".$personas[$index]->getTelefono()."</td>".   
         "<td class='text-left'>".$personas[$index]->getCorreo()."</td>".         
         "<td class='text-left'>".$personas[$index]->getDireccion()."</td>".
         "<td class='footable-last-column text-left'>".$personas[$index]->getFechaNacimiento()."</td>".   
         "</tr>";
}        
?>