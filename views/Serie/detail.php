<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>detail serie</title>
  </head>
  <body>
    <h1>
      <?= $data['titre']; ?>
    </h1>
    <p>
      Synopsie : <? ?>
    </p>
    <ul>
      <?php foreach ($data['episode'] as $key=>$data) : ?>
        <li>
          <?php
            echo 'saison ' . $key . ' : ' . $data . ' episodes'; 
          ?>
        </li>
      <?php endforeach ?>
    </ul>
  </body>
</html>