<!-- Una institución de educación, con carreras tanto diurnas como vespertinas, considera lo siguiente en
su proceso académico: si un estudiante de carrera vespertina tiene una nota de presentación mayor
o igual a 6, se exime, y si no alcanza el 6 pero tiene una nota de presentación igual o mayor a 3.5,
rinde examen. Si el estudiante es de carrera diurna y si su nota de presentación es mayor o igual a
3.5, rinde examen (no hay posibilidad de eximirse). En ambos regímenes, si la nota de presentación
es menor que 3.5, reprueba. Hacer la tabla de decisión y escriba el algoritmo correspondiente.
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T.P:2 - Ej.n°2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">

</head>
<body>
    <h1>T.P:2 - Ej.n°2</h1>
    <h2>institución de educación</h2>
    <form method="post">
        <input type="text" name="carrera">
        <br/>
        <input type="number" name="nota">
        <input type="submit" value="Enviar Datos">
    </form>

<?php


$carrera = $_POST["carrera"];//vespertina, diurna

$nota = $_POST["nota"];//exime,rinde examen,reprobado


if($nota>=6 && $carrera == "vespertina"){
    echo "Se exime";
}elseif ($nota>=6 && $carrera == "diurna"){
    echo "Se exime";
}elseif ($nota>=3.5) {
    echo "Rinde examen";
}else{
    echo "Reprobado";
}
?>
</body>
</html>

