<?php

$userName = "root";
$pass = "SimpMarseille13";
$host = "localhost";
$dbName = "chat_simplon";


try {
    $db = new PDO("mysql:host=$host;dbname=$dbName", $userName, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}