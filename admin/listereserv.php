<?php require"../admin.php"; ?>
		<div class="droit">
			<!-- Début php -->
			<div class="main">
			<h1>Vous avez reserver :</h1>
			<div class="fond">
			<!-- <?php //$pdostat = $bdd->query('SELECT id_users FROM livre');
			//$pdostat->setFetchMode(PDO::FETCH_ASSOC);
				//if (isset($_SESSION['connecter']) && $_SESSION['id_users'] == 3) {
					//foreach ($pdostat as $ligne) {
					//	$images = "../img/couvertures/".$ligne['isbn'].".png";?>

				<option class="titre" value=""><?php //echo $ligne['titre'] ?></option>
				<img class="image" src="<?php //echo htmlspecialchars($images); ?>" alt="Couverture du livre">
			<?php// } ?>
			<?php// } ?>-->
			<img class="image" src="<?php echo $CONFIG['root_path']; ?>\img\couvertures\2226319468" alt="Couverture du livre">
			<option class="titre">Nom du livre</option>
		</div>
	</div>
</div>
</main>
<?php require "../Footer/footer.php"; ?>
