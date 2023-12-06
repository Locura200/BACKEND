<?php
// -----------------------------------------
//---Declaracion if/else - Si/Sino
// -----------------------------------------
/* 
Esto permite la ejecucion condicional.

Piensa en ello como una pregunta de si/no. Si es verdadera, ejecuta el codigo.
Si no es verdadera, ejecuta el codigo en la seccion else (si se proporciona una).
*/

$edad = readline("ingrese su edad:");

$salario = readline("ingrese su salario:");

if($edad>=21) {

    echo "Es mayor de edad". PHP_EOL;

} else {

    echo "LA persona es menor de edad". PHP_EOL;

    echo "Acceso denegado ". PHP_EOL;
}

$user = 'admin';

$pass ='admin';

$usuario = readline("ingrese su usuario:");

$contraseña = readline("ingrese su contraseña:
");

if($usuario==$user) {
    if ($contraseña==$pass){

        echo "usuario logueado correctamente";
    } else{

        echo "contraseña incorrecta";
    }

}else{

    echo "usuario incorrecto";
}