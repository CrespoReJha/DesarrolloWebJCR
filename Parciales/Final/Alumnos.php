<?php
class Alumnos{
    private $cu;
    private $nombre;
    private $apellido;

    public function __construct($_cu, $_nombre, $_apellido){
        $this->cu=$_cu;
        $this->nombre=$_nombre;
        $this->apellido=$_apellido;
    }
}
?>