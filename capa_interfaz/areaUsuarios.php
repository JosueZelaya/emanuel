<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

require_once '../reglas_negocio/ManejadorSesion.php';

ManejadorSesion::sec_session_start();
?>

<html lang="es">
  <head>
      <meta charset="UTF-8">
     <meta http-equiv="content-type" content="text/html; charset=UTF-8">         
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Area de Usuario</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    
  </head>
  <body>
      
  
    <?php if (ManejadorSesion::comprobar_sesion() == true) : ?>
      
      <!-- Barra de menu -->
        <?php include 'menuPrincipal.php';?>
      
      
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
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>    
    <script type="text/javascript" src="js/funciones.js"></script>    
    </body>
</html>
