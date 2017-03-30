<?php

$hostname = "localhost";
$database = "dbphp7";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $user, $pass);

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :SENHA WHERE idusuario = :ID");

$id = 3;
$login = "João";
$senha = "qwerty";

$stmt->bindParam(":ID", $id);
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);
$stmt->execute();

echo "Usuário alterado!";