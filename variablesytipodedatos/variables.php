<?php
/* Nombre de variables */
$variable;
$_variable;
$Mi1eraVariable;
//nomenclatura CamelCase
$miPrimeraVariable = 'lower';//lower camelCase
$miPrimeraVariable='upper';// upper camelCase
//Nomenclaturas varias
$snake_case= "snacke_case";//lower snakeCase
$SNAKE_CASE="SNACKE_CASE";//upper snakeCase

/* nombre de variables invalidos
$123354668_variable;
no se recomienda usar estos nombres */

$suma= 7+8+9;
$total=3;
$promedio=$suma/$total;
echo $promedio;
echo PHP_EOL;
echo"El promedio de la nota es:".$promedio;
//Dentro de las cadenas simples NO se puede mostrar variables
$unacadenaSimpleComillas='Cadena de "Comillas" simples $unacadenaDobleComillas';
//Dentro de las comillas dobles Si se pueden mostrar variables
$unacadenaDobleComillas="Mi\"amigo\"D'alesandro es un gran futbolista $unacadenaSimpleComillas";
echo PHP_EOL;
echo $unacadenaDobleComillas;

