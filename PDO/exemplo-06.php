<?php

$hostname = "localhost";
$database = "dbphp7";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $user, $pass);

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 2;

$stmt->bindParam(":ID", $id);
$stmt->execute();

$conn->rollBack();

echo "Usuário excluído!";