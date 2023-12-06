Ordenar en forma creciente tres valores diferentes A, B, C.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer.3</title>
</head>
<body>
    <h1> Trabajo Practico N°2</h1>
    <h2>Ejercicio3</h2>
    <form method="post">
        <input type="number" name="A">
        <input type="number" name="B">
        <input type="number" name="C">
        <input type="submit" value="Enviar Datos">
    </form>

<?php

$A = $_POST['A'];

$B = $_POST ['B'];

$C = $_POST ['C'];

if ($A ==$B || $B ==$C || $C ==$A) {
    echo "No debe ingresar numeros iguales";
} else 
    if($A>$B && $A>$C) { // A ES EL MAYOR DE TODOS
        if ($B>$C)
            echo "$C $B $A";
            else
            echo "$B $C $A";
    } elseif($B>$A && $B>$C) { // B ES EL MAYOR DE TODOS
        if ($A>$C)
            echo "$C $A $B";
            else
            echo "$A $C $B";
    } else { // C ES EL MAYOR DE TODOS
        if ($B>$A)
            echo "$A $B $C";
        else
            echo "$B $A $C";
    }

?>
</body>
</html>
