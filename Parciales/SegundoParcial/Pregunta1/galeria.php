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
        /*?>
        <div>
            <a  href="javascript:mostrarimagen('<?php echo $row['titulo'] ?>')" ><img id="<?php echo $row['titulo'] ?>"class="imagen-submenu" src="images/<?php echo $row["imagen"] ?>" /></a>
        </div>
        <?php*/

    }
}
echo json_encode($datos, JSON_UNESCAPED_UNICODE);
?>