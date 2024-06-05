<?php
?>
<?php
include("conexion.php");

$sql = "SELECT imagen, titulo FROM libros";

$result = $con->query($sql);
//$datos = array();
$i=0;
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        //$datos[] = $row;
        ?>
        <div>
            <a  href="javascript:mostrarimagen('<?php echo $row['titulo'] ?>')" ><img id="<?php echo $row['titulo'] ?>"class="imagen-menu" src="images/<?php echo $row["imagen"] ?>" /></a>
        </div>
        <?php
        $i++;
    }
}
//echo json_encode($datos, JSON_UNESCAPED_UNICODE);
?>