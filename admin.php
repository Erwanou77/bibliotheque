<?php 
	require"header/header.php";
	require'bdd/config.php';
	
	$reqgenre = $bdd->query('SELECT * FROM genre');
	$reqgenre->setFetchMode(PDO::FETCH_ASSOC);
	$resgenres = $reqgenre->fetchALL();
	$resgenr = $reqgenre->fetch();

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
				<h3>Param&#232;tres livres</h3>
				<ul>
					<li><a href="<?php echo $CONFIG['root_path']; ?>/admin/nouveaulivre.php">Ajouter un livre</a></li>
					<li><a href="<?php echo $CONFIG['root_path']; ?>/admin/nouveaugenre.php">Ajouter un genre</a></li>
					<li><a href="<?php echo $CONFIG['root_path']; ?>/admin/nouvelediteur.php">Ajouter un editeur</a></li>
					<li><a href="<?php echo $CONFIG['root_path']; ?>/admin/nouvellangue.php">Ajouter une langue</a></li>
					<li><a href="<?php echo $CONFIG['root_path']; ?>/admin/nouvelauteur.php">Ajouter un auteur</a></li>
					<li><a href="<?php echo $CONFIG['root_path']; ?>/admin/listereserv.php">Liste des réservations</a></li>
					<li><em><a href="../endeveloppement.php">Modifier vos livres</a><br><span style="font-size: 12px">En cours de développement</span></em></li>
				</ul>
				<h3>Param&#232;tres utilisateurs</h3>
				<ul>
					<li><a href="<?php echo $CONFIG['root_path']; ?>/admin/nouveaucompte.php">Ajouter un compte</a></li>
					<li><em><a href="../endeveloppement.php">Modifier un compte</a><br><span style="font-size: 12px">En cours de développement</span></em></li>
					<li><em><a href="../endeveloppement.php">Supprimer un compte</a><br><span style="font-size: 12px">En cours de développement</span></em></li>
				</ul>
			</div>
		</div>
