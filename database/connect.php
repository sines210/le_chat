<?php


$userName = getenv("DB_USERNAME");
$password = getenv("DB_PASSWORD");
$dsn = getenv("DSN");



try {
    $db = new PDO($dsn, $userName, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}

