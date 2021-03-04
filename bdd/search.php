<?php
	session_start();
	require"config.php";
	if (isset($_GET['personne'])) {
		$personne = (string) trim($_GET['personne']);
		$pdosta = $bdd->prepare("SELECT * FROM livre JOIN personne ON livre.idPersonne = personne.id WHERE titre LIKE ?");
		$pdosta->execute(array("$personne%"));
		$aut = $pdosta->fetchAll();
		foreach ($aut as $r) {
			$images = "/bibliotheque/img/couvertures/" . $r['isbn'] . ".png";?>
			<a class="sea" href="/bibliotheque/livres/details.php?isbn=<?php echo $r['isbn'];?>">
				<img src="<?php echo $images; ?>" width="150px">
				<p><?php echo $r['titre'] . "<br><b>" . $r['nom'] . " " . $r['prenom'] . "</b>" ;?></p>
			</a>
		<?php }
	}
?>
