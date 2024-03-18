<?php
include 'cola.php';
session_start();
if(!isset($_SESSION['cola'])){
    $_SESSION['cola'] = new Cola();
}
$valor = $_GET['valor'];
$_SESSION['cola']->insertar($valor);
?>

<meta http-equiv="refresh" content="0; url=menu_cola.html">