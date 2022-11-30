<?php
    include './utils/connectBdd.php';
    include './utils/fonctions.php';
    //utilisation de session_start(pour gérer la connexion au serveur)
    session_start();
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';
    //routeur
    switch ($path) {
        case '/formulaire/':
            include './controller/ctrl_add_contact.php';
            break;
        default:
            include './error.php';
            break;
    }
?>
