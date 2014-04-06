<?php 
require_once '../reglas_negocio/ManejadorSesion.php';
ManejadorSesion::sec_session_start();

if (ManejadorSesion::comprobar_sesion() == true) : ?>

<div class="panel panel-default col-sm-11">
    <!-- Default panel contents -->
    <div class="panel-heading" style="background: white">
    
        <div class="input-group col-sm-4">
          <input type="text" class="form-control" placeholder="Buscar" id="buscar_usuario_modificar" name="buscar_usuario_modificar">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
          </div>          
        </div>
        <br/>
        
    </div>
        
        <div class="table-responsive">
            <div id="example2_wrapper" class="dataTables_wrapper form-inline" role="grid">
                <!--<table class="table table-bordered table-condensed table-striped table-hover">-->
                <table class="table table-bordered table-condensed table-striped table-hover ">
<!--                <table class="table table-condensed table-striped table-hover ">-->
                <thead>
                    <tr>
                        <th data-toggle="true" class="text-center footable-first-column">Nombres</th>
                        <th class="text-center">Apellidos</th>
                        <th data-hide="tiny,phone,medium,tablet" class="text-center">DUI</th>
                        <th data-hide="tiny,phone,medium,tablet" class="text-center">Correo</th>
                        <th data-hide="tiny" class="text-center">Telefono</th>
                        <th data-hide="tiny,phone,medium,tablet" class="text-center">Dirección</th>
                        <th data-hide="tiny,phone,medium" class="text-center footable-last-column">Cumpleaños</th>                        
                    </tr>
                </thead>
                <!--<tbody id ="mostrarUsuarios" class="mostrarUsuarios" role="alert" aria-live="polite" aria-relevant="all">-->
                <tbody id="mostrarUsuarios" class="mostrarUsuarios">

                    <?php

                        $personas = ManejadorPersonal::getTodasPersonas();

                        for ($index = 0; $index < count($personas); $index++) {                          
                            echo "<tr>".
                                 "<td class='footable-first-column'><span class='footable-toogle'></span><div style='cursor: pointer;' id='nombres' class='campoModificable' data-type='text' data-placement='bottom' data-pk=".$personas[$index]->getId()." data-url='mPersonas.php' data-title='Ingrese Nombre'>".$personas[$index]->getNombres()."</div></td>".   
                                    "<td><div style='cursor: pointer;' href='#' id='apellidos' class='campoModificable' data-type='text' data-placement='bottom' data-pk=".$personas[$index]->getId()." data-url='mPersonas.php' data-title='Ingrese Apellido'>".$personas[$index]->getApellidos()."</div></td>".
                                    "<td><div style='cursor: pointer;' href='#' id='dui' class='campoModificable' data-type='text' data-placement='bottom' data-pk=".$personas[$index]->getId()." data-url='mPersonas.php' data-title='Ingrese Dui'>".$personas[$index]->getDUI()."</div></td>".
                                    "<td><div style='cursor: pointer;' href='#' id='correo' class='campoModificable' data-type='text' data-placement='bottom' data-pk=".$personas[$index]->getId()." data-url='mPersonas.php' data-title='Ingrese Correo'>".$personas[$index]->getCorreo()."</div></td>".
                                    "<td><div style='cursor: pointer;' href='#' id='telefono' class='campoModificable' data-type='text' data-placement='bottom' data-pk=".$personas[$index]->getId()." data-url='mPersonas.php' data-title='Ingrese Telefono'>".$personas[$index]->getTelefono()."</div></td>".
                                    "<td><div style='cursor: pointer;' href='#' id='direccion' class='campoModificable' data-type='text' data-placement='bottom' data-pk=".$personas[$index]->getId()." data-url='mPersonas.php' data-title='Ingrese Direccion'>".$personas[$index]->getDireccion()."</div></td>".
                                 "<td class='footable-last-column'><div style='cursor: pointer;' href='#' id='nacimiento' class='fechaEditable' data-type='date' data-placement='bottom' data-pk=".$personas[$index]->getId()." data-url='mPersonas.php' data-title='Fecha Nacimiento'>".$personas[$index]->getFechaNacimiento()."</div></td>".   
                                 "</tr>";
                        }
                   ?>
                </tbody>                
            </table>
            
<!--            <div class="row">
                
                <div class="col-xs-12">
                    <div class="dataTables_paginate paging_bootstrap">
                        <ul class="pagination">
                            <li class="prev"><a href="#"> ← </a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            
                            <li class="next"><a href="#"> → </a></li>
                        </ul>
                    </div>
                </div>
            </div>-->
            </div>
        </div>
        
    </div>

<?php else : ?>
    <p>
        <span class="">Usted no está autorizado para acceder a esta página.</span> Por favor <a href="../capa_interfaz/index.php">Autentíquese</a>.
    </p>
<?php endif; ?>    
    
<script type="text/javascript" src="bootstrap/xeditable/js/bootstrap-editable.js"></script>
<script type="text/javascript" src="js/tabla.js"></script>

<!--<script type="text/javascript">
    $(function () {
        $('table').footable({
            breakpoints: {
                tiny: 180,                
                phone: 256,
                medium: 512,
                tablet: 768,                
            }
        });
    });
</script>-->