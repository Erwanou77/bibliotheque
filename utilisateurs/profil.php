<?php require "../users.php";
	$erreur = "Changez vos informations";
	if (isset($_POST['submit'])) {
		$nom = stripslashes(htmlspecialchars($_POST['nom']));
		$prenom = stripslashes(htmlspecialchars($_POST['prenom']));
		$email = stripslashes(htmlspecialchars($_POST['email']));
		$password = stripslashes(htmlspecialchars(md5($_POST['password'])));
		if (empty($nom)) {
			$erreur = "Vous devez mettre un nom";
		}elseif (empty($prenom)){
			$erreur = "Vous devez mettre un prénom";
		}elseif (empty($email)){
			$erreur = "Vous devez mettre un mail";
		}elseif (empty($password)){
			$erreur = "Vous devez mettre un mail";
		}else{
			$update = $bdd->prepare('UPDATE utilisateur SET nom = :nom,prenom = :prenom, email = :email, mdp = :mdp WHERE idUtilisateur=' . $_SESSION["idUtilisateur"]);
			$update->bindParam(':nom',$nom);
			$update->bindParam(':prenom',$prenom);
			$update->bindParam(':email',$email);
			$update->bindParam(':mdp',$password);
			$update->execute();
			$erreur = "Vos informations ont bien été envoyées, reconnectez-vous pour voir les modifications";
			header('location:../accueil/accueil.php');
		}
	}
?>
		<div class="droit">
			<h2>Votre profil</h2>
			<form method="POST" class="update">
				<div class="group-input">
					<p><span>Eléments obligatoires : *</span></p>
					<div class="erreur">
						<h3><?php echo $erreur; ?></h3>
					</div>
					<div class="form-input">
						<label for="nom">Nom : <span>*</span></label>
						<input type="text" class="pres-input" name="nom" value="<?php echo $_SESSION["nom"] ?>">
					</div>
					<div class="form-input">
						<label for="prenom">Pr&#233;nom : <span>*</span></label>
						<input type="text" class="pres-input" name="prenom" value="<?php echo $_SESSION["prenom"] ?>">
					</div>
					<div class="form-input">
						<label for="mail">Mail : <span>*</span></label>
						<input type="email" class="pres-input" name="email" value="<?php echo $_SESSION["email"] ?>">
					</div>
					<div class="form-input">
						<label for="password">Mot de passe : <span>*</span></label>
						<input type="text" class="pres-input" name="password" value="" minlength="6">
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
