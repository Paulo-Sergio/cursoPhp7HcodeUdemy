<?php

$hostname = "localhost";
$database = "dbphp7";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $user, $pass);

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :SENHA)");

$login = "José";
$senha = 1234;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);
$stmt->execute();

echo "Usuário cadastrado!";