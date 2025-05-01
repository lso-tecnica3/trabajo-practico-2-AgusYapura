<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 8</title>
</head>
<body>
<?php

$meses = ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"];
$maximas = [30.4, 29.0, 26.8, 23.4, 19.3, 16.6, 16.0, 17.7, 19.6, 23.1, 26.1, 28.5];
$minimas = [20.2, 19.5, 18.0, 13.6, 10.5, 8.3, 7.7, 7.6, 9.3, 13.5, 16.0, 18.2];

$suma_max = 0;
$suma_min = 0;

$max_temp = $maximas[0];
$min_temp = $minimas[0];
$mes_max = $meses[0];
$mes_min = $meses[0];

for ($i = 0; $i < 12; $i++) {
    $suma_max = $suma_max + $maximas[$i];
    $suma_min = $suma_max + $minimas[$i];

    if ($maximas[$i] > $max_temp) {
        $max_temp = $maximas[$i];
        $mes_max = $meses[$i];
    }

    if ($minimas[$i] < $min_temp) {
        $min_temp = $minimas[$i];
        $mes_min = $meses[$i];
    }
}

$promedio_max = $suma_max / 12;
$promedio_min = $suma_min / 12;

echo "<h2>Temperaturas</h2>";
echo "<li>El promedio de temperaturas maximas fue : " . number_format($promedio_max, 1) . " °C</li>";
echo "<li>El promedio de temperaturas minimas fue : " . number_format($promedio_min, 1) . " °C</li>";
echo "<li>La temperatura mas alta del año fue : $max_temp °C en $mes_max</li>";
echo "<li>La temperatura mas baja del año fue : $min_temp °C en $mes_min</li>";

?>

</body>
</html>