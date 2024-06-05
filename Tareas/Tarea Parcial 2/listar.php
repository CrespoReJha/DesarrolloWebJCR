<?php
?>
<?php
include("conexion.php");

$sql = "SELECT imagen, titulo FROM libros";

$nivel = $_GET['nivel'];

$result = $con->query($sql);
//$datos = array();
$i=1;
if ($result->num_rows > 0) {
    ?>
    <table border='1'>
        <th>
            <td>Imagen</td>
            <td>Titulo</td>
            <td>Operaciones</td>
        </th>
    <?php
    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><img id="<?php echo $row['titulo'] ?>"class="imagen-menu" src="images/<?php echo $row["imagen"] ?>" /></td>
            <td><?php echo $row['titulo'] ?></td>
            <?php
            if ($nivel == 1){
                ?>
                <td><img src="images/editar.png"><img src="images/eliminar.png"></td>
                <?php
            }
            ?>
        </tr>
        <?php
        $i++;
        //$datos[] = $row;
    }
    ?>
    </table>
    <?php
}
//echo json_encode($datos, JSON_UNESCAPED_UNICODE);
?>