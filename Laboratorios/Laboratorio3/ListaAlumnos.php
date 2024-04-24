<?php
include 'conexion.php';

$cont = 1;

    ?>
    <table border='1'>
        <tr>
            <th>Nro</th>
            <th>Fotografia</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>CU</th>
            <th>Sexo</th>
            <th>Carrera</th>
        </tr>
        <?php
        for ($i = $_COOKIE['ultimoid']+1; $i <= $_COOKIE['n']+$_COOKIE['ultimoid']; $i++){
            $sql = "SELECT id, fotografia, nombres, apellidos, cu, sexo, c.carrera AS carrera 
            FROM alumnos a LEFT JOIN carreras c ON a.codigocarrera=c.codigo WHERE id=$i";
            $result = $con->query($sql);
            $row = $result->fetch_assoc();
            ?>
            <tr>
                <td><?php echo $cont++; ?></td>
                <td><img src="images/<?php echo $row["fotografia"]; ?>" width="50" height="50"></td>
                <td><?php echo $row['nombres']; ?></td>
                <td><?php echo $row['apellidos']; ?></td>
                <td><?php echo $row['cu']; ?></td>
                <td><?php echo $row['sexo']; ?></td>
                <td><?php echo $row['carrera']; ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php

mysqli_close($con);
?>
<a href="Fintroduccion.html">Insertar</a>