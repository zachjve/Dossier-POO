<div class="padTop"></div>

<h1 class="detail">
  <?= $data['titre']; ?>
</h1>

<?php if ( !empty($data['image'])) : ?>
  <img src="<?= $data['image'];?>">
<?php endif ?>

<p class="detail">Synopsis : <?= $data['synopsis']?></p>
<p class="detail">Genre : <?= $data['genre']?></p>
<p class="detail">Sortie : <?= $data['annee']?></p>

<p class="detail">Realisateur : <a href='?page=realisateur&action=detail&id=
<?= $data['realisateur'] ?>'><?= $real['prenom'] . ' ' . $real['nom']; ?></a></p>

<ul>
  <?php foreach ($data['episode'] as $key=>$data) : ?>
    <li>
      <?php echo 'saison ' . $key . ' : ' . $data . ' episodes'; ?>
    </li>
  <?php endforeach ?>
</ul>

<div class="padBottom"></div>