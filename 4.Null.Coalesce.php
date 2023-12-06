<?php

// Coalescencia nula - ??

/* 

$a ?? "valor por defecto"

La idea es que si el primer valor es null entonces tomara el segundo valor.
Si ese valor es null tomara el siguiente valor

*/

// Ejemplo de variables con valores nulo

$nombre = null;

// usando el operador de fusion de null para proporcionar un valor predeterminado

$nombrecompleto = $nombre ?? 'usuario';

// El resultado sera "Usuario" por que $nombre es nulo

echo $nombrecompleto;