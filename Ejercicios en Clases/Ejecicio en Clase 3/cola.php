<?php
class Cola {
    private $primero;
    private $ultimo;
    private $elementos;

    public function __construct() {
        $this->primero = null;
        $this->ultimo = null;
        $this->elementos = array();
    }

    public function insertar($elemento) {
        array_push($this->elementos, $elemento);
        $this->ultimo = $elemento;
        if ($this->primero === null) {
            $this->primero = $elemento;
        }
    }

    public function eliminar() {
        if ($this->primero !== null) {
            $elementoEliminado = array_shift($this->elementos);// Elimina el primer elemento del array
            $this->primero = reset($this->elementos); // Obtiene el primer elemento del array
            if (empty($this->elementos)) {// Verifica si el array esta vacio
                $this->ultimo = null;
            }
            return $elementoEliminado;
        }
        return null;
    }

    public function mostrar() {
        return $this->elementos;
    }
}
?>