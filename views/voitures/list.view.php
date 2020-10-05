<table>
    <thead>
        <th>ID</th>
        <th>marque</th>
        <th>modele</th>
        <th>couleur</th>
        <th>nbporte</th>
        <th>clim</th>
    </thead>
    <tbody>
        <?php
        foreach($res as $result){
            ?>
            <tr>
                <td><?= $result['id'] ?></td>
                <td><?= $result['marque'] ?></td>
                <td><?= $result['modele'] ?></td>
                <td><?= $result['couleur'] ?></td>
                <td><?= $result['nbporte'] ?></td>
                <td><?= $result['clim'] ?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>