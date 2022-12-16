
<h1>
  <?= $data['titre']; ?>
</h1>

<img src="<?= $data['image'];?>">

<p>Synopsis : <?= $data['synopsis']?></p>
<p>Genre : <?= $data['genre']?></p>
<p>Sortie : <?= $data['annee']?></p>

  <ul>
    <?php foreach ($data['episode'] as $key=>$data) : ?>
      <li>
        <?php echo 'saison ' . $key . ' : ' . $data . ' episodes'; ?>
      </li>
    <?php endforeach ?>
  </ul>

<p>Realisateur : <?= $real['prenom'] . ' ' . $real['nom']; ?></p>