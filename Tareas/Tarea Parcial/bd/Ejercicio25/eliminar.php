<?php
include("conexion.php"); #Conexión a la base de datos
include('verificar.php'); #Verificar si el usuario tiene permisos
include('permisos.php'); #Verificar si el usuario tiene permisos

$id=$_GET['id']; #Se obtiene el id del registro a eliminar

$sql= "DELETE FROM productos WHERE id=$id"; #Se elimina el registro de la base de datos
//echo $sql;
$result = $con->query($sql);  # Se ejecuta la consulta
if(!$result){ #Si la consulta falla, se muestra un mensaje de error
    die("Error al eliminar datos: " . $con->error); 
}
?>
<div>Se elimino con exito</div>
<meta http-equiv="refresh" content="3; url=read.php">