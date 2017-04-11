<?php

abstract class Animal {

    public function falar() {
        return "Som";
    }

    public function mover() {
        return "Anda";
    }

}

class Cachorro extends Animal {

    public function falar() {
        return "Late";
    }

}

class Gato extends Animal {

    public function falar() {
        return "Meaaaaw";
    }

}

class Passaro extends Animal{
    
    public function falar() {
        return "Canta";
    }
    
    public function mover() {
        return "Voar e " . parent::mover();
    }
    
}

$pluto = new Cachorro();
echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";

echo "<hr>";

$gato = new Gato();
echo $gato->falar() . "<br>";
echo $gato->mover() . "<br>";

echo "<hr>";

$passaro = new Passaro();
echo $passaro->falar() . "<br>";
echo $passaro->mover() . "<br>";