<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            border: 3px solid green;
            background-color: white;
        }
        th, td {
            border: 3px solid green;
            padding: 10px;
        }
    </style>
</head>
<body>
<?php
include 'convertir.php';

$convertir = new Convertir();
$temp = $_POST['temp'];
$unidad = $_POST['unidad'];
?>
<table>
    <tr>
        <th>Celsius</th>
        <th>Fahrenheit</th>
        <th>Kelvin</th>
    </tr>
<?php
switch ($unidad) {
    case 'c':
        ?>
            <tr>
                <td><?php echo $temp; ?></td>
                <td><?php echo $convertir->celsiusAFahrenheit($temp); ?></td>
                <td><?php echo $convertir->celsiusAKelvin($temp); ?></td>
            </tr>
        <?php
        break;
    case 'f':
        ?>
            <tr>
                <td><?php echo $convertir->fahrenheitACelsius($temp); ?></td>
                <td><?php echo $temp; ?></td>
                <td><?php echo $convertir->fahrenheitAKelvin($temp); ?></td>
            </tr>
        <?php
        break;
    case 'k':
        ?>
            <tr>
                <td><?php echo $convertir->kelvinACelsius($temp); ?></td>
                <td><?php echo $convertir->kelvinAFahrenheit($temp); ?></td>
                <td><?php echo $temp; ?></td>
            </tr>
        <?php
        break;
}
?>
</table>
</body>
</html>
