<?php
if(isset($_POST['num1']) && isset($_POST['num2'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multiplicacion = $num1 * $num2;
    
    if($num2 != 0) {
        $division = $num1 / $num2;
    } else {
        $division = "No se puede dividir por cero";
    }
    
    echo "Suma: " . $suma . "<br>";
    echo "Resta: " . $resta . "<br>";
    echo "Multiplicación: " . $multiplicacion . "<br>";
    echo "División: " . $division . "<br>";
} else {
    echo "Por favor ingrese los dos números.";
}
?>