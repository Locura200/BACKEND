<?php

/* 
Imprimir los números de 1 a N (siendo N un número que se lee) cada uno con su respectivo factorial.
*/

$nro = rand(1,100);
echo"Nro elegido: " . $nro. "\n";

$acumulador = 1;

for ($i=1; $i <= $nro ; $i++) { 
    $acumulador*= $i;
 }
 echo "El factorial es : $i " . $acumulador. "\n"; 
