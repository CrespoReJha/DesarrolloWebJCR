<?php
include 'cola.php';
session_start();
if(!isset($_SESSION['cola'])){
    echo "No hay elementos en la cola";
}else{
    $valor = $_SESSION['cola']->eliminar();
    echo "Elemento eliminado: " . $valor;
}
?>

<meta http-equiv="refresh" content="2; url=menu_cola.html">