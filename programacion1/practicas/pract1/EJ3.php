<?php
$prinumero = $_GET['numero1'];
$segnumero = $_GET['numero2'];

$suma = $prinumero + $segnumero;
$resta = $prinumero - $segnumero;
$multi = $prinumero * $segnumero;

echo "SUMA: $suma <br>";
echo "RESTA: $resta <br>";
echo "MULTIPLICACION: $multi <br>";
if($segnumero != 0){
    $div = $prinumero / $segnumero;
    echo "DIVISION: $div";
} else {
    echo "No se puede dividir por 0";
}
?>