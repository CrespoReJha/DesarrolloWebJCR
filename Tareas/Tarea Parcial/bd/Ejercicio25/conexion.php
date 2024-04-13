<?php
$con = new mysqli("localhost", "root", "", "bdtienda"); #Conexión a la base de datos
if ($con->connect_error) #Si la conexión falla, se muestra un mensaje de error
    die("conexion fallada" . $con->connect_error);
?>
