<?php
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];

        if ($numero1 < $numero2) {
            echo "Los números entre $numero1 y $numero2 son:<br>";
            for ($i = $numero1; $i <= $numero2; $i++) {
                echo "$i ";
            }
        } else {
            echo "El primer número es mayor al segundo.";
        }
    ?>