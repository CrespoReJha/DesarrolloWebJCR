<?php
include 'clase.php';
$operacion = $_POST['opcion'];
$palabra = $_POST['palabra'];
$colorLetra = $_POST['colorletra'];
$colorFondo = $_POST['colorfondo'];
$impresor = new Clase();
$impresor->setPalabra($palabra);
$impresor->setColor($colorLetra);
$impresor->setColorFondo($colorFondo);

switch ($operacion){
    case "cuadrado":
        $impresor->cuadrado();
        break;
    case "diagonal":
        $impresor->diagonal();
        break;
    default: break;
}
?>