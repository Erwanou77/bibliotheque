<?php
	if (isset($_POST['submit'])) {
		require'config.php';
		$idclient = stripslashes(htmlspecialchars($_POST['idclient']));
		$nom = stripslashes(htmlspecialchars($_POST['nom']));
		$prenom = stripslashes(htmlspecialchars($_POST['prenom']));
		$email = stripslashes(htmlspecialchars($_POST['email']));
		$requser = $bdd->query('SELECT COUNT(*) AS idClient FROM utilisateur WHERE idClient = ' . $idclient);
		$requser->setFetchMode(PDO::FETCH_ASSOC);
		$resuser = $requser->fetch();
		if ($resuser['idClient'] == 0) {
			$erreur = "Cet identifiant n'existe pas";
		}elseif(empty($nom)) {
			header("location:../accueil/registration.php");
			$erreur = "Vous devez mettre un nom";
		}elseif (empty($prenom)) {
			$erreur = "Vous devez mettre un prenom";
		}elseif (empty($email)) {
			$erreur = "Vous devez mettre un mail";
		}else{		
	        $select=$bdd->prepare("UPDATE utilisateur SET nom = :nom, prenom = :prenom, email = :email WHERE idClient = " . $idclient);
	        $select->bindParam(':nom', $nom);
	        $select->bindParam(':prenom', $prenom);
	        $select->bindParam(':email', $email);
			$select->execute();
			header("location:../accueil/accueil.php");
		}
	}
?>