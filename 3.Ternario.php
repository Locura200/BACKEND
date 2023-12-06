<?php

// Ternario

/* 
(expresion) ? rsultado1 : rsultado2

La expresion---------(expresion) ? rsultado1 : rsultado2------evalua a resultado1 si la expresion es tue y resultado2 si la expresion es false.

*/

$edad = readline("ingrese su edad:");

if ($edad >=21)
{
    echo "La persona es mayor de edad";
}
else
{
    echo "La persona es menor de edad";
}

echo($edad>=21) ? "La persona es mayor de edad" : "La persona es menor de edad";