<?php
/* Una variable contadora se utiliza para llevar un registro del número de repeticiones o iteraciones que se han realizado en un bucle. Esta variable generalmente se incrementa o decrementa en cada iteración para realizar un seguimiento de cuántas veces ha ocurrido cierto evento o acción. Las variables contadoras se usan en bucles for, while o do-while para controlar el número de veces que se repite el bloque de código.

Ejemplo: Usando una variable contadora para contar hasta 5.
 */
/* $contador = 0;


for ($i = 1; $i <= 5; $i++) {
echo $i . PHP_EOL;
    $contador++;

}


echo "El bucle se repitió " . $contador . " veces.";

// Salida: El bucle se repitió 5 veces. */

/* Variable Acumuladora:
Una variable acumuladora se utiliza para sumar o acumular valores en cada iteración de un bucle. Esta variable se actualiza con cada nuevo valor, y al final del bucle, contendrá la suma total o el resultado acumulado de todos los valores procesados.

Ejemplo: Usando una variable acumuladora para sumar los primeros 10 números naturales.
 *//* 
$suma = 0;


for ($i = 1; $i <= 10; $i++) {

    $suma += $i;

}


echo "La suma de los primeros 10 números naturales es: " . $suma;

// Salida: La suma de los primeros 10 números naturales es: 55 */


/* Ejemplo: Calcular el promedio de una lista de números ingresados por el usuario.
 */
$contador = 0;

$suma = 0;


echo "Ingresa una lista de números dando enter (ingresa 'fin' para terminar):\n";


while (true) {

    $numero = readline();

    if ($numero === 'fin') {

        break;

    }

    $contador++;

    $suma += $numero;

}


if ($contador > 0) {

    $promedio = $suma / $contador;

    echo "La cantidad de números ingresados es: " . $contador . "\n";

    echo "La suma de los números ingresados es: " . $suma . "\n";

    echo "El promedio de los números ingresados es: " . $promedio . "\n";

} else {

    echo "No se ingresaron números.\n";

}
/* En este ejemplo, el programa le pide al usuario que ingrese una lista de números separados por espacios. Utilizamos un bucle while para leer la entrada del usuario y procesar cada número. Las variables $contador y $suma se utilizan en conjunto.


La variable $contador se incrementa en cada iteración del bucle para llevar un registro del número de números ingresados por el usuario.

La variable $suma se acumula en cada iteración del bucle al sumar los números ingresados por el usuario.

Al final del bucle, calculamos el promedio dividiendo la suma total entre la cantidad de números ingresados ($promedio = $suma / $contador) y luego mostramos el resultado en pantalla.


Si el usuario no ingresa ningún número, el programa mostrará el mensaje "No se ingresaron números." Esto sucede porque la variable $contador nunca se incrementará, lo que significa que no se realizaron repeticiones del bucle y no se ingresaron números.


Este ejemplo ilustra cómo las variables contadoras y acumuladoras se pueden usar juntas para procesar datos y obtener resultados significativos en un programa. */