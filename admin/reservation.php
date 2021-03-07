<?php require"../admin.php"; 
	$reqlivre = $bdd->query('SELECT titre FROM livre WHERE isbn='.$_GET['isbn']);
	$reqlivre->setFetchMode(PDO::FETCH_ASSOC);
	$reslivre = $reqlivre->fetch();

	$erreur = "Choisissez l'utilisateur qui a réservé le livre";
	if (isset($_POST['submit'])) {
		$user = stripslashes(htmlspecialchars($_POST['user']));
		$date_retour = stripslashes(htmlspecialchars($_POST['date']));
		if (empty($user)) {
			$erreur = "Vous devez choisir un utilisateur";
		}elseif (empty($date_retour)) {
			$erreur = "Vous devez choisir la date de retour";
		}else{
			$insert=$bdd->prepare("UPDATE livre SET date_retour = :date_retour,utilisateur = :user WHERE isbn =" . $_GET['isbn']);
			$insert->bindParam(':date_retour', $date_retour);
        	$insert->bindParam(':user', $user);
			$insert->execute();
			$erreur = "La réservation a bien été enregistré";
		}
	}

?>
		<div class="droit">
			<h2>Entrez votre réservation</h2>
			<form method="POST">
				<div class="group-input">
					<p><span>Eléments obligatoires : *</span></p>
					<div class="erreur">
						<h3><?php echo $erreur; ?></h3>
					</div>
					<div class="form-input">
						<label>Titre : <span>*</span></label>
						<input type="text" class="pres-input" value="<?php echo $reslivre['titre'] ?>" disabled>
					</div>
					<div class="form-input">
						<label>Utilisateurs : <span>*</span></label>
						<select class="pres-input" name="user">
							<option value="">Utilisateurs</option>
							<?php foreach ($resuser as $user) { ?>
								<option value="<?php echo $user['idUtilisateur'] ?>"><?php echo $user['nom'] . " " . $user['prenom'] ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-input">
						<label for="date">Date : <span>*</span></label>
						<input type="date" class="pres-input" name="date">
					</div>
					<div class="form-input">
						<input type="submit" name="submit">
					</div>
				</div>
			</form>
			<!-- Entrez les modifs ici -->
		</div>
	</div>
</main>
<?php require "../Footer/footer.php"; ?>
