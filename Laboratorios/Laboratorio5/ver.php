<?php
?>
<?php
include("conexion.php");
$id = $_GET['id'];

$sql = "SELECT id, tipo, correo, asunto, mensaje, estado FROM correos WHERE id='$id'";

$result = $con->query($sql);
$datos = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $datos[] = $row;
    }
}
echo json_encode($datos, JSON_UNESCAPED_UNICODE);
?>