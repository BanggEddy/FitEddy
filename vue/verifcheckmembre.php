<?php
// Vérifie si l'utilisateur est connecté
if(isset($_SESSION['id'])){
    // L'utilisateur est connecté, il peut accéder à la page
    // Mettez le code de votre page ici
} else {
    // Redirige l'utilisateur vers la page de connexion s'il n'est pas connecté
    header("Location: index.php"); // Remplacez login.php par la page de connexion réelle
    exit();
}
?>
