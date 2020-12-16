<?php 
	session_start();
	require('bdd/listautreq.php');
	require('header/header.php');
	include("bbcode.php");
?>
<link rel="stylesheet" type="text/css" href="css/auteurstyle.css">
<main class="auteur">
	<?php foreach ($pdostat as $ligne) {?>
	<?php $images = "img/Auteurs/".$ligne['id'].".jpg";?>
	<div class="position">
		<a href="Auteur/autlist.php?id=<?php echo $ligne['id'];?>">
			<div class="centre">
				<img src="<?php echo $images; ?>" alt="Portrait <?php echo bbcode(htmlspecialchars($ligne['prenom'])) . " " . bbcode(htmlspecialchars($ligne['nom']));?>">
				<div class="texte">
					<h1>Informations sur l'auteur</h1>
					<h2><?php echo bbcode(htmlspecialchars($ligne['prenom'])) . " " . bbcode(htmlspecialchars($ligne['nom']));?></h2>
					<h4><?php echo bbcode(htmlspecialchars($ligne['date_naiss'])) ?> <br> <?php echo bbcode(htmlspecialchars($ligne['ville_naiss'])) ?></h4>
					<p><?php echo bbcode(htmlspecialchars($ligne['genre']))?></p>
				</div>
			</div>
		</a>
	</div>
	<?php }?>
</main>
<?php require ("Footer/footer.php");?>