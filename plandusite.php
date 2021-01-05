<?php
	require('bdd/biblioreq.php');
	require('bdd/listautreq.php');
	require("bbcode.php"); 
	require('header/header.php');
?>
<link rel="stylesheet" type="text/css" href="css/styleplandusite.css">
<main class="plandusite">
	<div class="position">
		<h1>Plan du site : </h1>
		<ul>
			<li><a href="index.php">Accueil</a></li>
			<li><a href="auteur.php">Auteurs</a>
				<ul>
					<?php foreach ($pdostate as $aut) {?>
					<li><a href="Auteur/autlist.php?id=<?php echo $aut['id'];?>"><?php echo bbcode(htmlspecialchars($aut['prenom'])) . " " . bbcode(htmlspecialchars($aut['nom']));?></a></li>
					<?php } ?>
				</ul>
			</li>
			<li><a href="bibliotheque.php">Biblioth&#232;que</a>
				<ul>
					<?php foreach ($pdostat as $ligne) {?>
					<li><a href="livres/details.php?isbn=<?php echo $ligne['isbn'];?>"><?php echo $ligne['titres']; ?></a></li>
					<?php } ?>
				</ul>
			</li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</div>
</main>
<?php require ("Footer/footer.php");?>