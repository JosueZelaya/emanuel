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
            <p>Bienvenido <?php echo htmlentities($_SESSION['usuario_nombre']); ?>!</p>
            <p>
                This is an example protected page.  To access this page, users
                must be logged in.  At some stage, we'll also check the role of
                the user, so pages will be able to determine the type of user
                authorised to access the page.
            </p>
            <p>Return to <a href="index.php">Iniciar Sesion</a></p>
        <?php else : ?>
            <p>
                <span class="">Usted no está autorizado para acceder a esta página.</span> Por favor <a href="../capa_interfaz/login.php">Autentíquese</a>.
            </p>
        <?php endif; ?>
    </body>
</html>

