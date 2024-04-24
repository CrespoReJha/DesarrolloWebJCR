<?php
include 'conexion.php';
$nombres = array();
//print_r($_POST);
$n = $_POST['n'];
$sqlid = "SELECT MAX(id) as ultimoid FROM alumnos";
$resultid = $con->query($sqlid);
$rowid = $resultid->fetch_assoc();
$ultimoId = $rowid["ultimoid"];
setcookie('n',$n,0);
setcookie('ultimoid',$ultimoId,0);

for ($i = 1; $i <= $n; $i++){

    
    $Nombres = $_POST["nombre$i"];
    $Apellidos = $_POST["apellido$i"];
    $CU = $_POST["cu$i"];
    $Sexo = $_POST["sexo$i"];
    $Cod_carrera = $_POST["cod_carrera$i"];

    $nombre=$_FILES["fotografia$i"]['name'];  //obtenemos el nombre del archivo
    $temp=$_FILES["fotografia$i"]['tmp_name']; //obtenemos la ruta del archivo en el servidor
    $arreglo=explode(".", $nombre);
    $extension=$arreglo[1];// obtengo la extension del archivo
    $nuevonombre=uniqid().".".$extension;//Le doy un nuevo nombre de archivo
    copy ($temp,"images/".$nuevonombre);//copio el archivo a la carpeta de imagenes

    $sql = "INSERT INTO alumnos (fotografia, nombres, apellidos, cu, sexo, codigocarrera)
    VALUES ('$nuevonombre', '$Nombres', '$Apellidos', '$CU', '$Sexo', '$Cod_carrera')";
    $result = $con->query($sql);
    if(!$result){
        die("Error al insertar datos: " . $con->error);
    }

    $nombres[] = $nuevonombre;
    
}

?>
<input type="hidden" name="n" value="<?php echo $n?>">
<div>Se inserto con exito</div>
<meta http-equiv="refresh" content="3; url=ListaAlumnos.php">
