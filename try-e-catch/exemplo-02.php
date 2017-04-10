<?php

function trataNome($nome) {
    if (empty($nome)) {
        throw new Exception("Nenhum nome foi informado.", 1);
    }

    echo ucfirst($nome) . "<br>";
}

try {
    trataNome("Paulo");
    trataNome("");
} catch (Exception $e) {
    echo json_encode(array(
        "message" => $e->getMessage(),
        "line" => $e->getLine(),
        "code" => $e->getCode()
    ));
} finally {
    echo "<br>Finalizou";
}
