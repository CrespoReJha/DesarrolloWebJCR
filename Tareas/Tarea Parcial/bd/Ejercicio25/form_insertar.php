<?php 
    include('conexion.php'); #Conexión a la base de datos
    include('verificar.php'); #Verificar si el usuario logeo
    include('permisos.php'); #Verificar si el usuario tiene permisos
    ?>
    <h1>Insertar Persona</h1>
    <form action="insertar.php" method="post" enctype="multipart/form-data"> <!-- Formulario para insertar los datos -->
        <label for="id">Id:</label> <!-- Se muestra el campo para ingresar el nombre -->
        <input type="number" name="id">
        <br>
        <label for="producto">Producto:</label> <!-- Se muestra el campo para ingresar el apellido -->
        <input type="text" name="producto">
        <br>
        <label for="precio">Precio:</label> <!-- Se muestra el campo para ingresar la edad -->
        <input type="number" name="precio">
        <br>
        <label for="imagen">Imagen</label> <!-- Se muestra el campo para subir la imagen -->
        <input type="file" name="imagen">
        <br>
        <input type="submit" value="Insertar">
    </form>