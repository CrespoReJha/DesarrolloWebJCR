<?php
$con = new mysqli("localhost", "root", "", "parcial1_ejercicio24"); #Conexión a la base de datos
if ($con->connect_error) #Si la conexión falla, se muestra un mensaje de error
    die("conexion fallada" . $con->connect_error);
?>