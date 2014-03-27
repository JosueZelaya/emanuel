$(function (){
    $('#contenedor').load("agregarUsuario.php");
    
    //Funcion 1: Carga una Página en el div contenedor al hace click al elemento con id=cargar
    $('#cargar').click(function (){
        $('#contenedor').load("agregarUsuario.php");    
    });
    
    //Funcion 2: Autocompletado en busqueda
    $('#buscar_usuario').autocomplete({                    
            source : 'autocompletarUsuario.php',
            select : function(event,ui){
                $('#resultado').slideUp('fast',function(){
                   $('#resultado').html(
                    "detalles usuario</h2><br/>"+
                    'nombre: '+ui.item.value+'<br/>'+                       
                    'telefono: '+ui.item.telefono+'<br/>'+
                    'fecha de nacimiento: '+ui.item.fecha

                    );                                                            
                });
                $('#resultado').slideDown('fast');
            }                        
    });
    
    //Funcion 3: Autocompletado cuando el elemento se agregó después
    $(document).on("keydown.autocomplete","#buscar_usuario",function(){
         $(this).autocomplete({                    
            source : 'autocompletarUsuario.php',
            select : function(event,ui){
                $('#resultado').slideUp('fast',function(){
                   $('#resultado').html(                    
                    "<div id='cabecera' class='cabecera'><h2>"+ui.item.value+"</h2></div>"+
                    "<div id='col1' class='columna'>"+
                    "<div id='' class='fila'>nombre: </div>"+
                    "<div id='' class='fila2'>telefono: </div>"+
                    "<div id='' class='fila'>fecha de nacimiento: </div>"+
                    "</div>"+
                    
                    "<div id='col2' class='columna'>"+
                    "<div id='' class='fila'>"+ui.item.value+"</div>"+
                    "<div id='' class='fila2'>"+ui.item.telefono+"</div>"+
                    "<div id='' class='fila'>"+ui.item.fecha+"</div>"+
                    "</div>"
                    

                    );                                                            
                });
                $('#resultado').slideDown('fast');
            }                        
        });
    });
    
    
    
    
});


