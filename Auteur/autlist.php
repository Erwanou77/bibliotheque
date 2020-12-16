<?php 
	session_start();
	require('../bdd/autreq.php');
	require('../header/header.php');
	include("../bbcode.php");
?>
<link rel="stylesheet" type="text/css" href="../css/styleauteur.css">
	<main class="auteur">
		<?php foreach ($pdostat as $ligne) {?>
		<?php $images = "../img/Auteurs/".$ligne['id'].".jpg";?>
		<div class="retour">
			<p><a href="../auteur.php">Auteurs&nbsp;</a><span>&gt;</span><?php echo " " . bbcode(htmlspecialchars($ligne['prenom'])) . " " . bbcode(htmlspecialchars($ligne['nom']));?></p>
		</div>
		<div class="position">
			<div class="portrait">
				<div class="texte">
					<h1>Informations sur l'auteur</h1>
					<h2><?php echo bbcode(htmlspecialchars($ligne['prenom'])) . " " . bbcode(htmlspecialchars($ligne['nom']));?></h2>
					<h4><?php echo bbcode(htmlspecialchars($ligne['date_naiss'])) ?> <br> <?php echo bbcode(htmlspecialchars($ligne['ville_naiss'])) ?></h4>
					<p><?php echo bbcode(htmlspecialchars($ligne['genre']))?></p>
				</div>
				<img src="<?php echo $images; ?>" alt="Portrait <?php echo bbcode(htmlspecialchars($ligne['prenom'])) . " " . bbcode(htmlspecialchars($ligne['nom']));?>">
			</div>
			<div class="biographie">
				<h2>Biographie</h2>
				<p><?php echo bbcode(htmlspecialchars($ligne['biographie']))?></p>
			</div>
			<div class="bibliographie">
				<h2>Bibliographie</h2>
				<ul>
					<?php echo bbcode(htmlspecialchars($ligne['bibliographie']))?>
				</ul>
			</div>
		</div>
	<?php } ?>
	</main>
<?php require ("../Footer/footer.php");?>