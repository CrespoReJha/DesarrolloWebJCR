<?php
$n = $_GET['n'];
?>
<h1>El dia de la semana que selecciono es:</h1>
<select>
    <option value="1" <?php echo $n==1?"selected":"";?>>Lunes</option>
    <option value="2" <?php echo $n==2?"selected":"";?>>Martes</option>
    <option value="3" <?php echo $n==3?"selected":"";?>>Miercoles</option>
    <option value="4" <?php echo $n==4?"selected":"";?>>Jueves</option>
    <option value="5" <?php echo $n==5?"selected":"";?>>Viernes</option>
    <option value="6" <?php echo $n==6?"selected":"";?>>Sabado</option>
    <option value="7" <?php echo $n==7?"selected":"";?>>Domingo</option>
</select>