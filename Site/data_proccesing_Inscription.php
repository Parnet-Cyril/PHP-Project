<?php
include_once 'config.php';

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['role']))
{
	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$email = htmlspecialchars($_POST['email']);
	$role = htmlspecialchars($_POST['role']);

	$verif = $bdd->prepare('SELECT nom, prenom, email, role FROM User WHERE email = ?');

}
?>