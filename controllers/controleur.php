<?php
$action = $_GET["action"];

switch ($action) {
    case "list":
        $Listpresentation = Entrainement::afficherTous();
        include "vue/afficheacceuil.php";
        break;
    case "admin":
        $Listpresentation = Entrainement::afficherTous();
        include "vue/afficheacceuiladmin.php";
        break;
    case "recherche":
        $Listpresentation = Entrainement::Recherche();
        include "vue/afficheacceuil.php";
        break;
    case "ajouter":
        include "vue/ajouter.php";
        break;
    case "valideajouter":
        $entrainement = new Entrainement();
        $entrainement->setNom($_POST["nom"]);
        $entrainement->setComment($_POST["comment"]);
        $entrainement->setDetails($_POST["details"]);
        $entrainement->setPhoto(basename($_FILES["photo"]["name"]));
        $nom_image = basename($_FILES["photo"]['name']);
        $chemin_destination = 'images/' . $nom_image;
        move_uploaded_file($_FILES['photo']['tmp_name'], $chemin_destination);
        $nb = Entrainement::ajouter($entrainement);
        header('Location: index.php?uc=admin&action=admin');
    case "modifier":
        $Listpresentation = Entrainement::afficherTous();
        include "vue/modifier.php";
        break;
    case "formmodifier":
        $Listpresentation = Entrainement::trouverUnEntrainement($_GET["modif"]);
        include "vue/formmodifier.php";
        break;
    case "validemodif":
        $entrainement = new Entrainement();
        $entrainement->setId($_GET["modif"]);
        $entrainement->setNom($_POST["nom"]);
        $entrainement->setComment($_POST["comment"]);
        $entrainement->setDetails($_POST["details"]);
        $entrainement->setPhoto(basename($_FILES["photo"]["name"]));
        $nom_image = basename($_FILES["photo"]['name']);
        $chemin_destination = 'images/' . $nom_image;
        move_uploaded_file($_FILES['photo']['tmp_name'], $chemin_destination);
        $nb = Entrainement::modification($entrainement);
        header('Location: index.php?uc=modifier&action=modifier');
        break;
    case "suppression":
        $Listpresentation = Entrainement::afficherTous();
        include "vue/suppression.php";
        break;
    case "validesupp":
        $Listpresentation = Entrainement::trouverUnEntrainement($_GET["supp"]);
        $entrainement = new Entrainement();
        $entrainement->setId($_GET["supp"]);
        $nb = Entrainement::suppression($entrainement);
        header('Location: index.php?uc=suppression&action=suppression');
        break;
}
