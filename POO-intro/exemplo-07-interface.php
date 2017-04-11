<?php

interface Veiculo {

    public function acelerar($velocidade);

    public function freiar($velocidade);

    public function trocarMacha($macha);
}

class Civic implements Veiculo {

    public function acelerar($velocidade) {
        echo "O veiculo acelerou até: " . $velocidade . "km/h";
    }

    public function freiar($velocidade) {
        echo "O veiculo freiou até: " . $velocidade . "km/h";
    }

    public function trocarMacha($macha) {
        echo "O veiculo engatou a macha: " . $macha;
    }

}

$carro = new Civic();
$carro->trocarMacha(4);
