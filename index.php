<?php require_once ("./controller.php") ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes exercice</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
<main>
    <div class="container">
        <div class="container-header">
            <div class="logo">
                <a href="./"><img src="./assets/img/logo.webp" alt=""></a>
            </div>
            <div class="form-group search">
                <div>
                    <form action="./" method="POST">
                    <input type="hidden" name="act" value="word"/>
                    <input type="text" name="wordToSearch" placeholder="Rechercher un mot." />
                </div>
                <div>
                    <button name="submit">Go</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container-main">
            <div class="container-main-inputs">
                <div class="form-group">
                    <form action="./" method="POST">
                    <input type="hidden" name="act" value="quote">
                </div>
                <div class="form-group">
                    <span>
                        <label for="html">HTML</label>
                    </span>
                    <span>
                        <input type="checkbox" name="language[]" id="html" value="html" <?= $checked_html ?>/>
                    </span>
                </div>
                <div class="form-group">
                    <span>
                        <label for="css">CSS</label>
                    </span>
                    <span>
                        <input type="checkbox" name="language[]" id="css" value="css" <?= $checked_css ?>/>
                    </span>
                </div>
                <div class="form-group">
                    <span>
                        <label for="js">JS</label>
                    </span>
                    <span>
                        <input type="checkbox" name="language[]" id="js" value="javascript" <?= $checked_javascript ?>/>
                    </span>
                </div>
                <div class="form-group">
                    <span>
                        <label for="php">PHP</label>
                    </span>
                    <span>
                        <input type="checkbox" name="language[]" id="php" value="php" <?= $checked_php ?>/>
                    </span>
                </div>
                <div class="form-group">
                    <span>
                        <label for="sql">SQL</label>
                    </span>
                    <span>
                        <input type="checkbox" name="language[]" id="sql" value="sql" <?= $checked_sql ?>/>
                    </span>
                </div>
            </div>
            <div class="container-main-submit">
                <div>
                    <button name="submit">Afficher une Citation</button>
                </div>
            </div>
            </form>
        </div>
        <div class="container-footer">
            <quote><?= $quote; ?></quote>
        </div>
    </div>
</main>
<footer>
    <div>
        <img src="./assets/img/github.svg" alt="icon GitHub">
        <a href="https://github.com/CodevSpiegel/TP-Quotes.git" target="_blank">Code source disponible sur Github</a>
    </div>
</footer>
</body>
</html>