<?php
$a =0;
$b = 0;

// Ciclo para sumar números impares en variable a y números pares en variable b
for ($i = 0; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        // Número par
        $b += $i;
    } else {
        // Número impar
        $a += $i;
    }
}

// Mostrar resultados
echo "La suma de los números impares en variable a es: $a ". "\n";
echo "La suma de los números pares en variable b es: $b". "\n";
?>
