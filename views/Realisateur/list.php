<?php

echo "<ul>";
foreach ($datas as $data) {
    echo "<li>" . $data['prenom'] . " " . $data['nom'] . "</li>";
}
echo "</ul>";

?>