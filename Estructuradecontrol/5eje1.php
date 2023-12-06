<?php
/* 
Hacer los algoritmos que calculen el promedio de una serie de notas hasta que se ingrese una nota
negativa, utilizar las tres estructuras repetitivas. ¿Cuál no se puede utilizar?
*/

/* $contador = 0;
$total = 0;
$suma = 0;

$nota= rand(-1,10);

while ($nota >= 0) {
    echo "Nota" . 1 + $suma . ": $nota \n";
    $total += $nota;
    $suma++;
    $nota = rand(-1,10);
}
$promedio = $total / $suma;
echo "\n El promedio de notas es : " . $promedio; */

$contador = 0;
$total = 0;
$suma =-1;

$nota= 0;

do {
    
    $total += $nota;
    $suma++;
    $nota = rand(-1,10); 
       echo "Nota" . 1 + $suma . ": $nota \n";
}while ($nota >= 0);
$promedio = $total / $suma;
echo "\n El promedio de notas es : " . $promedio;
echo "\n La cantidad de notas es : " . $suma;
echo "\n La suma de notas es : " . $total;