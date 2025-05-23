<?php
class conversor{
    public $parametro;
    public $valor;
    public function __construct($parametro, $valor){
        $this->parametro = $parametro;
        $this->valor = $valor;
    }
    public function equivalencias(){
        $kl = 0;
        $hl = 0;
        $dal = 0;
        $l = 0;
        $dl = 0;
        $cl = 0;
        $ml = 0;
        if($this->parametro == "kl";){
            $this->valor / 10 = $hl ;
            $hl / 10 = $dal ;
            $dal / 10 = $l ;
            $l / 10 = $dl ;
            $dl / 10 = $cl ;
            $cl / 10 = $ml ;
            return "Las equivalencias de: " . $this->valor .  . $this->parametro . "<br>" "son: hl:$hl , dal:$dal , l:$l , dl:$dl , cl:$cl , ml:$ml " 
        } elseif($this->parametro == "hl";){
            $this->valor * 10 = $kl ;
            $this->valor / 10 = $dal ;
            $dal / 10 = $l ;
            $l / 10 = $dl ;
            $dl / 10 = $cl ;
            $cl / 10 = $ml ;
            return "Las equivalencias de: " . $this->valor .  . $this->parametro . "<br>" "son: kl:$kl , dal:$dal , l:$l , dl:$dl , cl:$cl , ml:$ml " 
        }  elseif($this->parametro == "dal";){
            $this->valor * 100 = $kl ;
            $kl / 10 = $hl ;
            $this->valor / 10 = $l ;
            $l / 10 = $dl ;
            $dl / 10 = $cl ;
            $cl / 10 = $ml ;
            return "Las equivalencias de: " . $this->valor .  . $this->parametro . "<br>" "son: kl:$kl , hl:$hl , l:$l , dl:$dl , cl:$cl , ml:$ml " 
        }   elseif($this->parametro == "l";){
            $this->valor * 1000 = $kl ;
            $kl / 10 = $hl ;
            $hl / 10 = $dal ;
            $this->valor / 10 = $dl ;
            $dl / 10 = $cl ;
            $cl / 10 = $ml ;
            return "Las equivalencias de: " . $this->valor .  . $this->parametro . "<br>" "son: kl:$kl , hl:$hl , dal:$dal , dl:$dl , cl:$cl , ml:$ml " 
        }   elseif($this->parametro == "dl";){
            $this->valor * 10000 = $kl ;
            $kl / 10 = $hl ;
            $hl / 10 = $dal ;
            $dal / 10 = $l ;
            $this->valor / 10 = $cl ;
            $cl / 10 = $ml ;
            return "Las equivalencias de: " . $this->valor .  . $this->parametro . "<br>" "son: kl:$kl , hl:$hl , dal:$dal , l:$l , cl:$cl , ml:$ml " 
        }   elseif($this->parametro == "cl";){
            $this->valor * 100000 = $kl ;
            $kl / 10 = $hl ;
            $hl / 10 = $dal ;
            $dal / 10 = $l ;
            $l / 10 = $dl ;
            $this->valor / 10 = $ml ;
            return "Las equivalencias de: " . $this->valor .  . $this->parametro . "<br>" "son: kl:$kl , hl:$hl , dal:$dal , l:$l , dl:$dl , ml:$ml " 
        } else($this->parametro == "ml";){
            $this->valor * 1000000 = $kl ;
            $kl / 10 = $hl ;
            $hl / 10 = $dal ;
            $dal / 10 = $l ;
            $l / 10 = $dl ;
            $dl / 10 = $cl ;

            return "Las equivalencias de: " . $this->valor .  . $this->parametro . "<br>" "son: kl:$kl , hl:$hl , dal:$dal , l:$l , dl:$dl , cl:$cl " 
        }
    
    }
}
$conversor = new conversor("hl","50");
$conversor->equivalencias();
?>


CORRECCIONES

<?php
class Conversor {
    public $parametro;
    public $valor;

    public function __construct($parametro, $valor) {
        $this->parametro = $parametro;
        $this->valor = $valor;
    }

    public function equivalencias() {
        $kl = $hl = $dal = $l = $dl = $cl = $ml = 0;

        if ($this->parametro == "kl") {
            $hl = $this->valor * 10;
            $dal = $hl * 10;
            $l = $dal * 10;
            $dl = $l * 10;
            $cl = $dl * 10;
            $ml = $cl * 10;
        } elseif ($this->parametro == "hl") {
            $kl = $this->valor / 10;
            $dal = $this->valor * 10;
            $l = $dal * 10;
            $dl = $l * 10;
            $cl = $dl * 10;
            $ml = $cl * 10;
        } elseif ($this->parametro == "dal") {
            $kl = $this->valor / 100;
            $hl = $kl * 10;
            $l = $this->valor * 10;
            $dl = $l * 10;
            $cl = $dl * 10;
            $ml = $cl * 10;
        } elseif ($this->parametro == "l") {
            $kl = $this->valor / 1000;
            $hl = $kl * 10;
            $dal = $hl * 10;
            $dl = $this->valor * 10;
            $cl = $dl * 10;
            $ml = $cl * 10;
        } elseif ($this->parametro == "dl") {
            $kl = $this->valor / 10000;
            $hl = $kl * 10;
            $dal = $hl * 10;
            $l = $dal * 10;
            $cl = $this->valor * 10;
            $ml = $cl * 10;
        } elseif ($this->parametro == "cl") {
            $kl = $this->valor / 100000;
            $hl = $kl * 10;
            $dal = $hl * 10;
            $l = $dal * 10;
            $dl = $l * 10;
            $ml = $this->valor * 10;
        } elseif ($this->parametro == "ml") {
            $kl = $this->valor / 1000000;
            $hl = $kl * 10;
            $dal = $hl * 10;
            $l = $dal * 10;
            $dl = $l * 10;
            $cl = $dl * 10;
        }

        return "Las equivalencias de: " . $this->valor . " " . $this->parametro . "<br>" . " son: "
            . "kl: $kl, hl: $hl, dal: $dal, l: $l, dl: $dl, cl: $cl, ml: $ml";
    }
}

$conversor = new Conversor("cl", 140);
echo $conversor->equivalencias();
?>