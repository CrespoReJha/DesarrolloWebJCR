<?php
include("conexion.php");
$texto = $_GET['texto'];
$sql = "SELECT nombre FROM ocupaciones WHERE nombre LIKE '%$texto%'";//ocupaciones solo tienen Programador, Agricultor, Ing. en Ciencias de la Computacion

$result = $con->query($sql);
$resultados = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $resultados[] = $row['nombre'];
    }
}
echo json_encode($resultados);
?>