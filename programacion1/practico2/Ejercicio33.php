<?php
if (
    isset($_GET['legajo']) &&
    isset($_GET['nota1']) &&
    isset($_GET['nota2']) &&
    isset($_GET['nota3']) &&
    isset($_GET['nota4']) &&
    isset($_GET['nota5'])
) {
    $legajo = $_GET['legajo'];
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];
    $nota4 = $_GET['nota4'];
    $nota5 = $_GET['nota5'];

    $aprobadas = 0;

    if ($nota1 >= 6) {
        $aprobadas++;
    }
    if ($nota2 >= 6) {
        $aprobadas++;
    }
    if ($nota3 >= 6) {
        $aprobadas++;
    }
    if ($nota4 >= 6) {
        $aprobadas++;
    }
    if ($nota5 >= 6) {
        $aprobadas++;
    }

    if ($aprobadas >= 4) {
        $condicion = "Regular";
    } elseif ($aprobadas == 3) {
        $condicion = "A recuperatorio";
    } else {
        $condicion = "A recursar";
    }

    echo "Legajo: $legajo<br>";
    echo "Condicion: $condicion";
}
?>