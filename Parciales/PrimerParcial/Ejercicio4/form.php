<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    if (!(isset($_COOKIE['num1'])) || !(isset($_COOKIE['num2'])))
    {
        setcookie('num1',0,0);
        setcookie('num2',0,0);
        
    }
    setcookie('num1',$_GET['num1'],0);
    setcookie('num2',$_GET['num2'],0);
    ?>
    <form action="form.php" method="get">
        <label>Intoduzca 2 numeros:<label>
        <input type="number" name="num1" value="<?php echo isset($_COOKIE['num1'])?$_COOKIE['num1']:"0"?>">
        <input type="number" name="num2" value="<?php echo isset($_COOKIE['num2'])?$_COOKIE['num2']:"0"?>">
        <input type="submit" value="Continuar">
    </form>
    <a href="sumar.php">Sumar</a>
    <a href="restar.php">Restar</a>
    <a href="multiplicar.php">Multiplicar</a>
</body>
</html>