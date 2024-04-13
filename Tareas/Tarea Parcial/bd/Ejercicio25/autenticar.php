<?php session_start(); #Se inicia la sesión
$correo=$_POST['usuario']; #Se obtiene el correo del usuario
$password=sha1($_POST['password']); #Se obtiene la contraseña del usuario
include('conexion.php'); #Conexión a la base de datos
$sql = "SELECT usuario,nivel from usuarios where usuario='$correo'  
and password='$password'"; #Se seleccionan los datos del usuario
//echo $sql;

$result = $con->query($sql); # Se ejecuta la consulta
$i=1; #Se inicializa la variable i
if ($result->num_rows > 0) { #Si la consulta regresa un registro, se inicia la sesión
    $datos = $result->fetch_assoc(); #Se obtienen los datos del usuario
    $_SESSION['usuario']=$datos['usuario']; #Se guarda el correo del usuario en la sesión
    $_SESSION['nivel']=$datos['nivel']; #Se guarda el nivel del usuario en la sesión
    header("location:read.php"); #Se redirecciona a la página read.php
}
else 
{
    ?>
    Error usuario o Conatraseña no valido 
    <meta http-equiv="refresh" content="3; url=login.php"> <!--Se redirige a la página de login-->
    <?php
}

?>
