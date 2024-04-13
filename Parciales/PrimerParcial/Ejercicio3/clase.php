<?php
class Clase{
    private $palabra;
    private $color;
    private $color_fondo;

    public function _construct($p, $col, $colF){
        $this->palabra=$p;
        $this->color=$col;
        $this->coor_fondo=$colF;
    }

    public function setPalabra($p){
        $this->palabra=$p;
    }
    public function setColor($col){
        $this->color=$col;
    }
    public function setColorFondo($colF){
        $this->color_fondo=$colF;
    }

    public function cuadrado(){
        $longitud = strlen($this->palabra);
        
        echo "<table>";
        for ($i = 0; $i < $longitud; $i++){
            echo "<tr>";
            if ($i == 0){
                for ($j = 0; $j < $longitud; $j++){
                    echo "<th style='background-color: ".$this->color_fondo."; color: ".$this->color.";'>".$this->palabra[$j]."</th>";
                }
            }else if ($i == $longitud-1){
                for ($j = 0; $j < $longitud; $j++){
                    echo "<th style='background-color: ".$this->color_fondo."; color: ".$this->color.";'>".$this->palabra[-($j+1)]."</th>";
                }
            }else{
                for ($j = 0; $j < $longitud; $j++){
                    if ($j == 0){
                        echo "<th style='background-color: ".$this->color_fondo."; color: ".$this->color.";'>".$this->palabra[$i]."</th>";
                    }else if ($j == $longitud-1){
                        echo "<th style='background-color: ".$this->color_fondo."; color: ".$this->color.";'>".$this->palabra[-($i+1)]."</th>";
                    }else{
                        ?>
                        <th><?php echo " "; ?></th>
                        <?php
                    }
                }

            }
        echo "</tr>";
        }   
        
        echo "</table>";
        ?>
        <?php
    }

    public function diagonal(){
        $longitud = strlen($this->palabra);
        
        echo "<table>";
        for ($i = 0; $i < $longitud; $i++){
            echo "<tr>";
            for ($j = 0; $j < $longitud; $j++){
                if ($i == $j){
                    echo "<th style='background-color: ".$this->color_fondo."; color: ".$this->color.";'>".$this->palabra[$i]."</th>";
                }else{
                    ?>
                    <th><?php echo " "; ?></th>
                    <?php
                }
                
            }
        echo "</tr>";
        }   
        
        echo "</table>";
        ?>
        <?php
    }
    
}
?>