<?php
	require('bdd/biblioreq.php');
	require('bdd/listautreq.php');
	require("bbcode.php"); 
	require('header/header.php');
?>
<link rel="stylesheet" type="text/css" href="css/styleplandusite.css">
<main class="principal">
	<div class="position">
		<h1>Plan du site </h1>
		<ul>
			<li><a href="index.php"><i class="fas fa-home"></i> Accueil</a></li><br><br>
			<li><a href="auteur.php"><i class="fas fa-user"></i> Auteurs</a><br><br>
				<ul>
					<?php foreach ($pdostate as $aut) {?>
					<li><a href="Auteur/autlist.php?id=<?php echo $aut['id'];?>"><?php echo bbcode(htmlspecialchars($aut['prenom'])) . " " . bbcode(htmlspecialchars($aut['nom']));?></a></li>
					<?php } ?>
				</ul>
			</li><br>
			<li><a href="bibliotheque.php"><i class="fas fa-book-open"></i> Biblioth&#232;que</a><br><br>
				<ul>
					<?php foreach ($pdostat as $ligne) {?>
					<li><a href="livres/details.php?isbn=<?php echo $ligne['isbn'];?>"><?php echo $ligne['titre']; ?></a></li>
					<?php } ?>
				</ul>
			</li><br>
			<li><a href="contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
		</ul>
	</div>
</main>
<?php require ("Footer/footer.php");?>