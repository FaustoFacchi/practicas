<!DOCTYPE html>
<head>
    <title>Ejercicio123</title>
</head>
<body>
    <?php
    if (isset($_GET['action']) && $_GET['action'] == 'resultados' && isset($_GET['numeros'])) {
        $numeros = $_GET['numeros'];
        echo '<h1>Resultados</h1>';
        foreach ($numeros as $numero) {
            if ($numero > 0) {
                echo "<br> $numero - POSITIVO";
            } elseif ($numero < 0) {
                echo "<br> $numero - NEGATIVO";
            } else {
// no sabia si excluir el cero cuando hago el rand o que cuando toque cero haga esto.
                echo "<br> $numero - ES CERO";
            }
        }
        echo "<br> <a href='?action=generar.num'>Numeros nuevos</a>";
    } elseif (isset($_GET['action']) && $_GET['action'] == 'generar.num') {
        $numeros = [];
        for ($i = 0; $i < 100; $i++) {
            $numeros[] = rand(-100, 100);
        }
        /*foreach ($numeros as $numero) {     //MUESTRA LOS NUMEROS GENERADOS EN LA PRIMER PANTALLA
            echo "<li>$numero</li>";
        }*/
        echo '<form action="" method="get">';
        foreach ($numeros as $numero) {
            echo "<input type='hidden' name='numeros[]' value='$numero'>";
        }
        echo '<input type="hidden" name="action" value="resultados">';
        echo '<input type="submit" value="sdadsa">';
        echo '</form>';
    } else {
        echo '<h1>Generar Números Enteros</h1>';
        echo '<a href="?action=generar.num">Generar Números</a>';
    }
    ?>
</body>
</html>
   
   
   
   
   
   
   
   
   