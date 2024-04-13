<?php 
if ($_SESSION['nivel']==0) { #Si el usuario no tiene permisos, se muestra un mensaje de error y se redirige a la página de lectura
?>
    <meta http-equiv="refresh" content="3; url=read.php">
<?php
    die('No esta Autorizado para realizar esta accion');
}
?>