<div class="container">
    
    <div class="jumbotron text-center">
        
<!--        <h1>¡Dios es Fiel!</h1>-->

    <div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">
    
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Buscar" id="buscar_usuario" name="buscar_usuario">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
          </div>
        </div>
        
        
    </div>
        
        <div class="table-responsive">
                <table class="table table-bordered table-condensed table-striped table-hover ">
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
                <tbody id="mostrarUsuarios" class="mostrarUsuarios">

                    <?php include './tablaPersonas.php';?>
                
                </tbody>                
            </table>
        </div>
        
        
    </div>
    </div>
</div>