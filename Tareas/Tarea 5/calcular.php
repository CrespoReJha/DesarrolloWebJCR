<?php
include 'operacionescadena.php';

$cadena = $_POST['cadena'];
$operaciones = new OperacionesCadena($cadena);

echo "Invertida: ".$operaciones->invertir()."<br>";
echo "Mayuscula: ".$operaciones->mayuscula()."<br>";
echo "Minuscula: ".$operaciones->minuscula()."<br>";
?>