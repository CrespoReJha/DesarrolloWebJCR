
<?php
include("conexion.php"); #Conexión a la base de datos
if (isset($_GET['ordenar'])) #Si se recibe el parametro ordenar
{
    $ordenar=$_GET['ordenar']; #Se obtiene el valor del parametro ordenar
}
else
{
    $ordenar="l.id"; #Se inicializa la variable ordenar
}
if (isset($_COOKIE['contador']))
 {
    $valor=$_COOKIE['contador']+1;
    if($valor % 2 == 0){
        $orden= "asc";
    }else{
        $orden= "desc";
    }
 }else
 {
    $valor=1;
    $orden= "asc";
 }
 setcookie('contador',$valor,0);
$sql = "SELECT imagen,titulo,autor,e.editorial as editorial,anio FROM libros l
    LEFT JOIN editoriales e on e.id=l.ideditorial order by $ordenar $orden"; #Se seleccionan los registros que coincidan con el filtro
$result = $con->query($sql); #Se ejecuta la consulta
if ($result->num_rows > 0) { #Si la consulta regresa registros, se muestran en una tabla
?>
    <table border='1'>
        <tr>
            <th>Imagen</th>
            <th><a href="muestra.php?ordenar=titulo">Titulo</a></th>
            <th><a href="muestra.php?ordenar=autor">Autor</a></th> 
            <th><a href="muestra.php?ordenar=e.editorial">Editorial</a></th>
            <th><a href="muestra.php?ordenar=anio">Anio</a></th> 
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) { #Se recorren los registros
        ?>
            <tr>
                <td><img src="images/<?php echo $row["imagen"]; ?>" width="50" height="50"></td>
                <td><?php echo $row["titulo"]; ?></td>
                <td><?php echo $row["autor"]; ?></td>
                <td><?php echo $row["editorial"]; ?></td>
                <td><?php echo $row["anio"]; ?></td>
            </tr>
        <?php } ?>
    </table>
<?php
} else {
    echo "0 resultados";
}
mysqli_close($con);
?>

