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
    <meta name="viewport" content="width = device-width, initial-scale = 1.0, minimum-scale = 1.0, maximum-scale = 1.0, user-scalable = no"/>
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <title>Area de Usuario</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">   
    
    <!-- jquery ui -->
    <link rel="stylesheet" type="text/css" href="js/jquery-ui/css/smoothness/css/smoothness/jquery-ui-1.10.4.custom.min.css">
    
    <!-- datepicker -->
    <link href="css/default.css" type="text/css" rel="stylesheet">
    <link href="css/default.date.css" type="text/css" rel="stylesheet">    
    
    <!-- x-table -->
    <link href="bootstrap/xeditable/css/bootstrap-editable.css" rel="stylesheet">
    
    <!-- footable -->
    <link href="bootstrap/FooTable-2/css/footable.core.css?v=2-0-1" rel="stylesheet" type="text/css"/>
    
  </head>
  <body>
      
  
    <?php if (ManejadorSesion::comprobar_sesion() == true) : ?>
      
      <!-- Barra de menu -->
        <?php include 'menuPrincipal.php';?>    
    
        
      <div class="row">       

          <!-- barra vertical con opciones de administración -->
          <?php include './barraVertical.php';?>

          <!-- Jumbotron para mostrar a todos los usuarios -->
            <?php include './jumbotronUsuarios.php';?>        
          
      </div>
      
      
      
      <!-- footer -->
        <?php include './footer.php';?>
      
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
    <script type="text/javascript" src="js/jquery-ui/ui/jquery.ui.datepicker.js"></script>
    <script src="bootstrap/FooTable-2/js/footable.js?v=2-0-1" type="text/javascript"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>    
    <script type="text/javascript" src="js/funciones.js"></script> 
    

    </body>
</html>
