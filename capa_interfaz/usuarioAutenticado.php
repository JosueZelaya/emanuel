<?php

require_once '../reglas_negocio/ManejadorSesion.php';

ManejadorSesion::sec_session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Area de Usuario</title>        
        <link rel="stylesheet" type="text/css" href="js/jquery-ui/css/cupertino/jquery-ui-1.10.4.custom.min.css">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        
        
    </head>
    <body>
        <?php if (ManejadorSesion::comprobar_sesion() == true) : ?>
            <p>Bienvenido <?php echo htmlentities($_SESSION['usuario_nombres']);             
            ?>! <a href='logout.php'>Cerrar Sesion</a></p>
            
            <div id="contenedor">
            
                
                
            </div>
            
            
        <?php else : ?>
            <p>
                <span class="">Usted no está autorizado para acceder a esta página.</span> Por favor <a href="../capa_interfaz/index.php">Autentíquese</a>.
            </p>
        <?php endif; ?>
        
    <script type="text/javascript" src="js/jquery-ui/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/jquery-ui/ui/jquery.ui.core.js"></script>
    <script type="text/javascript" src="js/jquery-ui/ui/jquery.ui.widget.js"></script>
    <script type="text/javascript" src="js/jquery-ui/ui/jquery.ui.position.js"></script>
    <script type="text/javascript" src="js/jquery-ui/ui/jquery.ui.menu.js"></script>
    <script type="text/javascript" src="js/jquery-ui/ui/jquery.ui.autocomplete.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>    
    </body>
</html>

