<?php
?>
<?php
include("conexion.php");
$filtro = $_GET['filtro'];

$sql = "SELECT id, tipo, correo, asunto, mensaje, estado FROM correos WHERE tipo='$filtro' ORDER BY correo ASC";

$result = $con->query($sql);
$datos = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $datos[] = $row;
    }
}
echo json_encode($datos, JSON_UNESCAPED_UNICODE);
?>