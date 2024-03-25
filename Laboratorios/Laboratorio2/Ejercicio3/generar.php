<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ol {
            border: 2px solid green;
            background-color: yellow;
            list-style: none;
        }
    </style>
</head>
<body>
<?php
echo "<h1>Los primeros números primos son:</h1>";
$n = $_POST['n'];

$primos = [];
$num = 2;
    
while (count($primos) < $n) {
    $esPrimo = true;
        
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $esPrimo = false;
            break;
        }
    }
        
    if ($esPrimo) {
        $primos[] = $num;
    }
        
    $num++;
}

echo "<ol>";
foreach ($primos as $primo) {
    echo "<li>$primo</li>";
}
echo "</ol>";
?>
</body>
</html>

