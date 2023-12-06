<?php

// Else if - Si no es verdadera, pero si es verdadera la siguiente,ejecuta el codigo.

/* 
Puede tener comprobacion condicional adicional ampliando la sentencia if para incluir el elseif.

Tenga en cuenta que se ejecutara la comprobacion condicional que devuelve primero true.

*/

$edad = readline("ingrese su edad:");

$salario= readline("ingrese su salario:");

if($salario<67_000){
        echo "usted cobra menos del salario minimo";

}elseif ($salario<100_000) {
        echo "usted cobra un poco mas del salario minimo";
}elseif ($salario<200_000){
        echo"usted cobra relativamente bien";
}elseif ($salario<300_000) {
        echo "usted esta cobrando muy por encima de la media";
}else { //if ($salario>=300_000) 
        echo "con este salario ya tiene que pagar impuesto a la riqueza";
}

if ($salario>300_000){
    echo "con este salario ya tiene que pagar impuesto a la riqueza";
}elseif ($salario>200_000){
    echo "esta cobrando muy por encima de la media";
}elseif ($salario>100_000){
    echo "usted cobra un poco mas del salario minimo";

}else{// if ($salario <67_000)
    echo "usted cobra menos del salario minimo";
}

