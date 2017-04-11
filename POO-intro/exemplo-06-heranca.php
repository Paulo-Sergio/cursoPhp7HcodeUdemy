<?php

class Documento {

    private $numero;

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

}

class CPF extends Documento {

    public function validar(): bool {
        $numeroCPF = $this->getNumero();

        // validação CPF

        return true;
    }

}

$doc = new CPF();
$doc->setNumero("12345678912");
var_dump($doc->validar());
echo "<hr>";
echo "Nº CPF: " . $doc->getNumero();
