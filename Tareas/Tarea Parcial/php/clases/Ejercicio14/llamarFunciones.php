<?php
include 'examen.php';
$opcion = $_GET['opcion'];
$examen = new Examen();
switch ($opcion){
    case "fibonacci":
        $n = $_GET['n'];
        $examen->setN($n);
        $examen->calcularFibonacci();

        break;
    case "mayor":
        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];
        $examen->setA($a);
        $examen->setB($b);
        $examen->setC($c);
        $examen->calcularMayor();
        break;
    case "piramide":
        $cadena = $_GET['cadena'];
        $examen->setCadena($cadena);
        $examen->piramide();
        break;
    default: break;
}
?>
