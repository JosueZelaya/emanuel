<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading" style="background: white">
    
        <div class="input-group col-lg-4">
          <input type="text" class="form-control" placeholder="Buscar" id="buscar_usuario" name="buscar_usuario">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
          </div>          
        </div>
        <br/>
        
    </div>
        
        <div class="table-responsive">
            <div id="example2_wrapper" class="dataTables_wrapper form-inline" role="grid">
                <table class="table table-bordered table-condensed table-striped table-hover">
<!--                <table class="table table-condensed table-striped table-hover ">-->
                <thead>
                    <tr>
                        <th class="text-center">Nombres</th>
                        <th class="text-center">Apellidos</th>
                        <th class="text-center">DUI</th>
                        <th class="text-center">Correo</th>
                        <th class="text-center">Telefono</th>
                        <th class="text-center">Dirección</th>
                        <th class="text-center">Cumpleaños</th>
                    </tr>
                </thead>
                <!--<tbody id ="mostrarUsuarios" class="mostrarUsuarios" role="alert" aria-live="polite" aria-relevant="all">-->
                <tbody id="mostrarUsuarios" class="mostrarUsuarios">

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


