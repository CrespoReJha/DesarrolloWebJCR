<?php
?>
<?php
include("conexion.php");

$sql = "SELECT imagen, titulo, autor, anio, e.editorial as editorial FROM libros l
LEFT JOIN editoriales e on e.id=l.ideditorial";

$result = $con->query($sql);
$datos = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $datos[] = $row;
    }
}
echo json_encode($datos, JSON_UNESCAPED_UNICODE);
?>