<?php 
	session_start();
	require"config.php"; 
	if (isset($_GET['auteur'])) {
		$auteur = (string) trim($_GET['auteur']);
		$pdostat = $bdd->prepare("SELECT * FROM livre WHERE titre LIKE ? OR auteur LIKE ?");
		$pdostat->execute(array("$auteur%"));
		$aut = $pdostat->fetchAll();
		foreach ($aut as $r) {
			$images = "/bibliotheque/img/couvertures/" . $r['isbn'] . ".png";
			?>		
			<a class="sea" href="/bibliotheque/livres/details.php?isbn=<?php echo $r['isbn'];?>">
				<img src="<?php echo $images; ?>">
				<p><?php echo $r['titre'] . "<br>" . $r['auteur'];?></p>
			</a>
		<?php }
	}
?>