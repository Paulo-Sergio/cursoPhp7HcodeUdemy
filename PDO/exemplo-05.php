<?php

$hostname = "localhost";
$database = "dbphp7";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $user, $pass);

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 4;

$stmt->bindParam(":ID", $id);
$stmt->execute();

echo "Usuário excluído!";