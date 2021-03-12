<?php 
	//Démarrage d'une session et appel des fichiers
	require('../bdd/autreq.php');
	require('../header/header.php');
	include("../bbcode.php");
?>
<link rel="stylesheet" type="text/css" href="../css/styleauteur.css">
	<main class="principal">
		<!-- Emplacement des images -->
		<?php $ligne = $pdostate->fetch();
		$datefmt = new IntlDateFormatter('fr_FR', NULL, NULL, NULL, NULL, 'dd MMMM yyyy');
		$date1 = date_create($ligne['date_naiss']);
		$images = "../img/Auteurs/".$ligne['id'].".jpg";?>
		<div class="retour">
			<p><a href="../auteur.php?page=1">Auteurs&nbsp;</a><span>&gt;</span><?php echo " " . bbcode(htmlspecialchars($ligne['nom'])) . " " . bbcode(htmlspecialchars($ligne['prenom']));?></p>
		</div>
		<div class="position">
			<div class="portrait">
				<!-- Info sur l'auteur -->
				<div class="texte">				
					<h1>Informations sur l'auteur</h1>
					<!-- Appel du prenom et du nom des auteurs depuis la bdd -->
					<h2><?php echo bbcode(htmlspecialchars($ligne['nom'])) . " " . bbcode(htmlspecialchars($ligne['prenom']));?></h2>
					<!-- Appel de la ville de naissance et de la date de naissance des auteurs depuis la bdd -->
					<h4><?php if($ligne['date_naiss'] != NULL) echo bbcode(htmlspecialchars($datefmt->format($date1))); ?> <br> <?php echo bbcode(htmlspecialchars($ligne['ville_naiss'])) ?></h4>
					<!-- Appel du genre des auteurs depuis la bdd -->
					<p><?php echo bbcode(htmlspecialchars($ligne['genre']))?></p>
				</div>
				<img src="<?php echo $images; ?>" alt="Portrait">
			</div>
			<div class="biographie">
				<h2>Biographie</h2>
				<?php if ($ligne['biographie'] == NULL) { ?>
					<p style="text-align: center; font-size: 26px; font-weight: bold; color: red;">Il n'y a pas encore de biographie</p>
				<?php }else{ ?>
				<p><?php echo bbcode(htmlspecialchars($ligne['biographie']))?></p>
				<?php } ?>
			</div>
		</div>
	</main>
<?php require ("../Footer/footer.php");?>