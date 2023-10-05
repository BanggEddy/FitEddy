<?php
// Vérifiez si l'utilisateur est connecté en tant que membre en vérifiant la session
if (isset($_SESSION['member_id'])) {
    // L'utilisateur est connecté en tant que membre, vous pouvez exécuter du code pour les membres ici

    // Exemple : Récupérez l'ID du membre s'il est stocké dans la session
    $memberId = $_SESSION['member_id'];
    // Faites quelque chose avec l'ID du membre, si nécessaire

    // Vous pouvez également permettre l'accès à des fonctionnalités spécifiques aux membres

} else {
    // L'utilisateur n'est pas connecté en tant que membre, redirigez-le vers la page de connexion ou effectuez d'autres actions
    header("Location: index.php");
    exit(); // Assurez-vous de terminer le script après la redirection
}
?>
