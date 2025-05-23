<?php

    $n = intval($_GET["cantidad"]);
// en el ejercicio no daba un limite en el numero de la secuencia, para que no se limite por la memoria y de error le voy a poner como maximo 1000
 if($n >= 0 and $n <= 1000){
    $valores = [];
    for ($i = 0; $i < $n; $i++) {
        $valores[] = rand(-10, 10);
    }
    $posicionNegativo = -1;
    for ($i = 0; $i < $n; $i++) {
        if ($valores[$i] < 0) {
            $posicionNegativo = $i;
            break;
        }
    }
    echo "<h2>Secuencia generada:</h2>";
    echo "<p>" . implode(", ", $valores) . "</p>";

    if ($posicionNegativo == -1) {
        echo "<p>No se encontró ningún número negativo en la secuencia.</p>";
    } else {
        echo "<p>El primer número negativo se encuentra en la posición: " . ($posicionNegativo + 1) . "</p>";
    }
 } else {
    echo "El valor ingresado no pertenece a los numeros naturales o es mayor a 1000";
}
?>