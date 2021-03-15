<?php


$userName = "bd2c7dbc271629";
$password = "1f2aea8b";



try {
    $db = new PDO("mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_5a36dd97718ac9d", $userName, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}

