<?php

//1)


$N = readline("Ingrese un valor: ");



if ($N == 0) {
    echo "El numero es cero";
} else { // SI NO ES CERO
    echo ($N % 2 == 0) ? "El numero es par" : "El numero es impar";
    echo ($N > 0) ? "El numero es positivo" : "El numero es negativo";
}


/* dentro de html
<body>
<form action="tp2ej1.php" method="post">
    <input type="number" step=0.001 name="N">
    <input type="submit" name="submit">
</form>
<?php

$N = $_POST['N'];

if ($N > 0) {
    echo "El numero es positivo";
    if ($N % 2 == 0) {
        echo " y es par";
    } else {
        echo " y es impar";
    }
} elseif ($N < 0) {
    echo "El numero es negativo";
    if ($N % 2 == 0) {
        echo " y es par";
    } else {
        echo " y es impar";
    }
} elseif ($N == 0) {
    echo "El numero es cero";
} else {
    echo "El numero no es valido";
}
echo "<br>";
echo "el numero es: " . $N;
?>
*/