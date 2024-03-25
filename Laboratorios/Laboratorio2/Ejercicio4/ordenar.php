<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ol {
            border: 2px solid red;
            background-color: yellow;
            text-align: center;
            margin-left: 40%;
            margin-right: 40%;
        }
    </style>
</head>
<body>
<?php
function ordenarPalabras($palabras) {
    sort($palabras);
    return $palabras;
}

$n = $_POST['n'];
for ($i = 0; $i < $n; $i++) {
    $palabras[] = $_POST["palabra$i"];
}

$palabrasOrdenadas = ordenarPalabras($palabras);

echo "<ol>";
foreach ($palabrasOrdenadas as $palabraOr) {
    echo "<li>$palabraOr</li>";
}
echo "</ol>";
?>
</body>
</html>
