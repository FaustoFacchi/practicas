    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $nombre_sin_espacios = str_replace(' ', '', $nombre);
        $cantidad_caracteres = strlen($nombre_sin_espacios);
        echo "<p>El nombre '$nombre' tiene $cantidad_caracteres caracteres.";
    }
    ?>