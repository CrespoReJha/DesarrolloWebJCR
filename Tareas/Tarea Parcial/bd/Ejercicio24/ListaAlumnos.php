<?php
include 'conexion.php';
$sql = "SELECT nombres, apellidos, cu, sexo, codigo_carrera 
FROM alumnos a LEFT JOIN carreras c ON a.codigo_carrera=c.id";
$result = $con->query($sql);
$i = 1;
if ($result->num_rows > 0){
    ?>
    <table border='1'>
        <tr>
            <th></th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>CU</th>
            <th>Sexo</th>
            <th>Carrera</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['nombres']; ?></td>
                <td><?php echo $row['apellidos']; ?></td>
                <td><?php echo $row['cu']; ?></td>
                <td><?php echo $row['sexo']; ?></td>
                <td><?php echo $row['codigo_carrera']; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
}
mysqli_close($con);
?>
<a href="fintroduccion.php">Insertar</a>