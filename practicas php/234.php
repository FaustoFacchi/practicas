Crear un programa HTML que lea 3 valores: ini, fin y nro. Y un modo para saber
¿cómo desea redondear los números? (1 – Al alza, 2 – A la baja, 3 – Normal). Debe
cumplir que nro >= que ini y <= que fin. Crear una clase llamada Generador que
reciba todos los parámetros necesarios. Realizar métodos para generar una lista de
números aleatorios decimales entre 0 y 100, con tantos números como el usuario
haya indicado. A cada uno de esos números deberá redondearlo en función de lo que
el usuario especificó en el modo. Para cada número mostrará durante el redondeo, el
número normal y después del redondeo. Finalmente deberá devolver la lista de
números redondeados.

<?php

class Generador
{

    public $modo;
    public $inicio;
    public $final;
    public $numero;

    public function __construct($modo, $init, $end, $number)
    {
        $this->modo = $modo;
        $this->inicio = $init;
        $this->final = $end;
        $this->numero = $number;
    }

    public function generarNumeros()
    {
        $arrayNumeros = [];

        for ($i = 0; $i < $this->numero; $i++) {
            $numeroRandom = rand(0, 100) . '.' .  rand(1, 9);

            if (intval($numeroRandom) >= 100) {
                $numeroRandom = 100;
            }

            $redondearNumeroRandom = $this->redondeo($numeroRandom);

            array_push($arrayNumeros, [$numeroRandom, $redondearNumeroRandom]);
        }

        return $arrayNumeros;
    }

    public function redondeo($number)
    {
        if ($this->modo == 1) {
            $roundedNumber = ceil($number);
        } elseif ($this->modo == 2) {
            $roundedNumber = floor($number);
        } else {
            $roundedNumber = round($number);
        }

        return $roundedNumber;
    }

    public function respuesta()
    {
        // Respuesta hecha con echo porque sino el foreach me corta las respuestas en el primero numero en vez de mostrar todos los que contiene el array.

        if (!($this->numero >= $this->inicio && $this->numero <= $this->final)) {
            echo 'Numero debe ser mayor o igual que inicio y menor o igual que fin';
            return;
        }

        $numeros = $this->generarNumeros();

        foreach ($numeros as $numero) {
            $sinRedondeo = $numero[0];
            $redondeado = $numero[1];

            if ($this->modo == 1) {
                $modo = 'Al alza';
            } elseif ($this->modo == 2) {
                $modo = 'A la baja';
            } else {
                $modo = 'Normal';
            }

            echo "Numero sin redondear: $sinRedondeo Numero redondeado con modo $modo: $redondeado <br>";
        }
    }
}

$generador = new Generador($_POST['modo'], $_POST['ini'], $_POST['fin'], $_POST['nro']);
$generador->respuesta();