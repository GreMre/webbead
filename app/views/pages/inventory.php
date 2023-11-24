<?php require APPROOT . '/views/inc/header.php'; ?>

<div>
    <h2>Játékosok listája</h2>
    <ul>
        <?php foreach ($data['footballPlayers'] as $player) : ?>
            <li>
                <?= $player->vezeteknev . ' ' . $player->utonev ?> - <?= $player->csapatnev ?> - <?= $player->nev ?>
                <a href="<?= URLROOT ?>/inventory/playerdetails/<?= $player->id ?>">Részletek</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Klubok listája</h2>
    <ul>
        <?php foreach ($data['clubs'] as $club) : ?>
            <li><?= $club->csapatnev ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Posztok listája</h2>
    <ul>
        <?php foreach ($data['positions'] as $position) : ?>
            <li><?= $position->nev ?></li>
        <?php endforeach; ?>
    </ul>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>