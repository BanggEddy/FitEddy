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
    case "accueil":
        include("vue/accueil.php");
        break;
    case "voir":
        include("controllers/controleur.php");
        break;
    case "membre":
        include("controllers/controleur.php");
        break;
    case "register":
        include("vue/accueil.php");
        break;
    case "admin":
        include("controllers/controleur.php");
        break;
    case "details":
        include("controllers/controleur.php");
        break;
    case "recherche":
        include("controllers/controleur.php");
        break;
    case "ajouter":
        include("controllers/controleur.php");
        break;
    case "modifier":
        include("controllers/controleur.php");
        break;
    case "suppression":
        include("controllers/controleur.php");
        break;
}

include("vue/header.php");
include('vue/footer.php');
