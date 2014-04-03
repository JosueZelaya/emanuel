<?php 
require_once '../reglas_negocio/ManejadorSesion.php';
ManejadorSesion::sec_session_start();

if (ManejadorSesion::comprobar_sesion() == true) : ?>

<div class="panel panel-default col-sm-11">
    <form class="form-horizontal" id="formularioAgregarPersona">
        <div class="modal-header">
            <!--<h4>Agregar Persona</h4>-->
            </div>
        <div class="modal-body">                    
            <div class="form-group">
                <label for="nombres" class="col-lg-2 control-label">Nombres</label>
                <div class="col-lg-4">
                    <input type="text" id="nombres" name="nombres" class="form-control formulario" placeholder="Juan" required/>
                </div>
            </div>
            <div class="form-group">
                <label for="apellidos" class="col-lg-2 control-label">Apellidos</label>
                <div class="col-lg-4">
                    <input type="text" id="apellidos" name="apellidos" class="form-control formulario" placeholder="El Bautista" required/>
                </div>
            </div>
            <div class="form-group">
                <label for="dui" class="col-lg-2 control-label">DUI o Cédula</label>
                <div class="col-lg-4">
                    <input type="text" id="dui" name="dui" class="form-control" placeholder="21921021-2"/>
                </div>
            </div>
            <div class="form-group">
                <label for="correo" class="col-lg-2 control-label">Correo</label>
                <div class="col-lg-4">
                    <input type="text" id="correo" name="correo" class="form-control" placeholder="juan@generaciondevivoras.com"/>
                </div>
            </div>
            <div class="form-group">
                <label for="telefono" class="col-lg-2 control-label">Teléfono</label>
                <div class="col-lg-4">
                    <input type="text" id="telefono" name="telefono" class="form-control" placeholder="76761212"/>
                </div>
            </div>
            <div class="form-group">
                <label for="direccion" class="col-lg-2 control-label">Dirección</label>
                <div class="col-lg-4">
                    <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Col El Buen Vecino Calle Somos buena gente"/>
                </div>
            </div>
            <div class="form-group">
                <label for="nacimiento" class="col-lg-2 control-label">Fecha de Nacimiento</label>
                <div class="col-lg-4">
                    <!--<input type="text" id="nacimiento" name="nacimiento" class="form-control" placeholder="Col El Buen Vecino"/>-->                    
                        <input id="datepicker" name="nacimiento" data-value="01/01/2014" class="form-control span2" size="16" type="text" readonly="">                        
                </div>
            </div>
        </div>
        <div class="modal-footer"> 
            <div id="resultado" class="resultado"></div>
            <!--<button class="btn btn-primary" type="submit" name="submit">Entrar</button>-->
            <input type="submit" name="submit" class="btn btn-primary" value="Agregar" tabindex="4">
            <input type="reset" name="reset" class="btn btn-default" value="Borrar" tabindex="4">
            <!--<a class="btn btn-default" data-dismiss="modal">Cancelar</a>-->                    
            <!--<a class="btn btn-primary">Entrar</a>-->
        </div>
    </form>
</div>
    


<?php else : ?>
    <p>
        <span class="">Usted no está autorizado para acceder a esta página.</span> Por favor <a href="../capa_interfaz/index.php">Autentíquese</a>.
    </p>
<?php endif; ?>

<script type="text/javascript" src="js/picker.js"></script>
<script type="text/javascript" src="js/picker.date.js"></script>
<script type="text/javascript" src="js/es_ES.js"></script>
<script type="text/javascript" src="js/ajaxpost.js"></script>