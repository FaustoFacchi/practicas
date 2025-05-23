<?php
session_start();

function compararcombinaciones($adivinar, $secreto) {
    $pista = '';
    for ($i = 0; $i < strlen($adivinar); $i++) {
        if ($adivinar[$i] < $secreto[$i]) {
            $pista .= '+ ';
        } elseif ($adivinar[$i] > $secreto[$i]) {
            $pista .= '- ';
        } else {
            $pista .= '= ';
        }
    }
    return $pista;
}

if (!isset($_SESSION['combinacionsecreta'])) {
    header("Location: ejercicio73.html");
    exit;
}

$combinacionsecreta = $_SESSION['combinacionsecreta'];
$intentos = isset($_SESSION['attempts']) ? $_SESSION['attempts'] : 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adivinar = $_POST['adivinar$adivinar'];
    $pista = compararcombinaciones($adivinar, $combinacionsecreta);
    $intentos++;
    $_SESSION['attempts'] = $intentos;
    
    if ($adivinar === $combinacionsecreta) {
        header("Location: ejercicio73-2.html");
        exit;}
} else {
    $pista = '';
}
?>

<!DOCTYPE html>
<head>
    <title>La Cámara secreta - Juego</title>
</head>
<body>
    <h1>Intento <?php echo $intentos; ?></h1>
    <form action="ejercicio73-2.php" method="post">
        <label for="adivinar$adivinar">Tu combinación:</label>
        <input type="text" id="adivinar$adivinar" name="adivinar$adivinar" pattern="[0-9]{<?php echo strlen($combinacionsecreta); ?>}" maxlength="<?php echo strlen($combinacionsecreta); ?>" required>
        <button type="submit">Comprobar</button>
    </form>
    <?php if ($pista): ?>
        <p>Pista: <?php echo $pista; ?></p>
    <?php endif; ?>
    <p><a href="ejercicio73.html">Volver a empezar</a></p>
</body>
</html>