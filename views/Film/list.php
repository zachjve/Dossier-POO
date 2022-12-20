<div class="padTop"></div>

<ul>
<?php 
    $i = 0;
    foreach ($datas as $data) { ?>
            <li class="list"> 
                <h4><a href="?page=film&action=detail&id=<?= $i ?>"><?= $data['titre'] ?></a></h4> 
                <p>Genre : <?= $data['genre'] ?></p>
            </li>
        <?php $i++; 
    } ?>
</ul>

<div class="padBottom"></div>