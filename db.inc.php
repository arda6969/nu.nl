<?php

$dbhost = "localhost";
$dbname = "netland";
$charset = "utf8";
$dbuser = "root";
$dbpass = "";

try {
    $db  = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=$charset", $dbuser, $dbpass);
} catch (PDOException $err) {
    echo "Databse connection problem. " . $err->getMessage();
    exit();
}
