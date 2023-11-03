<?php

//Data Source Name
$dsn = "mysql:host=localhost;dbname=profileapp";
$dbusername = "root";
$dbpassword = "";

try {
    //Php Data Objects
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}