<ul>
<?php 
    $i = 0;
    foreach ($datas as $data) { ?>
            <li class="list"> 
                <h4><a href="?page=serie&action=detail&id=<?= $i ?>"><?= $data['titre'] ?></a></h4> 
                <p>Genre : <?= $data['genre'] ?></p>
            </li>
        <?php $i++; 
    } ?>
</ul>