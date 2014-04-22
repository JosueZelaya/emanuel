<div class="panel panel-default col-sm-11">
     <!--Personas que visitan la iglesia--> 
    <div class="panel-heading" style="background: white">
    
        <div class="input-group col-sm-4">
          <input type="text" class="form-control" placeholder="Buscar" id="buscar_usuario_eliminar" name="buscar_usuario_eliminar">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
          </div>          
        </div>
        <br/>
        
    </div>
        
        <!--<div class="table-responsive">-->
        <div class="">
            <div id="example2_wrapper" class="dataTables_wrapper form-inline" role="grid">                
                <table class="table table-bordered table-condensed table-striped table-hover ">
                <thead>
                    <tr>
                        <th data-toggle="true" class="text-left footable-first-column">Nombres</th>
                        <th class="text-left">Apellidos</th>
                        <th data-hide="tiny,phone,medium" class="text-left">Cumpleaños</th>
                        <th data-hide="tiny,phone,medium,tablet" class="text-left">Conversion</th>
                        <th data-hide="tiny,phone,medium,tablet" class="text-left">Bautismo</th> 
                        <th data-hide="tiny" class="text-center">Telefono</th>
                        <th data-hide="tiny,phone,medium,tablet,laptop" class="text-left">Correo</th>                        
                        <th data-hide="tiny,phone,medium,tablet,laptop" class="text-left">Dirección</th>                        
                        <th class="footable-last-column text-left">Eliminar</th>
                    </tr>
                </thead>
                <!--<tbody id ="mostrarUsuarios" class="mostrarUsuarios" role="alert" aria-live="polite" aria-relevant="all">-->
                <tbody id="mostrarUsuarios" class="mostrarUsuarios">                
                    <?php 
                    $tipoResultado = "eliminarPersonas";
                    require_once './contenidoTablaPersonas.php'; ?>                                   
                </tbody>                
            </table>
                
            <div class="row">                
                <div class="col-xs-12">
                    <div class="dataTables_paginate paging_bootstrap">
                        <div id="paginacion">
                                <?php $css_class="paginaPersonasEliminar"; require_once './paginadorTablaPersonas.php'; ?>
                        </div>                        
                    </div>
                </div>
            </div>
                

            </div>
        </div>        
    </div>

<script src="bootstrap/FooTable-2/js/footable.js?v=2-0-1" type="text/javascript"></script>
<script type="text/javascript" src="js/funciones.js"></script> 