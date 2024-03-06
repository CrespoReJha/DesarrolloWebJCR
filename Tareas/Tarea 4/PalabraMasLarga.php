<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $cadena = "Ejemplo de una cadena con varias palabras";
    $palabras = explode(" ", $cadena); # explode separa una cadena en un array
    $palabraMasLarga = "";

    foreach ($palabras as $palabra) {
        if (strlen($palabra) > strlen($palabraMasLarga)) { # strlen devuelve la longitud de una cadena
            $palabraMasLarga = $palabra;
        }
    }

    echo "La palabra más larga es: " . $palabraMasLarga;
    ?>
</body>
</html>

