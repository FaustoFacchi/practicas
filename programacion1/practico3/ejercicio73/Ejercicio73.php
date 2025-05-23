<?php
session_start();
function generateSecretCombination($length) {
    $combination = '';
    for ($i = 0; $i < $length; $i++) {
        $combination .= rand(0, 9);
    }
    return $combination;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $length = $_POST['length'];
    $combinacionsecreta = generateSecretCombination($length);
    $_SESSION['combinacionsecreta'] = $combinacionsecreta;
    $_SESSION['attempts'] = 0;
    header("Location: ejercicio73-2.php");
    exit;
}
?>