<link rel="stylesheet" type="text/css" href="<?php echo $CONFIG['root_path']; ?>/css/footerstyle.css">
	<footer>
		<div class="contact">
			<h3>Contact :</h3>
			<h4>Erwan :</h4>
			<h5><em>e.launay@ecole-ipssi.net</em></h5>
		</div>
		<div class="contact">
			<h3>Liens : </h3>
			<a href="<?php echo $CONFIG['root_path']; ?>/index.php">Accueil</a>
			<a href="<?php echo $CONFIG['root_path']; ?>/auteur.php?page=1">Auteurs</a>
			<a href="<?php echo $CONFIG['root_path']; ?>/bibliotheque.php?page=1">Biblioth&#232;que</a>
			<?php 
			if (isset($_SESSION['connecter']) && $_SESSION['admin'] == 1) { ?>
				<a href="<?php echo $CONFIG['root_path']; ?>/admin/nouveaulivre.php">Admin</a>
				<a href="<?php echo $CONFIG['root_path']; ?>/bdd/logout.php">Se déconnecter</a>
			<?php
			}elseif(isset($_SESSION['connecter']) && $_SESSION['admin'] == 0){
			?>
			<a href="<?php echo $CONFIG['root_path']; ?>/bdd/logout.php">Se déconnecter</a>
		<?php }else{?>
			<a href="<?php echo $CONFIG['root_path']; ?>/accueil/accueil.php">Se connecter</a><?php } ?>
			<a href="<?php echo $CONFIG['root_path']; ?>/contact.php">Contact</a>
		</div>
		<div class="contact">
			<h3>D&#233;tail du site</h3>
			<a href="<?php echo $CONFIG['root_path']; ?>/plandusite.php">Plan du site</a>
		</div>
	</footer>
</body>
</html>