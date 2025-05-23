<?php
    if (
        isset($_POST['primer_dia']) &&
        isset($_POST['primer_hora']) &&
        isset($_POST['segundo_dia']) &&
        isset($_POST['segundo_hora'])
    ) {
        $primer_dia = $_POST['primer_dia'];
        $primer_hora = intval($_POST['primer_hora']);
        $segundo_dia = $_POST['segundo_dia'];
        $segundo_hora = intval($_POST['segundo_hora']);

        $dias_semana = [
            'lunes' => 1,
            'martes' => 2,
            'miércoles' => 3,
            'jueves' => 4,
            'viernes' => 5,
            'sábado' => 6,
            'domingo' => 7
        ];

        if (array_key_exists($primer_dia, $dias_semana)) {
            $primer_dia_num = $dias_semana[$primer_dia];
        } elseif ($primer_dia >= 1 && $primer_dia <= 7) {
            $primer_dia_num = intval($primer_dia);
        } else {
            exit("Error: El primer día ingresado no es válido.");
        }

        if (array_key_exists($segundo_dia, $dias_semana)) {
            $segundo_dia_num = $dias_semana[$segundo_dia];
        } elseif ($segundo_dia >= 1 && $segundo_dia <= 7) {
            $segundo_dia_num = intval($segundo_dia);
        } else {
            exit("Error: El segundo día ingresado no es válido.");
        }

        if ($segundo_dia_num <= $primer_dia_num) {
            exit("Error: El segundo día debe ser posterior al primero.");
        }

        $horas_transcurridas = ($segundo_dia_num - $primer_dia_num) * 24 + ($segundo_hora - $primer_hora);

        echo "Entre las {$primer_hora}:00h del {$primer_dia} y las {$segundo_hora}:00h del {$segundo_dia} hay {$horas_transcurridas} hora/s.";
    } else {
        echo "Por favor, complete todos los campos del formulario.";
    }
    ?>