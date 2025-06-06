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
        <form action="#" method="POST">
            <input type="text" placeholder="Rechercher">
            <button name="submit">Go</button>
        </form>
    </div>
</div>
<form action="traitement.php" method="POST">
    <div class="checkbox-block">
        <div class="form-group">
            <label for="html">HTML</label>
            <input type="checkbox" name="language" id="html" />
        </div>
        <div class="form-group">
            <label for="css">CSS</label>
            <input type="checkbox" name="language" id="css" />
        </div>
        <div class="form-group">
            <label for="js">JS</label>
            <input type="checkbox" name="language" id="js" />
        </div>
        <div class="form-group">
            <label for="php">PHP</label>
            <input type="checkbox" name="language" id="php" />
        </div>
        <div class="form-group">
            <label for="sql">SQL</label>
            <input type="checkbox" name="language" id="sql" />
        </div>
    </div>
    <div class="submit-block">
        <div class="button">
            <button name="submit">Afficher une Quote</button>
        </div>
    </div>
    <div class="text-block">
        <div class="quote-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum?</div>
    </div>
</form>

</main>

</body>

</html>