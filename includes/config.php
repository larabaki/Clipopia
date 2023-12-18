<?php
    ob_start(); //turns on output buffering 

    session_start();    
    date_default_timezone_set("Europe/Istanbul");

$dbHost = 'localhost';
$dbPort = '3307'; // Yeni port numarası
$dbName = 'clipopia';
$dbUser = 'root';
$dbPass = '';

try {
    $con = new PDO("mysql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e) {
    echo "Bağlantı hatası: " . $e->getMessage();
}

?>