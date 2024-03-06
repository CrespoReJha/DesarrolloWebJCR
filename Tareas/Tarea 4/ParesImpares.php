<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numeros = range(1, 20);

    $pares = [];
    $impares = [];

    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $pares[] = $numero;
        } else {
            $impares[] = $numero;
        }
    }

    echo "Números pares: " . implode(", ", $pares) . "<br>";
    echo "Números impares: " . implode(", ", $impares);
    ?>
</body>
</html>
