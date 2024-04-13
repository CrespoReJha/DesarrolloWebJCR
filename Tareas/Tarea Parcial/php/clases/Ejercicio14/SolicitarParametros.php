<?php
$opcion = $_GET['opcion'];
?>
<form action="llamarFunciones.php" method="get">
<?php
switch ($opcion){
    case "fibonacci":
        ?>
        <label>Introduzca la cantidad de numeros fibonacci desea:</label>
        <input type="number" name="n">
        <?php
        break;
    case "mayor":
        ?>
        <label>Introduzca 3 numeros:</label>
        <input type="number" name="a">
        <input type="number" name="b">
        <input type="number" name="c">
        <?php
        break;
    case "piramide":
        ?>
        <label>Introduzca la cadena:</label>
        <input type="text" name="cadena">
        <?php
        break;
    default: break;
}
?>
<input type="hidden" name="opcion" value="<?php echo $opcion?>">
<input type="submit" value="Continuar">
</form>