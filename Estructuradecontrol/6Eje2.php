<?php
/* 
Realizar la multiplicación de dos números enteros A y B mediante sumas sucesivas, hacer tres
algoritmos con cada estructura repetitiva.
*/

$A =rand(1,10);

$B = rand(1,10);

$resultado= 0;


if ($B>$A){
    $A = $B;
    $B = $A;
}
echo "A : $A , B : $B ";
/* for ($i=0; $i < $B; $i++) { 
    $resultado += $A ;
} */
/* 
Con : While
$i=0;
while ( $i < $B) {
    $resultado += $A ;
    $i++;
} */
$i=0;
if ($i< $B);
do {
    $resultado += $A ;
    $i++;
} while ( $i < $B);
echo "\n Resultado : $resultado";