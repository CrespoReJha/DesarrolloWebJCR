<?php
include("conexion.php");

$correo = $_POST["correo"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];

$sql= "INSERT INTO correos (tipo, correo, asunto, mensaje, estado) 
values ('S', '$correo', '$asunto', '$mensaje', 'N')";

//echo $sql;
$result = $con->query($sql);  
if(!$result){
    die("Error al insertar datos: " . $con->error);
}
?>