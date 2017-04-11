<?php

//eu vou tratar os erros do PHP, por isso preciso receber esses parametros obrigatoriamente
//e devolver da minha forma (estou devolvendo um JSON por exemplo)
function error_handler($code, $message, $file, $line) {
    echo json_encode(array(
        "code" => $code,
        "message" => $message,
        "file" => $file,
        "line" => $line
    ));
}

//"error_handler" é a função que vai manipular meus erros agora em diante
set_error_handler("error_handler");

echo 100 / 0;