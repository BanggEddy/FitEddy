<?php
// Vérifiez si l'utilisateur est connecté en vérifiant la session
if (isset($_SESSION['connected']) && $_SESSION['connected'] === true) {
    // L'utilisateur est connecté, vous pouvez exécuter du code pour les utilisateurs authentifiés ici

    // Exemple : Récupérez l'ID de l'administrateur s'il est stocké dans la session
    if (isset($_SESSION['admin_id'])) {
        $adminId = $_SESSION['admin_id'];
        // Faites quelque chose avec l'ID de l'administrateur, si nécessaire
    }

    // Si l'utilisateur est déjà connecté, vous pouvez autoriser l'accès à la page ou exécuter d'autres actions
} else {
    // L'utilisateur n'est pas connecté, redirigez-le vers la page de connexion ou effectuez d'autres actions
    header("Location: index.php");
    exit(); // Assurez-vous de terminer le script après la redirection
}
?>
