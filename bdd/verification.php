<?php

	$idclient = stripslashes(htmlspecialchars($_POST['idclient']));
	$nom = stripslashes(htmlspecialchars($_POST['nom']));
	$prenom = stripslashes(htmlspecialchars($_POST['prenom']));
	$email = stripslashes(htmlspecialchars($_POST['email']));
	$password = stripslashes(htmlspecialchars($_POST['password']));
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
			$select=$bdd->prepare("SELECT id FROM users WHERE idclient = ?");
			$select->execute(array($idclient));
			$tableau=$select->fetchAll();
			if(count($tableau)>0){
				$insert = $bdd->prepare("UPDATE users SET nom = '$nom',prenom = '$prenom',email = '$email', password = '" . md5($password) . "', create_datetime = '$create_datetime'");
				if($insert->execute(array($nom,$prenom,$email,md5($password)))){
					header("location:../accueil/accueil.php");
				}
     		}else{
     			$erreur="Numero de client n'existe pas !";
			}
		}
	}
?>