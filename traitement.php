<?php

// SI QUELQU'UN SE REND SUR CETTE PAGE AUTREMENT QU'EN POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ./index.php");
    die;
}

// ON VA VERIFIER SI L'UTILISATEUR PROVIENT BIEN DU FORMULAIRE
if (!isset($_POST["submit"])) {
    header("Location: ./index.php");
    die;
}

// SI AUCUNE ACTION N'EST DEFINIE !
if (!isset($_POST['act'])) {
    header("Location: ./index.php");
    die;
}


// SI ON ARRIVE ICI.. 
// ON VERIFIE QUE LES VALEURS DE $_POST['act'] SOIENT VALIDES.
// SI TOUT EST OK ! ON CHARGE LE FICHIER DATA
// SINON ELLE N'EXISTENT PAS !! DONC ON REDIRIGE DIRECT VERS INDEX.PHP.
if ($_POST['act'] === "search" || $_POST['act'] === "quotes") {
    require_once ("./data/quotes.php");
    // echo "<p>Le fichier 'data.php' a été recuperé !</p>";
}
else
{
    header("Location: ./index.php");
    die;
}

//--- ICI !!!! GROSSE FAILLE, A VOIR PLUS TARD !!! ---//
//--- RECHERCHE DE MOTS ---//
if ($_POST['act'] === "search") {

    if (!isset($_POST['wordToSearch'])) 
    {
        // CA PASSE QUAND-MEME !! FUCK !!!
        header("Location: ./index.php?error=emptySearch");
        die;
    }
    else
    {
        echo "SEARCH";
    }
}


//--- RECHERCHE DE CITATIONS ---//
if ($_POST['act'] === "quotes") {

    // SI AUCUN LANGAGE N'A ETE SELECTIONNE
    if (!isset($_POST['language'])) 
    {
        header("Location: ./index.php?error=emptySelect");
        die;
    }
    // SINON ON Y VA !
    else 
    {
        // (SI PLUSIEURS) ON TIRE L'INDEX D'UN LANGAGE AU HASARD
        $rand_language = array_rand($_POST['language'], 1);

        $language = $_POST['language'][$rand_language];

        $rand_quote = array_rand($quotes[$language], 1);

        $quote = $quotes[$language][$rand_quote];

        echo "<p>".$language."</p>";
        echo "<p>".$quote."</p>";

    }

}




