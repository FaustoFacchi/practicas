<?php
class palindromo{
    private $palabra;

    public function __construct(){
        $this->palabra = $palabra;
    }
    public function armarAlReves(){
       return strrev($this->palabra);
    }
    public function validarPalidromo(){
        if($this->palabra == $this->armarAlReves()){
            return $this->validarPolidromo() = "Es un palindromo";
        } else {
            return $this->validarPolidromo() = "No es un palindromo";
        }
    }
    public function mostrarInformacion(){
        echo "palabra:" . $this->palabra . "<br>";
        echo "palindromo:" . $this->armarAlReves() . "<br>";
        echo  "resultado" . $this->validarPalidromo() . "<br>";
    }
}
$palindromo = new palindromo("reconocer");
$palindromo->mostrarInformacion();
?>