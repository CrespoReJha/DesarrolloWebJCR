<?php session_start(); #Se inicia la sesión
$correo=$_POST['correo']; #Se obtiene el correo del usuario
$password=sha1($_POST['password']); #Se obtiene la contraseña del usuario
include('conexion2.php'); #Conexión a la base de datos
$sql = "SELECT correo,nivel from usuarios where correo='$correo'  
and password='$password'"; #Se seleccionan los datos del usuario
//echo $sql;

$result = $con->query($sql); # Se ejecuta la consulta
$i=1; #Se inicializa la variable i
if ($result->num_rows > 0) { #Si la consulta regresa un registro, se inicia la sesión
    $datos = $result->fetch_assoc(); #Se obtienen los datos del usuario
    echo json_encode($datos, JSON_UNESCAPED_UNICODE);
}
else 
{
    echo 'no autenticado';
}
?>
