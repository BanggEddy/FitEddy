<?php
session_start();
//Affiche les erreurs PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("model/table.class.php");
include("model/monPdo.php");

if (empty($_GET["uc"])) {
    $uc = "accueil";
} else {
    $uc = $_GET["uc"];
}

switch ($uc) {

        //Redirection vue
    case "accueil":
        include("vue/accueil.php");
        break;
    case "ajouter":
        include("vue/ajouter.php");
        break;
    case "register":
        include("vue/accueil.php");
        break;
    case "contact":
        include("vue/contact.php");
        break;
    case "send":
        include("vue/send.php");
        break;

        //Redirection controleuradmin
    case "voir":
        include("controllers/controleuradmin.php");
        break;
    case "admin":
        include("controllers/controleuradmin.php");
        break;
    case "details":
        include("controllers/controleuradmin.php");
        break;
    case "recherche":
        include("controllers/controleuradmin.php");
        break;
    case "modifier":
        include("controllers/controleuradmin.php");
        break;
    case "suppression":
        include("controllers/controleuradmin.php");
        break;
    case "valideajouter":
        include("controllers/controleuradmin.php");
        break;

        //Déconnexion
    case "deconnexion":
        include("controllers/deconnexion.php");
        break;
}

include("vue/header.php");
include('vue/footer.php');
