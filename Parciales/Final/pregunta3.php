<?php
include ("Alumnos.php");
include ("ListaAlumnos.php");
$lista = new ListaAlumnos();
$array = array();
$lista->setLista($array);
$lista->mostrarLista();

?>
<?php
