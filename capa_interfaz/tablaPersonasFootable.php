<div class="panel panel-default col-sm-11">
     <!--Personas que visitan la iglesia--> 
    <div class="row panel-heading" style="background: white">
    
        <div class="col-sm-4">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Buscar" id="buscar_usuario" name="buscar_usuario">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>            
              </div>                              
            </div> 
        </div>
        
        <div class="col-sm-8">
            <div class="input-group">
                <label for="meses" class="col-sm-5 control-label">Cumpleañeros</label>
                <div class="col-sm-7">
                    <select id="meses" class="form-control">
                      <option value="0"></option>  
                      <option value="01">Enero</option>
                      <option value="02">Febrero</option>
                      <option value="03">Marzo</option>
                      <option value="04">Abril</option>
                      <option value="05">Mayo</option>
                      <option value="06">Junio</option>
                      <option value="07">Julio</option>
                      <option value="08">Agosto</option>
                      <option value="09">Septiembre</option>
                      <option value="10">Octubre</option>
                      <option value="11">Noviembre</option>
                      <option value="12">Diciembre</option>
                    </select>
                </div>                
            </div>             
        </div>
        
        <br/>
        
    </div>
        
     <br/>
     
        <!--<div class="table-responsive">-->
        <div class="">
            <div id="example2_wrapper" class="dataTables_wrapper form-inline" role="grid">                
                <table class="table table-bordered table-condensed table-striped table-hover ">
                <thead>
                    <tr>
                        <th data-toggle="true" class="text-left footable-first-column">Nombres</th>
                        <th class="text-left">Apellidos</th>
                        <th data-hide="tiny,phone,medium,tablet,laptop" class="text-left">DUI</th>
                        <th data-hide="tiny" class="text-center">Telefono</th>
                        <th data-hide="tiny,phone,medium,tablet" class="text-left">Correo</th>                        
                        <th data-hide="tiny,phone,medium,tablet" class="text-left">Dirección</th>
                        <th data-hide="tiny,phone,medium" class="text-left footable-last-column">Cumpleaños</th>
                    </tr>
                </thead>
                <!--<tbody id ="mostrarUsuarios" class="mostrarUsuarios" role="alert" aria-live="polite" aria-relevant="all">-->
                <tbody id="mostrarUsuarios" class="mostrarUsuarios">                
                    <?php 
                    $tipoResultado = "";
                    require_once './contenidoTablaPersonas.php'; ?>                                   
                </tbody>                
            </table>
                
            <div class="row">                
                <div class="col-xs-12">
                    <div class="dataTables_paginate paging_bootstrap">
                        <div id="paginacion">
                                <?php $css_class="paginaPersonas"; require_once './paginadorTablaPersonas.php'; ?>
                        </div>                        
                    </div>
                </div>
            </div>
                

            </div>
        </div>        
    </div>


