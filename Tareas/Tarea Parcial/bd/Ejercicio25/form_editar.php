<?php $id=$_GET['id']; #Se obtiene el id del registro a editar
    include('conexion.php'); #Conexión a la base de datos
    include('verificar.php'); #Verificar si el usuario logeo
    include('permisos.php'); #Verificar si el usuario tiene permisos
    $sql="SELECT id,producto,precio,imagen FROM productos where id=".$id; #Se obtienen los datos del registro a editar
    $result = $con->query($sql); #Se ejecuta la consulta
    $datos = $result->fetch_assoc(); #Se obtienen los datos del registro
    ?>
<h1>Editar Prodcuto</h1>

    <form action="editar.php" method="post" enctype="multipart/form-data"> <!-- Formulario para editar los datos --> 
        <input type="hidden" name="id" value="<?php echo $datos['id'];?>"> <!-- Se envía el id del registro a editar -->
        <input type="hidden" name="img" value="<?php echo $datos['imagen'];?>"> <!-- Se envía la imagen del registro a editar -->
        <label for="producto">Producto:</label>
        <input type="text" name="producto" value="<?php echo $datos['producto']; ?>" > <!-- Se muestra el nombre del registro a editar -->
        <br>
        <label for="precio">Precio:</label>
        <input type="number" name="precio" value="<?php echo $datos['precio']; ?>" > <!-- Se muestra el apellido del registro a editar -->
        <br>
        <img src="images/<?php echo $datos['imagen']?>" > <!-- Se muestra la imagen del registro a editar -->
        <br>
        <label for="imagen">Imagen</label> <!-- Se muestra el campo para subir la imagen -->
        <input type="file" name="imagen" ><br> 
        <br>
        <input type="submit" value="Editar">
    </form?>