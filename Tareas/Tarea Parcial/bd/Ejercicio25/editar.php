<?php
include("conexion.php"); #Conexión a la base de datos
include('verificar.php'); #Verificar si el usuario tiene permisos
include('permisos.php'); #Verificar si el usuario tiene permisos
$Id = $_POST["id"];
$Producto = $_POST["producto"];
$Precio = $_POST["precio"];

if ($_FILES['imagen']['name']!='') #Si se sube una imagen, se guarda en la carpeta images
{
    $nombre=$_FILES['imagen']['name'];  //obtenemos el nombre del archivo
    $temp=$_FILES['imagen']['tmp_name']; //obtenemos la ruta del archivo en el servidor
    $arreglo=explode(".", $nombre);
    $extension=$arreglo[1];// obtengo la extension del archivo
    $nuevonobre=uniqid().".".$extension;//Le doy un nuevo nombre de archivo
    copy ($temp,"images/".$nuevonobre);//copio el archivo a la carpeta de imagenes
} else
{
    $nuevonobre=$_POST['img']; #Si no se sube una imagen, se mantiene la imagen anterior
}

$sql= "UPDATE productos SET producto='$Producto', precio=$Precio, 
imagen='$nuevonobre' WHERE id=$Id"; #Se actualizan los datos en la base de datos
//echo $sql;
$result = $con->query($sql);  # Se ejecuta la consulta
if(!$result){ #Si la consulta falla, se muestra un mensaje de error
    die("Error al editar datos: " . $con->error);
}
?>
<div>Se edito con exito</div>
<meta http-equiv="refresh" content="3; url=read.php">