<h3><?= $data['title'] ?></h3>
<a href="<?= URLROOT ?>/Instructeurs/create">Nieuw auto</a>
<table>
    <thead>
        <th>Id</th>
        <th>Voornaam</th>
        <th>Tussenvoegsel</th>
        <th>Achternaam</th>
        <th>Mobiel</th>
        <th>Datum in dienst</th>
    </thead>
    <tbody>
        <?= $data['rows']; ?>
    </tbody>
</table>
<p><a href="<?= URLROOT; ?>/landingpages/index">Back To landingpage</a></p>