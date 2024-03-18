<?php
class Pila{
    private $elementos;
    private $tope;
    function _construct(){
        $this->elementos = array();
        $this->tope = -1;
    }

    public function insertar($valor){
        $this->tope++;
        $this->elementos[$this->tope] = $valor;
    }

    public function eliminar(){
        if($this->tope == -1){
            return null;
        }
        $valor = $this->elementos[$this->tope];
        unset($this->elementos[$this->tope]);
        $this->tope--;
        return $valor;
    }

    public function imprimir(){
        for($i = 0; $i <= $this->tope; $i++){
            echo $this->elementos[$i]."<br>";
        }
    }
}


$pila = new Pila();
$pila->insertar(1);
$pila->insertar(2);
$pila->insertar(3);
$pila->imprimir();
echo "Eliminando: ".$pila->eliminar()."<br>";
$pila->imprimir();
?>