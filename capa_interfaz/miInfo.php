<?php 
require_once '../reglas_negocio/ManejadorSesion.php';
ManejadorSesion::sec_session_start();

if (ManejadorSesion::comprobar_sesion() == true) : ?>

<div class="panel panel-default col-sm-11">
    <!-- Default panel contents -->
    <div class="panel-heading" style="background: white">
        <br/>
        
    </div>
        
        <div class="table-responsive">
            <div id="example2_wrapper" class="dataTables_wrapper form-inline" role="grid">
                <!--<table class="table table-bordered table-condensed table-striped table-hover">-->
                <table class="table table-bordered table-condensed table-striped table-hover ">
<!--                <table class="table table-condensed table-striped table-hover ">-->
                <thead>
                <tr>
                <th class="center">
                    Propiedad
                </th>
                <th class="center">
                    Valor
                </th>
                </tr>
                    
                </thead>
                <!--<tbody id ="mostrarUsuarios" class="mostrarUsuarios" role="alert" aria-live="polite" aria-relevant="all">-->
                <tbody id="mostrarUsuarios" class="mostrarUsuarios">

                    <?php

                    require_once '../reglas_negocio/ManejadorPersonal.php';                    
                    $usuario = ManejadorPersonal::getUsuarioPorId($_SESSION['usuario_id']);
                    
                        echo "<tr>".
                            "<td>Nombres</td>".
                            "<td class='footable-first-column'><span class='footable-toogle'></span><div style='cursor: pointer;' id='nombres' class='campoModificable' data-type='text' data-placement='bottom' data-pk=".$usuario->getId()." data-url='mUsuarios.php' data-title='Ingrese Nombre'>".$usuario->getNombres()."</div></td>".       
                            "</tr>";
                        echo "<tr>".
                             "<td>Apellidos</td>".
                             "<td><div style='cursor: pointer;' href='#' id='apellidos' class='campoModificable' data-type='text' data-placement='bottom' data-pk=".$usuario->getId()." data-url='mUsuarios.php' data-title='Ingrese Apellido'>".$usuario->getApellidos()."</div></td>".   
                             "</tr>";
                        echo "<tr>".
                             "<td>Login</td>".
                             "<td><div style='cursor: pointer;' href='#' id='login' class='campoModificable' data-type='text' data-placement='bottom' data-pk=".$usuario->getId()." data-url='mUsuarios.php' data-title='Ingrese Login'>".$usuario->getLogin()."</div></td>".   
                             "</tr>";
                        echo "<tr>".
                             "<td>Password</td>".
                             "<td><div style='cursor: pointer;' href='#' id='password' class='campoModificable' data-type='text' data-placement='bottom' data-pk=".$usuario->getId()." data-url='mUsuarios.php' data-title='Ingrese Password'>".$usuario->getPassword()."</div></td>".
                             "</tr>";
                        echo "<tr>".
                             "<td>Fecha de nacimiento</td>".
                             "<td><div style='cursor: pointer;' href='#' id='nacimiento' class='fechaEditable' data-type='date' data-placement='bottom' data-pk=".$usuario->getId()." data-url='mUsuarios.php' data-title='Fecha Nacimiento'>".$usuario->getFechaNacimiento()."</div></td>".                
                             "</tr>";
                        echo "<tr>".
                             "<td>Fecha de conversion</td>".
                             "<td><div style='cursor: pointer;' href='#' id='conversion' class='fechaEditable' data-type='date' data-placement='bottom' data-pk=".$usuario->getId()." data-url='mUsuarios.php' data-title='Fecha Conversion'>".$usuario->getFechaConversion()."</div></td>".
                             "</tr>";
                        echo "<tr>".
                             "<td>Fecha de bautismo</td>".
                             "<td><div style='cursor: pointer;' href='#' id='bautismo' class='fechaEditable' data-type='date' data-placement='bottom' data-pk=".$usuario->getId()." data-url='mUsuarios.php' data-title='Fecha Bautismo'>".$usuario->getFechaBautismo()."</div></td>".
                             "</tr>";
                        echo "<tr>".
                             "<td>Telefono</td>".
                             "<td><div style='cursor: pointer;' href='#' id='telefono' class='campoModificable' data-type='text' data-placement='bottom' data-pk=".$usuario->getId()." data-url='mUsuarios.php' data-title='Ingrese Telefono'>".$usuario->getTelefono()."</div></td>".
                             "</tr>";
                        echo "<tr>".
                             "<td>Correo</td>".
                             "<td><div style='cursor: pointer;' href='#' id='correo' class='campoModificable' data-type='text' data-placement='bottom' data-pk=".$usuario->getId()." data-url='mUsuarios.php' data-title='Ingrese Correo'>".$usuario->getCorreo()."</div></td>".                
                             "</tr>";
                        echo "<tr>".
                             "<td>Direccion</td>".
                             "<td class='footable-last-column'><div style='cursor: pointer;' href='#' id='direccion' class='campoModificable' data-type='text' data-placement='bottom' data-pk=".$usuario->getId()." data-url='mUsuarios.php' data-title='Ingrese Direccion'>".$usuario->getDireccion()."</div></td>".                
                             "</tr>";    
                   ?>
                </tbody>                
            </table>
            
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
