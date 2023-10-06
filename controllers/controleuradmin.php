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
    case "rechercheadmin":
        $Listpresentation = Entrainement::Recherche();
        include "vue/afficheacceuiladmin.php";
        break;
    case "valideajouter":
        $nom = $_POST["nom"];
        $comment = $_POST["comment"];
        $details = $_POST["details"];
        $photo = basename($_FILES["photo"]["name"]);

        // Vérifie si les champs obligatoires ne sont pas vides
        if (!empty($nom) && !empty($comment) && !empty($details) && !empty($photo)) {
            $entrainement = new Entrainement();
            $entrainement->setNom($nom);
            $entrainement->setComment($comment);
            $entrainement->setDetails($details);
            $entrainement->setPhoto($photo);
            $nom_image = basename($_FILES["photo"]['name']);
            $chemin_destination = 'images/' . $nom_image;
            move_uploaded_file($_FILES['photo']['tmp_name'], $chemin_destination);
            $nb = Entrainement::ajouter($entrainement);
            header('Location: index.php?uc=admin&action=admin');
        } else {
            header('Location: index.php?uc=ajouter&error=true');
        }
        break;
    case "modifier":
        $Listpresentation = Entrainement::afficherTous();
        include "vue/modifier.php";
        break;
    case "formmodifier":
        $Listpresentation = Entrainement::trouverUnEntrainement($_GET["modif"]);
        include "vue/formmodifier.php";
        break;
    case "validemodif":
        $nom = $_POST["nom"];
        $comment = $_POST["comment"];
        $details = $_POST["details"];
        $photo = basename($_FILES["photo"]["name"]);
        if (!empty($nom) && !empty($comment) && !empty($details) && !empty($photo)) {
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
        } else {
            header('Location: index.php?uc=modifier&action=formmodifier&modif=' . $_GET["modif"] . '&error=true');
        }
        break;

    case "suppression":
        $Listpresentation = Entrainement::afficherTous();
        include "vue/suppression.php";
        break;
    case "validesupp":
        $entrainementID = $_GET["supp"];
        $entrainementArray = Entrainement::trouverUnEntrainement($entrainementID);
        if (!empty($entrainementArray)) {
            $entrainement = $entrainementArray[0];
            $imageNom = $entrainement->getPhoto();
            $cheminImage = realpath(__DIR__ . "/../images/" . $imageNom);
            if (file_exists($cheminImage)) {
                unlink($cheminImage);
            }

            $nb = Entrainement::suppression($entrainement);
            header('Location: index.php?uc=suppression&action=suppression');
        } else {
            echo "L'entraînement avec l'ID $entrainementID n'a pas été trouvé.";
        }
        break;
}
