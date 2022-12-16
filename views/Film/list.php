<?php

echo "<ul>";
foreach ($datas as $data) {
    echo "
        <li> 
            <article>
                <h2>{$data['titre']}</h2> -  {$data['annee']} 
            </article>
        </li>
    ";
}
echo "</ul>";

?>