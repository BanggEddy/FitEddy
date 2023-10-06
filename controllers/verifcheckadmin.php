<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["emailadmin"];
    $password = $_POST["passwordadmin"];

    // Récupérez l'ID de l'administrateur s'il est stocké dans la session
    if (isset($_SESSION['admin_id'])) {
        // L'administrateur est authentifié avec succès

        // Vérification de la case "Remember Me"
        $rememberMe = isset($_POST["remember_me"]);

        // Création du cookie si "Remember Me" est coché
        if ($rememberMe) {
            // Le cookie expirera dans 30 jours (86400 * 30)
            setcookie("admin_email", $email, time() + 86400 * 30, "/");
        }

        header("Location: index.php");
        exit();
    } else {
        // Authentification échouée, affichez un message d'erreur
        echo "Identifiants incorrects.";
    }
}
