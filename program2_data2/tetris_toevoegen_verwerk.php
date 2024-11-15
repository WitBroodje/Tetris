<?php
// Voeg de database-verbinding toe
require 'config.php';

//Variable 'resultaat': deze wordt straks getoond op de view
$resultaat = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $voornaam  = $_POST['voornaam'];
    $achternaam  = $_POST['achternaam'];
    $telefoonnummer  = $_POST['telefoonnummer'];
    $emailadres  = $_POST['emailadres'];
    $postcode  = $_POST['postcode'];
    $huisnummer  = $_POST['huisnummer'];

    $foutmelding = "";
    //Waar komt het formulier vandaan? Wie probeert deze pagina te openen?
    $afzender = $_SERVER['HTTP_REFERER'];
    if ($afzender != "https://100901.stu.sd-lab.nl/projectweek1/program2_data2/views/tetris_toevoegen_view.php")
    {
        $foutmelding .= "Verkeerde afzender!<br/>";
    }
    //Check op fout voornaam
    if (empty($_POST['voornaam']))
    {
        $foutmelding .= "Je voornaam is leeg.<br/>";
    }
    //Check op fout achternaam
    if (empty($_POST['achternaam']))
    {
        $foutmelding .= "Je achternaam is leeg.<br/>";
    }
    //Check op foute mail
    $emailadres = filter_var($_POST['emailadres'], FILTER_SANITIZE_EMAIL);
    if(!filter_var($emailadres, FILTER_VALIDATE_EMAIL))
    {
        $foutmelding .= "Je Emailadres is leeg.<br/>";
    }
    //Check op telefoonummer
    if (!is_numeric($telefoonnummer) || $telefoonnummer < 1 || strlen($telefoonnummer) != 10) {
        $foutmelding .= "Je telefoonnummer is ongeldig.<br/>";
    }

    if (empty($_POST['postcode']))
    {
        $foutmelding .= "Je Postcode is leeg.<br/>";
    }
    $huisnummer = $_POST["huisnummer"];
    if (!is_numeric($huisnummer)){
        $foutmelding .= "Je huisnummer is leeg.<br/>";
    }
    if ($foutmelding > 0){
        include "views/fout_view.php";
    } else {


// Verwerking en invoegen in de database
        try {
            $query = "INSERT INTO userdata (Voornaam, Achternaam, Telefoonummer, Emailadres, Postcode, Huisnummer)
              VALUES (:voornaam, :achternaam, :telefoonnummer, :emailadres, :postcode, :huisnummer)";

            $stmt = $conn->prepare($query);

            $stmt->execute([
                ':voornaam' => $voornaam,
                ':achternaam' => $achternaam,
                ':telefoonnummer' => $telefoonnummer,
                ':emailadres' => $emailadres,
                ':postcode' => $postcode,
                ':huisnummer' => $huisnummer,
            ]);

            if ($stmt->rowCount()) {
                echo "Gegevens succesvol toegevoegd!";
            } else {
                echo "Gegevens niet toegevoegd.";
            }

        } catch (PDOException $e) {
            echo "Fout bij het toevoegen: " . $e->getMessage();
        }

    }
} else {
    $resultaat = "Formulier is niet correct verstuurd.";
}
//include de bijbehorende view
include 'tetris.php';










