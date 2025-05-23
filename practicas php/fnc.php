<?php
$lado1 = $_POST['lado1'];
$lado2 = $_POST['lado2'];
$lado3 = $_POST['lado3'];

if (($lado1 + $lado2 > $lado3) && ($lado1 + $lado3 > $lado2) && ($lado2 + $lado3 > $lado1)) {

    if ($lado1 == $lado2 && $lado2 == $lado3) {
        echo "<p>El triángulo es equilátero.</p>";
    } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
        echo "<p>El triángulo es isósceles.</p>";
    } else {
        echo "<p>El triángulo es escaleno.</p>";
    }
} else {
    echo "<p>Los lados no forman un triángulo.</p>";
}
?>