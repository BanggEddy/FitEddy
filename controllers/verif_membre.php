<?php
// Démarrez la session (assurez-vous de l'avoir démarrée dans vos autres fichiers PHP)
session_start();
require("../model/connexion.php");

// Requête pour vérifier le compte membre
$db = connect();

// Va chercher le mdp hashé
if (!empty($_POST['emailmembre']) && !empty($_POST['passwordmembre'])) {
    $email = $_POST['emailmembre'];
    $password = $_POST['passwordmembre'];

    $q = $db->prepare('SELECT * FROM users WHERE emailusers = :email');
    $q->bindValue('email', $email);
    $q->execute();
    $res = $q->fetch(PDO::FETCH_ASSOC);

    // Vérification du mdp hashé
    if ($res) {
        $passwordHash = $res['passwordusers'];
        if (password_verify($password, $passwordHash)) {
            // L'authentification a réussi, créons la session pour les membres
            $_SESSION['member_id'] = $res['id'];

            // Redirigez l'utilisateur vers la page après la connexion
            header("Location: ../index.php?uc=voir&action=list");
            exit();
        } else {
            header("Location: ../index.php");
            exit();
        }
    } else {
        header("Location: ../index.php");
        exit();
    }
}
