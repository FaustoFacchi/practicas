<!DOCTYPE html>
<head>
    <title>Números Enteros</title>
</head>
<body>
    <?php
    if (isset($_GET['action']) && $_GET['action'] == 'mostrar.resultados' && isset($_GET['numeros'])) {
        $numeros = $_GET['numeros'];
        echo '<h1>Resultados</h1>';
        echo '<ul>';
        foreach ($numeros as $numero) {
            if ($numero > 0) {
                echo "<li>$numero  POSITIVO</li>";
            } elseif ($numero < 0) {
                echo "<li>$numero  NEGATIVO</li>";
            } else {
                echo "<li>$numero  NEUTRO</li>";
            }
        }
        echo '</ul>';
        echo '<a href="?action=nuevosnum">Ingresar nuevos numeros</a>';
    } else {
        echo '<h1>Ingrese 100 Numeros</h1>';
        echo '<form action="" method="get">';
        for ($i = 0; $i < 100; $i++) {
            echo "<label for='numero_$i'> <br>";
            echo ($i + 1);
            echo "<input type='number' id='numero_$i' name='numeros[]' required><br>";
        }
        echo "<input type='hidden' name='action' value='mostrar.resultados'>";
        echo "<input type='submit' value='Mostrar Resultados'>";
        echo "</form>";
    }
    ?>
</body>
</html>