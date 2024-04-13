<?php
include 'conexion.php';
print_r($_POST);
$n = $_POST['n'];
for ($i = 1; $i <= $n; $i++){
    $Nombres = $_POST["nombre$i"];
    $Apellidos = $_POST["apellido$i"];
    $CU = $_POST["cu$i"];
    $Sexo = $_POST["sexo$i"];
    $Cod_carrera = $_POST["cod_carrera$i"];

    $sql = "INSERT INTO alumnos (nombres, apellidos, cu, sexo, codigo_carrera)
    VALUES ('$Nombres', '$Apellidos', '$CU', '$Sexo', '$Cod_carrera')";
    $result = $con->query($sql);
    if(!$result){
        die("Error al insertar datos: " . $con->error);
    }
}
?>
<div>Se inserto con exito</div>
<meta http-equiv="refresh" content="3; url=ListaAlumnos.php">
