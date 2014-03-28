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
                $('#mostrarUsuarios').slideUp('fast',function(){
                   $('#mostrarUsuarios').html(
                    "detalles usuario</h2><br/>"+
                    'nombre: '+ui.item.value+'<br/>'+                       
                    'telefono: '+ui.item.telefono+'<br/>'+
                    'fecha de nacimiento: '+ui.item.fecha

                    );                                                            
                });
                $('#mostrarUsuarios').slideDown('fast');
            }
    });
    
    //Funcion 3: Autocompletado cuando el elemento se agregó después
    $(document).on("keydown.autocomplete","#buscar_usuario",function(){
         $(this).autocomplete({                    
            source : 'autocompletarUsuario.php',
            select : function(event,ui){
                $('#mostrarUsuarios').slideUp('fast',function(){
                   $('#mostrarUsuarios').html(                    
                    "<tr>"+
                    "<td>"+ui.item.nombres+"</td>"+
                    "<td>"+ui.item.apellidos+"</td>"+
                    "<td>"+ui.item.dui+"</td>"+
                    "<td>"+ui.item.correo+"</td>"+
                    "<td>"+ui.item.telefono+"</td>"+
                    "<td>"+ui.item.direccion+"</td>"+
                    "<td>"+ui.item.fecha+"</td>"+
                    "</tr>"
                    
                    );                                                            
                });
                $('#mostrarUsuarios').slideDown('fast');
            }                        
        });
    });
    
    
    
    
});


