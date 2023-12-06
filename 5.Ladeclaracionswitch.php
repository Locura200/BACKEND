<?php

// Declaracion de switch- Segun

/* 
Similar a una serie de sentencia if.

Switch (expression) {

    case 0:
        //code
        breck;
    case 1:
    case 2:
        //code
        breck;
    default: (opciónal)
}

La expression solo se evalua una vez y el resultado se compara con cada una de las sentencias case.
Si coincide, entonces se ejecuta el codigo hasta el breack;

-la sentencia case puede estar vacia
-si no se utiliza la sentencia breck, entonces se ejecuta el siguiente bloque de codigo.

*/

$diaSemana = 3; //supongo que el valor representa el dia miercoles

switch ($diaSemana) {
    case 1:
        echo "Hoy es Lunes." . PHP_EOL;
    case 2:
        echo "Hoy es martes." . PHP_EOL;
    case 3:
        echo "Hoy es miercoles." . PHP_EOL;
    case 4:
        echo "Hoy es jueves." . PHP_EOL;
    case 5:
        echo "Hoy es Viernes." . PHP_EOL;
    case 6:
        echo "Hoy es Sabado." . PHP_EOL;
    case 7:
        echo "Hoy es Domingo." . PHP_EOL;
        break;
    default:
        echo "Dia no valido.";
        break;
}
    
$nota = readline('Ingrese la nota: ');


switch($nota) {

    case 0:

    case 1:

    case 2:

    case 3:

        echo "Su examen esta reprobado";

        break;

    case 4:

    case 5:

    case 6:

        echo "Su examen esta regular";

        break;

    case 7:

    case 8:

    case 9:

        echo "Su examen esta promocionado";

        break;

    case 10:

        echo "Su examen esta excelente";

        break;

    default:

        echo "Ingreso una nota invalida";

        break;

}