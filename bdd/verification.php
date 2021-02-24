<?php

	$nom = stripslashes(htmlspecialchars($_POST['nom']));
	$prenom = stripslashes(htmlspecialchars($_POST['prenom']));
	$email = stripslashes(htmlspecialchars($_POST['email']));
	$password = stripslashes(htmlspecialchars(md5($_POST['password'])));
	$create_datetime = date("Y-m-d H:i:s");
	if (isset($_POST['submit'])) {
		if(empty($nom)) {
			$erreur = "Vous devez mettre un nom";
		}elseif (empty($prenom)) {
			$erreur = "Vous devez mettre un prenom";
		}elseif (empty($email)) {
			$erreur = "Vous devez mettre un mail";
		}elseif (empty($password)) {
			$erreur = "Vous devez mettre un Mot de passe";
		}else{
			require'config.php';			
	        $select=$bdd->prepare("INSERT INTO utilisateur (idUtilisateur, admin, nom,prenom,email,mdp) VALUES (NULL, 0, :nom, :prenom, :email, :mdp)");

	        $select->bindParam(':nom', $nom);
	        $select->bindParam(':prenom', $prenom);
	        $select->bindParam(':email', $email);
	        $select->bindParam(':mdp', $password);
			$select->execute();
			header("location:../accueil/accueil.php");
		}
	}
?>