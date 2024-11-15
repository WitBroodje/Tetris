<h1>Tetris</h1>
<?php
if ($aantalRijen > 0) { ?>
    <ul>
        <?php foreach ($resultaten as $rij) { ?>
            <li>
                <strong>Voornaam</strong> <?= $rij["Voornaam"] ?><br>
                <strong>AchterNaam</strong> <?= $rij["Achternaam"] ?><br>
                <strong>Telefoonnummer</strong> <?= $rij["Telefoonnummer"] ?><br>
                <strong>E-mailadres</strong> <?= $rij["Emailadres"] ?><br>
                <strong>Postcode</strong> <?= $rij["Postcode"] ?><br>
                <strong>Huisnummer</strong> <?= $rij["Huisnummer"] ?><br>
            </li>
            <hr>
        <?php } ?>
    </ul>
<?php } else { ?>
    <p>Geen resultaten gevonden</p>
<?php } ?>
