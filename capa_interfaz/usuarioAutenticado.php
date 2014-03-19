<?php

require_once '../reglas_negocio/ManejadorSesion.php';

ManejadorSesion::sec_session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Autenticación Segura: Pagina Protegida</title>
        <link rel="stylesheet" href="styles/main.css" />
    </head>
    <body>
        <?php if (ManejadorSesion::login_check() == true) : ?>
            <p>Bienvenido <?php echo htmlentities($_SESSION['usuario_nombres']);
            ?>!</p>
            <p>
                Esta es una página protegida que sirve como ejemplo. Para acceder a esta página
                los usuarios deben estar autenticados.                               
            </p>
            <p>Volver a: <a href="logout.php">Cerrar Sesion</a></p>
            
        <?php else : ?>
            <p>
                <span class="">Usted no está autorizado para acceder a esta página.</span> Por favor <a href="../capa_interfaz/login.php">Autentíquese</a>.
            </p>
        <?php endif; ?>
    </body>
</html>

