<h1>Tetris</h1>
<?php
if ($aantalRijen > 0) { ?>
    <ul>
        <?php foreach ($resultaten as $rij) { ?>
            <li>
                <a href="tetris_detail.php?ID=<?=$rij['ID']?>">Details</a>
                <strong>Voornaam</strong> <?= $rij["Voornaam"] ?><br>
                <strong>Achternaam</strong> <?= $rij["Achternaam"] ?><br>
                <strong>Acties:</strong>
                <a href="tetris bewerken.php?id=<?= $rij["ID"] ?>">Bewerken</a>
                <a href="tetris verwijderen.php?id=<?= $rij["ID"] ?>">Verwijderen</a>
            </li>
            <hr>
            <a href="./tetris_toevoegen.php">Voeg wat toe!</a>
        <?php } ?>
    </ul>
<?php } else { ?>
    <p>Geen resultaten gevonden</p>
<?php } ?>
