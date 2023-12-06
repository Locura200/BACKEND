<?php
//do - while(hacer-mientras)

/* 
La idea del bucle do while es ejecutar un bloque de codigo al menos una vez hasta que la expresion haya cambiado.
*/

/* Siempre ejecuta el codigo al menos una vez

do{
    //codigo
}while(expresion);

en otros lenguajes existe un bucle similar_text

repeat{
    //codigo
}until(!expresion);
 */

/* $contador = 100;
//if($contador > 0); esto si queremos convertir un do while en while,simplemente agregamos un if y preguntamos si el contador en mayor que cero seguir.
do{
    echo $contador-- . " ";
}while ($contador > 0); 
 */

/* $contador = 1;


 do{
    echo $contador ++ . " ";
 
} while ($contador <= 10);

 */

 $contador =0;
 do{
    $entrada = readline("ingrese la nota del alumni(o ecriba 'stop'para salir):");
    $total+= $entrada;
    $contador++;
 }while ($entrada!='stop');
 echo "Promedio del alumno". $total / $contador;
 /* Recuerda que la elección entre while y do-while depende de la lógica específica del programa y de si deseas que el bloque de código dentro del bucle se ejecute antes o después de la comprobación de la condición. En este caso, el bucle do-while es más adecuado porque queremos asegurarnos de que el jugador realice al menos un lanzamiento antes de detenerse. */
