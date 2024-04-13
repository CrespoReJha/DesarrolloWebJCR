<?php
include("conexion.php");
include('verificar.php');
$Id = $_POST["id"];
$Producto = $_POST["producto"];
$Precio = $_POST["precio"];

$nombre=$_FILES['imagen']['name'];  //obtenemos el nombre del archivo
$temp=$_FILES['imagen']['tmp_name']; //obtenemos la ruta del archivo en el servidor
$arreglo=explode(".", $nombre);
$extension=$arreglo[1];// obtengo la extension del archivo
$nuevonobre=uniqid().".".$extension;//Le doy un nuevo nombre de archivo
copy ($temp,"images/".$nuevonobre);//copio el archivo a la carpeta de imagenes

$sql= "INSERT INTO productos (id, producto, precio, imagen ) #Se insertan los datos en la base de datos
VALUES ($Id, '$Producto', $Precio, '$nuevonobre')";
//echo $sql;
$result = $con->query($sql);  # Se ejecuta la consulta
if(!$result){
    die("Error al insertar datos: " . $con->error); #Si la consulta falla, se muestra un mensaje de error
}
?>
<div>Se inserto con exito</div> 
<meta http-equiv="refresh" content="5; url=read.php">