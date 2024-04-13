<?php
include 'verificar.php';
echo "Usuario: ".$_SESSION['usuario'];
echo "Nivel: ".$_SESSION['nivel']==1?"administrador":"usuario";
?>
<a href="cerrar.php">Cerrar Session</a>
<?php
include 'conexion.php';
$sql = "SELECT id,producto,precio,imagen FROM productos";
$result = $con->query($sql);
$i = 1;
if ($result->num_rows > 0) { #Si la consulta regresa registros, se muestran en una tabla
    ?>
        <table border='1'>
            <tr>
                <th>Nro</th>
                <th>Id</th>
                <th>Poducto</th>
                <th>Precio</th>
                <th>Imagen</th> 
                <th>Operaciones</th>
            </tr>
            <?php
            while ($row = $result->fetch_assoc()) { #Se recorren los registros
            ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["producto"]; ?></td>
                    <td><?php echo $row["precio"]; ?></td>
                    <td><img src="images/<?php echo $row["imagen"]; ?>" width="50" height="50"></td>
                    <td><?php if($_SESSION['nivel']==1){
                        ?>
                        <a href="form_editar.php?id=<?php echo $row["id"] ?>"><img src="images/editar.png"></a>
                        <a href="eliminar.php?id=<?php echo $row["id"] ?>"><img src="images/eliminar.png"></a>
                    <?php } ?> </td>
                </tr>
            <?php } ?>
        </table>
    <?php
    } else {
        echo "0 resultados";
    }
    mysqli_close($con);
    ?>
    <?php 
    if($_SESSION['nivel']==1){
        ?>
        <a href="form_insertar.php">Insertar</a>
        <?php
    }
?>
