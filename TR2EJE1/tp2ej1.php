<?php

/*
Leer una variable N de tipo entero e informar si el numero es positivo negativo o cero y también si es
par, impar o cero. El número cero no es ni positivo ni negativo ni par ni impar.
 */

$N = $_GET['N'];

if ($N > 0) {
    echo "El numero es positivo";
    if ($N % 2 == 0) {
        echo " y es par";
    } else {
        echo " y es impar";
    }
} elseif ($N < 0) {
    echo "El numero es negativo";
    if ($N % 2 == 0) {
        echo " y es par";
    } else {
        echo " y es impar";
    }
} elseif ($N == 0) {
    echo "El numero es cero";
} else {
    echo "El numero no es valido";
}
echo "<br>";
echo "el numero es: " . $N;
