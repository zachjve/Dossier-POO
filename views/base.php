<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/style.css" type="text/css">
    <title>Vidéothèque</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="?page=home">Home</a></li>
                <li><a href="?page=film">Film</a></li>
                <li><a href="?page=serie">Serie</a></li>
                <li><a href="?page=realisateur">Réalisateur</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php
        $filePath = 'views/' . $_page . '/' . $_action . '.php';
        
        if (file_exists($filePath)) {
            include_once 'views/' . $_page . '/' . $_action . '.php';
        }
        else {
            //page error 404.
        }
        ?>
    </main>
    <footer>
        <p>By Zachary JOUVE.</p>
    </footer>
</body>
</html>