<?php

interface Veiculo {

    public function acelerar($velocidade);

    public function freiar($velocidade);

    public function trocarMacha($macha);
}

abstract class Automovel implements Veiculo {

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

class DelRay extends Automovel {
    public function empurrar($param) {
        echo "empurrando....";
    }
}

$carro = new DelRay();
$carro->acelerar(200);