<?php
    $language = "";
    $quote = "";

    if (isset($_GET['l']) ) {
        $language =  $_GET['l'];
    }
    if (isset($_GET['q']) ) {
        $quote =  $_GET['q'];
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes exercise</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


<main>
<div class="header-main">
    <div>TP QUOTES</div>
    <div>
        <form action="traitement.php" method="POST">
            <input type="hidden" name="act" value="search" />
            <input type="text" name="wordToSearch" placeholder="Rechercher un mot" />
            <button name="submit">Go</button>
        </form>
    </div>
</div>
<form action="traitement.php" method="POST">
    <input type="hidden" name="act" value="quotes">
    <div class="checkbox-block">
        <div class="form-group">
            <label for="html">HTML</label>
            <input type="checkbox" name="language[]" id="html" value="html" />
        </div>
        <div class="form-group">
            <label for="css">CSS</label>
            <input type="checkbox" name="language[]" id="css" value="css" />
        </div>
        <div class="form-group">
            <label for="js">JS</label>
            <input type="checkbox" name="language[]" id="js" value="javascript" />
        </div>
        <div class="form-group">
            <label for="php">PHP</label>
            <input type="checkbox" name="language[]" id="php" value="php" />
        </div>
        <div class="form-group">
            <label for="sql">SQL</label>
            <input type="checkbox" name="language[]" id="sql" value="sql" />
        </div>
    </div>
    <div class="submit-block">
        <div class="button">
            <button name="submit">Afficher une Citation</button>
        </div>
    </div>
    <div class="text-block">
        <div class="quote-content">
            <div><<<-- <?= $language; ?> -->>></div>
            <div><?= $quote; ?></div>
        </div>
    </div>
</form>

</main>

</body>

</html>