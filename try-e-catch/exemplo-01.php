<?php

try {
    echo "Teste 1<br>";
    throw new Exception("Houve um erro.", 400);
    echo "Teste 2<br>";
} catch (Exception $e) {
    echo json_encode(array(
        "message" => $e->getMessage(),
        "line" => $e->getLine(),
        "file" => $e->getFile(),
        "code" => $e->getCode()
    ));
}