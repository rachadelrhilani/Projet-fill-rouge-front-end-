<?php include_once './views/masterPage.php' ?>
<table class="table table-striped mx-4">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Age</th>
        <th>Login</th>
    </tr>
    <?php foreach ($stagiaires as $stag) : ?>
        <tr>
            <td><?= $stag->id; ?></td>
            <td><?= $stag->nom; ?></td>
            <td><?= $stag->prenom; ?></td>
            <td><?= $stag->age; ?></td>
            <td><?= $stag->login; ?></td>
            <!-- = remplace php echo-->
        </tr>
    <?php endforeach; ?>
</table>
<?php include_once './views/masterPage.php' ?>