<?php
//foutmeldingen zichtbaar maken
ini_set('display_errors', 1);
error_reporting(E_ALL);

$servername = "127.0.0.1"; // of localhost
$username = "db100901";
$password = "Ses30f!86";
$database = "PROGRAM2_100901";

// Opties voor PDO
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Fouten gooien als uitzonderingen
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Fetch modus
    PDO::ATTR_EMULATE_PREPARES => false, // Echte prepared statements
];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password, $options);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}