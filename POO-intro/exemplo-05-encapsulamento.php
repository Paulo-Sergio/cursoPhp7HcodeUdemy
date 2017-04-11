<?php

class Pessoa {

    public $nome = "Nome1";
    protected $idade = 25;
    private $senha = "123456";

    public function verDados() {
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }

}

class Programador extends Pessoa {

    public function verDados() {
        echo "Classe: " . get_class() . "<br>";

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>"; // senha não herdar de Pessoa
    }

}

$objeto = new Programador();
//echo $objeto->senha; // fatal error

$objeto->verDados();
