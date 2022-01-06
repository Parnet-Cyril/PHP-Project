<?php 

	$Login = $_POST['Login'];
	$Password = $_POST['Password'];
	$Action = $_POST['Action'];
	$Email = $_POST['Email'];

	$today = date('Y-m-d');


	if ($Action == 'mailer') 
	{
		$dblink = mysqli_connect('mysql-projetphp.alwaysdata.net', 'projetphp', 'OussamaPHP')

		or die('Erreur de connexion au serveur :' . mysqli_connect_error());

		mysqli_select_db($dblink, 'projetphp_projet')
		or die('Erreur dans la sélection de la base :' . mysqli_error($dblink));

		$message = 'Voici vos identifiants d\'incription :' . $Login . '/n';
		$message .= 'Voici votre mote de passe :' . $Password . '/n';
		$message .= 'Voici votre adresse email :' . $Email . '/n';

		echo $message;		
	}



	$query = 'INSERT into User (Date, Email, Mot_de_passe, Login) VALUES (\'' . $today . '\',\'' . 
		$Email . '\', \'' . $Password . '\', \'' . $Login . '\')';



	if (!($dbResult = mysqli_query($dblink, $query)))
	{
		echo 'Erreur dans la requête';
		// Affiche le type d'erreur.
		echo 'Erreur :' . mysqli_error($dblink);
		// Affiche le SELECT Login, Email, Password, Date de la requête envoyée.
		echo 'Requête :' . $query;
		exit();
	}

?>




















