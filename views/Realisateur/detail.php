<h1 class="detail"><?= $data['prenom'] .' '. $data['nom']; ?></h1>

<?php if ( !empty($data['image'])) : ?>
  <img src="<?= $data['image']?>">
<?php endif ?>

<p class="detail">Born in <?= $data['birth']; ?> in <?= $data['place'] ?>.</p>
<p class="detail">Réalisations :</p>

<ul>
  <?php foreach ($data['realisation'] as $data) : ?>
    <li><?= $data ?></li>
  <?php endforeach ?>
</ul>