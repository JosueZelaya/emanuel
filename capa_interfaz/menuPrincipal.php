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
            <form class="form-horizontal" id="foo">
                <div class="modal-header">
                    <h1>Iniciar Sesión</h1>
                    <div class="control-label" id="resultado"></div>
                </div>
                <div class="modal-body">                    
                    <div class="form-group">
                        <label for="usuario" class="col-lg-2 control-label">Usuario</label>
                        <div class="col-lg-10">
                            <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required/>
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="password" class="col-lg-2 control-label">Clave</label>
                        <div class="col-lg-10">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Clave" required/>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">                
                    <!--<button class="btn btn-primary" type="submit" name="submit">Entrar</button>-->
                    <input type="submit" name="submit" class="btn btn-primary" value="Entrar" tabindex="4">
                    <a class="btn btn-default" data-dismiss="modal">Cancelar</a>                    
                    <!--<a class="btn btn-primary">Entrar</a>-->
                </div>
            </form>
        </div>
    </div>
</div>
