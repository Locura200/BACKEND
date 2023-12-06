<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp2ej1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">

</head>

<body>
<H1>Ejercicio N1</H1>

    <form method="post">
<!-- 
    se puede trabajar la parte php desde otro archivo pero hay que poner 
    form action="nombredelarchivo.php" method="post"
 -->
        Numero:
        <input type="number" name="N"> <br />
        <input type="submit" value="Enviar mis datos">
    </form>

    <?php

    /*
Leer una variable N de tipo entero e informar si el numero es positivo negativo o cero y también si es
par, impar o cero. El número cero no es ni positivo ni negativo ni par ni impar.
 */

    $N = $_POST["N"];
/* y aca en la solapa del archivo php 
va $N=$_POSTsirve para seguridad de datos["N"]; */
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
</body>

</html>