<?php
	session_start();
	require"config.php";
	if (isset($_GET['auteur'])) {
		$auteur = (string) trim($_GET['auteur']);
		$pdostat = $bdd->prepare("SELECT * FROM livres WHERE titres LIKE ? OR auteurs LIKE ?");
		$pdostat->execute(array("$auteur%"));
		$aut = $pdostat->fetchAll();
		foreach ($aut as $r) {
			$images = "/bibliotheque_v1/img/couvertures/" . $r['isbn'] . ".png";
			?>
			<a class="sea" href="/bibliotheque_v1/livres/details.php?isbn=<?php echo $r['isbn'];?>">
				<img src="<?php echo $images; ?>">
				<p><?php echo $r['titres'] . "<br>" . $r['auteurs'];?></p>
			</a>
		<?php }
	}
?>
