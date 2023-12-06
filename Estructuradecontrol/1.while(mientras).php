<?php

//bucle

/* 
La idea del blucle while es ejecutar un bloque de codigos hasta que la expresion haya cambiado.
while (expresion logica)
{
    codigo
}
*/

/* while (1==0) { // bucle que nunca se ejecuta

    echo "hola mundo";

}

while (1>0) { // bucle infinito

    echo "hola mundo";

}
 */
/*  while(true){//bucle infinito
    echo "hola mundo";
} */

/*  $contador = 1;


while ($contador <= 10) {

    echo $contador . PHP_EOL;

     $contador++;  

} */  // Salida: 1 2 3 4 5 6 7 8 9 10

/* 
$contador = 10;


/* while ($contador > 0) {

    echo --$contador . PHP_EOL;

      } */
//salida:10 9 8 7 6 5 4 3 2 1 0 */

$dado = rand(1, 6);
$dado2 = rand(1, 6);

$contador = 1;

while ($dado + $dado2 < 11) {
    echo "$dado y $dado2 son los resultados tirados en la tirada numero: $contador" . PHP_EOL;

    $dado = rand(1, 6);
    $dado2 = rand(1, 6);

    $contador++;
}
echo "GANASTE $dado y $dado2 son los resultados tirados en la tirada numero: $contador" . PHP_EOL;
