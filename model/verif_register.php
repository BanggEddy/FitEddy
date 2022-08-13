<?php
session_start();
require("fonctions.php");
// Requête pour ajouter un membre

$bdd = connect();

//Il va hasher le mdp
if (!empty($_POST['emailregister']) && !empty($_POST['passwordregister'])) {
	$email = $_POST['emailregister'];
	$password = password_hash($_POST['passwordregister'], PASSWORD_DEFAULT);

	//Il ajoute le mdp dans la bdd
	$q = $bdd->prepare('INSERT INTO users (emailusers, passwordusers) VALUES (:email, :password)');
	$q->bindValue('email', $email);
	$q->bindValue('password', $password);
	$res = $q->execute();

	//Il vérifie si c'est bien passé le processus
	if ($res) {
		header("Location: /index.php?uc=voir&action=list");
	} else {
		header("Location: ../index.php");
	}
}
