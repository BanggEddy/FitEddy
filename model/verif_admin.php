<?php
session_start();
require("fonctions.php");
// Requête pour vérifier le compte membre
$db = connect();

//Va cherche le mdp hashé
if (!empty($_POST['emailadmin']) && !empty($_POST['mdpadmin'])) {
	$email = $_POST['emailadmin'];
	$password = $_POST['mdpadmin'];

	$q = $db->prepare('SELECT * FROM admin WHERE email = :email');
	$q->bindValue('email', $email);
	$q->execute();
	$res = $q->fetch(PDO::FETCH_ASSOC);

	//Verifie si le mdp est bon
	if ($res) {
		$passwordHash = $res['mdp'];
		if (password_verify($password, $passwordHash)) {
			header("Location: http://127.0.0.1/PHP/PROJET/MVC/openclas/index.php?uc=admin&action=admin");
		} else {
			header("Location: ../index.php");
		}
	} else {
		header("Location: ../index.php");
	}
}
