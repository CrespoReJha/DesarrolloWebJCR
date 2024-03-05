<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Tabla de multiplos de dos</h1>
    <?php
        $a = 7;
        $b = 3;
        $mult = 2;
        echo "<table border='1'>";
        for ($i=0; $i < $a; $i++) { 
            echo "<tr>";
            for ($j=0; $j < $b; $j++) { 
                echo "<td>" . $mult . "</td>";
                $mult += 2;
            }
            echo "</tr>";
        }
    ?>
</body>
</html>