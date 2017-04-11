<?php

class Pessoa {
    
    public $nome;
    
    public function falar() {
        return "Meu nome é $this->nome";
    }
    
}

$paulo = new Pessoa();
$paulo->nome = "Paulo França";
echo $paulo->falar();