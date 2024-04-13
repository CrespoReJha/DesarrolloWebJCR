<?php
class Examen{
    private $n;
    private $cadena;
    private $a;
    private $b;
    private $c;

    public function _construct($num, $cadena1, $na, $nb, $nc){
        $this->n = $num;
        $this->cadena = $cadena1;
        $this->a = $na;
        $this->b = $nb;
        $this->c = $nc;
    }

    public function setN($num){
        $this->n = $num;
    }

    public function setCadena($palabra){
        $this->cadena = $palabra;
    }

    public function setA($na){
        $this->a = $na;
    }

    public function setB($nb){
        $this->b = $nb;
    }

    public function setC($nc){
        $this->c = $nc;
    }


    public function calcularFibonacci(){
        $num1 = 0; 
        $num2 = 1;

        echo "<select>";
        $contador = 0; 
        while ($contador < $this->n){ 
            echo "<option value='".$num1."'>".$num1."</option>";
            $num3 = $num2 + $num1; 
            $num1 = $num2; 
            $num2 = $num3; 
            $contador = $contador + 1; 
        } 
        echo "</select>";
    }
    public function calcularMayor(){
        if ($this->a >= $this->b && $this->a >= $this->c){
            echo "<span style='font-weight: bold'> ".$this->a."</span> ".$this->b." ".$this->c;
        }else if ($this->b >= $this->a && $this->b >= $this->c){
            echo $this->a."<span style='font-weight: bold'> ".$this->b."</span>".$this->c;
        }else if ($this->c >= $this->b && $this->c >= $this->a){
            echo $this->a." ".$this->b."<span style='font-weight: bold'> ".$this->c."<span>";
        }
    }
    public function piramide(){
        $longitud = strlen($this->cadena);
        $mitad = (int)($longitud / 2);

        for ($i = 0; $i <= $mitad; $i++) {
            for ($j = 0; $j < $mitad - $i; $j++) {
                echo '*';
            }
            echo substr($this->cadena, $mitad - $i, 2 * $i + 1);
            echo "<br>";
        }
    }
}

#$prueba = new Examen(4, "hola", 1, 2, 3);
#$prueba->calcularMayor();
?>