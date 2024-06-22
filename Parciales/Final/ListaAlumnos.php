<?php
class ListaAlumnos{
    private $Lista=array();

    public function __construct(){
        $this->Lista = array();
    }
    public function setLista($array){
        $this->Lista = $array;
    }
    public function insertarAlumno($alumno){

    }
    public function eliminarAlumno($alumno){

    }
    public function mostrarLista(){
        ?>
        <table>
            <tr>
                <td>CU</td>
                <td>Nombres</td>
                <td>Apellidos</td>
                <td>Botones</td>
            </tr>
            <?php
            if ($this->Lista->length() == 0){

            }else{
                for ($i=0;$i<$this->Lista->length();$i++){
                    ?>
                    <td> <?php echo $this->Lista[i]->cu ?></td>
                    <?php
                }
            }
            ?>
            </table>
            <?php
    }
}
?>