<?php 
	if (isset($_GET['isbn'])) {
		require'../bdd/config.php';
		$requsers = $bdd->query('DELETE FROM livre WHERE isbn = ' . $_GET['isbn']);		
		$requsers->execute(array($_GET['isbn']));
		header("location:../bibliotheque.php");
	}
?>