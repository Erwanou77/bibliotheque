<?php require"../admin.php";
			require('../bdd/biblioreq.php');;
			include("../bbcode.php");?>
		<div class="droit">
			<!-- Début php -->
			<div class="main">
			<h1>Vous avez reserver :</h1>
			<div class="fond">
			<?php 	$pdostat = $bdd->query('SELECT * FROM utilisateur JOIN livre ON utilisateur.idUtilisateur = livre.utilisateur WHERE livre.utilisateur IS NOT NULL');
					foreach ($pdostat as $ligne) {
						$images = "../img/couvertures/".$ligne['isbn'].".png";?>

				<img class="image" src="<?php echo $images ?>" alt="Image de couvertures">
				<p class="titre"><?php echo $ligne['titre'] ?></p><br>
				<p class="titre"><?php echo $ligne['nom'] ?> <?php echo $ligne['prenom'] ?></p>
			<?php } ?>
			<!--<img class="image" src="<?php //echo $CONFIG['root_path']; ?>\img\couvertures\2226319468" alt="Couverture du livre">
			<option class="titre">Nom du livre</option>-->
		</div>
	</div>
</div>
</main>
<?php require "../Footer/footer.php"; ?>
