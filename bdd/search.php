<?php
	session_start();
	require"config.php";
	if (isset($_GET['auteur'])) {
		$auteur = (string) trim($_GET['auteur']);
		$pdosta = $bdd->prepare("SELECT * FROM livre WHERE titre LIKE ?");
		$pdosta->execute(array("$auteur%"));
		$aut = $pdosta->fetchAll();
		foreach ($aut as $r) {
			$images = "img/couvertures/" . $r['isbn'] . ".png";
			?>
			<a class="sea" href="livres/details.php?isbn=<?php echo $r['isbn'];?>">
				<img src="<?php echo $images; ?>" width="150px">
				<p><?php echo $r['titre'] . "<br>" . "<b>" . $r['auteur'] . "</b>";?></p>
			</a>
		<?php }
	}
?>
