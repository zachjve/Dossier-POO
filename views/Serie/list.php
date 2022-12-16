<ul>
<?php 
    $i = 0;
    foreach ($datas as $data) { ?>
            <li> 
                <article>
                    <h2><?= $data['titre'] ?></h2> 
                    <p>Genre : <?= $data['genre'] ?></p>
                </article>
            </li>
        <div>
            <a href="?page=serie&action=detail&id=<?= $i ?>">Découvrir</a>    
        </div>
        <?php $i++; 
    } ?>
</ul
