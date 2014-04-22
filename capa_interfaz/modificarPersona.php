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
                        <th data-hide="tiny,phone,medium" class="text-center">Cumpleaños</th>  
                        <th data-hide="tiny,phone,medium,tablet" class="text-left">Conversion</th>
                        <th data-hide="tiny,phone,medium,tablet" class="text-left">Bautismo</th>
                        <th data-hide="tiny" class="text-center">Telefono</th>
                        <th data-hide="tiny,phone,medium,tablet,laptop" class="text-center">Correo</th>                        
                        <th data-hide="tiny,phone,medium,tablet,laptop" class="text-center footable-last-column">Dirección</th>
                        
                    </tr>
                </thead>
                <!--<tbody id ="mostrarUsuarios" class="mostrarUsuarios" role="alert" aria-live="polite" aria-relevant="all">-->
                <tbody id="mostrarUsuarios" class="mostrarUsuarios">

                    <?php

                        //$personas = ManejadorPersonal::getTodasPersonas();
                        $tipoResultado = "modificarPersonas";
                        include_once 'contenidoTablaPersonas.php';
                        
                   ?>
                </tbody>                
            </table>
            <div class="row">                
                <div class="col-xs-12">
                    <div class="dataTables_paginate paging_bootstrap">
                        <div id="paginacion">
                                <?php $css_class='paginaPersonasModificar'; require_once './paginadorTablaPersonas.php'; ?>
                        </div>                        
                    </div>
                </div>
            </div>
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