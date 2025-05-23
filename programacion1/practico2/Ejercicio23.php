<?php
if (isset($_GET['lado1']) && isset($_GET['lado2']) && isset($_GET['lado3'])) {
    $lado1 = $_GET['lado1'];
    $lado2 = $_GET['lado2'];
    $lado3 = $_GET['lado3'];

    // Verificar si los números ingresados forman un triángulo
    if (($lado1 + $lado2 > $lado3) && ($lado1 + $lado3 > $lado2) && ($lado2 + $lado3 > $lado1)) {
        // Verificar tipo de triángulo
        if ($lado1 == $lado2 && $lado2 == $lado3) {
            echo "Los lados forman un triángulo equilátero.";
        } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
            echo "Los lados forman un triángulo isósceles.";
        } else {
            echo "Los lados forman un triángulo escaleno.";
        }
    } else {
        echo "Los lados ingresados no forman un triángulo válido.";
    }
} else {
    echo "Por favor, ingresa los tres lados del triángulo.";
}
?>