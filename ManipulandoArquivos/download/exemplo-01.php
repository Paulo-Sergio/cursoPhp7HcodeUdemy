<?php
$link = "http://7606-presscdn-0-74.pagely.netdna-cdn.com/wp-content/uploads/2016/03/Dubai-Photos-Images-Dubai-Fountain-Image-800x600.jpg";

$content = file_get_contents($link);

$parse = parse_url($link);
$basename = basename($parse['path']);

//criar arquivo
$file = fopen($basename, "w+");

//escrever dentro do arquivo
fwrite($file, $content);
fclose($file);
?>

<img src="<?= $basename ?>">