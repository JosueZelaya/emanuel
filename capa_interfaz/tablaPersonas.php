<?php

$personas = ManejadorPersonal::getTodasPersonas();

for ($index = 0; $index < count($personas); $index++) {
    echo "<tr>".
         "<td>".$personas[$index]->getNombres()."</td>".   
         "<td>".$personas[$index]->getApellidos()."</td>".
         "<td>".$personas[$index]->getDUI()."</td>".
         "<td>".$personas[$index]->getCorreo()."</td>".
         "<td>".$personas[$index]->getTelefono()."</td>".
         "<td>".$personas[$index]->getDireccion()."</td>".
         "<td>".$personas[$index]->getFechaNacimiento()."</td>".   
         "</tr>";
}



