<?php
$correo=$_GET['correo']; #Se obtiene el correo del usuario
$password=sha1($_GET['password']); #Se obtiene la contraseña del usuario
include('conexion.php'); #Conexión a la base de datos
$sql = "SELECT usuario from usuarios where usuario='$correo'  
and password='$password'"; #Se seleccionan los datos del usuario
//echo $sql;

$result = $con->query($sql); # Se ejecuta la consulta
$i=1; #Se inicializa la variable i
if ($result->num_rows > 0) { #Si la consulta regresa un registro, se inicia la sesión
    echo 'usuario valido';
}
else 
{
    echo 'Error usuario o Conatraseña no valido ';
}

?>