<?php
$n = $_POST['n'];
$suma = 0;
$digitos = str_split($n);
        
foreach ($digitos as $digito) {
    $suma += $digito;
}

echo "La suma de los dígitos de $n es: $suma";
?>