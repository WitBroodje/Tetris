<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"content="ie=edge">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <title>tetris Item Toevoegen</title>
</head>
<body>
<h1>Niew tetris Item Toevoegen</h1>

<form action="../tetris_toevoegen_verwerk.php" method="POST">

    <!-- voornaam -->
    <label for="voornaam">Voornaam:</label>
    <input type="text" id="voornaam" name="voornaam" required>
    <br><br>

    <!-- achternaam -->
    <label for="achternaam">Achternaam:</label>
    <textarea id="achternaam" name="achternaam" required></textarea>
    <br><br>

    <!-- telefoonnummer -->
    <label for="telefoonnummer">Telefoonnummer:</label>
    <input type="number" id="telefoonnummer" name="telefoonnummer"required>
    <br><br>

    <!-- emailadres -->
    <label for="emailadres">Emailadres:</label>
    <input type="email" id="emailadres" name="emailadres"required>
    <br><br>

    <!-- postcode -->
    <label for="postcode">Postcode:</label>
    <input type="text" id="postcode" name="postcode"required>
    <br><br>

    <!-- huisnummer -->
    <label for="huisnummer">Huisnummer:</label>
    <input type="number" id="huisnummer" name="huisnummer"required>
    <br><br>

    <a href="../tetris_toevoegen_verwerk.php">
        <button>Knopje!</button>
    </a>

</body>
</html>