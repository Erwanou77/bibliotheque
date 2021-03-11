<?php 
	if (isset($_GET['id'])) {
		require'../bdd/config.php';
		$requsers = $bdd->query('DELETE FROM utilisateur WHERE idUtilisateur = ' . $_GET['id']);		
		$requsers->execute(array($_GET['id']));
		header("location:listecompte.php");
	}
?>