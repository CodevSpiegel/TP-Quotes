<?php

$checked_html = "";
$checked_css = "";
$checked_javascript = "";
$checked_php = "";
$checked_sql = "";

$quote = "Pour rechercher une citation coche une case ! Sinon je vais me facher !";

require_once ("./data/quotes.php");

if (isset($_POST['language'])) {
    // var_dump($_POST['language']);

    if( in_array("html", $_POST['language'])) {
        $checked_html = "checked";
    }
    if( in_array("css", $_POST['language'])) {
        $checked_css = "checked";
    }
    if( in_array("javascript", $_POST['language'])) {
        $checked_javascript = "checked";
    }
    if( in_array("php", $_POST['language'])) {
        $checked_php = "checked";
    }
    if( in_array("sql", $_POST['language'])) {
        $checked_sql = "checked";
    }
}

if ( isset($_POST['act']) ) {
    if ( $_POST['act'] === "quote" ) {
        if (isset($_POST['language'])) {
            $quote = search_quotes( $quotes, $_POST['language'] );
        }
        else {
            $quote = "Vous devez cocher au moins une case !";
         }
    }
    elseif ( $_POST['act'] === "word" ) {
        if ( !empty(trim($_POST['wordToSearch'])) ) {
            $quote = search_words( $quotes, $_POST['wordToSearch'] );
        }
        else {
            $quote = "Il faut saisir un mot à rechercher... Non ?";
            return; 
        }
    }
    else { return; }
}


function search_quotes( array $quotes, array $datas ) {

    $rand_language = array_rand($datas, 1);
    $language = $datas[$rand_language];

    $rand_quote = array_rand($quotes[$language], 1);
    $result_quote = htmlspecialchars($quotes[$language][$rand_quote]);

    return $result_quote;
}


function search_words( array $quotes, string $word ) {

    $wordToSearch = htmlspecialchars(trim($word));

    $match_quotes = [];

    foreach ($quotes as $lang => $phrases) {
        foreach ($phrases as $phrase) {
            // Vérifier si la phrase contient le mot à rechercher (insensible à la casse)
            if (stripos($phrase, $wordToSearch) !== false) {
                $match_quotes[] = $phrase;
            }
        }
    }

    if( !empty($match_quotes) ) {
        $rand_quote = array_rand($match_quotes, 1);
        $result_quote = $match_quotes[$rand_quote];
    }
    else {
        $result_quote = "Aucune citation correspondante avec le mot recherché : '$wordToSearch'";
    }

    return $result_quote;
}


