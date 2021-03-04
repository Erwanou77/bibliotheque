<?php 
	require"../header/header.php";
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

	$pdostat = $bdd->query('SELECT *, editeur.libelle AS editeurs, utilisateur.nom AS noms, utilisateur.prenom AS prenoms FROM utilisateur JOIN livre ON utilisateur.idUtilisateur = livre.utilisateur JOIN editeur ON livre.editeur = editeur.id JOIN personne ON livre.idPersonne = personne.id WHERE livre.utilisateur =' . $_SESSION['idUtilisateur']);
		$pdostat->setFetchMode(PDO::FETCH_ASSOC);

	if (empty($_SESSION['connecter'])) {
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
					<li><a href="<?php echo $CONFIG['root_path']; ?>/utilisateurs/profil.php">Votre profil</a></li>
					<li><a href="<?php echo $CONFIG['root_path']; ?>/utilisateurs/voslivres.php">Vos livres réservés</a></li>
				</ul>
			</div>
		</div>
