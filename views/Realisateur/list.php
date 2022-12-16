<?php

echo "<ul>";
foreach ($datas as $data) {
    echo "<li>" . $data['prenom'] . " " . $data['nom'] . "</li>";
}
echo "</ul>";

?>

<ul>
<?php 
    $i = 0;
    foreach ($datas as $data) { ?>
            <li> 
                <article>
                    <h2><?= $data['prenom'] . " " . $data['nom'] ?></h2>
                    <p><ul>
                        <?php foreach ($data['realisation'] as $data) : ?>
                            <li><?= $data ?></li>
                        <?php endforeach ?>
                    </ul></p>
                </article>
            </li>
        <div>
            <a href="?page=realisateur&action=detail&id=<?= $i ?>">Découvrir</a>    
        </div>
        <?php $i++; 
    } ?>
</ul