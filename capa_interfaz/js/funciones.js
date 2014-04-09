$(function (){
//    $('#contenedor').load("agregarUsuario.php");
    
    //Funcion 1: Carga una Página en el div contenedor al hace click al elemento con id=cargar
    $('#cargar').click(function (){
        $('#contenedor').load("agregarUsuario.php");    
    });
    
    $('#agregarPersona').click(function(){
        $('#container').load("agregarPersona.php");    
    });
    
    $('#modificarPersona').click(function(){
        $('#container').load("modificarPersona.php");    
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
    
    
    $('table').footable({
        breakpoints: {
            tiny: 180,                
            phone: 256,
            medium: 512,
            tablet: 768,
            laptop: 1024
        }
    });
    
    
    $(document).on("click",".paginaPersonas",function(){        
        var page = $(this).attr('data');        
        var dataString = 'pagina='+page;          
        $.ajax({
            type: "GET",
            url: "contenidoTablaPersonas.php",
            data: dataString,
            success: function(data) {                
                $('#mostrarUsuarios').fadeIn(1000).html(data).trigger('footable_redraw');                
            }            
        });
        $.ajax({
            type: "GET",
            url: "paginadorTablaPersonas.php",
            data: dataString,
            success: function(data){
                $('.pagination').fadeIn(1000).html(data);
            }
        });
    });
    
    //Funcion 3: Autocompletado cuando el elemento se agregó después
    $(document).on("keydown.autocomplete","#buscar_usuario",function(){
         $(this).autocomplete({                    
            source : 'autocompletarUsuario.php',
            select : function(event,ui){
                $('#mostrarUsuarios').slideUp('fast',function(){                   
                    $('#mostrarUsuarios').html(
                    "<tr>"+
                    "<td data-toggle='true' class='footable-first-column'><span class='footable-toogle'></span>"+ui.item.nombres+"</td>"+
                    "<td>"+ui.item.apellidos+"</td>"+
                    "<td data-hide='tiny,phone,medium,tablet'>"+ui.item.dui+"</td>"+
                    "<td data-hide='tiny'>"+ui.item.telefono+"</td>"+
                    "<td data-hide='tiny,phone,medium,tablet'>"+ui.item.correo+"</td>"+                    
                    "<td data-hide='tiny,phone,medium,tablet'>"+ui.item.direccion+"</td>"+
                    "<td data-hide='tiny,phone,medium' class='footable-last-column'>"+ui.item.fecha+"</td>"+
                    "</tr>"
                    ).trigger('footable_redraw');                    
                });
                $('#mostrarUsuarios').slideDown('fast');
                $('.pagination').html("");
            }                        
        });
    });
    
    //Funcion 3: Autocompletado cuando el elemento se agregó después
    $(document).on("keydown.autocomplete","#buscar_usuario_modificar",function(){
         $(this).autocomplete({                    
            source : 'autocompletarUsuario.php',
            select : function(event,ui){
                $('#mostrarUsuarios').slideUp('fast',function(){
                   $('#mostrarUsuarios').html(                    
                    "<tr>"+
                    "<td><div style='cursor: pointer;' id='nombres' class='campoModificable' data-type='text' data-placement='bottom' data-pk="+ui.item.id+" data-url='mPersonas.php' data-title='Ingrese Nombre'>"+ui.item.nombres+"</div></td>"+
                    "<td><div style='cursor: pointer;' id='apellidos' class='campoModificable' data-type='text' data-placement='bottom' data-pk="+ui.item.id+" data-url='mPersonas.php' data-title='Ingrese Apellidos'>"+ui.item.apellidos+"</div></td>"+
                    "<td><div style='cursor: pointer;' id='dui' class='campoModificable' data-type='text' data-placement='bottom' data-pk="+ui.item.id+" data-url='mPersonas.php' data-title='Ingrese DUI'>"+ui.item.dui+"</div></td>"+
                    "<td><div style='cursor: pointer;' id='correo' class='campoModificable' data-type='text' data-placement='bottom' data-pk="+ui.item.id+" data-url='mPersonas.php' data-title='Ingrese Correo'>"+ui.item.correo+"</div></td>"+
                    "<td><div style='cursor: pointer;' id='telefono' class='campoModificable' data-type='text' data-placement='bottom' data-pk="+ui.item.id+" data-url='mPersonas.php' data-title='Ingrese Telefono'>"+ui.item.telefono+"</div></td>"+
                    "<td><div style='cursor: pointer;' id='direccion' class='campoModificable' data-type='text' data-placement='bottom' data-pk="+ui.item.id+" data-url='mPersonas.php' data-title='Ingrese Dirección'>"+ui.item.direccion+"</div></td>"+
                    "<td><div style='cursor: pointer;' href='#' id='nacimiento' class='fechaEditable' data-type='date' data-placement='bottom' data-pk="+ui.item.id+" data-url='mPersonas.php' data-title='Fecha Nacimiento'>"+ui.item.fecha+"</div></td>"+
                    "</tr>"+
                    "<script type='text/javascript' src='bootstrap/xeditable/js/bootstrap-editable.js'></script>"+
                    "<script type='text/javascript' src='js/tabla.js'></script>"
                    );                                                            
                });
                $('#mostrarUsuarios').slideDown('fast');
            }                        
        });
    });
    
    
    $('#barraPrincipal').on('shown.bs.collapse', function () {        
        $("#spanBP").removeClass("glyphicon-plus").addClass("glyphicon-minus");
     });

     $('#barraPrincipal').on('hidden.bs.collapse', function () {         
        $("#spanBP").removeClass("glyphicon-minus").addClass("glyphicon-plus");
     });
    
    
});


