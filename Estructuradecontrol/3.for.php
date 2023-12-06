
<?PHP

// eSTRUCTURA - para(for)

/* 
Los componentes del bucle for son los siguientes:


Inicialización: Se ejecuta antes de comenzar el bucle y generalmente se utiliza para establecer el valor inicial de una variable de control.

Condición: Se evalúa antes de cada iteración y determina si el bucle debe continuar ejecutándose o no.

Incremento/Decremento: Se ejecuta al final de cada iteración y generalmente se utiliza para aumentar o disminuir el valor de la variable de control.
for (inicialización; condición; incremento/decremento) {

    // Código a ejecutar en cada iteración

}
*/
/* for ($i=1; $i<=5 ; $i++) {
    echo $i . "";
}
 */
/* for ($i=10; $i>0 ; $i--) {
    echo $i . "";
} */

/* Ejemplo 2: Sumar los primeros 10 números naturales */

/* $suma = 0;


for ($i = 1; $i <= 10; $i++) {

    $suma += $i;

}


echo "La suma de los primeros 10 números naturales es: " . $suma;
 */

// Salida: La suma de los primeros 10 números naturales es: 55

/* Ejemplo 3: Imprimir números pares del 0 al 20 */

/* for ($i = 0; $i <= 20; $i += 2) {

    echo $i . " ";

}
 */

// Salida: 0 2 4 6 8 10 12 14 16 18 20

$contador= 0 ;
for ($i=1; $i <=100 ; $i*=2) { 
    echo $i . " ";
    $contador++;
}
echo "El bucle se repitio" . $contador . "veces.";