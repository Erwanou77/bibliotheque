<?php 
	require"header/header.php";
	require'bdd/config.php';
	$pdostat1 = $bdd->query('SELECT * FROM auteur');
	$pdostat1->setFetchMode(PDO::FETCH_ASSOC);

	$pdostat2 = $bdd->query('SELECT * FROM livre');
	$pdostat2->setFetchMode(PDO::FETCH_ASSOC);
	if (empty($_SESSION['connecter']) || $_SESSION['admin'] == 0) {
		header("location:../index.php");
	}
?>
<link rel="stylesheet" type="text/css" href="<?php echo $CONFIG['root_path']; ?>/css/admin.css">
<main class="principal">
	<div class="admin">
		<div class="gauche">
			<h2><?php echo $_SESSION['nom'] . " " . $_SESSION['prenom']; ?></h2>
			<div class="edition">
				<h3>Param&#232;tres</h3>
				<ul>
					<li><a href="<?php echo $CONFIG['root_path']; ?>/admin/nouveaulivre.php">Ajouter un livre</a></li>
					<!--<li><a href="<?php //echo $CONFIG['root_path']; ?>/admin/nouveaugenre.php">Ajouter un genre</a></li>
					<li><a href="<?php //echo $CONFIG['root_path']; ?>/admin/nouvelauteur.php">Ajouter un auteur</a></li>-->
					<li><a href="<?php echo $CONFIG['root_path']; ?>/admin/listereserv.php">Liste des réservations</a></li>
					<!--<li><a href="<?php //echo $CONFIG['root_path']; ?>/admin/modiflivre.php">Modifier vos livres</a></li>-->
				</ul>
			</div>
		</div>
