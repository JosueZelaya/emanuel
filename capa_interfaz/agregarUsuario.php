<?php

require_once '../reglas_negocio/ManejadorSesion.php';
require_once '../reglas_negocio/ManejadorPersonal.php';

ManejadorSesion::sec_session_start();
?>

        <?php if (ManejadorSesion::comprobar_sesion() == true) : ?>
           
        <div id="busqueda">
            <input type="text" id="buscar_usuario" name="buscar_usuario"/>      
      
        </div>
        
        <div id="resultado" class="resultado">            
            
        </div>

        
        
            
        <?php else : ?>
            <p>
                <span class="">Usted no está autorizado para acceder a esta página.</span> Por favor <a href="../capa_interfaz/login.php">Autentíquese</a>.
            </p>
        <?php endif; 
            
            


