<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["emailmembre"];
    $password = $_POST["passwordmembre"];

    // Vérification des informations de connexion (exemple)
    if (isset($_SESSION['member_id'])) {

        $rememberMe = isset($_POST["remember_me"]);

        // Création du cookie
        if ($rememberMe) {
            // Le cookie expirera dans 30 jours (86400 * 30)
            setcookie("user_email", $email, time() + 86400 * 30, "/");
        }

        // Rediriger l'utilisateur vers la page d'accueil ou une autre page
        header("Location: index.php");
        exit();
    } else {
        // Authentification échouée, affichez un message d'erreur
        echo "Identifiants incorrects.";
    }
}
