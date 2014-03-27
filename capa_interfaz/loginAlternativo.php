<?php
    require_once '../reglas_negocio/ManejadorSesion.php';
    ManejadorSesion::sec_session_start();
    if(isset($_POST['submit'])){
        if(!$_POST['usuario'] | !$_POST['password']) {
            //die("<font color='red'>Debe ingresar un usuario y una clave.</font>");
            echo "<font color='red'>Debe ingresar un usuario y una clave.</font>";
        }
        $login = $_POST['usuario'];
        $password = $_POST['password'];

        try{
                $usuario = ManejadorSesion::iniciarSesion($login, $password);

                //enviamos al usuario a su pagina correspondiente.
                //header("Location: usuarioAutenticado.php");                            
                $respuesta = "Bienvenido";
                $arreglo = array("respuesta"=>$respuesta);
                print json_encode($arreglo);
                //echo json_encode(array('resultado'=>'Bienvenido '));
        }catch(Exception $e){
                $respuesta = "error";
                $arreglo = array("respuesta"=>$respuesta);
                print json_encode($arreglo);
                  //echo json_encode(array('resultado'=>'error'));

        }
    }   
?>