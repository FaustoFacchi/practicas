    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto = $_POST["text"];
        $frecuencia_vocales = array("A" => 0, "E" => 0, "I" => 0, "O" => 0, "U" => 0);
        for ($i = 0; $i < strlen($texto); $i++) {
            $caracter = $texto[$i];
            if (array_key_exists($caracter, $frecuencia_vocales)) {
                $frecuencia_vocales[$caracter]++;
            }
        }
        foreach ($frecuencia_vocales as $vocal => $frecuencia) {
            echo "$vocal: $frecuencia<br>";
        }
    }
    ?>