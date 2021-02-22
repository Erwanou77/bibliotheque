<?php
	session_start();
	require"config.php";
	if (isset($_GET['personne'])) {
		$auteur = (string) trim($_GET['personne']);
		$pdosta = $bdd->prepare("SELECT * FROM livre JOIN genre ON livre.genre = genre.id JOIN editeur ON livre.editeur = editeur.id JOIN auteur ON livre.isbn = auteur.idLivre JOIN personne ON auteur.idPersonne = personne.id WHERE titre LIKE ?");
		$pdosta->execute(array("$personne%"));
		$aut = $pdosta->fetchAll();
		foreach ($aut as $r) {
			$images = "img/couvertures/" . $r['isbn'] . ".png";
			?>
			<a class="sea" href="livres/details.php?isbn=<?php echo $r['isbn'];?>">
				<img src="<?php echo $images; ?>">
				<p><?php echo $r['titre'] . "<br>" . $r['auteur'];?></p>
			</a>
		<?php }
	}
?>
