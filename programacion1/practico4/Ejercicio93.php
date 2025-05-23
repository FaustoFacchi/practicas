<?php
function sumatoria($n) {
    return ($n * ($n + 1)) / 2;
}

$target = 100000;
$n = 0;
$suma = 0;

// Incrementar $n hasta que la suma sea mayor o igual a 100,000
while ($suma < $target) {
    $n++;
    $suma = sumatoria($n);
}

echo "Para obtener al menos $target, debemos sumar los primeros $n números naturales.";
?>