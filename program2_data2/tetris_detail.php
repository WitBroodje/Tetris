<?php
// voeg de config.php toe
require 'config.php';

// lees het ID uit de URL
$ID = $_GET['ID'];

try {
    $query = "SELECT * FROM userdata WHERE ID = :ID";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':ID', $ID);
    $stmt->execute();

// Haal alle resultaten op in een array
    $resultaten = $stmt->fetchAll();

// Aantal resultaten tellen
    $aantalRijen = count($resultaten);

    include 'views/tetris_detail_view.php';

} catch (PDOException $e) {
    // Foutafhandeling als de query niet wordt uitgevoerd
    echo "<p>FOUT!</p>";
    echo "<p>Query: " . $query . "</p>";
    echo "<p>Foutmelding: " . $e->getMessage() . "</p>";
    exit;
}