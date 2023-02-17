<ul>
<?php 
    $i = 0;
    foreach ($datas as $data) { ?>
            <li>
                <h3> <a href="?page=realisateur&action=detail&id=<?= $i ?>">
                <?= $data['prenom'] . " " . $data['nom'] ?></a></h3>
            </li>
        <?php $i++; 
    } ?>
</ul>