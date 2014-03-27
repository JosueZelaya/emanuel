<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation" id="nav-pills">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>                  
                </li>  
              </ul>
                <ul class="nav nav-pills navbar-nav navbar-right">
                    <li class="dropdown active" id="menuLogin">
                     <a href="#" class="dropdown-toggle active" data-toggle="dropdown" id="navLogin">Login </a>
                     
                         <div class="dropdown-menu" style="padding:10px;">
                              
                             <div id="loginModal" class="modal fade in" role="dialog" aria-hidden="false" style="display: block;">
                                   <div class="modal-dialog">
                                   <div class="modal-content">
                                       <div class="modal-header">
                                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                           <h1 class="text-center">Iniciar Sesión</h1>
                                       </div>
                                       <div class="modal-body">
                                           <form class="form col-md-12 center-block">
                                             <div class="form-group">
                                               <input type="text" class="form-control input-lg" placeholder="Usuario">
                                             </div>
                                             <div class="form-group">
                                               <input type="password" class="form-control input-lg" placeholder="Clave">
                                             </div>
                                             <div class="form-group">
                                               <button class="btn btn-primary btn-lg btn-block">Entrar</button>

                                             </div>
                                           </form>
                                       </div>
                                       <div class="modal-footer">
                                           <div class="col-md-12">
                                           <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                                                   </div>	
                                       </div>
                                   </div>
                                   </div>
                                 </div>
                             
                         </div>  
                 </li>
              </ul>
            </div>      
          </div>
        </div>

      </div>
    </div>
