<?php
session_start();
require("fonctions.php");
// Requête pour vérifier le compte membre
$db = connect();

//Va cherche le mdp
if (!empty($_POST['emailmembre']) && !empty($_POST['passwordmembre'])) {
	$email = $_POST['emailmembre'];
	$password = $_POST['passwordmembre'];

	$q = $db->prepare('SELECT * FROM users WHERE emailusers = :email');
	$q->bindValue('email', $email);
	$q->execute();
	$res = $q->fetch(PDO::FETCH_ASSOC);

	//Verification du mdp hashé
	if ($res) {
		$passwordHash = $res['passwordusers'];
		if (password_verify($password, $passwordHash)) {
			header("Location: http://127.0.0.1/PHP/PROJET/MVC/openclas/index.php?uc=voir&action=list");
		} else {
			header("Location: ../index.php");
		}
	} else {
		header("Location: ../index.php");
	}
}
