<?php
/*
1) Los beneficios de una funcion son:

reutilizacion: las funciones puedes ser reutilizadas en distintas partes del prograba evitando duplicar el codigo
preservacion: una vez que hagamos una funcion si la guardamos de la manera adecuada nunca mas deberemos tipear una funcion igual ya que solo 
deberos llamar a la vieja cada vez q la necesitemos
separacion de tareas: nos permite trabajar en un mismo porgrama por partes 
modularidad:permite dividir el codigo en partes manejables y con tareas especificas

2)
*/
class numeros{
    private $arreglo=[];

    public function __construct(){
        for($i = 0; $i < 20; $i++){
            $this->arreglo[] = rand(1,100);
        }
    }
    public function valorMayor(){
        return max($this->arreglo);
    }
    public function valorMenor(){
        return min($this->arreglo);
    }
    public function promedio(){
        return array_sum($this->arreglo) / count($this->arreglo);
    }
    public function MayorMenor(){
        rsort($this->arreglo);
        return $this->arreglo;
    }
    public function MCD(){
        return gmp_gcd($this->valorMayor(),$this->valorMenor());
    }
    public function MCM(){
        return gmp_lcm($this->valorMayor(),$this->valorMenor());
    }
    public function resultados(){
        echo "numeros: " . implode(", ",$this->arreglo) . "<br>";
        echo "mayor: " . ($this->valorMayor()) . "<br>";
        echo "menor: " . ($this->valorMenor()) . "<br>";
        echo "promedio: " . ($this->promedio()) . "<br>";
        echo "mayor a menor: " . implode(", ",$this->MayorMenor()) . "<br>";
        echo "MCD: " . ($this->MCD()) . "<br>";
        echo "MCM: " . ($this->MCM()) . "<br>";
    }
}
$numero = new numeros();
$numero->resultados();
?>

