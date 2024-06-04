<?php include('conexion.php');
    $sql = "Select id,editorial from editoriales";
    $result = $con->query($sql);
    ?>
    <h1>Insertar Persona</h1>
    
    <form action="javascript:crearlibro()" method="post" id="datos-libro">
        <label for="imagen">Imagen:</label>
        <input type="file" name="imagen" id="imagen"><br>
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" id="titulo">
        <br>
        <label for="autor">Autor:</label>
        <input type="text" name="autor" id="autor">
        <br>
        <label for="anio">Anio:</label>
        <input type="number" name="anio" id="anio">
        <br>
        <label for="editorial">Editorial:</label>
        <select name="ideditorial" id="ideditorial">
            <?php while ($editorial = $result->fetch_assoc()) {
            ?>
                <option value="<?php echo $editorial['id'] ?>"><?php echo $editorial['editorial'] ?></option>
            <?php } ?>
        </select>
        <br>
        <input type="submit" value="Insertar">

    </form>
    