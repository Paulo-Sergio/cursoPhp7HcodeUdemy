<?php

$images = scandir("imagens");

$data = array();

foreach ($images as $img) {
    // por padrão o scandir lista o . e .. como navegação (isso não me interessa)
    if (!in_array($img, array(".", ".."))) {

        $filename = "imagens" . DIRECTORY_SEPARATOR . $img;

        $info = pathinfo($filename);
        $info["size"] = filesize($filename);
        $info["modificado"] = date("d/m/Y H:i:s", filemtime($filename));
        $info["url"] = "http://localhost/cursoPhp7Udemy/ManipulandoArquivos/" . str_replace("\\", "/", $filename);

        array_push($data, $info);
    }
}

echo json_encode($data);
