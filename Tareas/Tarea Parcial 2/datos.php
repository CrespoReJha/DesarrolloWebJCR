<?php
include("conexion.php");

$sql = "SELECT imagen, titulo FROM libros";

$result = $con->query($sql);
$datos = array();
$i=0;
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $datos[] = $row;
    }
}
echo json_encode($datos, JSON_UNESCAPED_UNICODE);
?>