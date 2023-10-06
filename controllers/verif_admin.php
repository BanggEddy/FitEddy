<?php
// Démarrez la session (assurez-vous de l'avoir démarrée dans vos autres fichiers PHP)
session_start();
require("../model/connexion.php");
// Requête pour vérifier le compte membre
$db = connect();

// Va chercher le mdp hashé
if (!empty($_POST['emailadmin']) && !empty($_POST['mdpadmin'])) {
    $email = $_POST['emailadmin'];
    $password = $_POST['mdpadmin'];

    $q = $db->prepare('SELECT * FROM admin WHERE email = :email');
    $q->bindValue('email', $email);
    $q->execute();
    $res = $q->fetch(PDO::FETCH_ASSOC);

    // Vérifie si le mdp est bon
    if ($res) {
        $passwordHash = $res['mdp'];
        if (password_verify($password, $passwordHash)) {
            // L'authentification a réussi, créons la session
            $_SESSION['connected'] = true;

            $_SESSION['id'] = $res['id']; // Vous pouvez stocker des informations supplémentaires si nécessaire

            // Redirigez l'utilisateur vers la page d'administration
            header("Location: ../index.php?uc=admin&action=admin");
            exit(); // Assurez-vous de terminer le script après la redirection
        } else {
            header("Location: ../index.php");
            exit(); // Assurez-vous de terminer le script après la redirection
        }
    } else {
        header("Location: ../index.php");
        exit(); // Assurez-vous de terminer le script après la redirection
    }
}
