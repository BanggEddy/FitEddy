<?php
// Démarrez la session (assurez-vous de l'avoir démarrée dans vos autres fichiers PHP)
session_start();

// Détruisez toutes les données de session
session_destroy();

// Redirigez l'utilisateur vers une page de connexion ou une autre page appropriée
header("Location: index.php"); // Remplacez "index.php" par la page de redirection souhaitée
exit();
?>
