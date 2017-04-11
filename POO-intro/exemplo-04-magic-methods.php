<?php

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    function __construct($logradouro, $numero, $cidade) {
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->cidade = $cidade;
    }

    public function __destruct() {
        var_dump("DESTRUIR");
    }

    public function __toString() {
        return $this->logradouro . ", " . $this->numero . ", " . $this->cidade;
    }

}

$endereco = new Endereco("rua caracatuba", "362", "recife");
var_dump($endereco);

echo "<hr>";
echo $endereco;
echo "<hr>";

unset($endereco);
