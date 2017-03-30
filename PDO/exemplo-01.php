<?php

$hostname = "localhost";
$database = "dbphp7";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $user, $pass);

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    foreach ($row as $key => $value) {
        echo "<strong>$key</strong>: $value<br>";
    }
    echo "<hr>";
}

// var_dump($results);
