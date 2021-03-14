<?php



$userName = getenv("bd2c7dbc271629");
$password = getenv("1f2aea8b");
$dsn = getenv("mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_5a36dd97718ac9d");


try {
    $db = new PDO($dsn, $userName, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}

