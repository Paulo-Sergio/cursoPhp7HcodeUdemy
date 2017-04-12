<?php

function __autoload($nomeClasse) {
    require_once $nomeClasse . ".php";
}

$carro = new DelRay();
$carro->acelerar(200);
