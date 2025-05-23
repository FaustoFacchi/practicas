<?php
$valores = [];
for ($i = 0; $i < 60; $i++) {
    $valores[] = rand(-20, 20);
}

$cantidadCeros = 0;
$sumaPositivos = 0;
$cantidadPositivos = 0;
$sumaNegativos = 0;

foreach ($valores as $valor) {
    if ($valor === 0) {
        $cantidadCeros++;
    } elseif ($valor > 0) {
        $sumaPositivos += $valor;
        $cantidadPositivos++;
    } else {
        $sumaNegativos += $valor;
    }
}

if ($cantidadPositivos > 0) {
    $promedioPositivos = $sumaPositivos / $cantidadPositivos;
} else {
    $promedioPositivos = 0;
}

echo "a) Cantidad de valores cero: $cantidadCeros\n";
echo "b) Promedio de los valores positivos: $promedioPositivos\n";
echo "c) Suma de los valores negativos: $sumaNegativos\n";
?>