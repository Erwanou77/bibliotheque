<?php 
	require"header/header.php";
	require'bdd/config.php';
	
	$reqgenre = $bdd->query('SELECT * FROM genre');
	$reqgenre->setFetchMode(PDO::FETCH_ASSOC);
	$resgenres = $reqgenre->fetchALL();

	$reqedit = $bdd->query('SELECT * FROM editeur');
	$reqedit->setFetchMode(PDO::FETCH_ASSOC);
	$resedit = $reqedit->fetchALL();

	$reqlangs = $bdd->query('SELECT * FROM langue');
	$reqlangs->setFetchMode(PDO::FETCH_ASSOC);
	$reslangs = $reqlangs->fetchALL();

	$reqperso = $bdd->query('SELECT * FROM personne');
	$reqperso->setFetchMode(PDO::FETCH_ASSOC);
	$resperso = $reqperso->fetchALL();

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
					<!-- Espace admin -->
					<?php if (isset($_SESSION['connecter']) && $_SESSION['admin'] == 1) { ?>
					<li><a href="<?php echo $CONFIG['root_path']; ?>/admin/nouveaulivre.php">Ajouter un livre</a></li>
					<li><a href="<?php echo $CONFIG['root_path']; ?>/admin/nouveaugenre.php">Ajouter un genre</a></li>
					<li><a href="<?php echo $CONFIG['root_path']; ?>/admin/nouvelauteur.php">Ajouter un auteur</a></li>
					<li><a href="<?php echo $CONFIG['root_path']; ?>/admin/listereserv.php">Liste des réservations</a></li>
					<li><a href="<?php echo $CONFIG['root_path']; ?>/admin/modiflivre.php">Modifier vos livres</a></li>
					<!-- Espace membre -->
					<?php }else{ ?>
					<li><a href="<?php echo $CONFIG['root_path']; ?>/admin/modiflivre.php">Votre profil</a></li>
					<li><a href="<?php echo $CONFIG['root_path']; ?>/admin/modiflivre.php">Vos livres réservés</a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
