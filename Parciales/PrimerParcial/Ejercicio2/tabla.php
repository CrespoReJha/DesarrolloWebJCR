<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$operacion = $_POST['operacion'];
$n = $_POST['n'];
echo "<h1> Tabla de $operacion";

echo "<table border = '1'>";
for ($i = 0; $i <= $n; $i++){
    echo "<tr>";
    if ($i == 0){
        for ($j = 0; $j < $n; $j++){
            if ($j == 0){
                ?>
                <th class="tabla"></th>
                <?php
            }
            ?>
            <th class="tabla"><?php echo $j+1; ?></th>
            <?php
        }
    }else{
        for ($j = 0; $j <= $n; $j++){
            if ($j == 0){
                ?>
                <th class="tabla"><?php echo $i; ?></th>
                <?php
            }else{
                switch ($operacion){
                    case "suma":
                        ?>
                        <th><?php echo $i+$j; ?></th>
                        <?php
                        break;
                    case "resta":
                        ?>
                        <th><?php echo $i-$j; ?></th>
                        <?php
                        break;
                    case "multiplicacion":
                        ?>
                        <th><?php echo $i*$j; ?></th>
                        <?php
                        break;
                    case "division":
                        ?>
                        <th><?php echo $i/$j; ?></th>
                        <?php
                        break;
                    default: break;
                }
            }

        }
    }   
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
