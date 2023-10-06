<?php
session_start();

// Détruisez toutes les données de session
session_destroy();
setcookie("user_email", "", time() - 1, "/");
setcookie("admin_email", "", time() - 1, "/");
// Redirigez l'utilisateur vers une page de connexion ou une autre page appropriée
header("Location: index.php");
exit();
