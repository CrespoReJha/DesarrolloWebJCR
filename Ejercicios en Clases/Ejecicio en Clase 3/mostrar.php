<?php
include 'cola.php';
session_start();
if(!isset($_SESSION['cola'])){
    echo "No hay elementos en la cola";
}else{
    $valor = $_SESSION['cola']->mostrar();
    echo "Elementos en la cola: ";
    foreach ($valor as $v) {
        echo $v." ";
    }
}
?>

<meta http-equiv="refresh" content="2; url=menu_cola.html">