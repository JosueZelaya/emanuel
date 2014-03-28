<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <a href="#" class="navbar-brand">Emanuel</a>
        <button class="navbar-toggle" data-toggle="collapse" data-target=".enlacesBarra">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        
        <div class="collapse navbar-collapse enlacesBarra">
            
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#" >Inicio</a></li>
                <li><a href="#" >Acerca de</a></li>
                <li><a href="#" >Contactanos</a></li>
                <li><a href="#Autenticar" data-toggle="modal">Iniciar Sesión</a></li>
                
            </ul>
            
        </div>
        
    </div>
    
</div>

<div class="modal fade" id="Autenticar" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <?php include './formularioLogin.php';?>
        </div>
    </div>
</div>
