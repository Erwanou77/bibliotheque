<?php 
	session_start();
	require"../bdd/config.php";
	$select = $bdd->query("SELECT * FROM users");
	$tab = $select->fetch();
	require"../header/header.php";
?>
<link rel="stylesheet" type="text/css" href="../css/listeinfo.css">
<main class="principal">
	<div class="informations">
		<div class="menugauche">
			<div class="avatar">
				<a href="profil.php">
					<img src="../img/Auteurs/avatar.png" width="50px">
				</a>
				<h2><?php echo $_SESSION['nom'] . " " . $_SESSION['prenom']; ?></h2>
			</div>
			<h3>Param&#232;tres</h3>
			<ul>
				<li><a href="profil.php">Votre profil et vos livres</a></li>
				<li><a href="../bdd/logout.php">Déconnexion</a></li>
			</ul>
		</div>