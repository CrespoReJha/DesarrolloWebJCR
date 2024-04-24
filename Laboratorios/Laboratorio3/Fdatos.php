<?php
$n = $_GET['n'];
include 'conexion.php';
?>
<h1>Inserte a los alumnos</h1>
<form action="introducir.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <th></th>
            <th>Fotografia</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>CU</th>
            <th>Sexo</th>
            <th>Carrera</th>
        </tr>
<?php
for ($i = 0; $i < $n; $i++){
    ?>
    <tr>
        <th><?php echo $i+1; ?></th>
        <th><input type="file" name="fotografia<?php echo $i+1; ?>"></th>
        <th><input type="text" name="nombre<?php echo $i+1; ?>"></th>
        <th><input type="text" name="apellido<?php echo $i+1; ?>"></th>
        <th><input type="text" name="cu<?php echo $i+1; ?>"></th>
        <th><input type="radio" name="sexo<?php echo $i+1; ?>" value="M">Masculino
        <input type="radio" name="sexo<?php echo $i+1; ?>" value="F">Femenino</th>
        <th>
        <select name="cod_carrera<?php echo $i+1; ?>">
            <?php
            $sql = "SELECT codigo, carrera FROM carreras";
            $result = $con->query($sql);
            while ($carrera = $result->fetch_assoc()){
                ?>
                <option value="<?php echo $carrera['codigo']?>"><?php echo $carrera['carrera'] ?></option>
                <?php
            }
            ?>
        </select>
        </th>
    </tr>
    <?php
}
?>
    </table>
    <input type="hidden" name="n" value="<?php echo $n?>">
    <input type="submit" value="Insertar">
    <input type="reset" value="Borrar">
</form>

