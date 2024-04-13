<?php
session_start(); #Se inicia la sesión
if (!isset($_SESSION['usuario'])) { #Si no se ha iniciado la sesión, se redirige a la página de login
?>
    <meta http-equiv="refresh" content="3; url=login.php"> 
<?php
    die('Acceso Denegado');
}
?>