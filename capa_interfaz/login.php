<!DOCTYPE HTML>
<html>
<head>
<title>Autenticarse</title>
<meta charset="UTF-8" />

<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/structure.css">
</head>

<body>
    <form class="box login" action="login.php" method="post">
	<fieldset class="boxBody">
            <?php
                require_once '../reglas_negocio/ManejadorSesion.php';
                ManejadorSesion::sec_session_start();
                if(isset($_POST['submit'])){
                    if(!$_POST['usuario'] | !$_POST['password']) {
                        die("<font color='red'>Debe ingresar un usuario y una clave.</font>");
                    }
                    $login = $_POST['usuario'];
                    $password = $_POST['password'];

                    try{
                            $usuario = ManejadorSesion::iniciarSesion($login, $password);
                            //Aquí irá el header hacia la página principal a la que hemos accedido
                            
                            
                            
                            echo "<font color='green'> Bienvenido ".$usuario->getLogin()."</font>";
                    }catch(Exception $e){
                            echo "<font color='red'>".$e->getMessage()."</font>";
                    }
                }                
            ?>
	  <label>Usuario</label>
	  <input type="text" name="usuario" tabindex="1" placeholder="nombre de usuario" required>
	  <label><a href="#" class="rLink" tabindex="5">¿No la recuerda?</a>Clave</label>
	  <input type="password" name="password" tabindex="2" required>
	</fieldset>
	<footer>
	  <label><input type="checkbox" tabindex="3">Permanecer Autenticado</label>
	  <input type="submit" name="submit" class="btnLogin" value="Login" tabindex="4">
	</footer>
</form>
<footer id="main">
  
</footer>
</body>
</html>
